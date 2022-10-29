<?php

function connect() {
    $host = 'db_stack';
    $user = 'platform';
    $password = 'secret';
    $database = 'data';

    $connection = new mysqli($host, $user, $password, $database);

    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }

    return $connection;
}

?>