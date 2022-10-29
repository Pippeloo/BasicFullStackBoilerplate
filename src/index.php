<?php
    // Include the functions
    require_once 'functions/connect.php';
    require_once 'functions/query.php';

    // Connect to the database
    connect();

    // Build the query
    $query = 'SELECT message FROM info WHERE id = 1';

    // Run the query
    $result = runQuery($query);

    // Check if the query returned a result
    if ($result) {
        // If the query returned a result, get the data in string format
        $db_text = $result->fetch_assoc()['message'];
    } else {
        // If the query did not return a result, display an error message
        $db_text = 'No data found';
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello!</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="resources/favicon.ico" type="image/x-icon">
</head>

<body>
    <header>
        <h1><?php echo $db_text ?></h1>
    </header>
</body>

</html>