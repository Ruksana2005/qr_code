<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "college_db";

// Establishing the connection
$connection = mysqli_connect($server, $username, $password, $database);

// Checking the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
