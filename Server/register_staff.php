<?php
	require 'server.php'
	$server = new Server;
	$server->connect();
	$server->register_staff(array());
?>