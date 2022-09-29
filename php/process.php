<?php 
include 'connect.php';

// create
if(isset($_POST['submit'])){
    $fullName = $_POST['fullName'];
    $phoneNumber = $_POST['phoneNumber'];
    $time = $_POST['time'];
    $services = $_POST['services'];

    $stmt = $conn->prepare("insert into customer_request(fullName, phoneNumber, time, services) 
    values(?,?,?,?)");
    $stmt->bind_param("siss", $fullName, $phoneNumber, $time, $services);
    $stmt->execute();
    $_SESSION['message'] = "Submitted Successfully";
    header("location: form.php");
}
// update

// delete
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM customer_request WHERE id = $id");

    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = "danger";

    header("location: schedules.php");
}
?>