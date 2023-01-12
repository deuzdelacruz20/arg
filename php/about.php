<?php
session_start();
include '../include/navigation.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ARG AutoSign Shop</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     -->
  <link rel="stylesheet" href="../css/about.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="../ajax/ajax.js"></script>
  <style>
    body {
      background: linear-gradient(120deg, #71b7e6, #9b59b6);
      background-attachment: fixed;
    }

    .fa {
      padding: 20px;
      font-size: 30px;
      width: 100px;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
    }

    .fa:hover {
      opacity: 0.7;
    }

    .fa-facebook {
      background: #3B5998;
      color: white;
      border-radius: 20px;
    }
  </style>
</head>

<body>
  <h1 style="font-size: 50px; font-weight: bold; text-align:center;">About us</h1>
  <div class="container" style="text-align: center; width: 100%; margin-top: 20px;">
    <div class="row" style="margin-top: 35px;">
      <div class="col-md-6">
        <div class="content" style="text-align: left; font-size: 25px;">
          <h1 style="font-weight: bold;">Mission</h1>
          <p>
            To provide efficient and effective services delivery to all vehicle owners by customizing any vehicle with safe full and hood wrap, headlight film, customize plates and signages. Through this mission, ARG AuthoSign Shop provides cost-effective, faster and more durable products.
          </p>
          <h1 style="font-weight: bold;">Vision</h1>
          <p>
            ARG AuthoSign Shop will employ the best service-giving practices and will provide cost-effective and timely Services to all customers to meet their needs and expectation to the services by our shop.
          </p>
        </div>
      </div>
      <div class="col-md-6" style="text-align: center;">
        <h1 style="font-weight: bold;">Contact Us:</h1>
        <h2><b>Gmail:</b></br> geraldvalderamos13@gmail.com</h2>
        <h2><b>Phone Number: </br></b>0956-772-7083</h2></br>
        <h2><b>Reach us on Facebook</b></h2>
        <a href="https://www.facebook.com/ARGAutosignShop" target="_blank" class="fa fa-facebook"></a>
      </div>
    </div>
  </div>
  <!-- SERVICES -->
  <div class="container" style="width: 100%;">
    <h1 style="text-align: center; font-size: 60px">TIME OPEN</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="container" style="background-color: rgb(41, 141, 124); width: 100%;">
          <div class="row" style="text-align:center; margin: 5% 5% 5% 5%; background-color: white ; border-radius: 10px;">
            <h1 style="font-size: 50px; text-align:center">BUSINESS DAYS</h1>
            <h1 style="font-size: 50px; text-align:center">We are open from <b>Monday</b> to <b>Saturday</b></h1>
            <h1 style="font-size: 50px; text-align:center"><b>7:00AM</b> to <b>6:00PM</b></h1>
          </div>
        </div>
      </div>
      <div class="col-md-6" style="text-align: center; margin: 10px 0px 50px 0px;">
        <!-- BUSINESS HOURS -->
        <div class="container" style="background-color: rgb(41, 141, 124); width: 100%;">
          <div class="row" style="text-align:center; margin: 5% 5% 5% 5%; background-color: white ; border-radius: 10px;">
            <h1>BUSINESS HOURS</h1>
            <div class="col-xs-6" style="padding: 0% 5% 5% 5%; ">
              <h2><b>Morning</b></h2>
              <br>
              <h3>7:00 AM - 8:00 AM</h3>
              <h3>8:00 AM - 9:00 AM</h3>
              <h3>9:00 AM - 10:00 AM</h3>
              <h3>10:00 AM - 11:00 AM</h3>
            </div>
            <div class="col-xs-6" style="padding: 0% 5% 5% 5%;">
              <h3><b>Afternoon</b></h3>
              <br>
              <h3>1:00 PM - 2:00 PM</h3>
              <h3>2:00 PM - 3:00 PM</h3>
              <h3>3:00 PM - 4:00 PM</h3>
              <h3>4:00 PM - 5:00 PM</h3>
              <h3>5:00 PM - 6:00 PM</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <h1>Our Services</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <img src="../image/car5.png" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Full Wrap</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <img src="../image/hoodwraps.jpg" alt="Nature">
          <div class="caption">
            <p>Hood Wrap</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <img src="../image/headlightfilm.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Headlight Film</p>
          </div>
        </div>
      </div>

      <!-- <div class="row">
        <div class="col-md-6">
          <div class="thumbnail">
            <a href="../image/plate.jpg" target="_blank">
              <img src="../image/plate.jpg" alt="Lights" style="width:100%">
              <div class="caption">
                <p>Customize Plate</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="thumbnail">
            <a href="../image/signage.jpg" target="_blank">
              <img src="../image/car5.png" alt="Nature" style="width:100%">
              <div class="caption">
                <p>Signage</p>
              </div>
            </a>
          </div>
        </div>
      </div> -->
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <img src="../image/plate.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Customize Plate</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <img src="../image/signage.jpg" alt="Nature">
          <div class="caption">
            <p>Signage</p>
          </div>
        </div>
      </div>

      <!-- <div class="row">
        <div class="col-md-6">
          <div class="thumbnail">
            <a href="../image/plate.jpg" target="_blank">
              <img src="../image/plate.jpg" alt="Lights" style="width:100%">
              <div class="caption">
                <p>Customize Plate</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="thumbnail">
            <a href="../image/signage.jpg" target="_blank">
              <img src="../image/car5.png" alt="Nature" style="width:100%">
              <div class="caption">
                <p>Signage</p>
              </div>
            </a>
          </div>
        </div>
      </div> -->
    </div>
  </div>

  <footer class="text-center">
    <h4><i class="fa fa-phone"></i></i> Contact Number: 09123456789</h4>

    <h4><i class="fa fa-map-marker"></i> Location: Barangay Isabang Tayabas City.</h4>
    <h4></h4>
    <p>&copy; 2022, ARG Authosign Shop.</p>
</body>

</html>