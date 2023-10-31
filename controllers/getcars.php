<?php
include('dbconnect.php');


if($conn){

    if($_SESSION['isagency']){
        $agencyid = $_SESSION['agencyid'];
        $query = "SELECT cars.*, agency.name as agencyname, contact FROM cars JOIN agency ON cars.agencyid = agency.agencyid where cars.agencyid = '$agencyid'";
        $cars = mysqli_query($conn,$query);
        if(mysqli_num_rows($cars)==0){
            $_SESSION['msg'] = "No cars added";
            exit();
        }
    }
    
    if(!$_SESSION['islogin'] || !$_SESSION['isagency']){
        $query = "SELECT cars.*, agency.name as agencyname, contact FROM cars JOIN agency ON cars.agencyid = agency.agencyid";
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