<?php
include 'database.php';

$target_dir = "../image/";

if (count($_POST) > 0) {
	if ($_POST['type'] == 6) {

		$itemName = $_POST['itemName'];
		$itemPrice = $_POST['itemPrice'];
		// $sellingPrice = $_POST['sellingPrice'];
		$itemStocks = $_POST['itemStocks'];
		$itemCategory = $_POST['itemCategory'];
		$uploadOk = 1;

		$target_file = $target_dir . basename($_FILES["inventoryImage"]["name"]);

		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		$inventoryImageName =  $_FILES["inventoryImage"]["name"];

		// Allow certain file formats
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
			$uploadOk = 0;
			echo json_encode(array("statusCode" => 200, "message" => "Sorry, only JPG, JPEG, PNG & GIF files are allowed."));
		}

		if (!move_uploaded_file($_FILES["inventoryImage"]["tmp_name"], $target_file) && !file_exists($target_file)) {
			$uploadOk = 0;
			echo json_encode(array("statusCode" => 200, "message" => "Error your image did not upload either the image is already existing in the database"));
		}






		if ($uploadOk) {
			$sql = "INSERT INTO `inventory`(`itemName`,`itemPrice`,`itemStocks`,`itemCategory`, `inventoryImage`) 
			VALUES ('$itemName','$itemPrice','$itemStocks','$itemCategory', '$inventoryImageName')";

			$sql1 = "INSERT INTO `inventory_movement`(`itemName`,`itemPrice`,`itemStocks`,`itemCategory`) 
			VALUES ('$itemName','$itemPrice','$itemStocks','$itemCategory')";

			if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)) {
				echo json_encode(array("statusCode" => 200, "message" => "Successfully added to the database"));
			} else {
				echo json_encode(array("statusCode" => 200, "message" => "An error occured"));
			}
			mysqli_close($conn);
		}
	}
}
if (count($_POST) > 0) {
	if ($_POST['type'] == 2) {
		$id = $_POST['id'];
		$itemName = $_POST['itemName'];
		$itemPrice = $_POST['itemPrice'];
		$itemStocks = $_POST['itemStocks'];
		$itemCategory = $_POST['itemCategory'];

		$sql = "UPDATE `inventory` SET 
		`itemName`='$itemName',
		`itemPrice`='$itemPrice',
		`itemStocks`='$itemStocks',
		`itemCategory`='$itemCategory'
		WHERE id=$id";

		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode" => 200));
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if (count($_POST) > 0) {
	if ($_POST['type'] == 3) {
		$id = $_POST['id'];
		$sql = "DELETE FROM `inventory` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if (count($_POST) > 0) {
	if ($_POST['type'] == 4) {
		$id = $_POST['id'];
		$sql = "DELETE FROM inventory WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if (count($_POST) > 0) {
	if ($_POST['type'] == 5) {

		// $id = $_POST['id'];
		// $itemName = $_POST['itemName_b'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$phoneNumber = $_POST['phoneNumber'];
		$date = $_POST['date'];
		$services = $_POST['inputServices'];
		$time = $_POST['inputTime'];

		// $sql = "INSERT INTO `customer_request`(`itemName`,`itemPrice`) 
		// 	VALUES ('$itemName','$itemPrice')";

		$sql = "INSERT INTO `customer_request` (`firstName`, `lastName`, `phoneNumber`, `date`, `services`, `time`, `timestamp`, `user_status`) 
		VALUES ('$firstName', '$lastName', '$phoneNumber', '$date', '$services', '$time', current_timestamp(), 'Pending')";

		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode" => 200, "message" => "Successfully added to the database"));
		} else {
			echo json_encode(array("statusCode" => 200, "message" => "An error occured."));
		}
		mysqli_close($conn);
	}
}
