<?php
include('dbconnect.php');
$name = $_POST['custname'];
$contact = $_POST['contact'];
$email = $_POST['mail'];
$pass = $_POST['password'];

$hashpass = password_hash($pass,PASSWORD_DEFAULT);

if($conn)
{

    $check = "SELECT `email` FROM `customer` WHERE `email`='$email' ";
    $res = mysqli_query($conn,$check);
    if(mysqli_num_rows($res)>0)
    {
      $_SESSION['error'] = "Email already used";
      header("location: ../auth/signup-cust.php");
      exit();
    }


    $query ="INSERT INTO customer(`name`,`email`, `contact`,`password`) VALUES ('$name','$email','$contact','$hashpass')";
    if(mysqli_query($conn,$query)){ 
      $_SESSION['msg'] = "Successfully registered...Login to get started";
    }
    else {
        $_SESSION['error'] = "Something went wrong";
        exit();
    }
}
else {
    $_SESSION['error'] = "Couldnt connect to database";
    
    exit();
}

header("location: ../auth/login_.php");
?>