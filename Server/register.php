<?php
    require 'server.php';

    $server = new Server;
    $server->connect();

    $server->register_staff(array("username"=>$_GET['username'], "staff_type"=>$_GET['staff_type']));
?>