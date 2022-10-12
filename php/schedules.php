<?php 
include '../include/navigation.php';
include 'backend/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARG AutoSign Shop</title>
    <link rel="stylesheet" href="css/schedules.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="ajax/ajax.js"></script>

</head>
<body>
<div class="container">
	<p id="success"></p>
        <div class="table-wrapper" style="background-color: white; border-radius: 10px;">
            <div class="table-title" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <div class="row">
                    <div class="col-sm-6">
						<h2><b>Schedules</b></h2>
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
                        <th>Full Name</th>
                        <th>Phone Number</th>
						<th>Services</th>
                        <th>Time</th>
                        <th>Operations</th>
                    </tr>
                </thead>
				<tbody>
				
				<!-- DISPLAY DATA IN A TABLE -->
				<?php
				$result = mysqli_query($conn,"SELECT * FROM customer_request");
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
					<td><?php echo $row["id"]; ?></td>
					<td><?php echo $row["fullName"]; ?></td>
					<td>0<?php echo $row["phoneNumber"]; ?></td>
					<td><?php echo $row["services"]; ?></td>
					<td><?php echo $row["time"]; ?></td>
					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["id"]; ?>"
							data-fullName="<?php echo $row["fullName"]; ?>"
							data-phoneNumber="0<?php echo $row["phoneNumber"]; ?>"
							data-time="<?php echo $row["time"]; ?>"
							data-services="<?php echo $row["services"]; ?>"
							title="Edit">&#xE254;</i>
						</a>
						<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						 title="Delete">&#xE872;</i></a>
                    </td>
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
							<label>Services</label>
							<select class="form-select" aria-label="Default select example" name="services" required>
                            <option disabled selected>--- Select a Service ---</option>
                            <option>Full Wrap</option>
                            <option>Hood Wrap</option>
                            <option>Headlight Film</option>
                            <option>Customize plate</option>
                            <option>Signage</option>
                        </select>
						</div>	
						<div class="form-group">
							<label>Time</label>
							<div class="row">
                            <div class="col-sm">
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

                            <div class="col-sm">
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
								<select class="form-select" aria-label="Default select example" name="services" required>
                                    <option disabled selected>--- Select a Service ---</option>
                                    <option>Full Wrap</option>
                                    <option>Hood Wrap</option>
                                    <option>Headlight Film</option>
                                    <option>Customize plate</option>
                                    <option>Signage</option>
                                </select>
							</div>
							<div class="form-group">
								<label>Time</label>
                                <div class="row">
                            <div class="col-sm">
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

                            <div class="col-sm">
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