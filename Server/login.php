<?php
	require 'server.php';
	$server = new Server;
	$server->connect();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($server->login($username, $password))
		echo "1";
	else
		echo "0";
?>