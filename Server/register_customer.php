<?php
	require 'server.php';
	$server = new Server;
	$server->connect();
	$roomno = $_GET['room_no'];
	$server->registerCustomer($roomno, array("firstname" => "Aaryash", "lastname" => "18"));
?>