<?php
include '../include_u/navigation.php';
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
	<script src="../ajax/ajaxInventory.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<style>
		body {
			background: linear-gradient(120deg, #71b7e6, #9b59b6);
			background-attachment: fixed;
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
		<ul class="nav nav-tabs">
			<li><a href="#home">All Items</a></li>
			<li><a href="#template1">Motorcycles</a></li>
			<li><a href="#template2">Cars</a></li>
			<li><a href="#template3">SUVs</a></li>
			<li><a href="#template4">Vans</a></li>
			<!-- <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal" style="float: right; margin-top:3px;"><span>Add New Template</span></a> -->
		</ul>

		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<h3> </h3>
				<div class="row">
					<?php
					$result = mysqli_query($conn, "SELECT * FROM inventory");
					while ($row = mysqli_fetch_array($result)) {
					?>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail" style="background-color:#E8E8E8;">
								<img src="<?php echo '../image/' .  $row["inventoryImage"] ?>" alt="..." style="width: 450px; height:200px;">
								<div class="caption">
									<h3><?php echo $row["itemName"]; ?></h3>
									<p>PRICE: <?php echo $row["itemPrice"]; ?></p>
									<p>AVAILABLE STOCKS: <?php echo $row["itemStocks"]; ?></p>
									<p>CATEGORY: <?php echo $row["itemCategory"]; ?></p>
									<!-- <a href="#buyModal" class="edit" data-toggle="modal">
										<i class="material-icons buy" data-toggle="tooltip" data-id_b="<?php echo $row["id"]; ?>" data-itemName_b="<?php echo $row["itemName"]; ?>" data-itemPrice_b="<?php echo $row["itemPrice"]; ?>" data-itemStocks_b="<?php echo $row["itemStocks"]; ?>" data-itemCategory_b="<?php echo $row["itemCategory"]; ?>" title="Buy and Schedule Now" style="width: 100%;">
											<button class="btn btn-success" style="width: 100%; margin-bottom:10px;">
												&#xe8cc;
											</button>
										</i>
									</a> -->
									<!-- <div class="row">
										<div class="col-xs-6">
											<a href="#editEmployeeModal" class="edit" data-toggle="modal">
												<i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-itemName="<?php echo $row["itemName"]; ?>" data-itemPrice="<?php echo $row["itemPrice"]; ?>" data-itemStocks="<?php echo $row["itemStocks"]; ?>" data-itemCategory="<?php echo $row["itemCategory"]; ?>" title="Edit" style="width: 100%;">
													<button class="btn btn-primary" style="width: 100%;">
														&#xE254;
													</button>
												</i>
											</a>
										</div>
										<div class="col-xs-6">
											<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">
												<i class="material-icons" data-toggle="tooltip" title="Delete" style="width: 100%;">
													<button class="btn btn-danger" style="width: 100%;">
														&#xE872;
													</button>
												</i>
											</a>
										</div>
									</div> -->
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
					$result = mysqli_query($conn, "SELECT * FROM inventory WHERE itemCategory = 'Motorcycles';");
					while ($row = mysqli_fetch_array($result)) {
					?>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail" style="background-color:#E8E8E8;">
								<img src="<?php echo '../image/' .  $row["inventoryImage"] ?>" alt="..." style="width: 450px; height:200px;">
								<div class="caption">
									<h3><?php echo $row["itemName"]; ?></h3>
									<p>PRICE: <?php echo $row["itemPrice"]; ?></p>
									<p>AVAILABLE STOCKS: <?php echo $row["itemStocks"]; ?></p>
									<p>CATEGORY: <?php echo $row["itemCategory"]; ?></p>
									<!-- <a href="#buyModal" class="edit" data-toggle="modal">
										<i class="material-icons buy" data-toggle="tooltip" data-id_b="<?php echo $row["id"]; ?>" data-itemName_b="<?php echo $row["itemName"]; ?>" data-itemPrice_b="<?php echo $row["itemPrice"]; ?>" data-itemStocks_b="<?php echo $row["itemStocks"]; ?>" data-itemCategory_b="<?php echo $row["itemCategory"]; ?>" title="Buy and Schedule Now" style="width: 100%;">
											<button class="btn btn-success" style="width: 100%; margin-bottom:10px;">
												&#xe8cc;
											</button>
										</i>
									</a> -->
									<!-- <div class="row">
										<div class="col-xs-6">
											<a href="#editEmployeeModal" class="edit" data-toggle="modal">
												<i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-itemName="<?php echo $row["itemName"]; ?>" data-itemPrice="<?php echo $row["itemPrice"]; ?>" data-itemStocks="<?php echo $row["itemStocks"]; ?>" data-itemCategory="<?php echo $row["itemCategory"]; ?>" title="Edit" style="width: 100%;">
													<button class="btn btn-primary" style="width: 100%;">
														&#xE254;
													</button>
												</i>
											</a>
										</div>
										<div class="col-xs-6">
											<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">
												<i class="material-icons" data-toggle="tooltip" title="Delete" style="width: 100%;">
													<button class="btn btn-danger" style="width: 100%;">
														&#xE872;
													</button>
												</i>
											</a>
										</div>
									</div> -->
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
					$result = mysqli_query($conn, "SELECT * FROM inventory WHERE itemCategory = 'Cars';");
					while ($row = mysqli_fetch_array($result)) {
					?>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail" style="background-color:#E8E8E8;">
								<img src="<?php echo '../image/' .  $row["inventoryImage"] ?>" alt="..." style="width: 450px; height:200px;">
								<div class="caption">
									<h3><?php echo $row["itemName"]; ?></h3>
									<p>PRICE: <?php echo $row["itemPrice"]; ?></p>
									<p>AVAILABLE STOCKS: <?php echo $row["itemStocks"]; ?></p>
									<p>CATEGORY: <?php echo $row["itemCategory"]; ?></p>
									<!-- <a href="#buyModal" class="edit" data-toggle="modal">
										<i class="material-icons buy" data-toggle="tooltip" data-id_b="<?php echo $row["id"]; ?>" data-itemName_b="<?php echo $row["itemName"]; ?>" data-itemPrice_b="<?php echo $row["itemPrice"]; ?>" data-itemStocks_b="<?php echo $row["itemStocks"]; ?>" data-itemCategory_b="<?php echo $row["itemCategory"]; ?>" title="Buy and Schedule Now" style="width: 100%;">
											<button class="btn btn-success" style="width: 100%; margin-bottom:10px;">
												&#xe8cc;
											</button>
										</i>
									</a> -->
									<!-- <div class="row">
										<div class="col-xs-6">
											<a href="#editEmployeeModal" class="edit" data-toggle="modal">
												<i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-itemName="<?php echo $row["itemName"]; ?>" data-itemPrice="<?php echo $row["itemPrice"]; ?>" data-itemStocks="<?php echo $row["itemStocks"]; ?>" data-itemCategory="<?php echo $row["itemCategory"]; ?>" title="Edit" style="width: 100%;">
													<button class="btn btn-primary" style="width: 100%;">
														&#xE254;
													</button>
												</i>
											</a>
										</div>
										<div class="col-xs-6">
											<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">
												<i class="material-icons" data-toggle="tooltip" title="Delete" style="width: 100%;">
													<button class="btn btn-danger" style="width: 100%;">
														&#xE872;
													</button>
												</i>
											</a>
										</div>
									</div> -->
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
					$result = mysqli_query($conn, "SELECT * FROM inventory WHERE itemCategory = 'SUVs';");
					while ($row = mysqli_fetch_array($result)) {
					?>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail" style="background-color:#E8E8E8;">
								<img src="<?php echo '../image/' .  $row["inventoryImage"] ?>" alt="..." style="width: 450px; height:200px;">
								<div class="caption">
									<h3><?php echo $row["itemName"]; ?></h3>
									<p>PRICE: <?php echo $row["itemPrice"]; ?></p>
									<p>AVAILABLE STOCKS: <?php echo $row["itemStocks"]; ?></p>
									<p>CATEGORY: <?php echo $row["itemCategory"]; ?></p>
									<!-- <a href="#buyModal" class="edit" data-toggle="modal">
										<i class="material-icons buy" data-toggle="tooltip" data-id_b="<?php echo $row["id"]; ?>" data-itemName_b="<?php echo $row["itemName"]; ?>" data-itemPrice_b="<?php echo $row["itemPrice"]; ?>" data-itemStocks_b="<?php echo $row["itemStocks"]; ?>" data-itemCategory_b="<?php echo $row["itemCategory"]; ?>" title="Buy and Schedule Now" style="width: 100%;">
											<button class="btn btn-success" style="width: 100%; margin-bottom:10px;">
												&#xe8cc;
											</button>
										</i>
									</a> -->
									<!-- <div class="row">
										<div class="col-xs-6">
											<a href="#editEmployeeModal" class="edit" data-toggle="modal">
												<i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-itemName="<?php echo $row["itemName"]; ?>" data-itemPrice="<?php echo $row["itemPrice"]; ?>" data-itemStocks="<?php echo $row["itemStocks"]; ?>" data-itemCategory="<?php echo $row["itemCategory"]; ?>" title="Edit" style="width: 100%;">
													<button class="btn btn-primary" style="width: 100%;">
														&#xE254;
													</button>
												</i>
											</a>
										</div>
										<div class="col-xs-6">
											<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">
												<i class="material-icons" data-toggle="tooltip" title="Delete" style="width: 100%;">
													<button class="btn btn-danger" style="width: 100%;">
														&#xE872;
													</button>
												</i>
											</a>
										</div>
									</div> -->
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
					$result = mysqli_query($conn, "SELECT * FROM inventory WHERE itemCategory = 'Vans';");
					while ($row = mysqli_fetch_array($result)) {
					?>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail" style="background-color:#E8E8E8;">
								<img src="<?php echo '../image/' .  $row["inventoryImage"] ?>" alt="..." style="width: 450px; height:200px;">
								<div class="caption">
									<h3><?php echo $row["itemName"]; ?></h3>
									<p>PRICE: <?php echo $row["itemPrice"]; ?></p>
									<p>AVAILABLE STOCKS: <?php echo $row["itemStocks"]; ?></p>
									<p>CATEGORY: <?php echo $row["itemCategory"]; ?></p>
									<!-- <a href="#buyModal" class="edit" data-toggle="modal">
										<i class="material-icons buy" data-toggle="tooltip" data-id_b="<?php echo $row["id"]; ?>" data-itemName_b="<?php echo $row["itemName"]; ?>" data-itemPrice_b="<?php echo $row["itemPrice"]; ?>" data-itemStocks_b="<?php echo $row["itemStocks"]; ?>" data-itemCategory_b="<?php echo $row["itemCategory"]; ?>" title="Buy and Schedule Now" style="width: 100%;">
											<button class="btn btn-success" style="width: 100%; margin-bottom:10px;">
												&#xe8cc;
											</button>
										</i>
									</a> -->
									<!-- <div class="row">
										<div class="col-xs-6">
											<a href="#editEmployeeModal" class="edit" data-toggle="modal">
												<i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-itemName="<?php echo $row["itemName"]; ?>" data-itemPrice="<?php echo $row["itemPrice"]; ?>" data-itemStocks="<?php echo $row["itemStocks"]; ?>" data-itemCategory="<?php echo $row["itemCategory"]; ?>" title="Edit" style="width: 100%;">
													<button class="btn btn-primary" style="width: 100%;">
														&#xE254;
													</button>
												</i>
											</a>
										</div>
										<div class="col-xs-6">
											<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">
												<i class="material-icons" data-toggle="tooltip" title="Delete" style="width: 100%;">
													<button class="btn btn-danger" style="width: 100%;">
														&#xE872;
													</button>
												</i>
											</a>
										</div>
									</div> -->
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
						<h4 class="modal-title">Add New Item Template</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="inventoryImage" class="form-label">UPLOAD IMAGE</label>
							<input class="form-control" type="file" id="inventoryImage" name="inventoryImage" required />
						</div>
						<div class="form-group">
							<label>ITEM NAME</label>
							<input type="text" id="itemName" name="itemName" class="form-control" placeholder="Enter the Item Name" required>
						</div>
						<div class="form-group">
							<label>PRICE</label>
							<input type="number" id="itemPrice" name="itemPrice" class="form-control" placeholder="Enter the Item Price" required>
						</div>
						<div class="form-group">
							<label>STOCKS</label>
							<input type="number" id="itemStocks" name="itemStocks" class="form-control" placeholder="Enter the Number of Stocks" required>
						</div>
						<div class="form-group">
							<label>CATEGORY</label>
							<select name="itemCategory" id="itemCategory" class="form-control" required>
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
						<h4 class="modal-title">Edit Item</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id" class="form-control" required>
						<div class="form-group">
							<label>ITEM NAME</label>
							<input type="text" id="itemName_u" name="itemName" class="form-control" required>
						</div>
						<div class="form-group">
							<label>PRICE</label>
							<input type="number" id="itemPrice_u" name="itemPrice" class="form-control" required>
						</div>
						<div class="form-group">
							<label>STOCKS</label>
							<input type="number" id="itemStocks_u" name="itemStocks" class="form-control" required>
						</div>
						<div class="form-group">
							<label>CATEGORY</label>
							<select name="itemCategory" id="itemCategory_u" class="form-control">
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
	<!-- BUY MODAL -->
	<div id="buyModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="buy_form">
					<div class="modal-header">
						<h4 class="modal-title">Buy Item</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_b" name="id" class="form-control" required>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>ITEM NAME</label>
									<input type="text" id="itemName_b" name="itemName_b" class="form-control" required disabled>
								</div>
								<div class="form-group">
									<label>PRICE</label>
									<input type="number" id="itemPrice_b" name="itemPrice_b" class="form-control" required disabled>
								</div>
								<div class="form-group">
									<label>STOCKS</label>
									<input type="number" id="itemStocks_b" name="itemStocks_b" class="form-control" required disabled>
								</div>
								<div class="form-group">
									<label>CATEGORY</label>
									<select name="itemCategory_b" id="itemCategory_b" class="form-control" disabled>
										<option value="" selected="selected" disabled style="text-align: center;">-SELECT CATEGORY-</option>
										<option value="Motorcycles">Motorcycles</option>
										<option value="Cars">Cars</option>
										<option value="SUVs">SUVs</option>
										<option value="Vans">Vans</option>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
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
							</div>
						</div>


						<script>
							var $services = $('#services'),
								$time = $('#time'),
								$options = $time.find('option');

							$services.on('change', function() {
								$time.html($options.filter('[value="' + this.value + '"]'));
							}).trigger('change');
						</script>
					</div>
					<div class="modal-footer">
						<input type="hidden" value="5" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="buy">Buy</button>
					</div>
				</form>
			</div>
		</div>
	</div>

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

	<!-- DISABLE THE SUBMIT BUTON -->
	<script>
		// FOR ADDING
		$("#inventoryImage").keyup(function(event) {
			validateInputs();
		});
		$("#itemName").keyup(function(event) {
			validateInputs();
		});
		$("#itemPrice").keyup(function(event) {
			validateInputs();
		});
		$("#itemStocks").keyup(function(event) {
			validateInputs();
		});
		$("#itemCategory").keyup(function(event) {
			validateInputs();
		});

		// FOR UPDATING
		// $("#inventoryImage").keyup(function(event) {
		// 	validateInputs();
		// });
		$("#itemName_u").keyup(function(event) {
			validateInputs();
		});
		$("#itemPrice_u").keyup(function(event) {
			validateInputs();
		});
		$("#itemStocks_u").keyup(function(event) {
			validateInputs();
		});
		$("#itemCategory_u").keyup(function(event) {
			validateInputs();
		});

		function validateInputs() {
			var disableButton = false;

			var inventoryImage = $("#inventoryImage").val();
			var itemName = $("#itemName").val();
			var itemPrice = $("#itemPrice").val();
			var itemStocks = $("#itemStocks").val();
			var itemCategory = $("#itemCategory").val();

			var itemName_u = $("#itemName_u").val();
			var itemPrice_u = $("#itemPrice_u").val();
			var itemStocks_u = $("#itemStocks_u").val();
			var itemCategory_u = $("#itemCategory_u").val();

			if (
				itemName.length == 0 ||
				itemPrice.length == 0 ||
				itemStocks.length == 0

			)
				disableButton = true;
			$('#btn-add').attr('disabled', disableButton);

			var disableButton = false;
			if (
				itemName_u.length == 0 ||
				itemPrice_u.length == 0 ||
				itemStocks_u.length == 0 ||
				itemCategory_u.length == 0
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
</body>

</html>