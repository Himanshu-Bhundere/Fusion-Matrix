<?php
	require 'server.php';
	$server = new Server;
	$server->connect();
	$roomno = $_GET['room_no'];
	$server->register_customer($roomno, array("firstname" => "Aaryash", "lastname" => "18"));
?>