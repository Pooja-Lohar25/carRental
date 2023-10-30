
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
            <h2>Edit Car</h2>
            <form action="add-new-car.php" method="post">
                <div class="input-group">
                    <label for="number">Vehicle Number:</label>
                    <input type="text" id="number" name="number" disabled>
                </div>
                <div class="input-group">
                    <label for="Car model">Vehicle Model:</label>
                    <input type="text" id="model" name="model" required>
                    <button class ="add-car-btn">Edit</button>

                </div>
                <div class="input-group">
                    <label for="capacity">Seating Capacity:</label>
                    <input type="number" id="capacity" name="capacity" required>
                    <button class ="add-car-btn" >Edit</button>

                </div>
                <div class="input-group">
                    <label for="rent">Rent per Day:</label>
                    <input type="number" id="rent" name="rent" required>
                    <button class ="add-car-btn" >Edit</button>
                </div>
                <button class ="add-car-btn" type="submit">Save Changes</button>

            </form>
        </div>

    </div>

</body>

