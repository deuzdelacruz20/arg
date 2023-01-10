<?php
include 'database.php';

$error = NULL;

if (count($_POST) > 0) {
	if ($_POST['type'] == 1) {
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$phoneNumber = $_POST['phoneNumber'];
		$date = $_POST['date'];
		$services = $_POST['inputServices'];
		$time = $_POST['inputTime'];
		$selectedItem = $_POST['selectedItem'];
		$selectedPrice = $_POST['selectedPrice'];
		$selectedStocks = $_POST['selectedStocks'];
		$selectedCategory = $_POST['selectedCategory'];
		$totalAmount = $_POST['totalAmount'];

		if (empty($firstName)) {
			$error = 'Enter Your First Name!';
		} 
		else if (empty($lastName)) {
			$error = 'Enter Your Last Name!';
		} 
		else if (empty($phoneNumber)) {
			$error = 'Enter Your Phone Number!';
		} 
		else if (empty($date)) {
			$error = 'Enter a Valid Date!';
		} 
		else if (empty($_POST['inputServices'])) {
			$error = 'Choose a Service!';
		} 
		else if (empty($_POST['inputTime'])) {
			$error = 'Choose a Timeslot!';
		} 
		else {
			//start added shepo changes
			$sql = "INSERT INTO `customer_request`(`firstName`,`lastName`,`phoneNumber`,`date`,`services`,`time`,`timestamp`,`selectedItem`,`selectedPrice`,`selectedStocks`,`selectedCategory`,`totalAmount`) 
		VALUES ('$firstName','$lastName','$phoneNumber','$date','$services','$time',current_timestamp(),'$selectedItem','$selectedPrice','$selectedStocks','$selectedCategory','$totalAmount');\n

					UPDATE `inventory` set itemStocks = itemStocks-1 WHERE upper(itemName)=upper('$selectedItem');";

			if (mysqli_multi_query($conn, $sql)) {
				echo json_encode(array("statusCode" => 200));
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
			//end added shepo changes
		}
	}
}
if (count($_POST) > 0) {
	if ($_POST['type'] == 2) {
		$id = $_POST['id'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$phoneNumber = $_POST['phoneNumber'];
		$date = $_POST['date'];
		$services = $_POST['inputServices_u'];
		$time = $_POST['inputTime_u'];
		$user_status = $_POST['user_status'];

		$sql = "UPDATE `customer_request` SET 
		`firstName`='$firstName',
		`lastName`='$lastName',
		`phoneNumber`='$phoneNumber',
		`date`='$date',
		`services`='$services',
		`time`='$time',
		`user_status`='$user_status'
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
		$sql = "DELETE FROM `customer_request` WHERE id=$id ";
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
		$sql = "DELETE FROM customer_request WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
