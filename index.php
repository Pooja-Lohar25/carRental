
<?php 


include('controllers/getcars.php');
//filter available cars
$allcars = [];
while ($row = mysqli_fetch_assoc($cars)) {
    $allcars[] = $row;
}

$cars = array_filter($allcars, function ($car){
    return $car['custid'] == null;
});

include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="cars/cars.css">
    <title>Car rental system</title>
</head>

<body>    
    
    <div class="cars">

        <div class="cars-container">
            <?php
            foreach($cars as $car){
                $editURL = "cars/edit-car.php?number=" . $car['number'];
                $rentURL = "cars/rent-car.php?number=" . $car['number'];
                ?>
                <div class="car-details">
                <div class="details-grp" >
                    <div><?= $car['agencyname']?></div>
                    <div style="font-size:12px"><p>Call: <?= $car['contact']?><p></div>
                </div>
                <div class="details-grp">
                    <div><?= $car['model'] ?></div>
                    <div><?= $car['number'] ?></div>
                </div>
                <div class="details-grp">
                    <div class="cap-rent">
                        <div class="cap"><?= $car['capacity']?> Adults</div>
                        <div class="rent"><?= $car['rent'] ?>/Day</div>
                    </div>
                    <div class="car-img"><img src="cars/car.png" alt="car"></div>
                </div>
                <div class="details-grp">
                <?php if ($isAgency && $isLogin): ?>
                    <a href="<?= $editURL ?>"><button class="edit-car-btn">Edit Details</button></a>
                <?php elseif(!$isAgency && $isLogin): ?>
                    <a href="<?= $rentURL ?>"><button class="rent-car-btn" >Rent Now</button></a>
                <?php else: ?>
                    <a href="auth/login_.php"><button class="rent-car-btn" >Rent Now</button></a>
                <?php endif; ?>
                </div>
            </div>
            <?php
            }
            ?>
            
        </div>
    </div>

</body>
</html>
