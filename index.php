
<?php 
include('navbar.php');
?>

<head>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="cars/cars.css">
</head>
<body>
    <div class="filter-car">
        <div class="filter-by">
        <label for="capacity-filter">Seating Capacity</label>
        <input type="number" id="capacity" name="capacity" placeholder = "ex:5">
        </div>  
        <div class="filter-by">
        <label for="price-filter">Rent amount upto</label>
        <input type="number" id="price" name="price" placeholder = "ex:4000">
        </div>  
        <div class="filter-by">
        <label for="model-filter">Vehicle Model</label>
        <input type="text" id="model" name="model" placeholder = "ex:Toyota">
        </div>
        <button class="filter-btn"> Filter </button>     
    </div>

    
    <div class="cars">

        <div class="cars-container">
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
                    <div class="car-img"><img src="cars/car.png" alt="car"></div>
                </div>
                <div class="details-grp">
                <?php if ($isAgency && $isLogin): ?>
                    <a href="cars/edit-car.php"><button class="edit-car-btn">Edit Details</button></a>
                <?php elseif(!$isAgency && $isLogin): ?>
                    <a href="cars/rent-car.php"><button class="rent-car-btn" >Rent Now</button></a>
                <?php else: ?>
                    <a href="auth/login_.php"><button class="rent-car-btn" >Rent Now</button></a>
                <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>
</body>