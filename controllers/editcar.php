<?php
include('dbconnect.php');



$model = $_POST['model'];
$number = $_POST['number'];
$capacity = $_POST['capacity'];
$rent = $_POST['rent'];



if($conn)
{

    $query = "UPDATE `cars` SET `model` = '$model', `capacity` = '$capacity', `rent` = '$rent' where `number` = '$number' ";
    $res = mysqli_query($conn,$query);
    if($res){ 
      $_SESSION['msg'] = "Car updated successfully";
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