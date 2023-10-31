<?php
    $isLogin = false;
    $isAgency = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Car Rental</title>
</head>
<body>
    <nav class="navbar">
        <ul class="navbar-list">
            <li class="navbar-item"><a href="/carRental/index.php">Home</a></li>
            <?php if ($isLogin && $isAgency): ?>
                <li class="navbar-item"><a href="/carRental/cars/add-car.php">Add</a></li>
            <?php elseif($isLogin && !$isAgency): ?>
                <li class="navbar-item"><a href="/carRental/cars/cars.php">My Cars</a></li>
            <?php else: ?>
                <li class="navbar-item nav-btn"><a href="/carRental/auth/login_.php">Login/Signup</a></li>
            <?php endif; ?>

        </ul>
    </nav>
</body>
</html>

