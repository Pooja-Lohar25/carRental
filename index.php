<?php include('navbar.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="auth/forms.css">
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
    <title>Car Rental System</title>
</head>
<body>
    <div class="app-body">

        <div class="login-container">
            <h2>Login</h2>
            <form action="auth/login.php" method="post">
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button class ="lg-btn"type="submit">Login</button>
            </form>
            <p> New User? <a href="#" onclick="displaypopup()">Signup</a></p>
        </div>
        <div class="pop-up" id="pop-up">
            <div class="back"><a href="#" onclick = "displaypopup()" ><h4><p>X</p></h4></a></div>
            <div class="btn-grp sign-btn"><a href="auth/signup-agency.php" class="user-type">Rental Agency</a></div>
            <div class="btn-grp sign-btn" ><a href="auth/signup-cust.php" class="user-type">Customers</a></div>
        </div> 
    </div>
</body>
</html>