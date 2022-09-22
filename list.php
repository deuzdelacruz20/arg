<?php include 'include/navigation.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARG AutoSign Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- DISPLAY THE DATA ON DATABASE -->
    <table class="table table-hover table-dark">
        <!-- table -->
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Phone Number</th>
            <th>Time</th>
            <th>Services</th>
            <th>Action</th>
        </tr>

        <!-- connection -->
        <?php
        $conn = new mysqli('localhost','root','','arg');
        if($conn->connect_error){
            die('Connection Failed: ' .$conn->connect_error);
        }
        // SQL
        $sql = "SELECT id, fullName, phoneNumber, time, services from customer_request";
        $result = $conn->query($sql);
        
        if($result-> num_rows > 0){
            //output
            while($row = $result->fetch_assoc()){
                echo 
                "<tr>
                    <td>"
                        .$row["id"].
                    "</td>
                    <td>"
                        .$row["fullName"].
                    "</td>
                    <td>0"
                        .$row["phoneNumber"].
                    "</td>
                    <td>"
                        .$row["time"].
                    "</td>
                    <td>"
                        .$row["services"].
                    "</td>
                </tr>";
            }
            echo "</table>";
        }
        else{
            echo "0 result";
        }
        $conn->close();
        ?>
    </table>
    <button onclick="history.back()">Go Back</button>
</body>
</html>

