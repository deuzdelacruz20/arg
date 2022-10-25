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
    body{
        background: linear-gradient(120deg, #71b7e6, #9b59b6);
    }
    </style>
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
						<h4 class="modal-title">Add customer</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" id="fullName" name="fullName" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Phone Number</label>    
							<input type="text" id="phoneNumber" name="phoneNumber" class="form-control" required>
						</div>
                        <div class="form-group">
                            <label>Date</label>    
							<input type="date" id="date" name="date" class="form-control" required>
                        </div>

                        <!-- DISABLE PAST DATES -->
                        <script>
                        $(function(){
                            var dtToday = new Date();
                        
                            var month = dtToday.getMonth() + 1;
                            var day = dtToday.getDate();
                            var year = dtToday.getFullYear();
                            if(month < 10)
                                month = '0' + month.toString();
                            if(day < 10)
                                day = '0' + day.toString();
                            var maxDate = year + '-' + month + '-' + day;
                            $('#date').attr('min', maxDate);
                        });
                        </script>

						<div class="form-group">
							<label>Services</label>
							<select class="form-select" aria-label="Default select example" name="services" required style="width: 100%; height:35px;">
                            <option disabled selected>--- Select a Service ---</option>
                            <option>Full Wrap</option>
                            <option>Hood Wrap</option>
                            <option>Headlight Film</option>
                            <option>Customize plate</option>
                            <option>Signage</option>
                        </select>
						</div>

                        <div class="form-group">
                            <label>Select services</label>
                            <ul class="nav nav-tabs">
                                <li><a href="#FullWrap">Full Wrap</a></li>
                                <li><a href="#HoodWrap">Hood Wrap</a></li>
                                <li><a href="#HeadlightFilm">Headlight Film</a></li>
                                <li><a href="#CustomizePlate">Customize plate</a></li>
                                <li><a href="#Signage">Signage</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="FullWrap" class="tab-pane fade in active">
                                    <div class="form-group">
                                        <label>Available time slots</label>
                                        <div class="row">
                                            <div class="col-sm-4">
                                            <h5>Morning</h5>
                                            <!-- TIME 7AM -->
                                            <div class="time-group">
                                                <label for="7AM" class="radio-inline">
                                                    <input 
                                                        type="radio" 
                                                        name="time" 
                                                        value="7AM"
                                                        id="7AM"  
                                                    />
                                                    7:00 AM
                                                </label>  
                                            </div>

                                            <!-- TIME 9AM -->
                                            <div class="time-group">
                                                <label for="9AM" class="radio-inline">
                                                    <input 
                                                        type="radio" 
                                                        name="time" 
                                                        value="9AM"
                                                        id="9AM"  
                                                    />
                                                    9:00 AM
                                                </label>  
                                            </div>
                                        </div>

                                            <div class="col-sm-4">
                                            <h5>Afternoon</h5>

                                            <!-- TIME 1PM -->
                                            <div class="time-group">
                                                <label for="1PM" class="radio-inline">
                                                    <input 
                                                        type="radio" 
                                                        name="time" 
                                                        value="1PM"
                                                        id="1PM"  
                                                    />
                                                    1:00 PM
                                                </label>  
                                            </div>

                                            <!-- TIME 3PM -->
                                            <div class="time-group">
                                                <label for="3PM" class="radio-inline">
                                                    <input 
                                                        type="radio" 
                                                        name="time" 
                                                        value="3PM"
                                                        id="3PM"  
                                                    />
                                                    3:00 PM
                                                </label>  
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="HoodWrap" class="tab-pane fade">
                                    <div class="form-group">
                                        <label>Available time slots</label>
                                        <div class="row">
                                            
                                            <div class="col-sm-4">
                                                <h5>Morning</h5>
                                                <!-- TIME 7AM -->
                                                <div class="time-group">
                                                    <label for="7AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="7AM"
                                                            id="7AM"  
                                                        />
                                                        7:00 AM
                                                    </label>  
                                                </div>
                                                
                                                <!-- TIME 8AM -->
                                                <div class="time-group">
                                                    <label for="8AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="8AM"
                                                            id="8AM"  
                                                        />
                                                        8:00 AM
                                                    </label>  
                                                </div>

                                                <!-- TIME 9AM -->
                                                <div class="time-group">
                                                    <label for="9AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="9AM"
                                                            id="9AM"  
                                                        />
                                                        9:00 AM
                                                    </label>  
                                                </div>

                                                <!-- TIME 10AM -->
                                                <div class="time-group">
                                                    <label for="10AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="10AM"
                                                            id="10AM"  
                                                        />
                                                        10:00 AM
                                                    </label>  
                                                </div>

                                                <!-- TIME 11AM -->
                                                <div class="time-group">
                                                    <label for="11AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="11AM"
                                                            id="11AM"  
                                                        />
                                                        11:00 AM
                                                    </label>  
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <h5>Afternoon</h5>

                                                <!-- TIME 1PM -->
                                                <div class="time-group">
                                                    <label for="1PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="1PM"
                                                            id="1PM"  
                                                        />
                                                        1:00 PM
                                                    </label>  
                                                </div>

                                                <!-- TIME 2PM -->
                                                <div class="time-group">
                                                    <label for="1PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="2PM"
                                                            id="2PM"  
                                                        />
                                                        2:00 PM
                                                    </label>  
                                                </div>

                                                <!-- TIME 3PM -->
                                                <div class="time-group">
                                                    <label for="3PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="3PM"
                                                            id="3PM"  
                                                        />
                                                        3:00 PM
                                                    </label>  
                                                </div>
                                                
                                                <!-- TIME 4PM -->
                                                <div class="time-group">
                                                    <label for="4PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="4PM"
                                                            id="4PM"  
                                                        />
                                                        4:00 PM
                                                    </label>  
                                                </div>

                                                <!-- TIME 5PM -->
                                                <div class="time-group">
                                                    <label for="5PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="5PM"
                                                            id="5PM"  
                                                        />
                                                        5:00 PM
                                                    </label>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="HeadlightFilm" class="tab-pane fade">
                                    <div class="form-group">
                                        <label>Available time slots</label>
                                        <div class="row">
                                            
                                            <div class="col-sm-4">
                                                <h5>Morning</h5>
                                                <!-- TIME 7AM -->
                                                <div class="time-group">
                                                    <label for="7AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="7AM"
                                                            id="7AM"  
                                                        />
                                                        7:00 AM
                                                    </label>  
                                                </div>
                                                
                                                <!-- TIME 8AM -->
                                                <div class="time-group">
                                                    <label for="8AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="8AM"
                                                            id="8AM"  
                                                        />
                                                        8:00 AM
                                                    </label>  
                                                </div>

                                                <!-- TIME 9AM -->
                                                <div class="time-group">
                                                    <label for="9AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="9AM"
                                                            id="9AM"  
                                                        />
                                                        9:00 AM
                                                    </label>  
                                                </div>

                                                <!-- TIME 10AM -->
                                                <div class="time-group">
                                                    <label for="10AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="10AM"
                                                            id="10AM"  
                                                        />
                                                        10:00 AM
                                                    </label>  
                                                </div>

                                                <!-- TIME 11AM -->
                                                <div class="time-group">
                                                    <label for="11AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="11AM"
                                                            id="11AM"  
                                                        />
                                                        11:00 AM
                                                    </label>  
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <h5>Afternoon</h5>

                                                <!-- TIME 1PM -->
                                                <div class="time-group">
                                                    <label for="1PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="1PM"
                                                            id="1PM"  
                                                        />
                                                        1:00 PM
                                                    </label>  
                                                </div>

                                                <!-- TIME 2PM -->
                                                <div class="time-group">
                                                    <label for="1PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="2PM"
                                                            id="2PM"  
                                                        />
                                                        2:00 PM
                                                    </label>  
                                                </div>

                                                <!-- TIME 3PM -->
                                                <div class="time-group">
                                                    <label for="3PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="3PM"
                                                            id="3PM"  
                                                        />
                                                        3:00 PM
                                                    </label>  
                                                </div>
                                                
                                                <!-- TIME 4PM -->
                                                <div class="time-group">
                                                    <label for="4PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="4PM"
                                                            id="4PM"  
                                                        />
                                                        4:00 PM
                                                    </label>  
                                                </div>

                                                <!-- TIME 5PM -->
                                                <div class="time-group">
                                                    <label for="5PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="5PM"
                                                            id="5PM"  
                                                        />
                                                        5:00 PM
                                                    </label>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="CustomizePlate" class="tab-pane fade">
                                    <div class="form-group">
                                        <label>Available time slots</label>
                                        <div class="row">
                                            
                                            <div class="col-sm-4">
                                                <h5>Morning</h5>
                                                <!-- TIME 7AM -->
                                                <div class="time-group">
                                                    <label for="7AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="7AM"
                                                            id="7AM"  
                                                        />
                                                        7:00 AM
                                                    </label>  
                                                </div>
                                                
                                                <!-- TIME 8AM -->
                                                <div class="time-group">
                                                    <label for="8AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="8AM"
                                                            id="8AM"  
                                                        />
                                                        8:00 AM
                                                    </label>  
                                                </div>

                                                <!-- TIME 9AM -->
                                                <div class="time-group">
                                                    <label for="9AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="9AM"
                                                            id="9AM"  
                                                        />
                                                        9:00 AM
                                                    </label>  
                                                </div>

                                                <!-- TIME 10AM -->
                                                <div class="time-group">
                                                    <label for="10AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="10AM"
                                                            id="10AM"  
                                                        />
                                                        10:00 AM
                                                    </label>  
                                                </div>

                                                <!-- TIME 11AM -->
                                                <div class="time-group">
                                                    <label for="11AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="11AM"
                                                            id="11AM"  
                                                        />
                                                        11:00 AM
                                                    </label>  
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <h5>Afternoon</h5>

                                                <!-- TIME 1PM -->
                                                <div class="time-group">
                                                    <label for="1PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="1PM"
                                                            id="1PM"  
                                                        />
                                                        1:00 PM
                                                    </label>  
                                                </div>

                                                <!-- TIME 2PM -->
                                                <div class="time-group">
                                                    <label for="1PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="2PM"
                                                            id="2PM"  
                                                        />
                                                        2:00 PM
                                                    </label>  
                                                </div>

                                                <!-- TIME 3PM -->
                                                <div class="time-group">
                                                    <label for="3PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="3PM"
                                                            id="3PM"  
                                                        />
                                                        3:00 PM
                                                    </label>  
                                                </div>
                                                
                                                <!-- TIME 4PM -->
                                                <div class="time-group">
                                                    <label for="4PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="4PM"
                                                            id="4PM"  
                                                        />
                                                        4:00 PM
                                                    </label>  
                                                </div>

                                                <!-- TIME 5PM -->
                                                <div class="time-group">
                                                    <label for="5PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="5PM"
                                                            id="5PM"  
                                                        />
                                                        5:00 PM
                                                    </label>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="Signage" class="tab-pane fade">
                                    <div class="form-group">
                                        <label>Available time slots</label>
                                        <div class="row">
                                            
                                            <div class="col-sm-4">
                                                <h5>Morning</h5>
                                                <!-- TIME 7AM -->
                                                <div class="time-group">
                                                    <label for="7AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="7AM"
                                                            id="7AM"  
                                                        />
                                                        7:00 AM
                                                    </label>  
                                                </div>
                                                
                                                <!-- TIME 8AM -->
                                                <div class="time-group">
                                                    <label for="8AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="8AM"
                                                            id="8AM"  
                                                        />
                                                        8:00 AM
                                                    </label>  
                                                </div>

                                                <!-- TIME 9AM -->
                                                <div class="time-group">
                                                    <label for="9AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="9AM"
                                                            id="9AM"  
                                                        />
                                                        9:00 AM
                                                    </label>  
                                                </div>

                                                <!-- TIME 10AM -->
                                                <div class="time-group">
                                                    <label for="10AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="10AM"
                                                            id="10AM"  
                                                        />
                                                        10:00 AM
                                                    </label>  
                                                </div>

                                                <!-- TIME 11AM -->
                                                <div class="time-group">
                                                    <label for="11AM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="11AM"
                                                            id="11AM"  
                                                        />
                                                        11:00 AM
                                                    </label>  
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <h5>Afternoon</h5>

                                                <!-- TIME 1PM -->
                                                <div class="time-group">
                                                    <label for="1PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="1PM"
                                                            id="1PM"  
                                                        />
                                                        1:00 PM
                                                    </label>  
                                                </div>

                                                <!-- TIME 2PM -->
                                                <div class="time-group">
                                                    <label for="1PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="2PM"
                                                            id="2PM"  
                                                        />
                                                        2:00 PM
                                                    </label>  
                                                </div>

                                                <!-- TIME 3PM -->
                                                <div class="time-group">
                                                    <label for="3PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="3PM"
                                                            id="3PM"  
                                                        />
                                                        3:00 PM
                                                    </label>  
                                                </div>
                                                
                                                <!-- TIME 4PM -->
                                                <div class="time-group">
                                                    <label for="4PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="4PM"
                                                            id="4PM"  
                                                        />
                                                        4:00 PM
                                                    </label>  
                                                </div>

                                                <!-- TIME 5PM -->
                                                <div class="time-group">
                                                    <label for="5PM" class="radio-inline">
                                                        <input 
                                                            type="radio" 
                                                            name="time" 
                                                            value="5PM"
                                                            id="5PM"  
                                                        />
                                                        5:00 PM
                                                    </label>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                $(document).ready(function(){
                                $(".nav-tabs a").click(function(){
                                    $(this).tab('show');
                                });
                                $('.nav-tabs a').on('shown.bs.tab', function(event){
                                    var x = $(event.target).text();         // active tab
                                    var y = $(event.relatedTarget).text();  // previous tab
                                    $(".act span").text(x);
                                    $(".prev span").text(y);
                                });
                                });
                                </script>
                                
                            </div>
                        </div>

					<div class="modal-footer">
					    <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-add">Add</button>
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
</body>
</html>