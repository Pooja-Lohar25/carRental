<?php
include('dbconnect.php');


if(!isset($_SESSION['islogin']))
$_SESSION['islogin'] = false;

if(!isset($_SESSION['isagency']))
$_SESSION['isagency'] = false;

$isLogin = $_SESSION['islogin'];
$isAgency = $_SESSION['isagency'];

if($conn){

    if($_SESSION['isagency']){
        $agencyid = $_SESSION['agencyid'];
        $query = "SELECT c.*, a.name as agencyname, cu.name as custname, cu.contact as contact
        FROM cars AS c
        LEFT JOIN agency AS a ON c.agencyid = a.agencyid
        LEFT JOIN customer AS cu ON c.custid = cu.custId
        WHERE c.agencyid = '$agencyid'";
        $cars = mysqli_query($conn,$query);
        if(mysqli_num_rows($cars)==0){
            $_SESSION['msg'] = "No cars added";
            $cars = [];
            exit();
        }
    }
    
    if(!$_SESSION['islogin'] || !$_SESSION['isagency']){
        $query = "SELECT cars.*, agency.name as agencyname, contact FROM cars JOIN agency ON cars.agencyid = agency.agencyid";
        $cars = mysqli_query($conn,$query);
        if(mysqli_num_rows($cars)==0){
            $_SESSION['msg'] = "No cars added";
            $cars = [];
            exit();
        }
    }

}
else{
    $_SESSION['error'] = "Couldnt connect to database";
    exit();
}


?>