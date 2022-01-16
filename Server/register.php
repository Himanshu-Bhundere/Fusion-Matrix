<?php
    require 'server.php';

	$username = $_GET['username'];
	$password = $_GET['password'];
    $staff_type = $_GET['staff_type'];
    $server = new Server;
    $server->connect();
    echo $server->register($username, $password, $staff_type);
?>
