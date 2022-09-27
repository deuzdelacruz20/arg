<?php
    // CONNECTION
    session_start();
    $conn=new mysqli('localhost','root','','arg');
    if(!$conn){
        die(mysqli_error($conn));
    }
?>
