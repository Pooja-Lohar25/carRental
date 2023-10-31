<?php
session_start();

unset($_SESSION['islogin']);
header('location:../index.php');
mysqli_close($conn);
session_destroy();

?>