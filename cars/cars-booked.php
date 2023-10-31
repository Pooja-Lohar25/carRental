<?php
include('../navbar.php');
include('../controllers/dbconnect.php');


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
            $cars = [
                [
                    'model' => 'Car Model 1',
                    'number' => 'AB 1234',
                    'capacity' => 5,
                    'rent' => 1000,
                    'booked_by' => 'Ajay Verma',
                ],
                [
                    'model' => 'Car Model 2',
                    'number' => 'CD 5678',
                    'capacity' => 4,
                    'rent' => 800,
                    'booked_by' => 'Agency XYZ',
                ],
                // Add more cars as needed
            ];

            // Loop through the car data and generate HTML for each car
            foreach ($cars as $car) {
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
                            <div><?= $car['booked_by'] ?></div>
                        <?php else: ?>
                            <label for="booked">Booked from:</label>
                            <div><?= $car['booked_by'] ?></div>
                        <?php endif ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</body>
