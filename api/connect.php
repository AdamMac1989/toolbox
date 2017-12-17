<?php


$servername = "localhost";
$username = "root";
$password = "root";
$database = "toolbox";

// Create connection
global $conn; //added this in 17/12/17

$conn = new mysqli ($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";



?>