<?php
session_start();
    $server = "Localhost";
    $server_username = 'root';
    $server_password = '';
    $database = "php_gyakorlas" ;

    $connection = mysqli_connect($server, $server_username,$server_password, $database);


