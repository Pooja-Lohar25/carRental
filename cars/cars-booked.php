<?php
include('../navbar.php');
include('../controllers/getcars.php');

$allcars = [];
while ($row = mysqli_fetch_assoc($cars)) {
    $allcars[] = $row;
}
$bookedcars = [];
$bookedcars = array_filter($allcars, function ($car) {
    return $car['custid'] !== null;
});
if(count($bookedcars) == 0) {
    $_SESSION['msg'] = "No cars booked";
} 
?>

<head>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="cars.css">
</head>
<body>
    <!-- display user's and agency's booked car -->
    <div class="booked-cars">
        <div class="cars-container">
            <?php

            // Loop through the car data and generate HTML for each car
            foreach ($bookedcars as $car) {
                ?>
                <div class="car-details">
                    <div class="details-grp">
                        <label for="model">Vehicle Model:</label>
                        <div><?= $car['model'] ?></div>
                    </div>
                    <div class="details-grp">
                        <label for="number">Vehicle Number:</label>
                        <div><?= $car['number'] ?></div>
                    </div>
                    <div class="details-grp">
                        <label for="cap">Seating Capacity:</label>
                        <div><?= $car['capacity'] ?></div>
                    </div>
                    <div class="details-grp">
                        <label for="rent">Rent/day:</label>
                        <div>Rs <?= $car['rent'] ?></div>
                    </div>
                    <div class="details-grp">
                        <?php if ($isAgency): ?>
                            <label for="booked">Booked by:</label>
                            <div><?= $car['custid'] ?></div>
                        <?php else: ?>
                            <label for="booked">Booked from:</label>
                            <div><?= $car['agencyname'] ?></div>
                        <?php endif ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</body>
