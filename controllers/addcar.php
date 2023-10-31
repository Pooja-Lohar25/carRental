<?php
include('dbconnect.php');



$model = $_POST['model'];
$number = $_POST['number'];
$capacity = $_POST['capacity'];
$rent = $_POST['rent'];
$agencyid = $_SESSION['agencyid'];


if($conn)
{


    $query ="INSERT INTO cars(`model`,`number`, `capacity`,`agencyid`,`rent`) VALUES ('$model','$number','$capacity','$agencyid','$rent')";
    if(mysqli_query($conn,$query)){ 
      $_SESSION['msg'] = "Car added successfully";
      header("location: ../index.php");
    }
    else {

        if(strpos(mysqli_error($conn) , "Duplicate") !== false)
            $_SESSION['error'] = "Duplicate entry ";
        else
            $_SESSION['error'] = "something went wrong " ;

        header("location: ../cars/add-car.php");
        exit();
    }
}
else {
    $_SESSION['error'] = "Couldnt connect to database";
    exit();
}

header("location: ../cars/add-car.php");


?>