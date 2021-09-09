<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "canteen";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if($conn) {
    echo "success"; 
} 
else {
    die("Error". mysqli_connect_error()); 
} 