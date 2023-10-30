
<?php 
include('../navbar.php');
?>

<head>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="auth.css">
</head>
<body>
    <div class = "app-body">
    <div class="sign-container">
            <h2>Signup</h2>
            <form action="auth/signup.php" method="post">
                <div class="input-group">
                    <label for="Agency">Agency Name:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="Name">Name:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="mail">E-mail:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <label for="cpassword">Confirm Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button class ="sign-btn"type="submit">Signup</button>
            </form>
        </div>

    </div>

</body>

