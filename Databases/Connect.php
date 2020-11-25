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