<?php
	require 'server.php';
	$server = new Server;
	$server->connect();
	$server->createRooms(5,20);
?>