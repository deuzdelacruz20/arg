<?php
    // START 

    // $fullName = $_POST['fullName'];
    // $phoneNumber = $_POST['phoneNumber'];
    // $time = $_POST['time'];
    // $services = $_POST['services'];
    
    // //connection
    // $conn = new mysqli('localhost','root','','arg');
    // if($conn->connect_error){
    //     die('Connection Failed: ' .$conn->connect_error);
    // }
    // else{
    //     $stmt = $conn->prepare("insert into customer_request(fullName, phoneNumber, time, services) values(?,?,?,?)");
    // }
    // $stmt->bind_param("siss", $fullName, $phoneNumber, $time, $services);
    // $stmt->execute();
    // echo "Appointment Schedule Request submitted successfully";
    // $stmt->close();
    // $conn->close();

    // END

    // CONNECTION
    $conn=new mysqli('localhost','root','','arg');
    if(!$conn){
        die(mysqli_error($conn));
    }
?>

<!-- <button onclick="history.back()">Go Back</button> -->
<!-- 
<form action="list.php" method="post">
    <button type="submit" class="btn">Go to list of request</button>
</form> -->
