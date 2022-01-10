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
        function register($username, $password)
        {
			if($this->exists($username))
				return false;
			$hash = password_hash($password, PASSWORD_DEFAULT);
            $query = $this->conn->prepare("INSERT INTO staff_credentials(username, password) VALUES(?, ?);");
            $query->bind_param("ss", $username, $hash);
            $query->execute();
			return true;
        }
		
		function login($username, $password)
		{
			$auth = $this->auth($username, $password);
			if($auth['success'])
			{
				$_SESSION['username'] = $auth['username'];
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
					$query = $this->conn->prepare("INSERT into rooms(room_no) values(?);");
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
			$details = "Number of days : {$days}";

			echo "$invoice_id \t $room_type \t $issue_date \t $issue_time \t $amount \t $details";

			$this->conn->query("INSERT INTO invoices(invoice_id, customer_id, room_no, room_type, issue_date, issue_time, amount, details) 
								VALUES('{$invoice_id}', '{$customer_id}', '{$room_no}', '{$room_type}', '{$issue_date}', '{$issue_time}', '{$amount}', '{$details}');");
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

		function get_room_details($room_no)
		{
			$result = $this->conn->query("SELECT * FROM rooms WHERE room_no = {$room_no}");
			return $result->fetch_assoc();
		}

		function is_user_logged() { return isset($_SESSION['username']); }
		
        //Closes connection with database
        function close() { $conn->close(); }
    }
?>