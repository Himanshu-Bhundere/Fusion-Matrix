<?php
    class Server
    {
        const SERVER_NAME = 'localhost';
        const USER = 'root';
        const PASS = 'admin';
        const DB_NAME = 'fusion_matrix';

        public $conn;

        //Establishes connection with mysql server and selects 'users' database
        function connect()
        {
			$this->conn = new mysqli(self::SERVER_NAME, self::USER, self::PASS);
            $this->conn->query("use ".self::DB_NAME);
        }

        //Add username and password to database
        function register($username, $password, $staff_type)
        {
			if($this->exists($username))
				return false;
			$hash = password_hash($password, PASSWORD_DEFAULT);
            $query = $this->conn->prepare("INSERT INTO staff_credentials(username, password, staff_type) VALUES(?, ?, ?);");
            $query->bind_param("sss", $username, $hash, $staff_type);
            $query->execute();
			return true;
        }
		
		function login($username, $password)
		{
			$auth = $this->auth($username, $password);
			if($auth['success'])
			{
				$_SESSION['username'] = $auth['username'];
				$_SESSION['staff_type'] = $auth['staff_type'];
				return true;
			}
		}

        function exists($username)
        {
            $query = $this->conn->prepare("SELECT * FROM staff_credentials WHERE username=?");
            $query->bind_param("s", $username);
            $query->execute();
            $result = $query->get_result();
            return $result->num_rows > 0;
        }

		function auth($username, $password)
		{
			$query = $this->conn->prepare("SELECT * FROM staff_credentials WHERE username=?");
			$query->bind_param("s", $username);
			$query->execute();
			$result = $query->get_result();
			$values = $result->fetch_assoc();
			if($result->num_rows == 0)
				return Array('success'=>false);
			
			if(!password_verify($password, $values['password']))
				return Array('success'=>false);
			return Array(
				'username'=>$values['username'],
				'staff_type'=>$values['staff_type'],
				'success'=>true
			);
		}
		
		function createRooms($n_floors,$n_rooms)
		{
			for($n=1;$n <= $n_floors; $n++)
			{
				for($m=1;$m <= $n_rooms; $m++)
				{
					$room_num = $n*100 + $m;
					$query = $this->conn->prepare("INSERT into rooms(room_no,occupancy, room_type) values(?,0, 'Regular');");
					$query->bind_param("i",$room_num);
					$query->execute();
				}
			}
		}

		function create_invoice($customer_id, $room_no, $days)
		{
			$room_details = $this->get_room_details($room_no);

			$invoice_id = rand();
			$room_type = $room_details['room_type'];
			$issue_date = date("Y-m-d");
			$issue_time = date("h:i:s");
			$amount= $room_details['price'] * $days;
			$details = "";

			$this->conn->query("INSERT INTO invoices(invoice_id, customer_id, room_no, room_type, issue_date, issue_time, amount, days, details) 
								VALUES('{$invoice_id}', '{$customer_id}', '{$room_no}', '{$room_type}', '{$issue_date}', '{$issue_time}', '{$amount}', '{$days}', '{$details}');");
			return $invoice_id;
		}

		function get_invoice($invoice_id)
		{
			if(is_null($invoice_id))
				return array();
			$query = $this->conn->prepare("SELECT * FROM invoices WHERE invoice_id = ?");
			$query->bind_param("s", $invoice_id);
			$query->execute();
			$result = $query->get_result();
			return $result->fetch_assoc();
		}

		function get_invoices()
		{
			$result = $this->conn->query("SELECT * FROM invoices");
			return mysqli_fetch_all($result, MYSQLI_ASSOC);
		}

		function get_invoices_between($start_date, $end_date)
		{
			$query = $this->conn->prepare("SELECT * FROM invoices WHERE issue_date BETWEEN ? AND ?");
			$query->bind_param("ss", $start_date, $end_date);
			$query->execute();
			$result = $query->get_result();
			return mysqli_fetch_all($result, MYSQLI_ASSOC);
		}

		function get_room_details($room_no)
		{
			$result = $this->conn->query("SELECT * FROM rooms WHERE room_no = {$room_no};");
			$room_details = $result->fetch_assoc();
			$query = $this->conn->prepare("SELECT price FROM catalogue WHERE room_type = ?");
			$query->bind_param("s", $room_details['room_type']);
			$query->execute();
			$room_details['price'] = $query->get_result()->fetch_array()[0];
			return $room_details;
		}
		
		function catalogue($catalogue_data)
		{
			foreach($catalogue_data as $room_type=>$price)
			{
				$this->conn->query("INSERT into catalogue values('{$room_type}',{$price});");
			}
		}
		
		function is_room_occupied($room_no)
		{
			$result = $this->conn->query("SELECT occupancy from rooms WHERE room_no={$room_no};");
			$occupancy = $result->fetch_array()[0];
			return $occupancy;
		}
		
		function register_customer($roomno, $cust_data)
		{
			if($this->is_room_occupied($roomno))
			{
				return 0;
			}
			$cust_id = "ID".rand();
			$query = $this->conn->prepare("UPDATE rooms SET occupancy = 1,customer_id = ? where room_no = ?;");
			$query->bind_param("si",$cust_id,$roomno);
			$query->execute();
			
			$query = $this->conn->prepare("INSERT into customer_details(customer_id) values(?);");
			$query->bind_param("s",$cust_id);
			$query->execute();
			foreach($cust_data as $field => $value)
			{
				$query = $this->conn->prepare("UPDATE customer_details SET {$field}=? where customer_id = ?;");
				$query->bind_param("ss", $value, $cust_id);
				$query->execute();
			}
			return 1;
		}
		
		function register_staff($staff_data)
		{
			$bytes = openssl_random_pseudo_bytes(32/2);
			$staff_id = "ID".bin2hex($bytes);
			$query = $this->conn->prepare("INSERT into staff_details(staff_id) values(?);");
			$query->bind_param("s",$staff_id);
			$query->execute();
			
			foreach($staff_data as $field => $value)
			{
				$query = $this->conn->prepare("UPDATE staff_details SET {$field}=? where staff_id = ?;");
				$query->bind_param("ss",$value,$staff_id);
				$query->execute();
			}
			
			$this->register($staff_data['username'], $staff_data['staff_type'], $staff_data['staff_type']);
		}

		function is_user_logged() { return isset($_SESSION['username']); }
		
        //Closes connection with database
        function close() { $conn->close(); }
    }
?>