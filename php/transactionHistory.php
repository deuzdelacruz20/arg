<?php
session_start();
if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == false || !isset($_SESSION['isLoggedIn'])) {
    // echo 'window.location.href = "../php/homepage.php";';
    header("Location: http://localhost/arg/php/homepage.php");
}
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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

    <style>
        body {
            background: linear-gradient(120deg, #71b7e6, #9b59b6);
            background-attachment: fixed;
        }
    </style>

</head>

<body>
    <div class="container" style="width: 100%; height: 100%; overflow: auto;">
        <p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>TRANSACTION <b>HISTORY</b></h2>
                    </div>
                    <!-- <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                        <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                    </div> -->
                </div>
            </div>
            <table class="table table-striped table-hover" id="transactionHistoryTable">
                <thead>
                    <tr>
                        <!-- <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th> -->
                        <th width="5%">ID</th>
                        <th width="10%">FIRST NAME</th>
                        <th width="10%">LAST NAME</th>
                        <th width="15%">PHONE NUMBER</th>
                        <th width="10%">DATE</th>
                        <th width="15%">SERVICES</th>
                        <th width="15%">TIMESLOT</th>
                        <th width="40%">DATE ADDED</th>
                        <!-- <th>ACTION</th> -->
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM customer_request WHERE user_status = 'Done' ORDER BY timestamp DESC");
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr id="<?php echo $row["id"]; ?>">
                            <!-- <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
                                    <label for="checkbox2"></label>
                                </span>
                            </td> -->
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["firstName"]; ?></td>
                            <td><?php echo $row["lastName"]; ?></td>
                            <td><?php echo $row["phoneNumber"]; ?></td>
                            <td><?php echo $row["date"]; ?></td>
                            <td><?php echo $row["services"]; ?></td>
                            <td><?php echo $row["time"]; ?></td>
                            <td><?php echo $row["timestamp"]; ?></td>

                            <!-- <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                    <i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-firstName="<?php echo $row["firstName"]; ?>" data-lastName="<?php echo $row["lastName"]; ?>" data-phoneNumber="<?php echo $row["phoneNumber"]; ?>" data-date="<?php echo $row["date"]; ?>" data-services="<?php echo $row["services"]; ?>" data-time="<?php echo $row["time"]; ?>" title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td> -->
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="user_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Schedule An Appointment</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>FIRST NAME</label>
                            <input type="text" id="firstName" name="firstName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>LAST NAME</label>
                            <input type="text" id="lastName" name="lastName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>PHONE NUMBER</label>
                            <input type="phone" id="phoneNumber" name="phoneNumber" class="form-control" maxlength="11" required>
                        </div>
                        <div class="form-group">
                            <label>DATE</label>
                            <input type="date" id="date" name="date" class="form-control" required>
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
                            <select name="services" id="services" class="form-control">
                                <option value="" selected="selected" disabled style="text-align: center;">-Select service-</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>TIME SLOTS</label>
                            <select name="time" id="time" class="form-control">
                                <option value="" selected="selected" disabled style="text-align: center;">Please select service first</option>
                            </select>
                        </div>
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
                            <label>FIRST NAME</label>
                            <input type="text" id="firstName_u" name="firstName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>LAST NAME</label>
                            <input type="text" id="lastName_u" name="lastName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>PHONE NUMBER</label>
                            <input type="phone" id="phoneNumber_u" name="phoneNumber" class="form-control" required>
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
                            $('#date').attr('min', today);
                        </script>
                        <div class="form-group">
                            <label>SERVICES</label>
                            <select name="services" id="services_u" class="form-control">
                                <option value="" selected="selected" disabled style="text-align: center;">-Select service-</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>TIME SLOTS</label>
                            <select name="time" id="time_u" class="form-control">
                                <option value="" selected="selected" disabled style="text-align: center;">Please select service first</option>
                            </select>
                        </div>
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

    <script>
        $(document).ready(function() {
            $('#transactionHistoryTable').DataTable();
        });
    </script>
</body>

</html>