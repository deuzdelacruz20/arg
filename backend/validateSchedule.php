<?php
include 'database.php';

if (count($_POST) > 0) {
	if ($_POST['type'] == "ADD") {
		$date = $_POST['date'];
		
		$rows = mysqli_query($conn, "SELECT * FROM customer_request WHERE date = '".$date."' AND user_status = 'Pending' OR user_status = 'Accepted' ORDER BY timestamp DESC"); 
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
if (count($_POST) > 0) {
	if ($_POST['type'] == "UPDATE") {
		$date = $_POST['date'];
		$id = $_POST['id'];
		
		$rows = mysqli_query($conn, "SELECT * FROM customer_request WHERE date = '".$date."' and id <>".$id." ORDER BY timestamp DESC"); 
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