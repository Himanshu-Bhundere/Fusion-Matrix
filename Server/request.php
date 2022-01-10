<?php
	session_start();

	require 'server.php';

	set_error_handler("warning_handler", E_WARNING);

	$server = new Server;
	$server->connect();

	$request_type = $_POST['request_type'] ?? NULL;

	$response = array();

	switch($request_type)
	{
		case 'login':
			$username = $_POST['username'] ?? NULL;
			$password = $_POST['password'] ?? NULL;
			$server->login($username, $password);
			if(isset($_SESSION['username']))
			{
				success();
				detail("Logged in successfully");
			}
			else 
			{
				fail();
				detail("Username or password invalid");
			}
			break;

		case 'logout':
			session_destroy();
			success();
			detail("Logged out successfully");

		case 'get_invoice':
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

		case 'create_invoice':
			$customer_id = $_POST['customer_id'];
			$room_no = $_POST['room_no'];
			$days = $_POST['days'];
			$invoice_id = $server->create_invoice($customer_id, $room_no, $days);
			$response['invoice_id'] = $invoice_id;
			success();
			detail("Invoice created");

		default:
			fail();
			detail("Unkown request");
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