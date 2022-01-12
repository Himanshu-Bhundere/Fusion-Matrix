<?php
    require 'server.php';

	//$username = $_GET['username'];
	//$password = $_GET['password'];
    $server = new Server;
    $server->connect();
    echo $server->register('admin', 'admin');
?>
