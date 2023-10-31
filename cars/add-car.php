
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
            <h2>Add New Car</h2>
            <form action="../controllers/addcar.php" method="post">
                <div class="input-group">
                    <label for="Car model">Vehicle Model:</label>
                    <input type="text" id="model" name="model" required>
                </div>
                <div class="input-group">
                    <label for="number">Vehicle Number:</label>
                    <input type="text" id="number" name="number" required>
                </div>
                <div class="input-group">
                    <label for="capacity">Seating Capacity:</label>
                    <input type="number" id="capacity" name="capacity" required>
                </div>
                <div class="input-group">
                    <label for="rent">Rent per Day:</label>
                    <input type="number" id="rent" name="rent" required>
                </div>
                <button class ="add-car-btn" type="submit">Add</button>
            </form>
        </div>

    </div>

</body>

