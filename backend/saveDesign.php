<?php
include 'database.php';

if (count($_POST) > 0) {
	if ($_POST['type'] == 1) {
		$designName = $_POST['designName'];
		$designPrice = $_POST['designPrice'];
		$designStocks = $_POST['designStocks'];
		$designCategory = $_POST['designCategory'];

		$sql = "INSERT INTO `design_templates`(`designName`,`designPrice`,`designStocks`,`designCategory`) 
		VALUES ('$designName','$designPrice','$designStocks','$designCategory')";
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
		$designName = $_POST['designName'];
		$designPrice = $_POST['designPrice'];
		$designStocks = $_POST['designStocks'];
		$designCategory = $_POST['designCategory'];


		$sql = "UPDATE `design_templates` SET 
		`designName`='$designName',
		`designPrice`='$designPrice',
		`designStocks`='$designStocks',
		`designCategory`='$designCategory'

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
		$sql = "DELETE FROM `design_templates` WHERE id=$id ";
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
		$sql = "DELETE FROM design_templates WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
