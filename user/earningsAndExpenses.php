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
    <!-- shepo changes/added start -->
    <div class="row " style="height:100px;">
        <div style="float:right;">
            <div class="form-group col-sm-3" style="float:left;">
                <label class="control-label">Date From</label>
                <input type="date" id="datefrom" name="datefrom" class="" required>
            </div>
            <div class="form-group col-sm-3" style="float:center;">
                <label class="control-label">Date To</label>
                <input type="date" id="dateto" name="dateto" class="" required>
            </div>
            <div class="col-sm-2" style="float:center;">
                <label class="control-label"></label>
                <input type="submit" id="btnsearch" value="search" class="btn btn-success">
            </div>
        </div>

    </div>
    <div class="col-md-3">
        <div class="col-md-12" style="background-color: rgb(53, 207, 32); height:150px; border-radius:10px;">
            <h4 style="color: white;">TOTAL NUMBER OF PENDING REQUEST</h4>
            <h1 style="color: white; text-align: center;" id="pending">
            </h1>
        </div>
    </div>

    <div class="col-md-3">
        <div class="col-md-12" style="background-color: rgb(33, 49, 199); height:150px; border-radius:10px;">
            <h4 style="color: white;">TOTAL NUMBER OF ACCEPTED REQUESTS</h4>
            <h1 style="color: white; text-align: center" id="accepted">
            </h1>
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12" style="background-color: rgb(202, 34, 34); height:150px; border-radius:10px;">
            <h4 style="color: white;">TOTAL NUMBER OF REJECTED REQUEST</h4>
            <h1 style="color: white; text-align: center" id="rejected">
            </h1>
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12" style="background-color: aliceblue; height:150px; border-radius:10px;">
            <h4>TOTAL NUMBER OF SUCCESSFULLY SERVED CUSTOMERS</h4>
            <h1 style="text-align: center" id="done">
            </h1>
        </div>
    </div>
    </div>

    <div class="row" style="height:100px;">
        <div class="col-md-12"><br>
            <div class="col-md-12" style="background-color: aliceblue; height:150px; border-radius:10px;">
                <h1>TOTAL OVERALL EXPENSES</h1>
                <h1 style="text-align: center" id="expenses">
                </h1>
            </div>
        </div>
    </div>


    <div class="row" style="height:100px;">
        <div class="col-md-12"> <br>
            <div class="col-md-12" style="background-color: aliceblue; height:150px; border-radius:10px;">
                <h1>TOTAL OVERALL EARNINGS</h1>
                <h1 id="earnings">
                </h1>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            loadpending();
            loadaccepted();
            loadrejected();
            loaddone();
            loadexpenses();
            loadearning();

            $("#btnsearch").click(function() {
                loadpending();
                loadaccepted();
                loadrejected();
                loaddone();
                loadexpenses();
                loadearning();
            });

            $('#datefrom').change(function() {
                $('#dateto').attr('min', $("#datefrom").val());
            });
            $('#dateto').change(function() {
                console.log($("#dateto").val());
                $('#datefrom').attr('max', $("#dateto").val());
            });

            function loadpending() {
                $.ajax({
                    data: {
                        "type": "PENDING",
                        "datefrom": $("#datefrom").val(),
                        "dateto": $("#dateto").val()
                    },
                    type: "get",
                    url: "../backend/report.php",
                    success: function(dataResult) {
                        var dataResult1 = JSON.parse(dataResult);
                        console.log(dataResult1);
                        if (dataResult1.statusCode == 200 && dataResult1.data.length > 0) {
                            for (var keys in dataResult1.data) {
                                $("#pending").text(dataResult1.data[keys] == null ? "0" : dataResult1.data[keys]);
                            }
                        } else {
                            $("#pending").text("NA");
                        }
                    }
                });
            }

            function loadaccepted() {
                $.ajax({
                    data: {
                        "type": "ACCEPTED",
                        "datefrom": $("#datefrom").val(),
                        "dateto": $("#dateto").val()
                    },
                    type: "get",
                    url: "../backend/report.php",
                    success: function(dataResult) {
                        var dataResult1 = JSON.parse(dataResult);
                        console.log(dataResult1);
                        if (dataResult1.statusCode == 200 && dataResult1.data.length > 0) {
                            for (var keys in dataResult1.data) {
                                $("#accepted").text(dataResult1.data[keys] == null ? "0" : dataResult1.data[keys]);
                            }
                        } else {
                            $("#accepted").text("NA");
                        }
                    }
                });
            }

            function loadrejected() {
                $.ajax({
                    data: {
                        "type": "REJECTED",
                        "datefrom": $("#datefrom").val(),
                        "dateto": $("#dateto").val()
                    },
                    type: "get",
                    url: "../backend/report.php",
                    success: function(dataResult) {
                        var dataResult1 = JSON.parse(dataResult);
                        console.log(dataResult1);
                        if (dataResult1.statusCode == 200 && dataResult1.data.length > 0) {
                            for (var keys in dataResult1.data) {
                                $("#rejected").text(dataResult1.data[keys] == null ? "0" : dataResult1.data[keys]);
                            }
                        } else {
                            $("#rejected").text("0");
                        }
                    }
                });
            }

            function loaddone() {
                $.ajax({
                    data: {
                        "type": "DONE",
                        "datefrom": $("#datefrom").val(),
                        "dateto": $("#dateto").val()
                    },
                    type: "get",
                    url: "../backend/report.php",
                    success: function(dataResult) {
                        var dataResult1 = JSON.parse(dataResult);
                        console.log(dataResult1);
                        if (dataResult1.statusCode == 200 && dataResult1.data.length > 0) {
                            for (var keys in dataResult1.data) {
                                $("#done").text(dataResult1.data[keys] == null ? "0" : dataResult1.data[keys]);
                            }
                        } else {
                            $("#done").text("0");
                        }
                    }
                });
            }

            function loadexpenses() {
                $.ajax({
                    data: {
                        "type": "EXPENSES",
                        "datefrom": $("#datefrom").val(),
                        "dateto": $("#dateto").val()
                    },
                    type: "get",
                    url: "../backend/report.php",
                    success: function(dataResult) {
                        var dataResult1 = JSON.parse(dataResult);
                        console.log(dataResult1);
                        if (dataResult1.statusCode == 200 && dataResult1.data.length > 0) {
                            for (var keys in dataResult1.data) {
                                $("#expenses").text(dataResult1.data[keys] == null ? "0" : dataResult1.data[keys]);
                            }
                        } else {
                            $("#expenses").text("0");
                        }
                    }
                });
            }

            function loadearning() {
                $.ajax({
                    data: {
                        "type": "EARNING",
                        "datefrom": $("#datefrom").val(),
                        "dateto": $("#dateto").val()
                    },
                    type: "get",
                    url: "../backend/report.php",
                    success: function(dataResult) {
                        var dataResult1 = JSON.parse(dataResult);
                        console.log(dataResult1);
                        if (dataResult1.statusCode == 200 && dataResult1.data.length > 0) {
                            for (var keys in dataResult1.data) {
                                $("#earnings").text(dataResult1.data[keys] == null ? "0" : dataResult1.data[keys]);
                            }
                        } else {
                            $("#earnings").text("0");
                        }
                    }
                });
            }
        });
    </script>
    <!-- shepo changes/added end -->
</body>

</html>