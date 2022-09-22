<?php 
include 'connect.php';
include 'include/navigation.php';

if(isset($_POST['submit'])){
    $fullName = $_POST['fullName'];
    $phoneNumber = $_POST['phoneNumber'];
    $time = $_POST['time'];
    $services = $_POST['services'];

    $stmt = $conn->prepare("insert into customer_request(fullName, phoneNumber, time, services) 
    values(?,?,?,?)");
    $stmt->bind_param("siss", $fullName, $phoneNumber, $time, $services);
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARG AutoSign Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container container-body">
        <div class="panel">
            <!-- header -->
            <h2>Schedule An Appointment</h2>
                <form method="post">
                    <!-- Full Name -->
                    <div class="form-group mt-3">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your Name" style="font-style: italic;">
                    </div>
                    <!-- Phone number -->
                    <div class="form-group mt-3"> 
                        <label for="phonenumber">Phone Number</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your Number" style="font-style: italic;">
                    </div>
                    <!-- Services -->
                    <div class="form-group mt-3">
                        <label for="services">Services</label>
                        <select class="form-select" aria-label="Default select example" name="services">
                            <option disabled>---Select a Service---</option>
                            <option>Full Wrap</option>
                            <option>Hood Wrap</option>
                            <option>Headlight Film</option>
                            <option>Customize plate</option>
                            <option>Signage</option>
                        </select>
                    </div>
                    
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-sm">
                                <h5>Morning</h5>
                                <!-- TIME 7AM -->
                                <div class="time-group">
                                    <label for="7AM" class="radio-inline">
                                        <input 
                                            type="radio" 
                                            name="time" 
                                            value="7AM"
                                            id="7AM"  
                                        />
                                        7:00 AM - 8:00 AM
                                    </label>  
                                </div>
                                
                                <!-- TIME 8AM -->
                                <div class="time-group">
                                    <label for="8AM" class="radio-inline">
                                        <input 
                                            type="radio" 
                                            name="time" 
                                            value="8AM"
                                            id="8AM"  
                                        />
                                        8:00 AM - 9:00 AM
                                    </label>  
                                </div>

                                <!-- TIME 9AM -->
                                <div class="time-group">
                                    <label for="9AM" class="radio-inline">
                                        <input 
                                            type="radio" 
                                            name="time" 
                                            value="9AM"
                                            id="9AM"  
                                        />
                                        9:00 AM - 10:00 AM
                                    </label>  
                                </div>

                                <!-- TIME 10AM -->
                                <div class="time-group">
                                    <label for="10AM" class="radio-inline">
                                        <input 
                                            type="radio" 
                                            name="time" 
                                            value="10AM"
                                            id="10AM"  
                                        />
                                        10:00 AM - 11:00 AM
                                    </label>  
                                </div>

                                <!-- TIME 11AM -->
                                <div class="time-group">
                                    <label for="11AM" class="radio-inline">
                                        <input 
                                            type="radio" 
                                            name="time" 
                                            value="11AM"
                                            id="11AM"  
                                        />
                                        11:00 AM - 12:00 AM
                                    </label>  
                                </div>

                            </div>

                            <div class="col-sm">
                                <h5>Afternoon</h5>

                                <!-- TIME 1PM -->
                                <div class="time-group">
                                    <label for="1PM" class="radio-inline">
                                        <input 
                                            type="radio" 
                                            name="time" 
                                            value="1PM"
                                            id="1PM"  
                                        />
                                        1:00 PM - 2:00 PM
                                    </label>  
                                </div>

                                <!-- TIME 2PM -->
                                <div class="time-group">
                                    <label for="1PM" class="radio-inline">
                                        <input 
                                            type="radio" 
                                            name="time" 
                                            value="2PM"
                                            id="2PM"  
                                        />
                                        2:00 PM - 3:00 PM
                                    </label>  
                                </div>

                                <!-- TIME 3PM -->
                                <div class="time-group">
                                    <label for="3PM" class="radio-inline">
                                        <input 
                                            type="radio" 
                                            name="time" 
                                            value="3PM"
                                            id="3PM"  
                                        />
                                        3:00 PM - 4:00 PM
                                    </label>  
                                </div>
                                
                                <!-- TIME 4PM -->
                                <div class="time-group">
                                    <label for="4PM" class="radio-inline">
                                        <input 
                                            type="radio" 
                                            name="time" 
                                            value="4PM"
                                            id="4PM"  
                                        />
                                        4:00 PM - 5:00 PM
                                    </label>  
                                </div>

                                <!-- TIME 5PM -->
                                <div class="time-group">
                                    <label for="5PM" class="radio-inline">
                                        <input 
                                            type="radio" 
                                            name="time" 
                                            value="5PM"
                                            id="5PM"  
                                        />
                                        5:00 PM - 6:00 PM
                                    </label>  
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- button -->
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col">
                                <form >
                                    <button type="submit" class="btn btn-primary p-3" name="submit">Submit</button>
                                </form>
                            </div>
                            <div class="col">
                                <form action="list.php" method="post">
                                    <button type="submit" name="submit" class="btn btn-success p-3">List Request</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
</div>
</body>
</html>