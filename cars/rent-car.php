
<?php 
include('../navbar.php');
?>

<head>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../auth/forms.css">
</head>
<body>
    <div class = "app-body">
    <div class="new-car-container">
            <h2>Rent this Car</h2>
            <form action="add-new-car.php" method="post">
                <div class="input-group">
                    <label for="agency">Agency Name:</label>
                    <input type="text" id="agency" name="agency" disabled>
                </div>
                <div class="input-group">
                    <label for="Car model">Vehicle Model:</label>
                    <input type="text" id="model" name="model" disabled>
                </div>
                <div class="input-group">
                    <label for="number">Vehicle Number:</label>
                    <input type="text" id="number" name="number" disabled>
                </div>
                <div class="input-group">
                    <label for="capacity">Seating Capacity:</label>
                    <input type="number" id="capacity" name="capacity" disabled>
                </div>
                <div class="input-group">
                    <label for="rent">Rent per Day:</label>
                    <input type="number" id="rent" name="rent" disabled>
                </div>
                <div class="input-group">
                    <label for="days">Days:</label>
                    <select id="rentalDays" name="rentalDays">
                        <option value="1">1 day</option>
                        <option value="2">2 days</option>
                        <option value="3">3 days</option>
                        <option value="4">4 days</option>
                        <option value="5">5 days</option>
                    </select>
                </div>
                <button class ="add-car-btn" type="submit">Rent</button>
            </form>
        </div>

    </div>

</body>



