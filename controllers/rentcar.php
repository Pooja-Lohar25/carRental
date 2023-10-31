<?php
include('dbconnect.php');


$custid = $_SESSION['custid'];
$number = $_POST['number'];
$days = $_POST['rentalDays'];


if($conn)
{

    $query = "UPDATE `cars` SET  `custid` = '$custid' , `days` = '$days' where `number` = '$number' ";
    $res = mysqli_query($conn,$query);
    if($res){ 
      $_SESSION['msg'] = "Car rented successfully";
      header("location: ../index.php");
      exit();
    }
    else {
        $_SESSION['error'] = "something went wrong ".mysqli_error($conn) ;
        header("location: ../index.php");
        exit();
    }
}
else {
    $_SESSION['error'] = "Couldnt connect to database";
    exit();
}

header("location: ../index.php");


?>