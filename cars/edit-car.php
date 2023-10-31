
<?php 
$cars = [];
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


include('../navbar.php');
?>

<head>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../auth/forms.css">
</head>
<body>
    <div class = "app-body">
    <div class="new-car-container">
            <h2>Edit Car</h2>
            <form action="../controllers/editcar.php" method="post">
                <div class="input-group">
                    <label for="number">Vehicle Number:</label>
                    <input type="text" id="number"  name = "number" value= <?=$vehicleNumber?> readOnly >
                </div>
                <div class="input-group">
                    <label for="Car model">Vehicle Model:</label>
                    <input type="text" id="model" name = "model" value= <?=$car['model']?> required readonly>
                    <button type = "button"  class ="add-car-btn" onclick = "enable('model')">Edit</button>

                </div>
                <div class="input-group">
                    <label for="capacity">Seating Capacity:</label>
                    <input type="number" id="capacity" name = "capacity" value= <?=$car['capacity']?> required readonly>
                    <button type = "button"  class ="add-car-btn" onclick = "enable('capacity')">Edit</button>

                </div>
                <div class="input-group">
                    <label for="rent">Rent per Day:</label>
                    <input type="number" id="rent"  name = "rent" value= <?=$car['rent']?> required readonly>
                    <button type = "button"  class ="add-car-btn" onclick = "enable('rent')">Edit</button>
                </div>
                <button class ="add-car-btn" type="submit" >Save Changes</button>

            </form>
        </div>
        <script>
            function enable(id){
                document.getElementById(id).readOnly = false;
            }
        </script>

    </div>

</body>

