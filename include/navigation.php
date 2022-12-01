<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ARG AutoSign Shop</title>

  <!-- <link rel="stylesheet" type="text/css" href="styles.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
</head>

<body>


  <!-- <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../../arg/php/homepage.php">ARG AutoSign</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="nav-link"><a href="../../arg/php/homepage.php">Home</a></li>
          <li class="nav-link"><a href="../../arg/php/designTemplates.php">Design Templates</a></li>
          <li class="nav-link"><a href="../../arg/php/schedule.php">Schedules</a></li>
          <li class="nav-link"><a href="../../arg/php/about.php">About</a></li>
          <li class="nav-link"><a href="../../arg/php/inventory.php">Inventory</a></li>
          <li class="nav-link"><a href="../../arg/php/transactionHistory.php">Transaction History</a></li>
          <li class="nav-link"><a href="../../arg/php/payment.php">Payment</a></li>
          <li class="nav-link"><a href="../../arg/php/earningsAndExpenses.php">Earnings and Expenses</a></li> -->

  <!-- <li class="nav-link"><a href="../../arg/php/homepage.php">Home</a></li>
          <li class="nav-link"><a href="../../arg/php/designTemplates.php">Design Templates</a></li>
          <li class="nav-link"><a href="#">Schedules</a></li>
          <li class="nav-link"><a href="#">About</a></li>
          <li class="nav-link"><a href="#">Inventory</a></li>
          <li class="nav-link"><a href="#">Transaction History</a></li> -->
  <!-- </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
  </nav> -->

  <nav class="navbar navbar-default" style="width: 100%; border-radius:0%">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../../arg/php/homepage.php">ARG AUTOSIGN SHOP</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Link</a></li> -->
          <li class="nav-link"><a href="../../arg/php/homepage.php">Home</a></li>
          <li class="nav-link"><a href="../../arg/php/designTemplates.php">Design Templates</a></li>
          <li class="nav-link"><a href="../../arg/php/schedule.php">Schedules</a></li>
          <li class="nav-link"><a href="../../arg/php/about.php">About</a></li>
          <li class="nav-link"><a href="../../arg/php/inventory.php">Inventory</a></li>
          <li class="nav-link"><a href="../../arg/php/transactionHistory.php">Transaction History</a></li>
          <li class="nav-link"><a href="../../arg/php/payment.php">Payment</a></li>
          <li class="nav-link"><a href="../../arg/php/earningsAndExpenses.php">Earnings and Expenses</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="../php/logout.php">Logout</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>



  <script>

const menuItem = document.querySelectorAll('.nav-link a');

menuItem.forEach(el => {
  // current
  
  if (el.getAttribute('href').substr(5, el.getAttribute('href').length) === window.location.pathname) {
    
    el.closest("li").classList.add("active")
  }

  
})
    

  </script>
</body>

</html>