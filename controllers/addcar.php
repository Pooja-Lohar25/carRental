<?php
include('dbconnect.php');



$model = $_POST['model'];
$number = $_POST['number'];
$capacity = $_POST['capacity'];
$rent = $_POST['rent'];
$agencyid = $_SESSION['agencyid'];


if($conn)
{

    // if(mysqli_num_rows($res)>0)
    // {
    //   $_SESSION['error'] = "Email already used";
    //   header("location: ../auth/signup-cust.php");
    //   exit();
    // }

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