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
    </style>

    <script>
        var services = {
            "Full Wrap": {
                "7:00 AM - 9:00 AM": [],
                "9:00 AM - 11:00 AM": [],
                "1:00 PM - 3:00 PM": [],
                "3:00 PM - 5:00 PM": []
            },
            "Hood Wrap": {
                "7:00 AM - 8:00 AM": [],
                "8:00 AM - 9:00 AM": [],
                "9:00 AM - 10:00 AM": [],
                "10:00 AM - 11:00 AM": [],
                "1:00 PM - 2:00 PM": [],
                "2:00 PM - 3:00 PM": [],
                "3:00 PM - 4:00 PM": [],
                "4:00 PM - 5:00 PM": [],
                "5:00 PM - 6:00 PM": []
            },
            "HeadLight Film": {
                "7:00 AM - 8:00 AM": [],
                "8:00 AM - 9:00 AM": [],
                "9:00 AM - 10:00 AM": [],
                "10:00 AM - 11:00 AM": [],
                "1:00 PM - 2:00 PM": [],
                "2:00 PM - 3:00 PM": [],
                "3:00 PM - 4:00 PM": [],
                "4:00 PM - 5:00 PM": [],
                "5:00 PM - 6:00 PM": []
            },
            "Customized Plate": {
                "7:00 AM - 8:00 AM": [],
                "8:00 AM - 9:00 AM": [],
                "9:00 AM - 10:00 AM": [],
                "10:00 AM - 11:00 AM": [],
                "1:00 PM - 2:00 PM": [],
                "2:00 PM - 3:00 PM": [],
                "3:00 PM - 4:00 PM": [],
                "4:00 PM - 5:00 PM": [],
                "5:00 PM - 6:00 PM": []
            },
            "Signage": {
                "7:00 AM - 8:00 AM": [],
                "8:00 AM - 9:00 AM": [],
                "9:00 AM - 10:00 AM": [],
                "10:00 AM - 11:00 AM": [],
                "1:00 PM - 2:00 PM": [],
                "2:00 PM - 3:00 PM": [],
                "3:00 PM - 4:00 PM": [],
                "4:00 PM - 5:00 PM": [],
                "5:00 PM - 6:00 PM": []
            }
        }
        window.onload = function() {
            var servicesSel = document.getElementById("services");
            var timeSel = document.getElementById("time");
            for (var x in services) {
                servicesSel.options[servicesSel.options.length] = new Option(x, x);
            }
            servicesSel.onchange = function() {
                timeSel.length = 1;
                //display correct values
                for (var y in services[this.value]) {
                    timeSel.options[timeSel.options.length] = new Option(y, y);
                }
            }
            timeSel.onchange = function() {
                //display correct values
                var z = services[servicesSel.value][this.value];
                for (var i = 0; i < z.length; i++) {
                    chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
                }
            }
        }
    </script>
</head>

<body>

    <video width="560" height="315" autoplay loop muted style="margin-left: 10%;">
        <source src="../videos/AFTER DARK 🌑- Valorant Edit.mp4" type="video/mp4" />
        Your browser does not support the video element.
    </video>


    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal" style="font-size: 26px; float: right; margin-right: 200px; margin-top: 350px; "> <span>Schedule An Appointment</span></a>

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
                            <input type="phone" id="phoneNumber" name="phoneNumber" class="form-control" required>
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
                            <label>Name</label>
                            <input type="text" id="fullName_u" name="fullName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="phone" id="phoneNumber_u" name="phoneNumber" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Services</label>
                            <input type="text" id="services_u" name="services" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Time</label>
                            <input type="text" id="time_u" name="time" class="form-control" required>
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
</body>

</html>