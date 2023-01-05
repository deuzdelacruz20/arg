<?php
session_start();
session_destroy();
header("Location: http://localhost/arg/php/admin.php");
