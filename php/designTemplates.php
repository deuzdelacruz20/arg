<?php
include '../include/navigation.php';
include '../backend/database.php';
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
	<link rel="stylesheet" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../ajax/ajaxDesign.js"></script>

	<style>
		body {
			background: linear-gradient(120deg, #71b7e6, #9b59b6);
			background-attachment: fixed;
		}
	</style>
</head>

<body>
	<div class="container" style="background-color: white; border-radius:10px; width: 97%; height: 97%; overflow: auto;">
		<!-- width: 98%; height: 750px; -->
		<ul class="nav nav-tabs">
			<li><a href="#home">All Templates</a></li>
			<li><a href="#template1">Motorcycles</a></li>
			<li><a href="#template2">Cars</a></li>
			<li><a href="#template3">SUVs</a></li>
			<li><a href="#template4">Vans</a></li>
			<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal" style="float: right; margin-top:3px;"><span>Add New Design Template</span></a>
		</ul>

		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<h3> </h3>
				<div class="row">
					<?php
					$result = mysqli_query($conn, "SELECT * FROM design_templates");
					while ($row = mysqli_fetch_array($result)) {
					?>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail" style="background-color:#E8E8E8;">
								<img src="<?php echo '../image/' .  $row["designImage"] ?>" alt="..." style="height: 200px; width: 200px;">
								<div class="caption">
									<h3><?php echo $row["designName"]; ?></h3>
									<p>PRICE: <?php echo $row["designPrice"]; ?></p>
									<p>AVAILABLE STOCKS: <?php echo $row["designStocks"]; ?></p>
									<p>CATEGORY: <?php echo $row["designCategory"]; ?></p>
									<p style="text-align: center;">
										<!-- <a href="#" class="btn btn-success" style="width: 100%;">Buy and Schedule now</a> -->
										<a href="#buyModal" class="btn btn-success" data-toggle="modal" style="width: 100%;"><span>Buy and Schedule now</span></a>
									</p>
									<div class="row">
										<div class="col-xs-6">
											<a href="#editEmployeeModal" class="edit" data-toggle="modal">
												<button class="btn btn-primary" style="width: 100%;">
													<i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-designName="<?php echo $row["designName"]; ?>" data-designPrice="<?php echo $row["designPrice"]; ?>" data-designStocks="<?php echo $row["designStocks"]; ?>" data-designCategory="<?php echo $row["designCategory"]; ?>" title="Edit">&#xE254;</i>
												</button>
											</a>
										</div>
										<div class="col-xs-6">
											<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">
												<button class="btn btn-danger" style="width: 100%;">
													<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
												</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>

				</div>
			</div>
			<div id="template1" class="tab-pane fade">
				<h3> </h3>
				<div class="row">
					<?php
					$result = mysqli_query($conn, "SELECT * FROM design_templates WHERE designCategory = 'Motorcycles';");
					while ($row = mysqli_fetch_array($result)) {
					?>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail" style="background-color:#E8E8E8;">
								<img src="<?php echo '../image/' .  $row["designImage"] ?>" alt="..." style="max-width: 242px; max-height:200px;">
								<div class="caption">
									<h3><?php echo $row["designName"]; ?></h3>
									<p>PRICE: <?php echo $row["designPrice"]; ?></p>
									<p>AVAILABLE STOCKS: <?php echo $row["designStocks"]; ?></p>
									<p>CATEGORY: <?php echo $row["designCategory"]; ?></p>
									<p style="text-align: center;">
										<a href="#" class="btn btn-success" style="width: 100%;">Buy and Schedule now</a>
									</p>
									<div class="row">
										<div class="col-xs-6">
											<a href="#editEmployeeModal" class="edit" data-toggle="modal">
												<button class="btn btn-primary" style="width: 100%;">
													<i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-designName="<?php echo $row["designName"]; ?>" data-designPrice="<?php echo $row["designPrice"]; ?>" data-designStocks="<?php echo $row["designStocks"]; ?>" data-designCategory="<?php echo $row["designCategory"]; ?>" title="Edit">&#xE254;</i>
												</button>
											</a>
										</div>
										<div class="col-xs-6">
											<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">
												<button class="btn btn-danger" style="width: 100%;">
													<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
												</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>

				</div>
			</div>
			<div id="template2" class="tab-pane fade">
				<div class="row">
					<?php
					$result = mysqli_query($conn, "SELECT * FROM design_templates WHERE designCategory = 'Cars';");
					while ($row = mysqli_fetch_array($result)) {
					?>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail" style="background-color:#E8E8E8;">
								<img src="<?php echo '../image/' .  $row["designImage"] ?>" alt="..." style="max-width: 242px; max-height:200px;">
								<div class="caption">
									<h3><?php echo $row["designName"]; ?></h3>
									<p>PRICE: <?php echo $row["designPrice"]; ?></p>
									<p>AVAILABLE STOCKS: <?php echo $row["designStocks"]; ?></p>
									<p>CATEGORY: <?php echo $row["designCategory"]; ?></p>
									<p style="text-align: center;">
										<a href="#" class="btn btn-success" style="width: 100%;">Buy and Schedule now</a>
									</p>
									<div class="row">
										<div class="col-xs-6">
											<a href="#editEmployeeModal" class="edit" data-toggle="modal">
												<button class="btn btn-primary" style="width: 100%;">
													<i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-designName="<?php echo $row["designName"]; ?>" data-designPrice="<?php echo $row["designPrice"]; ?>" data-designStocks="<?php echo $row["designStocks"]; ?>" data-designCategory="<?php echo $row["designCategory"]; ?>" title="Edit">&#xE254;</i>
												</button>
											</a>
										</div>
										<div class="col-xs-6">
											<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">
												<button class="btn btn-danger" style="width: 100%;">
													<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
												</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>

				</div>
			</div>
			<div id="template3" class="tab-pane fade">
				<div class="row">
					<?php
					$result = mysqli_query($conn, "SELECT * FROM design_templates WHERE designCategory = 'SUVs';");
					while ($row = mysqli_fetch_array($result)) {
					?>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail" style="background-color:#E8E8E8;">
								<img src="<?php echo '../image/' .  $row["designImage"] ?>" alt="..." style="max-width: 242px; max-height:200px;">
								<div class="caption">
									<h3><?php echo $row["designName"]; ?></h3>
									<p>PRICE: <?php echo $row["designPrice"]; ?></p>
									<p>AVAILABLE STOCKS: <?php echo $row["designStocks"]; ?></p>
									<p>CATEGORY: <?php echo $row["designCategory"]; ?></p>
									<p style="text-align: center;">
										<a href="#" class="btn btn-success" style="width: 100%;">Buy and Schedule now</a>
									</p>
									<div class="row">
										<div class="col-xs-6">
											<a href="#editEmployeeModal" class="edit" data-toggle="modal">
												<button class="btn btn-primary" style="width: 100%;">
													<i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-designName="<?php echo $row["designName"]; ?>" data-designPrice="<?php echo $row["designPrice"]; ?>" data-designStocks="<?php echo $row["designStocks"]; ?>" data-designCategory="<?php echo $row["designCategory"]; ?>" title="Edit">&#xE254;</i>
												</button>
											</a>
										</div>
										<div class="col-xs-6">
											<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">
												<button class="btn btn-danger" style="width: 100%;">
													<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
												</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>

				</div>
			</div>
			<div id="template4" class="tab-pane fade">
				<div class="row">
					<?php
					$result = mysqli_query($conn, "SELECT * FROM design_templates WHERE designCategory = 'Vans';");
					while ($row = mysqli_fetch_array($result)) {
					?>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail" style="background-color:#E8E8E8;">
								<img src="<?php echo '../image/' .  $row["designImage"] ?>" alt="..." style="max-width: 242px; max-height:200px;">
								<div class="caption">
									<h3><?php echo $row["designName"]; ?></h3>
									<p>PRICE: <?php echo $row["designPrice"]; ?></p>
									<p>AVAILABLE STOCKS: <?php echo $row["designStocks"]; ?></p>
									<p>CATEGORY: <?php echo $row["designCategory"]; ?></p>
									<p style="text-align: center;">
										<a href="#" class="btn btn-success" style="width: 100%;">Buy and Schedule now</a>
									</p>
									<div class="row">
										<div class="col-xs-6">
											<a href="#editEmployeeModal" class="edit" data-toggle="modal">
												<button class="btn btn-primary" style="width: 100%;">
													<i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-designName="<?php echo $row["designName"]; ?>" data-designPrice="<?php echo $row["designPrice"]; ?>" data-designStocks="<?php echo $row["designStocks"]; ?>" data-designCategory="<?php echo $row["designCategory"]; ?>" title="Edit">&#xE254;</i>
												</button>
											</a>
										</div>
										<div class="col-xs-6">
											<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">
												<button class="btn btn-danger" style="width: 100%;">
													<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
												</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>

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
			//   var x = $(event.target).text(); // active tab
			//   var y = $(event.relatedTarget).text(); // previous tab
			//   $(".act span").text(x);
			//   $(".prev span").text(y);
			// });
		});
	</script>
	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">
						<h4 class="modal-title">Add New Design Template</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="designImage" class="form-label">UPLOAD IMAGE</label>
							<input class="form-control" type="file" id="designImage" name="designImage" />
						</div>
						<div class="form-group">
							<label>DESIGN NAME</label>
							<input type="text" id="designName" name="designName" class="form-control" required>
						</div>
						<div class="form-group">
							<label>PRICE</label>
							<input type="number" id="designPrice" name="designPrice" class="form-control" required>
						</div>
						<div class="form-group">
							<label>STOCKS</label>
							<input type="number" id="designStocks" name="designStocks" class="form-control" required>
						</div>
						<div class="form-group">
							<label>CATEGORY</label>
							<select name="designCategory" id="designCategory" class="form-control">
								<option value="" selected="selected" disabled style="text-align: center;">-SELECT CATEGORY-</option>
								<option value="Motorcycles">Motorcycles</option>
								<option value="Cars">Cars</option>
								<option value="SUVs">SUVs</option>
								<option value="Vans">Vans</option>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<input type="hidden" value="1" name="type" id="save_id">
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
						<h4 class="modal-title">Edit Design Template</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id" class="form-control" required>
						<div class="form-group">
							<label>DESIGN NAME</label>
							<input type="text" id="designName_u" name="designName" class="form-control" required>
						</div>
						<div class="form-group">
							<label>PRICE</label>
							<input type="number" id="designPrice_u" name="designPrice" class="form-control" required>
						</div>
						<div class="form-group">
							<label>STOCKS</label>
							<input type="number" id="designStocks_u" name="designStocks" class="form-control" required>
						</div>
						<div class="form-group">
							<label>CATEGORY</label>
							<select name="designCategory" id="designCategory_u" class="form-control">
								<option value="" selected="selected" disabled style="text-align: center;">-SELECT CATEGORY-</option>
								<option value="Motorcycles">Motorcycles</option>
								<option value="Cars">Cars</option>
								<option value="SUVs">SUVs</option>
								<option value="Vans">Vans</option>
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
	<!-- Buy Modal HTML -->
	<div id="buyModal" class="modal fade">
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
</body>

</html>