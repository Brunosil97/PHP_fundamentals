<?php

$dbUserName = "root";
$dbPassword = "Marinasil87";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

print_r($connection);

if($connection->connect_errno)
{
    die("Database connection failed: ".$connection->connect_error);
}

$tempFirstName = 'Bruno';

//? so that it will be passed in later
$query = "SELECT first_name, last_name, pen_name FROM Authors WHERE first_name = ?";
//Prepare lets variables be sent later
$statementObj = $connection->prepare($query);
//bind param can take as many parameters as needed
$statementObj->bind_param("s", $tempFirstName);
$statementObj->execute();

$statementObj->bind_result($firstName, $lastName, $penName);
$statementObj->store_result();

if($statementObj->num_rows > 0)
{
    while($statementObj->fetch())
    {
        echo $firstName." ".$lastName." (".$penName.")".PHP_EOL;
    }
}

$statementObj->close();
$connection->close(); //closes connection