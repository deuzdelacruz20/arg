<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARG AutoSign Shop</title>
    <link rel="stylesheet" href="style.css">

    <!-- table style -->
    <style>
        table, th, td {
            border:1px solid black;
            text-align: left;
            border-collapse: collapse;
            width: 50%;
            font-size: 20;
            margin-top: 5%;
        }
        table, th{
            text-align: center;
            width: 50%;
        }
    </style>
</head>
<body>
    <!-- DISPLAY THE DATA ON DATABASE -->
    <table>
        <!-- table -->
        <tr>
            <th>Full Name</th>
            <th>Phone Number</th>
            <th>Time</th>
        </tr>

        <!-- connection -->
        <?php
        $conn = new mysqli('localhost','root','','arg');
        if($conn->connect_error){
            die('Connection Failed: ' .$conn->connect_error);
        }
        // SQL
        $sql = "SELECT fullName, phoneNumber, time from customer_request";
        $result = $conn->query($sql);
        
        if($result-> num_rows > 0){
            //output
            while($row = $result->fetch_assoc()){
                echo 
                "<tr>
                    <td><br>"
                        .$row["fullName"].
                    "</td>
                    <td>"
                        .$row["phoneNumber"].
                    "</td>
                    <td>"
                        .$row["time"].
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