<?php
	require 'server.php';

	$server = new Server;
	$server->connect();

	$customer_id = $_GET['customer_id'];
	$room_no = $_GET['room_no'];
	$days = $_GET['days'];

	$server->create_invoice($customer_id, $room_no, $days);
?>