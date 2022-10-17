<?php 
include 'backend/database.php';
include '../include/navigation.php';
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
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../css/schedules.css">
</head>
<body>
    <div class="container container-body">
        <div class="panel">
            <!-- header -->
           
                <form method="post">
                    <!-- Full Name -->
                    <div class="form-group mt-3">
                        <label for="fullname">Full Name</label>
                        <input 
                        type="text" 
                        class="form-control" 
                        id="fullName" 
                        name="fullName" 
                        placeholder="Enter your Name" 
                        style="font-style: italic;">
                    </div>
                    <!-- Phone number -->
                    <div class="form-group mt-3"> 
                        <label for="phonenumber">Phone Number</label>
                        <input 
                        type="text" 
                        class="form-control" 
                        id="phoneNumber" 
                        name="phoneNumber" 
                        placeholder="Enter your Number" 
                        style="font-style: italic;">
                    </div>
                    <!-- Services -->
                    <div class="form-group mt-3">
                        <label for="services">Services</label>
                        <select class="form-select" aria-label="Default select example" name="services" >
                            <option disabled selected>--- Select a Service ---</option>
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
                                        7:00 AM
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
                                        8:00 AM
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
                                        9:00 AM
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
                                        10:00 AM
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
                                        11:00 AM
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
                                        1:00 PM
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
                                        2:00 PM
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
                                        3:00 PM
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
                                        4:00 PM
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
                                        5:00 PM
                                    </label>  
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- button -->
                    <div class="container mt-4">
                        <form >
                            <button type="submit" class="btn btn-primary p-3" name="submit">Submit</button>
                        </form>
                    </div>
            </form>
        </div>
</div>
</body>
</html>