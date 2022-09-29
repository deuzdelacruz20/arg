<?php 
 $conn = new mysqli('localhost','root','','arg');
 if($conn->connect_error){
	 die('Connection Failed: ' .$conn->connect_error);
 }
?>