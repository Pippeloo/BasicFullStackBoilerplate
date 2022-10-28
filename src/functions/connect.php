<?php

function connect() {
    $host = 'localhost';
    $user = 'platform';
    $password = 'secret';
    $database = 'info';

    $connection = mysqli_connect($host, $user, $password, $database);

    if (!$connection) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    return $connection;
}

?>