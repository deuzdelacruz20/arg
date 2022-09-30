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

    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Schedule an Appointment</span></a>				

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
							<input type="text" id="services" name="services" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Time</label>
							<input type="phone" id="time" name="time" class="form-control" required>
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