<?php
$servername = "localhost:3307";
$username = "root"; 
$password = "";     
$database = "carrentals"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
