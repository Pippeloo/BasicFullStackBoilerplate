<?php

function runQuery($query) {
    $connection = connect();

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }

    return $result;
}

?>