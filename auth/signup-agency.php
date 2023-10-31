
<?php 
include('../navbar.php');
?>

<head>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="forms.css">
    <script src="../index.js"></script>
</head>
<body>
    <div class = "app-body">
    <div class="sign-container">
            <h2>Signup</h2>
            <form action="signup.php" method="post">
                <div class="input-group">
                    <label for="Agency">Agency Name:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="contact">Contact No.:</label>
                    <input type="text" id="contact" name="contact" required>
                </div>
                <div class="input-group">
                    <label for="mail">E-mail:</label>
                    <input type="text" id="mail" name="mail" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <label for="cpassword">Confirm Password:</label>
                    <input type="password" id="cpassword" name="cpassword" required>
                </div>
                <button class ="sign-btn" id="subButton" type = "submit">Signup</button>
            </form>
                <script type="text/javascript">
                    document.getElementById("subButton").addEventListener("click",formCheck);
                </script>
        </div>

    </div>

</body>

