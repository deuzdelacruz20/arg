<?php
include '../include_u/navigation.php';
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../ajax/ajax.js"></script>
    <link rel="stylesheet" href="../css/style.css">

    <style>
        body {
            background: linear-gradient(120deg, #71b7e6, #9b59b6);
            background-attachment: fixed;
        }

        table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }

        table thead,
        tbody {
            display: table;
            width: 100%;
        }

        .swal2-popup {
            font-size: 1.6rem !important;
        }

        ::-webkit-input-placeholder {
            font-style: italic;
        }

        :-moz-placeholder {
            font-style: italic;
        }

        ::-moz-placeholder {
            font-style: italic;
        }

        :-ms-input-placeholder {
            font-style: italic;
        }
    </style>

</head>

<body>
    <div class="container" style="background-color: white; border-radius:10px; width: 97%; height: 97%; overflow: auto;">
        <!-- width: 98%; height: 750px; -->
        <ul class="nav nav-tabs">
            <li><a href="#all">All</a></li>
            <li><a href="#pending">Pending</a></li>
            <li><a href="#accepted">Accepted</a></li>
            <li><a href="#rejected">Rejected</a></li>
            <li><a href="#done">Done</a></li>
        </ul>

        <div class="tab-content">
            <div id="all" class="tab-pane fade in active">
                <h3> </h3>
                <div class="container" style="width: 100%;">
                    <p id="success"></p>
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>ALL <b>SCHEDULES</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                                    <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>ID</th>
                                    <th>FIRST NAME</th>
                                    <th>LAST NAME</th>
                                    <th>PHONE NUMBER</th>
                                    <th>DATE</th>
                                    <th>SERVICES</th>
                                    <th>TIMESLOT</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $result = mysqli_query($conn, "SELECT * FROM customer_request ORDER BY timestamp DESC");
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <tr id="<?php echo $row["id"]; ?>">
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
                                                <label for="checkbox2"></label>
                                            </span>
                                        </td>
                                        <td><?php echo $row["id"]; ?></td>
                                        <td><?php echo $row["firstName"]; ?></td>
                                        <td><?php echo $row["lastName"]; ?></td>
                                        <td><?php echo $row["phoneNumber"]; ?></td>
                                        <td><?php echo $row["date"]; ?></td>
                                        <td><?php echo $row["services"]; ?></td>
                                        <td><?php echo $row["time"]; ?></td>
                                        <td><?php echo $row["user_status"]; ?></td>
                                        <td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div id="pending" class="tab-pane fade">
                <h3> </h3>
                <div class="container" style="width: 100%;">
                    <p id="success"></p>
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>PENDING <b>SCHEDULES</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                                    <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>ID</th>
                                    <th>FIRST NAME</th>
                                    <th>LAST NAME</th>
                                    <th>PHONE NUMBER</th>
                                    <th>DATE</th>
                                    <th>SERVICES</th>
                                    <th>TIMESLOT</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $result = mysqli_query($conn, "SELECT * FROM customer_request WHERE user_status = 'Pending' ORDER BY timestamp DESC");
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <tr id="<?php echo $row["id"]; ?>">
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
                                                <label for="checkbox2"></label>
                                            </span>
                                        </td>
                                        <td><?php echo $row["id"]; ?></td>
                                        <td><?php echo $row["firstName"]; ?></td>
                                        <td><?php echo $row["lastName"]; ?></td>
                                        <td><?php echo $row["phoneNumber"]; ?></td>
                                        <td><?php echo $row["date"]; ?></td>
                                        <td><?php echo $row["services"]; ?></td>
                                        <td><?php echo $row["time"]; ?></td>
                                        <td><?php echo $row["user_status"]; ?></td>
                                        <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                                <i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-firstName="<?php echo $row["firstName"]; ?>" data-lastName="<?php echo $row["lastName"]; ?>" data-phoneNumber="<?php echo $row["phoneNumber"]; ?>" data-date="<?php echo $row["date"]; ?>" data-services="<?php echo $row["services"]; ?>" data-time="<?php echo $row["time"]; ?>" data-user_status="<?php echo $row["user_status"]; ?>" title="Edit">&#xE254;</i>
                                            </a>
                                            <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div id="accepted" class="tab-pane fade">
                <div class="container" style="width: 100%;">
                    <p id="success"></p>
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>ACCEPTED <b>SCHEDULES</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                                    <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>ID</th>
                                    <th>FIRST NAME</th>
                                    <th>LAST NAME</th>
                                    <th>PHONE NUMBER</th>
                                    <th>DATE</th>
                                    <th>SERVICES</th>
                                    <th>TIMESLOT</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $result = mysqli_query($conn, "SELECT * FROM customer_request WHERE user_status = 'Accepted' ORDER BY timestamp DESC");
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <tr id="<?php echo $row["id"]; ?>">
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
                                                <label for="checkbox2"></label>
                                            </span>
                                        </td>
                                        <td><?php echo $row["id"]; ?></td>
                                        <td><?php echo $row["firstName"]; ?></td>
                                        <td><?php echo $row["lastName"]; ?></td>
                                        <td><?php echo $row["phoneNumber"]; ?></td>
                                        <td><?php echo $row["date"]; ?></td>
                                        <td><?php echo $row["services"]; ?></td>
                                        <td><?php echo $row["time"]; ?></td>
                                        <td><?php echo $row["user_status"]; ?></td>
                                        <script>
                                            if ($row < 1) {
                                                "echo <p>No description</p>;"
                                            }
                                        </script>
                                        <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                                <i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-firstName="<?php echo $row["firstName"]; ?>" data-lastName="<?php echo $row["lastName"]; ?>" data-phoneNumber="<?php echo $row["phoneNumber"]; ?>" data-date="<?php echo $row["date"]; ?>" data-services="<?php echo $row["services"]; ?>" data-time="<?php echo $row["time"]; ?>" data-user_status="<?php echo $row["user_status"]; ?>" title="Edit">&#xE254;</i>
                                            </a>
                                            <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
            <div id="rejected" class="tab-pane fade">
                <div class="container" style="width: 100%;">
                    <p id="success"></p>
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>REJECTED <b>SCHEDULES</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                                    <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>ID</th>
                                    <th>FIRST NAME</th>
                                    <th>LAST NAME</th>
                                    <th>PHONE NUMBER</th>
                                    <th>DATE</th>
                                    <th>SERVICES</th>
                                    <th>TIMESLOT</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $result = mysqli_query($conn, "SELECT * FROM customer_request WHERE user_status = 'Rejected' ORDER BY timestamp DESC");
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <tr id="<?php echo $row["id"]; ?>">
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
                                                <label for="checkbox2"></label>
                                            </span>
                                        </td>
                                        <td><?php echo $row["id"]; ?></td>
                                        <td><?php echo $row["firstName"]; ?></td>
                                        <td><?php echo $row["lastName"]; ?></td>
                                        <td><?php echo $row["phoneNumber"]; ?></td>
                                        <td><?php echo $row["date"]; ?></td>
                                        <td><?php echo $row["services"]; ?></td>
                                        <td><?php echo $row["time"]; ?></td>
                                        <td><?php echo $row["user_status"]; ?></td>
                                        <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                                <i id="edit" class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-firstName="<?php echo $row["firstName"]; ?>" data-lastName="<?php echo $row["lastName"]; ?>" data-phoneNumber="<?php echo $row["phoneNumber"]; ?>" data-date="<?php echo $row["date"]; ?>" data-services="<?php echo $row["services"]; ?>" data-time="<?php echo $row["time"]; ?>" data-user_status="<?php echo $row["user_status"]; ?>" title="Edit">&#xE254;</i>
                                            </a>
                                            <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
            <div id="done" class="tab-pane fade">
                <div class="container" style="width: 100%;">
                    <p id="success"></p>
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>SUCCESSFUL <b>SCHEDULES</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                                    <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>ID</th>
                                    <th>FIRST NAME</th>
                                    <th>LAST NAME</th>
                                    <th>PHONE NUMBER</th>
                                    <th>DATE</th>
                                    <th>SERVICES</th>
                                    <th>TIMESLOT</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $result = mysqli_query($conn, "SELECT * FROM customer_request WHERE user_status = 'Done' ORDER BY timestamp DESC");
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <tr id="<?php echo $row["id"]; ?>">
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
                                                <label for="checkbox2"></label>
                                            </span>
                                        </td>
                                        <td><?php echo $row["id"]; ?></td>
                                        <td><?php echo $row["firstName"]; ?></td>
                                        <td><?php echo $row["lastName"]; ?></td>
                                        <td><?php echo $row["phoneNumber"]; ?></td>
                                        <td><?php echo $row["date"]; ?></td>
                                        <td><?php echo $row["services"]; ?></td>
                                        <td><?php echo $row["time"]; ?></td>
                                        <td><?php echo $row["user_status"]; ?></td>
                                        <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                                <i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-firstName="<?php echo $row["firstName"]; ?>" data-lastName="<?php echo $row["lastName"]; ?>" data-phoneNumber="<?php echo $row["phoneNumber"]; ?>" data-date="<?php echo $row["date"]; ?>" data-services="<?php echo $row["services"]; ?>" data-time="<?php echo $row["time"]; ?>" data-user_status="<?php echo $row["user_status"]; ?>" title="Edit">&#xE254;</i>
                                            </a>
                                            <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
        <hr>
    </div>
    <!-- TAB SCRIPT -->
    <script>
        $(document).ready(function() {
            $(".nav-tabs a").click(function() {
                $(this).tab('show');
            });
            // $('.nav-tabs a').on('shown.bs.tab', function(event) {
            //   var x = $(event.target).text(); // accepted tab
            //   var y = $(event.relatedTarget).text(); // previous tab
            //   $(".act span").text(x);
            //   $(".prev span").text(y);
            // });
            //START ADDED BY SHEPO
            $('#addEmployeeModal').on('hidden.bs.modal', function(e) {
                $("#time option").each(function() {
                    $(this).prop("disabled", false);
                });
                $('#services option').prop('selected', function() {
                    return this.defaultSelected;
                });
                $("#time").empty();
                $('#time').append('<option selected>-Select Service First-</option>');
                $("#date").val("");
                createCookie("date", "", "-1");
                createCookie("services", "", "-1");
            });

            $("#date").change(function() {
                loadscheduletime();
            });

            $("#services").change(function() {
                loadscheduletime();
            });

            function loadscheduletime() {
                $("#time option").each(function() {
                    $(this).prop("disabled", false);
                });
                if (($("#services").val() == "" || $("#services").val() == null || $("#services").val() == undefined || $("#services").val() == "-Select a Service-") || ($("#date").val() == "" || $("#date").val() == null || $("#date").val() == undefined)) {
                    console.log("nothing to do...");
                    return;
                } else {
                    $.ajax({
                        data: {
                            "type": "ADD",
                            "services": $("#services option:selected").text(),
                            "date": $("#date").val()
                        },
                        type: "get",
                        url: "../backend/validateSchedule.php",
                        success: function(dataResult) {
                            var dataResult1 = JSON.parse(dataResult);
                            if (dataResult1.statusCode == 200 && dataResult1.data.length > 0) {
                                for (var keys in dataResult1.data) {
                                    $("#time option").each(function() {
                                        if (dataResult1.data[keys] == $(this).text()) {
                                            $(this).prop("disabled", true);
                                        }
                                    });
                                }
                            } else if (dataResult1.statusCode == 99) {
                                console.log(dataResult);
                            }
                        }
                    });
                }
            }


            $('#editEmployeeModal').on('hidden.bs.modal', function(e) {
                $("#time_u option").each(function() {
                    $(this).prop("disabled", false);
                });
            });

            $("#date_u").change(function() {
                loadscheduletime_u();
            });

            $("#services_u").change(function() {
                loadscheduletime_u();
            });

            $('#editEmployeeModal').on('show.bs.modal', function(e) {
                loadscheduletime_u();
            });

            function loadscheduletime_u() {
                $("#time_u option").each(function() {
                    $(this).prop("disabled", false);
                });
                if (($("#services_u").val() == "" || $("#services_u").val() == null || $("#services_u").val() == undefined || $("#services_u").val() == "-Select a Service-") || ($("#date_u").val() == "" || $("#date_u").val() == null || $("#date_u").val() == undefined)) {
                    console.log("nothing to do...");
                } else {
                    $.ajax({
                        data: {
                            "type": "UPDATE",
                            "services": $("#services_u option:selected").text(),
                            "date": $("#date_u").val(),
                            "id": $("#id_u").val()
                        },
                        type: "get",
                        url: "../backend/validateSchedule.php",
                        success: function(dataResult) {
                            var dataResult1 = JSON.parse(dataResult);
                            if (dataResult1.statusCode == 200 && dataResult1.data.length > 0) {
                                for (var keys in dataResult1.data) {
                                    $("#time_u option").each(function() {
                                        if (dataResult1.data[keys] == $(this).text()) {
                                            $(this).prop("disabled", true);
                                        }
                                    });
                                }
                            } else if (dataResult1.statusCode == 99) {
                                console.log(dataResult);
                            }
                        }
                    });
                }
            }
            //END ADDED BY SHEPO
        });
    </script>
    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="user_form" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title">Schedule An Appointment</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>FIRST NAME</label>
                            <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter Your First Name" required style="color:black;">
                        </div>
                        <div class="form-group">
                            <label>LAST NAME</label>
                            <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter Your Last Name" required style="color:black;">
                        </div>
                        <div class="form-group">
                            <label>PHONE NUMBER</label>
                            <input type="phone" id="phoneNumber" name="phoneNumber" class="form-control" maxlength="11" placeholder="Enter Your Phone Number" required style="color:black;">
                        </div>
                        <div class="form-group">
                            <label>DATE</label>
                            <input type="date" id="date" name="date" class="form-control" required style="color:black;">
                        </div>
                        <script language="javascript">
                            // DISABLE PAST DATES
                            var today = new Date();
                            var dd = String(today.getDate()).padStart(2, '0');
                            var mm = String(today.getMonth() + 1).padStart(2, '0');
                            var yyyy = today.getFullYear();

                            today = yyyy + '-' + mm + '-' + dd;
                            $('#date').attr('min', today);
                        </script>
                        <div class="form-group">
                            <label>SERVICES</label>
                            <select class="form-control" name="services" id="services" style="color:black;">
                                <option value="0" selected disabled style="text-align: center;">-Select a Service-</option>
                                <option value="1">Full Wrap</option>
                                <option value="2">Hood Wrap</option>
                                <option value="2">HeadLight Film</option>
                                <option value="2">Customized Plate</option>
                                <option value="2">Signage</option>
                            </select>
                            <input type="text" name="inputServices" id="inputServices" hidden></input>
                        </div>
                        <div class="form-group">
                            <label>TIME SLOTS</label>
                            <select class="form-control" name="time" id="time" style="color:black;">
                                <option value="0" selected disabled style="text-align: center;">-Select Service First-</option>
                                <option value="1">7:00 AM - 9:00 AM</option>
                                <option value="1">9:00 AM - 11:00 AM</option>
                                <option value="1">1:00 PM - 3:00 PM</option>
                                <option value="1">3:00 PM - 5:00 PM</option>

                                <option value="2">7:00 AM - 8:00 AM</option>
                                <option value="2">8:00 AM - 9:00 AM</option>
                                <option value="2">9:00 AM - 10:00 AM</option>
                                <option value="2">10:00 AM - 11:00 AM</option>
                                <option value="2">1:00 PM - 2:00 PM</option>
                                <option value="2">2:00 PM - 3:00 PM</option>
                                <option value="2">3:00 PM - 4:00 PM</option>
                                <option value="2">4:00 PM - 5:00 PM</option>
                                <option value="2">5:00 PM - 6:00 PM</option>
                            </select>
                            <input type="text" name="inputTime" id="inputTime" hidden></input>
                        </div>
                        <script>
                            var $services = $('#services'),
                                $time = $('#time'),
                                $options = $time.find('option');

                            $services.on('change', function() {
                                $time.html($options.filter('[value="' + this.value + '"]'));
                            }).trigger('change');
                        </script>
                        <script>
                            $("#time option[value='jquery']").attr("disabled", "disabled");
                        </script>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="1" name="type">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-success" id="btn-add" disabled>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="update_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id_u" name="id" class="form-control" required>
                        <div class="form-group">
                            <label>STATUS</label>
                            <select class="form-control" name="user_status" id="user_status">
                                <option value="Pending" selected>Pending</option>
                                <option value="Accepted">Accept</option>
                                <option value="Rejected">Reject</option>
                                <option value="Done">Done</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>FIRST NAME</label>
                            <input type="text" id="firstName_u" name="firstName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>LAST NAME</label>
                            <input type="text" id="lastName_u" name="lastName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>PHONE NUMBER</label>
                            <input type="phone" id="phoneNumber_u" name="phoneNumber" class="form-control" maxlength="11" required>
                        </div>
                        <div class="form-group">
                            <label>DATE</label>
                            <input type="date" id="date_u" name="date" class="form-control" required>
                        </div>
                        <script language="javascript">
                            // DISABLE PAST DATES
                            var today = new Date();
                            var dd = String(today.getDate()).padStart(2, '0');
                            var mm = String(today.getMonth() + 1).padStart(2, '0');
                            var yyyy = today.getFullYear();

                            today = yyyy + '-' + mm + '-' + dd;
                            $('#date_u').attr('min', today);
                        </script>
                        <div class="form-group">
                            <label>SERVICES</label>
                            <select class="form-control" name="services" id="services_u">
                                <option value="0" selected disabled style="text-align: center;">-Select a Service-</option>
                                <option value="1">Full Wrap</option>
                                <option value="2">Hood Wrap</option>
                                <option value="2">HeadLight Film</option>
                                <option value="2">Customized Plate</option>
                                <option value="2">Signage</option>
                            </select>
                            <input type="text" name="inputServices_u" id="inputServices_u" hidden></input>
                        </div>
                        <div class="form-group">
                            <label>TIME SLOTS</label>
                            <select class="form-control" name="time" id="time_u">
                                <option value="0" selected disabled style="text-align: center;">-Select Service First-</option>
                                <option value="1">7:00 AM - 9:00 AM</option>
                                <option value="1">9:00 AM - 11:00 AM</option>
                                <option value="1">1:00 PM - 3:00 PM</option>
                                <option value="1">3:00 PM - 5:00 PM</option>

                                <option value="2">7:00 AM - 8:00 AM</option>
                                <option value="2">8:00 AM - 9:00 AM</option>
                                <option value="2">9:00 AM - 10:00 AM</option>
                                <option value="2">10:00 AM - 11:00 AM</option>
                                <option value="2">1:00 PM - 2:00 PM</option>
                                <option value="2">2:00 PM - 3:00 PM</option>
                                <option value="2">3:00 PM - 4:00 PM</option>
                                <option value="2">4:00 PM - 5:00 PM</option>
                                <option value="2">5:00 PM - 6:00 PM</option>
                            </select>
                            <input type="text" name="inputTime_u" id="inputTime_u" hidden></input>
                        </div>

                        <script>
                            var $services_u = $('#services_u'),
                                $time_u = $('#time_u'),
                                $options = $time_u.find('option');

                            $services_u.on('change', function() {
                                $time_u.html($options.filter('[value="' + this.value + '"]'));
                            }).trigger('change');
                        </script>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="2" name="type">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-info" id="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id_d" name="id" class="form-control">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-danger" id="delete">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- DISABLE THE SUBMIT BUTON -->
    <script>
        // DISABLE ADD BUTTON
        $("#firstName").keyup(function(event) {
            validateInputs();
        });
        $("#lastName").keyup(function(event) {
            validateInputs();
        });
        $("#phoneNumber").keyup(function(event) {
            validateInputs();
        });
        // $("#date").keyup(function(event) {
        // 	validateInputs();
        // });
        // $("#services").keyup(function(event) {
        // 	validateInputs();
        // });
        // $("#time").keyup(function(event) {
        // 	validateInputs();
        // });

        function validateInputs() {
            var disableButton = false;

            var firstName = $("#firstName").val();
            var lastName = $("#lastName").val();
            var phoneNumber = $("#phoneNumber").val();
            // var date = $("#date").val();
            // var services = $("#services").val();
            // var time = $("#time").val();

            if (
                firstName.length == 0 ||
                lastName.length == 0 ||
                phoneNumber.length == 0
                // date.value.length == 0 || 
                // services.empty ||
                // time.empty
            )
                disableButton = true;

            $('#btn-add').attr('disabled', disableButton);
        }

        // DISABLE UPDATE BUTTON
        $("#firstName_u").keyup(function(event) {
            updateValidateInputs();
        });
        $("#lastName_u").keyup(function(event) {
            updateValidateInputs();
        });
        $("#phoneNumber_u").keyup(function(event) {
            updateValidateInputs();
        });
        // $("#date_u").keyup(function(event) {
        // 	updateValidateInputs();
        // });
        // $("#services_u").keyup(function(event) {
        // 	updateValidateInputs();
        // });
        // $("#time_u").keyup(function(event) {
        // 	updateValidateInputs();
        // });

        function updateValidateInputs() {
            var disableButton = false;

            var firstName_u = $("#firstName_u").val();
            var lastName_u = $("#lastName_u").val();
            var phoneNumber_u = $("#phoneNumber_u").val();
            // var date_u = $("#date_u").val();
            // var services_u = $("#services_u").val();
            // var time_u = $("#time_u").val();

            if (
                firstName_u.length == 0 ||
                lastName_u.length == 0 ||
                phoneNumber_u.length == 0
                // || date_u.empty || 
                // services_u.empty || 
                // time_u.empty
            )
                disableButton = true;

            $('#update').attr('disabled', disableButton);
        }
    </script>

    <!-- ADD MODAL CASCADING DROPDOWN SCRIPT -->
    <script>
        window.onload = function() {

            var servicesSel = document.getElementById("services");
            var timeSel = document.getElementById("time");

            servicesSel.onchange = function() {
                //display correct values
                $("#inputServices").val($(this).find("option:selected").text());
            }
            timeSel.onchange = function() {
                //display correct values
                $("#inputTime").val($(this).find("option:selected").text());
            }

            var servicesSel1 = document.getElementById("services_u");
            var timeSel1 = document.getElementById("time_u");

            servicesSel1.onchange = function() {
                //display correct values
                $("#inputServices_u").val($(this).find("option:selected").text());
            }
            timeSel1.onchange = function() {
                //display correct values
                $("#inputTime_u").val($(this).find("option:selected").text());
            }
        }
    </script>

    <!-- DISABLE SUNDAY -->
    <script>
        const picker = document.getElementById('date');
        picker.addEventListener('input', function(e) {
            var day = new Date(this.value).getUTCDay();
            if ([0].includes(day)) {
                e.preventDefault();
                this.value = '';
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Sunday is outside our business hours!',
                })
            }
        });
    </script>

    <!-- <script src="../js/refresh.js"></script> -->
</body>

</html>