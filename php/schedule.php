<?php
include '../backend/database.php';
include '../include/navigation.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SCHEDULES</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/schedule.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../ajax/ajax.js"></script>

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
	<div class="container">
		<p id="success"></p>
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>SCHEDULES</b></h2>
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
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$result = mysqli_query($conn, "SELECT * FROM customer_request");
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
							<td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal">
									<i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-firstName="<?php echo $row["firstName"]; ?>" data-lastName="<?php echo $row["lastName"]; ?>" data-phoneNumber="<?php echo $row["phoneNumber"]; ?>" data-date="<?php echo $row["date"]; ?>" data-services="<?php echo $row["services"]; ?>" data-time="<?php echo $row["time"]; ?>" title="Edit">&#xE254;</i>
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
	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">
						<h4 class="modal-title">Add User</h4>
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
						<button type="button" class="btn btn-success" id="btn-add" disabled>Add</button>
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
						<h4 class="modal-title">Delete User</h4>
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

		function validateInputs() {
			var disableButton = false;

			var firstName = $("#firstName").val();
			var lastName = $("#lastName").val();
			var phoneNumber = $("#phoneNumber").val();

			if (firstName.length == 0 || lastName.length == 0 || phoneNumber.length == 0)
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

		function updateValidateInputs() {
			var disableButton = false;

			var firstName_u = $("#firstName_u").val();
			var lastName_u = $("#lastName_u").val();
			var phoneNumber_u = $("#phoneNumber_u").val();

			if (firstName_u.length == 0 || lastName_u.length == 0 || phoneNumber_u.length == 0)
				disableButton = true;

			$('#update').attr('disabled', disableButton);
		}
	</script>

</body>

</html>