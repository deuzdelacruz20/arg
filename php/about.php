<?php include '../include/navigation.php';
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
  </style>
</head>

<body>
  <div class="container" style="text-align: center; width: 100%; margin-top: 20px;">
    <div class="row" style="margin-top: 35px;">
      <div class="col-md-6">
        <div class="content" style="text-align: left; font-size: 25px;">
          <h1 style="font-size: 50px; font-weight: bold;">About us</h1>
          <h1 style="font-weight: bold;">Mission</h1>
          <p>
            We deliver creative Print & Marketing Solutions that make our
            clients successful. We keep our promises, provide creative
            solutions, and achieve our client's goals.
          </p>
          <h1 style="font-weight: bold;">Vision</h1>
          <p>
            To be the Quezon Province's most premier printing solution business
            delivering premium quality product to our customers.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <img src="../image/arg logo.png" width="500" height="500"
          style="padding: 30px; align-items: center; margin-bottom: 80px;" />
      </div>
    </div>
  </div>
  <!-- <div class="container" style="background-color: white; text-align: center; width: 80%;">
    <h1>Time Open</h1>
    <h3>BUSINESS DAYS</h3>
    <p>We are open from Mondays to Saturday
      7:00AM to 6:00PM
    </p>
    <h3>BUSINESS HOURS</h3>
    <div class="row">
      <div class="col-md-6">
        <h4>Morning</h4>
        <p>7:00 AM - 8:00 AM</p>
        <p>8:00 AM - 9:00 AM</p>
        <p>9:00 AM - 10:00 AM</p>
        <p>10:00 AM - 11:00 AM</p>
      </div>
      <div class="col-md-6">
        <h4>Afternoon</h4>
        <p>12:00 PM - 1:00 PM</p>
        <p>1:00 PM - 2:00 PM</p>
        <p>3:00 PM - 4:00 PM</p>
        <p>4:00 PM - 5:00 PM</p>
        <p>5:00 PM - 6:00 PM</p>
      </div>
    </div>
  </div> -->

  <!-- SERVICES -->
  <div class="container" style="width: 100%;">
    <h1 style="text-align: center; font-size: 60px">TIME OPEN</h1>
    <div class="row">
      <div class="col-md-6">
        <!-- <div class="iframe-container" style="margin: 5%; display: block; margin-left: 25%; margin-right: auto;">
                  <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2FARGAutosignShop%2Fvideos%2F600802391554257%2F&show_text=false&width=268&t=0" width="268" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true">
                      <style>
                          iframe {
                              display: block;
                              border-style: none;
                              margin-left: 30%;
                          }
                      </style>
                  </iframe>
              </div> -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container" style="background-color: rgb(41, 141, 124); width: 100%;">
        <div class="row"
            style="text-align:center; margin: 5% 5% 5% 5%; background-color: white ; border-radius: 10px;">
        <h1 style="font-size: 50px; text-align:center">BUSINESS DAYS</h1>
        <h1 style="font-size: 50px; text-align:center">We are open from <b>Monday</b> to <b>Saturday</b></h1>
        <h1 style="font-size: 50px; text-align:center"><b>7:00AM</b> to <b>6:00PM</b></h1>
        </div>
        </div>
      </div>
      <div class="col-md-6" style="text-align: center; margin: 10px 0px 50px 0px;">
        <!-- BUSINESS HOURS -->
        <div class="container" style="background-color: rgb(41, 141, 124); width: 100%;">
          <div class="row"
            style="text-align:center; margin: 5% 5% 5% 5%; background-color: white ; border-radius: 10px;">
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