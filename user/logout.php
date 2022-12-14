<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

// if (isset($_GET['logout'])) {
//     session_destroy();
//     header("Location: http://localhost/arg/php/adminLogin.php");
// }

header("Location: http://localhost/arg/php/adminLogin.php");
