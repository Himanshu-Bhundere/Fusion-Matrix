<?php
	session_start();

	require 'server.php';

	set_error_handler("warning_handler", E_WARNING);

	$server = new Server;
	$server->connect();

	$response = array();

	$request_type = $_POST['request_type'];
	switch($request_type)
	{
		case 'login':
			$username = $_POST['username'] ?? NULL;
			$password = $_POST['password'] ?? NULL;
			$server->login($username, $password);
			if(isset($_SESSION['username']))
			{
				$response['value'] = 1;
				success();
				detail("Logged in successfully");
			}
			else
			{
				$response['value'] = 0;
				success();
				detail("Username or password invalid");
			}
			break;

		case 'logout':
			if(!isset($_SESSION['username']))
			{
				$response['value'] = 0;
				fail();
				detail("Already logged out.");
			}
			session_destroy();
			$response['value'] = 1;
			success();
			detail("Logged out successfully");
			break;

		case 'register':
			requirePermission('admin');
			$username = $_POST['username'] ?? NULL;
			$password = $_POST['password'] ?? NULL;
			if($server->register($username, $password))
			{
				$response['value'] = 1;
				success();
				detail("Account registered successfully");
			}
			else
			{
				$response['value'] = 0;
				success();
				detail("Username already in existence");
			}
			break;

		case 'is_logged_in':
			if(isset($_SESSION['username']))
			{
				$response['value'] = 1;
				success();
				detail("Logged in.");
			}
			else 
			{
				$response['value'] = 0;
				success();
				detail("Not logged in.");
			}
			break;

		case 'get_invoice':
			requirePermission('receptionist');
			$invoice_id = $_POST['invoice_id'] ?? NULL;
			$invoice_details = $server->get_invoice($invoice_id);
			if(empty($invoice_details))
			{
				fail();
				detail("Invoice not found in database");
			}
			else
			{
				$response = array_merge($response, $invoice_details);
				success();
				detail("Invoice found");
			}
			break;

		case 'get_invoices':
			requirePermission('admin');
			$invoices_details = $server->get_invoices();
			if(empty($invoices_details))
			{
				fail();
				detail("There are no invoices in database");
			}
			else 
			{
				$response = array_merge($response, $invoices_details);
				success();
				detail("Invoices retreived successfully");
			}
			break;

		case 'create_invoice':
			requirePermission('admin');
			$customer_id = $_POST['customer_id'];
			$room_no = $_POST['room_no'];
			$days = $_POST['days'];
			$invoice_id = $server->create_invoice($customer_id, $room_no, $days);
			$response['invoice_id'] = $invoice_id;
			success();
			detail("Invoice created");
			break;

		case 'get_invoices_between':
			requirePermission('receptionist');
			$start_date = $_POST['start_date'];
			$end_date = $_POST['end_date'];
			$invoices_details = $server->get_invoices_between($start_date, $end_date);
			$response = array_merge($response, $invoices_details);
			success();
			detail("Invoices between given dates returned");
			break;
			
		case 'get_invoices_of_month':
			requirePermission('admin');
			$month = $_POST['month'];
			$year = $_POST['year'];
			$invoice_details = $server->get_invoices_of_month($month, $year);
			$response = array_merge($response, $invoice_details);
			success();
			detail("Invoices of given month returned");
			break;
			
		case 'is_room_occupied':
			requirePermission('receptionist');
			$room_no = $_POST['room_no'];
			$occupancy = $server->is_room_occupied($room_no);
			$response['occupancy'] = $occupancy;
			success();
			detail("Room Occupancy Returned");
			break;

		case 'register_staff':
			requirePermission('admin');
			$staff_data = $_POST['staff_data'];
			if(!$server->register_staff($staff_data))
			{
				fail();
				detail("Staff was not reigstered");
			}
			success();
			detail("Staff Is Registered Successfully");
			break;
		
		case 'register_customer':
			requirePermission('receptionist');
			$room_no = $_POST['room_no'];
			$cust_data = $_POST['cust_data'];
			if(!$server->register_customer($room_no,$cust_data))
			{
				fail();
				detail("Customer was not reigstered");
			}
			success();
			detail("Customer Is Registered Successfully");
			break;
			
		case 'customer_information':
			requirePermission('receptionist');
			$customer_id = $_POST['customer_id'];
			$customer_information = $server->customer_information($customer_id);
			if($customer_information != false) {
				$response['customer_information'] = $customer_information;
				success();
				detail("Customer Information returned");
			}
			else {
				fail();
				detail("Customer not found");
			}
			break;
		
		case 'staff_information':
			requirePermission('admin');
			$staff_id = $_POST['staff_id'];
			$staff_information = $server->staff_information($staff_id);
			if($staff_information != false) {
				$response['staff_information'] = $staff_information;
				success();
				detail("Staff Information returned");
			}
			else {
				fail();
				detail("Staff not found");
			}
			break;

		case 'get_all_staff_information':
			$response['staff_information'] = $server->get_all_staff_information();
			success();
			detail("All staff information returned");
			break;
		default:
			fail();
			detail("Unkown request");
	}

	function requirePermission($required_staff_type)
	{
		if(!hasPermission($required_staff_type))
		{
			fail();
			detail("Request denied. Insufficient permission.");
		}
	}

	function hasPermission($required_staff_type)
	{
		if(!isset($_SESSION['staff_type']))
			return false;
		$current_staff = $_SESSION['staff_type'];
		switch($required_staff_type) //Returns true if $staff_type > $required_staff_type
		{
			//Basically, if $required_staff_type is staff for eg, then the switch case jumps to case 'staff'. 
			//From that point, due to case fallthrough, we will check all the staff types above staff, and if they match, we return true.
			//So if current staff is receptionist and they need admin permission, switch case jumps directly to case 'admin', and we don't check any other staff type, so we return false
			case 'staff':
				if($current_staff == 'staff') return true;
			case 'receptionist':
				if($current_staff == 'receptionist') return true;
			case 'admin':
				if($current_staff == 'admin') return true;
		}
		return false; //If above switch case doesn't return, it means staff doesn't have permission
	}

	function detail($msg)
	{
		global $response;
		$response['details'] = $msg;
		echo json_encode($response);
		exit();
	}

	function success()
	{
		global $response;
		$response['success'] = 1;
	}

	function fail()
	{
		global $response;
		$response['success'] = 0;
	}

	function mysqlError()
	{
		fail();
		detail("There was some error with the MySQL Server. Please try again later");
	}

	function warning_handler($errno, $errstr)
	{
		fail();
		detail("There was a problem in the server : {$errstr}");
	}
?>