<?php
	require 'server.php';
	$server = new Server;
	$server->connect();
	$server->catalogue(array('Regular'=>'5000', 'Suite'=>'7000', 'Prime'=>'9500', 'Deluxe'=>'12000'));
?>