<?php
    $isLogin=true
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
            <li class="navbar-item"><a href="/carRental/cars/cars.php">Cars</a></li>
            <?php if ($isLogin): ?>
                <li class="navbar-item"><a href="/carRental/cars/add-car.php">Add</a></li>
            <?php endif; ?>

        </ul>
    </nav>
</body>
</html>

