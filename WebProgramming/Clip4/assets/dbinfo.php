<?php

$dbUserName = "root";
$dbPassword = "Marinasil87";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno)
{
    exit("Database connection failed: ".$connection->connect_error);
}

?>