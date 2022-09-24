<?php 
include 'connect.php';
    // $conn = new mysqli('localhost','root','','arg');
    // if($conn->connect_error){
    //     die('Connection Failed: ' .$conn->connect_error);
    // }

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM customer_request WHERE id = $id");

    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = "danger";

    header("location: schedules.php");
}
?>