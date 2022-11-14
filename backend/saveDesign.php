<?php
include 'database.php';

$target_dir = "../image/";


if (count($_POST) > 0) {
	if ($_POST['type'] == 1) {
		$designName = $_POST['designName'];
		$designPrice = $_POST['designPrice'];
		$designStocks = $_POST['designStocks'];
		$designCategory = $_POST['designCategory'];


		$target_file = $target_dir . basename($_FILES["designImage"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		$designImageName =  $_FILES["designImage"]["name"];

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
				$uploadOk = 0;
			 echo json_encode(array("statusCode" => 200, "message" => "Sorry, only JPG, JPEG, PNG & GIF files are allowed."));
			
		}

		if (!move_uploaded_file($_FILES["designImage"]["tmp_name"], $target_file) && !file_exists($target_file)) {
			$uploadOk = 0;
			 echo json_encode(array("statusCode" => 200, "message" => "Error your image did not upload either the image is already existing in the database"));
		}

		if($uploadOk)
		{
			$sql = "INSERT INTO `design_templates`(`designName`,`designPrice`,`designStocks`,`designCategory`, `designImage`) 
			VALUES ('$designName','$designPrice','$designStocks','$designCategory', '$designImageName')";
			if (mysqli_query($conn, $sql)) {
				echo json_encode(array("statusCode" => 200, "message" => "Successfully added to the database"));
			} else {
				echo json_encode(array("statusCode" => 200, "message" => $designImage));
			}
			mysqli_close($conn);
		
		}

		
		
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
