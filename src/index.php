<?php
    // Include the functions
    require_once 'functions/connect.php';
    require_once 'functions/query.php';

    // Connect to the database
    if (!connect()) {
        // If the connection fails, display an error message
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Build the query
    $query = 'SELECT message FROM info WHERE id = 1';

    // Run the query
    $result = runQuery($query);

    // Display the results
    $db_text = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="resources/favicon.ico" type="image/x-icon">
</head>

<body>
    <h1><?php echo $db_text ?></h1>
</body>

</html>