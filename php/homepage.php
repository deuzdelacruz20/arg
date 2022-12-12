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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            /* background: linear-gradient(120deg, #71b7e6, #9b59b6);
            background-attachment: fixed; */

            background-image: url(../image/bg.jpg);
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
            background-size: cover;
            background-attachment: fixed;
        }

        /* The heart of the matter */

        .horizontal-scrollable>.row {
            overflow-x: auto;
            white-space: nowrap;
        }

        .horizontal-scrollable>.row>.col-xs-4 {
            display: inline-block;
            float: none;
        }

        /* Decorations */

        .col-xs-4 {
            color: white;
            font-size: 24px;
            padding-bottom: 20px;
            padding-top: 18px;
        }

        .col-xs-4:nth-child(2n+1) {
            background: white;
        }

        .col-xs-4:nth-child(2n+2) {
            background: white;
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

        /* .carousel .item {
            height: 500px;
        }

        .item img {
            position: absolute;
            top: 0;
            left: 0;
            min-height: 500px;
        } */
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
        window.onload = function () {
            var servicesSel = document.getElementById("services");
            var timeSel = document.getElementById("time");
            for (var x in services) {
                servicesSel.options[servicesSel.options.length] = new Option(x, x);
            }
            servicesSel.onchange = function () {
                timeSel.length = 1;
                //display correct values
                for (var y in services[this.value]) {
                    timeSel.options[timeSel.options.length] = new Option(y, y);
                }
            }
            timeSel.onchange = function () {
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
    <div class="row" style="text-align: center; margin-bottom: 10%; width: 100%;">
        <div class="col-md-6">
            <div class="container" style="height: 300px; width: 90%; margin-top: 50px; margin-bottom: 50px;">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="../image/a.jpg" style="width:800px; max-height:500px">
                        </div>

                        <div class="item">
                            <img src="../image/b.jpg" style="width:800px; max-height:500px">
                        </div>

                        <div class="item">
                            <img src="../image/c.jpg" style="width:800px; max-height:500px">
                        </div>
                    </div>

                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <a href="#addEmployeeModal" class="btn btn-primary" data-toggle="modal"
                style="padding: 50px; margin-top: 225px;">
                <h1>Schedule Now!</h1>
                <h5>Reserve your timeslot now!</h5>
            </a>
        </div>
    </div>
    <div class="container" style="width: 100%; background-color:white">
        <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <img src="../image/d.jpg" alt="Boats at Phi Phi, Thailand">
                    <div class="caption">
                        <p>Etizzle shiznit fo shizzle sizzle augue hendrerizzle accumsizzle. Gizzle izzle est.
                            Vivamizzle
                            hizzle dolor, sure vitae, yippiyo id, ultrices izzle, sheezy.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <img src="../image/e.jpg" alt="Boats at Phi Phi, Thailand">
                    <div class="caption">
                        <p>Etizzle shiznit fo shizzle sizzle augue hendrerizzle accumsizzle. Gizzle izzle est.
                            Vivamizzle
                            hizzle dolor, sure vitae, yippiyo id, ultrices izzle, sheezy.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <img src="../image/i.jpg" alt="Boats at Phi Phi, Thailand">
                    <div class="caption">
                        <p>Etizzle shiznit fo shizzle sizzle augue hendrerizzle accumsizzle. Gizzle izzle est.
                            Vivamizzle
                            hizzle dolor, sure vitae, yippiyo id, ultrices izzle, sheezy.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <img src="../image/g.jpg" alt="Boats at Phi Phi, Thailand">
                    <div class="caption">
                        <p>Etizzle shiznit fo shizzle sizzle augue hendrerizzle accumsizzle. Gizzle izzle est.
                            Vivamizzle
                            hizzle dolor, sure vitae, yippiyo id, ultrices izzle, sheezy.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <img src="../image/f.jpg" alt="Boats at Phi Phi, Thailand">
                    <div class="caption">
                        <p>Etizzle shiznit fo shizzle sizzle augue hendrerizzle accumsizzle. Gizzle izzle est.
                            Vivamizzle
                            hizzle dolor, sure vitae, yippiyo id, ultrices izzle, sheezy.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <img src="../image/h.jpg" alt="Boats at Phi Phi, Thailand">
                    <div class="caption">
                        <p>Etizzle shiznit fo shizzle sizzle augue hendrerizzle accumsizzle. Gizzle izzle est.
                            Vivamizzle
                            hizzle dolor, sure vitae, yippiyo id, ultrices izzle, sheezy.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <img src="../image/j.jpg" alt="Boats at Phi Phi, Thailand">
                    <div class="caption">
                        <p>Etizzle shiznit fo shizzle sizzle augue hendrerizzle accumsizzle. Gizzle izzle est.
                            Vivamizzle
                            hizzle dolor, sure vitae, yippiyo id, ultrices izzle, sheezy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SERVICES -->
    <div class="container" style="background-color: white; width: 100%;">
        <h1 style="text-align: center;">Our Services</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="iframe-container" style="margin: 5%;">
                    <iframe
                        src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2FARGAutosignShop%2Fvideos%2F600802391554257%2F&show_text=false&width=268&t=0"
                        width="268" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                        allowFullScreen="true">
                        <style>
                            iframe {
                                display: block;
                                border-style: none;
                                margin: auto;
                            }
                        </style>
                    </iframe>
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>

    <!-- BUSINESS HOURS -->
    <div class="container" style="background-color: rgb(255, 137, 137); width: 100%;">
        <div class="row"
            style="text-align:center; margin: 5% 25% 5% 25%; background-color: white ; border-radius: 10px;">
            <h1>BUSINESS HOURS</h1>
            <div class="col-xs-6" style="padding: 0% 5% 5% 5%;">
                <h3>Morning</h3>
                <br>
                <h4>7:00 AM - 8:00 AM</h4>
                <h4>8:00 AM - 9:00 AM</h4>
                <h4>9:00 AM - 10:00 AM</h4>
                <h4>10:00 AM - 11:00 AM</h4>
            </div>
            <div class="col-xs-6" style="padding: 0% 5% 5% 5%;">
                <h3>Afternoon</h3>
                <br>
                <h4>12:00 PM - 1:00 PM</h4>
                <h4>1:00 PM - 2:00 PM</h4>
                <h4>2:00 PM - 3:00 PM</h4>
                <h4>3:00 PM - 4:00 PM</h4>
            </div>
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
                            <input type="text" id="firstName" name="firstName" class="form-control"
                                placeholder="Enter Your First Name" autocapitalize="word" required>
                        </div>
                        <div class="form-group">
                            <label>LAST NAME</label>
                            <input type="text" id="lastName" name="lastName" class="form-control"
                                placeholder="Enter Your Last Name" required>
                        </div>
                        <div class="form-group">
                            <label>PHONE NUMBER</label>
                            <input type="phone" id="phoneNumber" name="phoneNumber" class="form-control" maxlength="11"
                                placeholder="Enter Your Phone Number" required>
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
                                <option value="" selected="selected" disabled style="text-align: center;">-Select
                                    service-</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>TIME SLOTS</label>
                            <select name="time" id="time" class="form-control">
                                <option value="" selected="selected" disabled style="text-align: center;">Please
                                    select
                                    service first</option>
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

    <!-- DISABLE ADD BUTTON IF EMPTY -->
    <script>
        // DISABLE ADD BUTTON
        $("#firstName").keyup(function (event) {
            validateInputs();
        });
        $("#lastName").keyup(function (event) {
            validateInputs();
        });
        $("#phoneNumber").keyup(function (event) {
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
        $("#firstName_u").keyup(function (event) {
            updateValidateInputs();
        });
        $("#lastName_u").keyup(function (event) {
            updateValidateInputs();
        });
        $("#phoneNumber_u").keyup(function (event) {
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

    <!-- DISABLE SUNDAY -->
    <script>
        const picker = document.getElementById('date');
        picker.addEventListener('input', function (e) {
            var day = new Date(this.value).getUTCDay();
            if ([5, 0].includes(day)) {
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
</body>

</html>