<?php 
include 'connect.php';

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM customer_request WHERE id = $id");

    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = "danger";

    header("location: schedules.php");
}
?>