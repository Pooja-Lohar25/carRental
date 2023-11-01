<?php
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();
    if(!isset($_SESSION['islogin']))
        $_SESSION['islogin'] = false;

    if(!isset($_SESSION['isagency']))
        $_SESSION['isagency'] = false;

    $isLogin = $_SESSION['islogin'];
    $isAgency = $_SESSION['isagency'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
    <title>Car Rental</title>
</head>
<body>
    <nav class="navbar">
        <ul class="navbar-list">
            <li class="navbar-item"><a href="/carRental/index.php">Home</a></li>
            <?php if ($isLogin && $isAgency): ?>
                <li class="navbar-item"><a href="/carRental/cars/add-car.php">Add</a></li>
                <li class="navbar-item"><a href="/carRental/cars/cars-booked.php">Booked Cars</a></li>
                <li class="navbar-item"><button class="me-btn" onclick="displayagency()"><a href="#">Me</a></button></li>
                <li class="navbar-item "><a href="/carRental/controllers/logout.php">Logout</a></li>
            <?php elseif($isLogin && !$isAgency): ?>
                <li class="navbar-item"><a href="/carRental/cars/cars-booked.php">My Cars</a></li>
                <li class="navbar-item"><button class="me-btn" onclick="displaycust()"><a href="#">Me</a></button></li>
                <li class="navbar-item "><a href="/carRental/controllers/logout.php">Logout</a></li>
            <?php else: ?>
                <li class="navbar-item nav-btn"><a href="/carRental/auth/login_.php">Login/Signup</a></li>
            <?php endif; ?>

        </ul>
    </nav>
    <div class="error">
            <div>
            <?php
            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
            ?>
            </div>
    </div>
    <div class="message">
            <div>
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
            </div>
    </div>
    <script>
        function displayagency(){
            alert("Your username: <?= $_SESSION['agencyname']?>");
        }
        function displaycust(){
            alert("Your username: <?= $_SESSION['custname']?>");
        }
    </script>
</body>
</html>

