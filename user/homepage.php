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
    <script src="../ajax/ajax.js"></script>
 
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
            <a href="#addEmployeeModal" class="btn btn-info" data-toggle="modal" style="padding: 50px; margin-top: 75px; margin-bottom: 25px;">
                <h1>Schedule Now!</h1>
                <h5>Reserve your timeslot now!</h5>
            </a>
        </div>
        <br>
        <h1 style="color:aliceblue;">or</h1>
        <a href="designTemplates.php" class="btn btn-primary" style="padding: 10px; margin-top: 25px;">
            <h1>Choose a sticker!</h1>
            <h5>and Reserve your timeslot now!</h5>
        </a>
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
                <h1 style="font-size: 50px; text-align:center">BUSINESS DAYS</h1>
                <h1 style="font-size: 50px; text-align:center">We are open from <b>Monday</b> to <b>Saturday</b></h1>
                <h1 style="font-size: 50px; text-align:center"><b>7:00AM</b> to <b>6:00PM</b></h1>
            </div>
            <div class="col-md-6" style="text-align: center; margin: 10px 0px 50px 0px;">
                <!-- BUSINESS HOURS -->
                <div class="container" style="background-color: rgb(255, 137, 137); width: 100%;">
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
                            <h3>12:00 PM - 1:00 PM</h3>
                            <h3>1:00 PM - 2:00 PM</h3>
                            <h3>2:00 PM - 3:00 PM</h3>
                            <h3>3:00 PM - 4:00 PM</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="background-color: white; width:100%; ">
        <h1 style="text-align: center; font-size: 60px">OUR SERVICES</h1>
        <div class="row" style="margin-bottom:10%;">
            <div class="col-xs-6" style="text-align: center;">
                <h1 style="margin-top:15%;">*Full Wrap*</h1>
                <h1>*Hood Wrap*</h1>
                <h1>*Headlight Film*</h1>
                <h1>*Customize Plate*</h1>
                <h1>*Signage*</h1>
            </div>
            <div class="col-xs-6">
                <br>
                <br>
                <img src="../image/arg.jpg" alt="" style="width: 100%; height:100%;">
            </div>
        </div>
    </div>



    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade" >
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
                            <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter Your First Name" required>
                        </div>
                        <div class="form-group">
                            <label>LAST NAME</label>
                            <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter Your Last Name" required>
                        </div>
                        <div class="form-group">
                            <label>PHONE NUMBER</label>
                            <input type="phone" id="phoneNumber" name="phoneNumber" class="form-control" maxlength="11" placeholder="Enter Your Phone Number" required>
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
                            <select class="form-control" name="services" id="services">
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
                            <select class="form-control" name="time" id="time">
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

    <!-- DISABLE ADD BUTTON IF EMPTY -->
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

    <?php
    // include_once '../include/footer.php';
    ?>
</body>

</html>