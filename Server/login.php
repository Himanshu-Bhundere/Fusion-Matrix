<?php
	require 'server.php';
	session_start();
	$server = new Server;
	$server->connect();
	
	if($server->is_user_logged()) //Return 1 if user has already logged in in the session
	{
		echo "1";
		exit();
	}
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($server->login($username, $password))
		echo "1";
	else
		echo "0";
?>