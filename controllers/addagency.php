<?php
include('dbconnect.php');
session_start();
$name = $_POST['username'];
$contact = $_POST['contact'];
$email = $_POST['mail'];
$pass = $_POST['password'];

$hashpass = password_hash($pass,PASSWORD_DEFAULT);

if($conn)
{


    $query ="INSERT INTO agency(`name`,`email`, `contact`,`password`) VALUES ('$name','$email','$contact','$hashpass')";
    if(mysqli_query($conn,$query)){ 
      $_SESSION['msg'] = "Successfully registered...Login to get started";
    }
    else {
        if(strpos(mysqli_error($conn) , "Duplicate") !== false)
          $_SESSION['error'] = "Email already taken";
        else
          $_SESSION['error'] = "something went wrong " ;
        header("location: ../auth/signup-agency.php");
        exit();
    }
}
else {
    $_SESSION['error'] = "Couldnt connect to database";
    
    exit();
}

header("location: ../auth/login_.php");
?>