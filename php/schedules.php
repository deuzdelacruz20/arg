<?php 
include '../include/navigation.php';
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARG AutoSign Shop</title>
    <link rel="stylesheet" href="../css/schedules.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Schedules</h1>
    <!-- DISPLAY THE DATA ON DATABASE -->
    <table class="table table-hover table-dark">
        <!-- table -->
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Phone Number</th>
            <th>Time</th>
            <th>Services</th>
            <th>Operations</th>
        </tr>
        
        <?php
        // $conn = new mysqli('localhost','root','','arg');
        // if($conn->connect_error){
        //     die('Connection Failed: ' .$conn->connect_error);
        // }

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
                    <td>"
                    ?>
                    <a href="form.php?edit="<?php echo $row['id']?>><button type="button" class="btn btn-primary">Update</button></a>
                    <a href="process.php?delete=<?php echo $row['id']?>"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            <?php
            }
            echo "</table>";
        }
        // else{
        //     echo "0 result";
        // }
        $conn->close();
        ?>
    </table>
    <button onclick="history.back()">Go Back</button>
</body>
</html>