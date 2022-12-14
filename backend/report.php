<?php
include 'database.php';

if (count($_GET) > 0) {
	if ($_GET['type'] == "PENDING") {
		$datefrom = $_GET['datefrom'];
		$dateto = $_GET['dateto'];
		$query = "";
		if(($datefrom=="" || $datefrom==null) || ($dateto=="" || $dateto==null)){
			$query = "SELECT COUNT(*) totalpending FROM customer_request WHERE upper(user_status) = 'PENDING'";
		}else{
			$query = "SELECT COUNT(*) totalpending FROM customer_request WHERE date between '".$datefrom."' and '".$dateto."' and upper(user_status) = 'PENDING'";
		}
		$rows = mysqli_query($conn, $query); 
		if(!isset($rows)){
  			 echo json_encode(array("statusCode" => 99));
		}
		else {
			$count = array ();
			while($row = mysqli_fetch_array($rows)) {
        		$count[]= $row['totalpending'];
    		}
    		echo json_encode(array("statusCode" => 200, "data"=>($count)));
		}
		mysqli_close($conn);
	}
}
if (count($_GET) > 0) {
	if ($_GET['type'] == "ACCEPTED") {
		$datefrom = $_GET['datefrom'];
		$dateto = $_GET['dateto'];
		$query = "";
		if(($datefrom=="" || $datefrom==null) || ($dateto=="" || $dateto==null)){
			$query = "SELECT COUNT(*) totalaccepted FROM customer_request WHERE upper(user_status) = 'ACCEPTED'";
		}else{
			$query = "SELECT COUNT(*) totalaccepted FROM customer_request WHERE date between '".$datefrom."' and '".$dateto."' and upper(user_status) = 'ACCEPTED'";
		}
		$rows = mysqli_query($conn, $query); 
		if(!isset($rows)){
  			 echo json_encode(array("statusCode" => 99));
		}
		else {
			$count = array ();
			while($row = mysqli_fetch_array($rows)) {
        		$count[]= $row['totalaccepted'];
    		}
    		echo json_encode(array("statusCode" => 200, "data"=>($count)));
		}
		mysqli_close($conn);
	}
}
if (count($_GET) > 0) {
	if ($_GET['type'] == "REJECTED") {
		$datefrom = $_GET['datefrom'];
		$dateto = $_GET['dateto'];
		$query = "";
		if(($datefrom=="" || $datefrom==null) || ($dateto=="" || $dateto==null)){
			$query = "SELECT COUNT(*) totalrejected FROM customer_request WHERE upper(user_status) = 'REJECTED'";
		}else{
			$query = "SELECT COUNT(*) totalrejected FROM customer_request WHERE date between '".$datefrom."' and '".$dateto."' and upper(user_status) = 'REJECTED'";
		}
		$rows = mysqli_query($conn, $query); 
		if(!isset($rows)){
  			 echo json_encode(array("statusCode" => 99));
		}
		else {
			$count = array ();
			while($row = mysqli_fetch_array($rows)) {
        		$count[]= $row['totalrejected'];
    		}
    		echo json_encode(array("statusCode" => 200, "data"=>($count)));
		}
		mysqli_close($conn);
	}
}
if (count($_GET) > 0) {
	if ($_GET['type'] == "DONE") {
		$datefrom = $_GET['datefrom'];
		$dateto = $_GET['dateto'];
		$query = "";
		if(($datefrom=="" || $datefrom==null) || ($dateto=="" || $dateto==null)){
			$query = "SELECT COUNT(*) totaldone FROM customer_request WHERE upper(user_status) = 'DONE'";
		}else{
			$query = "SELECT COUNT(*) totaldone FROM customer_request WHERE date between '".$datefrom."' and '".$dateto."' and upper(user_status) = 'DONE'";
		}
		$rows = mysqli_query($conn, $query); 
		if(!isset($rows)){
  			 echo json_encode(array("statusCode" => 99));
		}
		else {
			$count = array ();
			while($row = mysqli_fetch_array($rows)) {
        		$count[]= $row['totaldone'];
    		}
    		echo json_encode(array("statusCode" => 200, "data"=>($count)));
		}
		mysqli_close($conn);
	}
}

if (count($_GET) > 0) {
	if ($_GET['type'] == "EXPENSES") {
		$datefrom = $_GET['datefrom'];
		$dateto = $_GET['dateto'];
		$query = "";
		if(($datefrom=="" || $datefrom==null) || ($dateto=="" || $dateto==null)){
			$query = "SELECT sum(itemPrice) expenses FROM `inventory` ";
		}else{
			$query = "SELECT sum(itemPrice) expenses FROM `inventory` WHERE DATE_FORMAT(timestamp,'%Y-%m-%d') BETWEEN '".$datefrom."' AND '".$dateto."'";
		}
		$rows = mysqli_query($conn, $query); 
		if(!isset($rows)){
  			 echo json_encode(array("statusCode" => 99));
		}
		else {
			$count = array ();
			while($row = mysqli_fetch_array($rows)) {
        		$count[]= $row['expenses'];
    		}
    		echo json_encode(array("statusCode" => 200, "data"=>($count)));
		}
		mysqli_close($conn);
	}
}

if (count($_GET) > 0) {
	if ($_GET['type'] == "EARNING") {
		$datefrom = $_GET['datefrom'];
		$dateto = $_GET['dateto'];
		$query = "";
		if(($datefrom=="" || $datefrom==null) || ($dateto=="" || $dateto==null)){
			$query = "SELECT sum(sellingPrice) - sum(itemPrice) earning FROM `inventory` ";
		}else{
			$query = "SELECT sum(sellingPrice) - sum(itemPrice) earning FROM `inventory` WHERE DATE_FORMAT(timestamp,'%Y-%m-%d') BETWEEN '".$datefrom."' AND '".$dateto."'";
		}
		$rows = mysqli_query($conn, $query); 
		if(!isset($rows)){
  			 echo json_encode(array("statusCode" => 99));
		}
		else {
			$count = array ();
			while($row = mysqli_fetch_array($rows)) {
        		$count[]= $row['earning'];
    		}
    		echo json_encode(array("statusCode" => 200, "data"=>($count)));
		}
		mysqli_close($conn);
	}
}
?>