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

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['islogin'])) $_SESSION['islogin'] = false;
if(!isset($_SESSION['isagency'])) $_SESSION['isagency'] = false;
if(!isset($_SESSION['custid'])) $_SESSION['custid'] = null;
if(!isset($_SESSION['agencyid'])) $_SESSION['agencyid'] = null;
if(!isset($_SESSION['agencyname'])) $_SESSION['agencyname'] = null;




?>
