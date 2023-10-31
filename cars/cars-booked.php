<?php 
include('../navbar.php');
?>

<head>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="cars.css">
</head>
<body>
        <!-- display user's and agency's booked car-->
    <div class="booked-cars">
        <div class="cars-container">
            <div class="car-details">
                <div class="details-grp">
                    <label for="model">Vehicle Model:</label>
                    <div>model</div>
                </div>
                <div class="details-grp">
                    <label for="number">Vehicle Number:</label>
                    <div>number</div>
                </div>
                <div class="details-grp">
                    <label for="cap">Seating Capacity:</label>
                    <div>Capacity</div>
                </div>
                <div class="details-grp">
                    <label for="rent">Rent/day:</label>
                    <div>Rs 1000</div>
                </div>
                <div class="details-grp">
                    <?php  if($isAgency):?>
                        <label for="booked">Booked by:</label>
                        <div>Ajay Verma</div>
                    <?php else:?>
                        <label for="booked">Booked from:</label>
                        <div>Agency xyz</div>
                    <?php endif?>
                </div>
            </div>
        </div>

    </div>
</body>