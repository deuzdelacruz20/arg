<?php
include 'database.php';

// SUBMIT
if(count($_POST)>0){
	if($_POST['type']==1){
		$fullName=$_POST['fullName'];
		$phoneNumber=$_POST['phoneNumber'];
		$time=$_POST['time'];
		$services=$_POST['services'];
		$sql = "INSERT INTO `customer_request`( `fullName`, `phoneNumber`,`time`,`services`) 
		VALUES ('$fullName','$phoneNumber','$time','$services')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

// UPDATE
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$fullName=$_POST['fullName'];
		$phoneNumber=$_POST['phoneNumber'];
		$services=$_POST['services'];
		$time=$_POST['time'];
		$sql = "UPDATE `customer_request` SET `fullName`='$fullName',`phoneNumber`='$phoneNumber',`services`='$services',`time`='$time' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

// DELeTE
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `customer_request` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

// DELETE SPECIFIC
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM customer_request WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>