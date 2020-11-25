<?php

$dbUserName = "root";
$dbPassword = "Marinasil87";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

print_r($connection);

if($connection->connect_errno)
{
    exit("Database connection failed: ".$connection->connect_error);
}

//perform query - need query and call to query call

//Delete
$deleteQuery = "DELETE FROM Authors WHERE id = 3";
//Update
$updateQuery = "UPDATE Authors SET pen_name = 'L. W. Grant' WHERE id = 2";
//Add
$addQuery = "INSERT INTO Authors (first_name, last_name, pen_name) VALUES ('Sam', 'Botrous', 'Bot')";
//Select
$selectQuery = "SELECT first_name, last_name, pen_name FROM Authors ORDER BY first_name";

$authors = $connection->query($selectQuery);

if($authors->num_rows > 0)
{
    while($singleRowFromQuery = $authors->fetch_assoc())
    {
        //print_r($singleRowFromQuery);
        echo "Author ".$singleRowFromQuery['first_name'].PHP_EOL;
    }
}

$authors->close();
$connection->close(); //closes connection