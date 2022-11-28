<?php
include '../include/navigation.php';
include '../backend/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCHEDULES</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../ajax/ajaxDesign.js"></script>

    <style>
        body {
            background: linear-gradient(120deg, #71b7e6, #9b59b6);
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- <img src="../image/qrcode.jpg" style="border-radius: 5px;"> -->
        <div class="row">
            <div class="col-md-6" style="background-color:white; border-radius: 5px;">
                <img src="../image/qrcode.jpg" style="max-width: 75%; display: block; margin-left: auto;margin-right: auto; width: 50%;">
                <h3 style="text-align:center; background-color:#d5d5d5">SCAN THE QR CODE TO PAY</h3>
            </div>
            <div class="col-md-6">
                <h1 style="text-align: center; color:black;">GCASH PAYMENT</h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6" style="background-color:white; border-radius: 5px;">
                <a href="https://www.gcash.com/"><img src="../image/gcash.png" style="width: 100%; display: block; margin-left: auto;margin-right: auto; width: 50%; margin-top:5%; margin-bottom:5%;"></img></a>
                <h3 style="text-align:center; background-color:#d5d5d5">OR PROCEED TO GCASH OFFICIAL WEBSITE FOR PAYMENT</h3>
            </div>
            <div class="col-md-3">

            </div>
        </div>
        <br>
    </div>
</body>

</html>