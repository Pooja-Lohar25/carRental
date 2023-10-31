<?php 
include('../navbar.php');
$islogin = true;
$isAgency = true;
?>

<head>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../cars/cars.css">
</head>
<body>
    <!-- display user's booked car-->
    
    <div class="cars">

        <div class="cars-container" style="margin-top:50px">
        <div class="car-details">
                <div class="details-grp" >
                    <div>Agency name</div>
                    <div style="font-size:12px"><p>Call: 9372578458<p></div>
                </div>
                <div class="details-grp">
                    <div>Toyota Camry</div>
                    <div>9876 XYZ</div>
                </div>
                <div class="details-grp">
                    <div class="cap-rent">
                        <div>5 Adults</div>
                        <div class="rent">Rs 5000/day</div>
                    </div>
                    <div class="car-img"><img src="car.png" alt="car"></div>
                </div>
                <div class="details-grp">
                <?php if ($isAgency): ?>
                    <a href="edit-car.php"><button class="edit-car-btn">Edit Details</button></a>
                <?php else: ?>
                    <a href="rent-car.php"><button class="rent-car-btn" >Rent Now</button></a>
                <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>
</body>