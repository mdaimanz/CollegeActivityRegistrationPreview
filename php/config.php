<?php

//Step 1: Connecting to a Database using MySQLi API (Object-Oriented approach)
// modify these variables for your installation
$databaseHost = 'localhost';
$databaseName = 'project';
$databaseUsername = 'root';
$databasePassword = '';


//MySQLi Object-Oriented approach
$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//Step 2: Handling Connection Errors - mysqli
// Check connection (MySQLi object-oriented)
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Database Connected successfully";

?>

