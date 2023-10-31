<?php
include('dbconnect.php');


if($conn){

    if($_SESSION['isagency']){
        $agencyid = $_SESSION['agencyid'];
        $query = "SELECT  * FROM `cars` where `agencyid` = '$agencyid' ";
        $cars = mysqli_query($conn,$query);
        if(mysqli_num_rows($cars)==0){
            $_SESSION['msg'] = "No cars added";
            exit();
        }
    }

}
else{
    $_SESSION['error'] = "Couldnt connect to database";
    exit();
}


?>