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

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>


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
			<!-- <li><a href="#template1">Motorcycles</a></li>
			<li><a href="#template2">Cars</a></li>
			<li><a href="#template3">SUVs</a></li>
			<li><a href="#template4">Vans</a></li> -->
			<li><a href="#template5">Stickers</a></li>
			<li><a href="#template6">Materials</a></li>
			<li><a href="#template7">Inventory History</a></li>
			<a href="#addItemModal" class="btn btn-success" data-toggle="modal" style="float: right; margin-top:3px;"><span>Add New Item</span></a>
		</ul>

		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<h3> </h3>
				<div class="row">
					<?php
					$result = mysqli_query($conn, "SELECT * FROM inventory WHERE itemCategory = 'Stickers' OR itemCategory = 'Materials' ORDER BY itemName ASC");
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
									<div class="row">
										<div class="col-xs-3">
											<a href="#editEmployeeModal" class="edit" data-toggle="modal">
												<i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-itemName="<?php echo $row["itemName"]; ?>" data-itemPrice="<?php echo $row["itemPrice"]; ?>" data-itemStocks="<?php echo $row["itemStocks"]; ?>" data-itemCategory="<?php echo $row["itemCategory"]; ?>" title="Edit" style="width: 100%;">
													<button class="btn btn-primary" style="width: 100%;">
														&#xE254;
													</button>
												</i>
											</a>
										</div>
										<div class="col-xs-3">
											<a href="#buyItemStock" class="edit" data-toggle="modal">
												<i class="material-icons buyitemStock" data-toggle="tooltip" data-idStocksbuy="<?php echo $row["id"]; ?>" data-itemStocksbuy="<?php echo $row["itemStocks"]; ?>" title="Buy Stocks" style="width: 100%;">
													<button class="btn btn-success" style="width: 100%;">
														&#xe8cc;
													</button>
												</i>
											</a>
										</div>
										<div class="col-xs-3">
											<a href="#addItemStock" class="edit" data-toggle="modal">
												<i class="material-icons additemStock" data-toggle="tooltip" data-idStocksAdd="<?php echo $row["id"]; ?>" data-itemStocksAdd="<?php echo $row["itemStocks"]; ?>" title="Add Stocks" style="width: 100%;">
													<button class="btn btn-success" style="width: 100%;">
														&plus;
													</button>
												</i>
											</a>
										</div>
										<div class="col-xs-3">
											<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">
												<i class="material-icons" data-toggle="tooltip" title="Delete" style="width: 100%;">
													<button class="btn btn-danger" style="width: 100%;">
														&#xE872;
													</button>
												</i>
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
					$result = mysqli_query($conn, "SELECT * FROM inventory WHERE itemCategory = 'Motorcycles' ORDER BY itemName ASC;");
					while ($row = mysqli_fetch_array($result)) {
					?>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail" style="background-color:#E8E8E8;">
								<img src="<?php echo '../image/' .  $row["inventoryImage"] ?>" alt="..." style="width: 450px; height:200px;">
								<div class="caption">
									<h3><?php echo $row["itemName"]; ?></h3>
									<p>PRICE: <?php echo $row["itemPrice"]; ?></p>
									<p>CATEGORY: <?php echo $row["itemCategory"]; ?></p>
									<div class="row">
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
					$result = mysqli_query($conn, "SELECT * FROM inventory WHERE itemCategory = 'Cars' ORDER BY itemName ASC;");
					while ($row = mysqli_fetch_array($result)) {
					?>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail" style="background-color:#E8E8E8;">
								<img src="<?php echo '../image/' .  $row["inventoryImage"] ?>" alt="..." style="width: 450px; height:200px;">
								<div class="caption">
									<h3><?php echo $row["itemName"]; ?></h3>
									<p>PRICE: <?php echo $row["itemPrice"]; ?></p>
									<p>CATEGORY: <?php echo $row["itemCategory"]; ?></p>
									<div class="row">
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
					$result = mysqli_query($conn, "SELECT * FROM inventory WHERE itemCategory = 'SUVs' ORDER BY itemName ASC;");
					while ($row = mysqli_fetch_array($result)) {
					?>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail" style="background-color:#E8E8E8;">
								<img src="<?php echo '../image/' .  $row["inventoryImage"] ?>" alt="..." style="width: 450px; height:200px;">
								<div class="caption">
									<h3><?php echo $row["itemName"]; ?></h3>
									<p>PRICE: <?php echo $row["itemPrice"]; ?></p>
									<p>CATEGORY: <?php echo $row["itemCategory"]; ?></p>
									<div class="row">
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
					$result = mysqli_query($conn, "SELECT * FROM inventory WHERE itemCategory = 'Vans' ORDER BY itemName ASC;");
					while ($row = mysqli_fetch_array($result)) {
					?>
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail" style="background-color:#E8E8E8;">
								<img src="<?php echo '../image/' .  $row["inventoryImage"] ?>" alt="..." style="width: 450px; height:200px;">
								<div class="caption">
									<h3><?php echo $row["itemName"]; ?></h3>
									<p>PRICE: <?php echo $row["itemPrice"]; ?></p>
									<p>CATEGORY: <?php echo $row["itemCategory"]; ?></p>
									<div class="row">
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
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>

				</div>
			</div>
			<div id="template5" class="tab-pane fade">
				<div class="row">
					<?php
					$result = mysqli_query($conn, "SELECT * FROM inventory WHERE itemCategory = 'Stickers' ORDER BY itemName ASC;");
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
									<div class="row">
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
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>

				</div>
			</div>
			<div id="template6" class="tab-pane fade">
				<div class="row">
					<?php
					$result = mysqli_query($conn, "SELECT * FROM inventory WHERE itemCategory = 'Materials' ORDER BY itemName ASC;");
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
									<div class="row">
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
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>

				</div>
			</div>
			<div id="template7" class="tab-pane fade">
				<div class="container" style="width: 100%; height: 100%; overflow: auto;">
					<p id="success"></p>
					<div class="table-wrapper">
						<div class="table-title">
							<div class="row">
								<div class="col-sm-6">
									<h2>INVENTORY <b>HISTORY</b></h2>
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
									<th>
										<span class="custom-checkbox">
											<input type="checkbox" id="selectAll">
											<label for="selectAll"></label>
										</span>
									</th>
									<th width="5%">ID</th>
									<th width="10%">ITEM NAME</th>
									<th width="10%">PRICE</th>
									<th width="15%">STOCKS</th>
									<th width="10%">CATEGORY</th>
									<th width="40%">DATE</th>
									<!-- <th>ACTION</th> -->
								</tr>
							</thead>
							<tbody>

								<?php
								$result = mysqli_query($conn, "SELECT * FROM inventory_movement WHERE itemCategory = 'Materials' OR itemCategory = 'Stickers' ORDER BY timestamp DESC");
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
										<td><?php echo $row["itemName"]; ?></td>
										<td><?php echo $row["itemPrice"]; ?></td>
										<td><?php echo $row["itemStocks"]; ?></td>
										<td><?php echo $row["itemCategory"]; ?></td>
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
	<div id="addItemModal" class="modal fade">
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
								<option value="Materials">Materials</option>
								<option value="Stickers">Stickers</option>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<input type="hidden" value="6" name="type" id="save_id">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-addItem">Add</button>
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
								<option value="Stickers">Stickers</option>
								<option value="Materials">Materials</option>
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

	<div id="addItemStock" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="additemStock_form">
					<div class="modal-header">
						<h4 class="modal-title">Edit Item</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_add" name="idAdd" class="form-control" required>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>REMAINING STOCKS</label>
									<input type="number" id="itemStocks_add" name="itemStocks" class="form-control" required readonly>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>ADD ITEM STOCKS</label>
									<input type="number" id="itemStocks_Toadd" name="itemStocksToadd" class="form-control" required>
								</div>
							</div>
						</div>

					</div>
					<div class="modal-footer">
						<input type="hidden" value="7" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="additemStock">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="buyItemStock" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="buyitemStock_form">
					<div class="modal-header">
						<h4 class="modal-title">Edit Item</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_buy" name="idBuy" class="form-control" required>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>REMAINING STOCKS</label>
									<input type="number" id="itemStocks_buy" name="itemStocksBuy" class="form-control" required readonly>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>BUY ITEM STOCKS</label>
									<input type="number" id="itemStocks_Tobuy" name="itemStocksToBuy" class="form-control" required>
								</div>
							</div>
						</div>

					</div>
					<div class="modal-footer">
						<input type="hidden" value="8" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="buyitemStock">Add</button>
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
	<!-- DISABLE THE SUBMIT BUTON -->
	<!-- <script>
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
	</script> -->

	<script>
		$(document).ready(function() {
			$('#transactionHistoryTable').DataTable();
		});
	</script>
</body>

</html>