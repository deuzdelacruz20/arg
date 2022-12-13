<?php
include '../include/navigation.php';
include '../backend/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARG AutoSign Shop</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="../ajax/ajax.js"></script>
    <link rel="stylesheet" href="../css/style.css">

    <style>
        body {
            background: linear-gradient(120deg, #71b7e6, #9b59b6);
            background-attachment: fixed;
        }

        .row {
            margin-top: 5%;
            margin-left: 10%;
            margin-right: 10%;
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="row" style="height:100px;">
        <?php
        $result = mysqli_query($conn, "select count('1') as totalPendingRequest from customer_request where user_status = 'Pending';");
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <div class="col-md-3">
                <div class="col-md-12" style="background-color: rgb(53, 207, 32); height:150px; border-radius:10px;">
                    <h4 style="color: white;">TOTAL NUMBER OF PENDING REQUEST</h4>
                    <h1 style="color: white;">
                        <?php echo $row["totalPendingRequest"] ?>
                    </h1>
                </div>
            </div>
        <?php
        }
        ?>
        <?php
        $result = mysqli_query($conn, "select count('1') as TotalAcceptedRequest from customer_request where user_status = 'Accepted';");
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <div class="col-md-3">
                <div class="col-md-12" style="background-color: rgb(33, 49, 199); height:150px; border-radius:10px;">
                    <h4 style="color: white;">TOTAL NUMBER OF ACCEPTED REQUESTS</h4>
                    <h1 style="color: white;">
                        <?php echo $row["TotalAcceptedRequest"] ?>
                    </h1>
                </div>
            </div>
        <?php
        }
        ?>
        <?php
        $result = mysqli_query($conn, "select count('1') as totalRejectedRequest from customer_request where user_status = 'Rejected';");
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <div class="col-md-3">
                <div class="col-md-12" style="background-color: rgb(202, 34, 34); height:150px; border-radius:10px;">
                    <h4 style="color: white;">TOTAL NUMBER OF REJECTED REQUEST</h4>
                    <h1 style="color: white;">
                        <?php echo $row["totalRejectedRequest"] ?>
                    </h1>
                </div>
            </div>
        <?php
        }
        ?>
        <?php
        $result = mysqli_query($conn, "select count('1') as done from customer_request where user_status = 'Done';");
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <div class="col-md-3">
                <div class="col-md-12" style="background-color: aliceblue; height:150px; border-radius:10px;">
                    <h4>TOTAL NUMBER OF SUCCESSFULLY SERVED CUSTOMERS</h4>
                    <h1>
                        <?php echo $row["done"] ?>
                    </h1>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <div class="row" style="height:100px;">
        <?php
        $result = mysqli_query($conn, "SELECT SUM(itemPrice) as totalExpenses FROM inventory;");
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <div class="col-md-12">
                <div class="col-md-12" style="background-color: aliceblue; height:150px; border-radius:10px;">
                    <h1>TOTAL OVERALL EXPENSES</h1>
                    <h1>
                        <?php echo $row["totalExpenses"] ?>
                    </h1>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>