<?php
include('dbconnect.php');



$email = $_POST['mail'];
$pass = $_POST['password'];

$hashpass = password_hash($pass,PASSWORD_DEFAULT);

if($conn)
{
    //check user as agency
    $checkagency = "SELECT `email`,`password`,`agencyid` FROM `agency` WHERE `email`='$email' ";
    $res = mysqli_query($conn,$checkagency);
    if(mysqli_num_rows($res)>0)
    {
      $row = mysqli_fetch_assoc($res);
      $verify = password_verify($pass,$row['password']);
      if($verify){

        $_SESSION['islogin'] = true;
        $_SESSION['isagency']  = true; 
        $_SESSION['agencyid'] = $row['agencyid'];
        header("location: ../index.php");
        exit();
      }
    }

    //check user as customer
    $checkcust = "SELECT * FROM `customer` WHERE `email`='$email' ";
    $res = mysqli_query($conn,$checkcust);
    if(mysqli_num_rows($res)>0)
    {
      $row = mysqli_fetch_assoc($res);
      $verify = password_verify($pass,$row['password']);
      if($verify){
        $_SESSION['islogin'] = true;
        $_SESSION['isagency']  = false; 
        $_SESSION['custid'] = $row['custId'];
        header("location: ../index.php");
        exit();
      }
    }

      $_SESSION['error'] = "Incorrect credentials";
      header("location:../auth/login_.php");
      exit();


}
else {
    $_SESSION['error'] = "Couldnt connect to database";
    
    exit();
}

?>