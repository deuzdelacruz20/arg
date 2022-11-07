<?php
include 'database.php';

if (count($_POST) > 0) {
	if ($_POST['type'] == 1) {
		$itemName = $_POST['itemName'];
		$itemPrice = $_POST['itemPrice'];
		$itemStocks = $_POST['itemStocks'];
		$itemCategory = $_POST['itemCategory'];

		$sql = "INSERT INTO `inventory`(`itemName`,`itemPrice`,`itemStocks`,`itemCategory`) 
		VALUES ('$itemName','$itemPrice','$itemStocks','$itemCategory')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode" => 200));
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
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
