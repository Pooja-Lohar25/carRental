
<?php 

$cars = [];
include('../navbar.php');

include('../controllers/getcars.php');

$allcars = [];
while ($row = mysqli_fetch_assoc($cars)) {
    $allcars[] = $row;
}

$vehicleNumber = $_GET['number'];

$car = array_filter($allcars, function ($car) use ($vehicleNumber) {
    return $car['number'] == $vehicleNumber;
});
$car = reset($car); //pointer reaches to first elem

?>

<head>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../auth/forms.css">
</head>
<body>
    <div class = "app-body">
    <div class="new-car-container">
            <h2>Rent this Car</h2>
            <form action="../controllers/rentcar.php" method="post">
                <div class="input-group">
                    <label for="agency">Agency Name:</label>
                    <input type="text" id="agency" name="agency" value= <?=$vehicleNumber?> readonly>
                </div>
                <div class="input-group">
                    <label for="Car model">Vehicle Model:</label>
                    <input type="text" id="model" name="model" value= <?=$car['model']?> readonly>
                </div>
                <div class="input-group">
                    <label for="number">Vehicle Number:</label>
                    <input type="text" id="number" name="number" value= <?=$vehicleNumber?> readonly>
                </div>
                <div class="input-group">
                    <label for="capacity">Seating Capacity:</label>
                    <input type="number" id="capacity" name="capacity" value= <?=$car['capacity']?> readonly>
                </div>
                <div class="input-group">
                    <label for="rent">Rent per Day:</label>
                    <input type="number" id="rent" name="rent" value= <?=$car['rent']?> readonly>
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



