<?php
include 'database.php';

if (count($_GET) > 0) {
	if ($_GET['type'] == "ADD") {
		$services = $_GET['services'];
		$date = $_GET['date'];
		
		$rows = mysqli_query($conn, "SELECT * FROM customer_request WHERE date = '".$date."' and services = '".strtoupper($services)."' ORDER BY timestamp DESC"); 
		if(!isset($rows)){
  			 echo json_encode(array("statusCode" => 99));
		}
		else {
			$time = array ();
			while($row = mysqli_fetch_array($rows)) {
        		$time[]= $row['time'];
    		}
    		echo json_encode(array("statusCode" => 200, "data"=>($time)));
		}
		mysqli_close($conn);
	}
}
if (count($_GET) > 0) {
	if ($_GET['type'] == "UPDATE") {
		$services = $_GET['services'];
		$date = $_GET['date'];
		$id = $_GET['id'];
		
		$rows = mysqli_query($conn, "SELECT * FROM customer_request WHERE date = '".$date."' and services = '".strtoupper($services)."' and id <>".$id." ORDER BY timestamp DESC"); 
		if(!isset($rows)){
  			 echo json_encode(array("statusCode" => 99));
		}
		else {
			$time = array ();
			while($row = mysqli_fetch_array($rows)) {
        		$time[]= $row['time'];
    		}
    		echo json_encode(array("statusCode" => 200, "data"=>($time)));
		}
		mysqli_close($conn);
	}
}

?>