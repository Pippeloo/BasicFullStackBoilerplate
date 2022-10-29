<?php

function runQuery($query) {
    $connection = connect();

    $result = $connection->query($query);

    // Check if the query returned a result
    if ($result) {
        // If the query returned a result, return the result
        return $result;
    } else {
        // If the query did not return a result, display an error message
        echo 'No data found';
    }

    return $result;
}

?>