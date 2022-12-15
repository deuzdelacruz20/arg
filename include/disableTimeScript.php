<script>
    $(document).ready(function() {
        $('#addEmployeeModal').on('hidden.bs.modal', function(e) {
            $("#time option").each(function() {
                $(this).prop("disabled", false);
            });
            $('#services option').prop('selected', function() {
                return this.defaultSelected;
            });
            $("#time").empty();
            $('#time').append('<option selected>-Select Service First-</option>');
            $("#date").val("");
            $("#firstName").val("");
            $("#lastName").val("");
            $("#phoneNumber").val("");
        });

        $("#date").change(function() {
            loadscheduletime();
        });

        $("#services").change(function() {
            loadscheduletime();
        });

        function loadscheduletime() {
            $("#time option").each(function() {
                $(this).prop("disabled", false);
            });
            if (($("#date").val() == "" || $("#date").val() == null || $("#date").val() == undefined)) {
                console.log("nothing to do...");
                return;
            } else {
                $.ajax({
                    data: {
                        "type": "ADD",
                        "date": $("#date").val()
                    },
                    type: "post",
                    url: "../backend/validateSchedule.php",
                    success: function(dataResult) {
                        var dataResult1 = JSON.parse(dataResult);
                        if (dataResult1.statusCode == 200 && dataResult1.data.length > 0) {
                            for (var keys in dataResult1.data) {
                                $("#time option").each(function() {
                                    if (dataResult1.data[keys] == $(this).text()) {
                                        $(this).prop("disabled", true);
                                    }
                                });
                            }
                        } else if (dataResult1.statusCode == 99) {
                            console.log(dataResult);
                        }
                    }
                });
            }
        }


        $('#editEmployeeModal').on('hidden.bs.modal', function(e) {
            $("#time_u option").each(function() {
                $(this).prop("disabled", false);
            });
        });

        $("#date_u").change(function() {
            loadscheduletime_u();
        });
        $("#services_u").change(function() {
            loadscheduletime_u();
        });

        $('#editEmployeeModal').on('show.bs.modal', function(e) {
            loadscheduletime_u();
        });

        function loadscheduletime_u() {
            $("#time_u option").each(function() {
                $(this).prop("disabled", false);
            });
            if (($("#date_u").val() == "" || $("#date_u").val() == null || $("#date_u").val() == undefined)) {
                console.log("nothing to do...");
            } else {
                $.ajax({
                    data: {
                        "type": "UPDATE",
                        "date": $("#date_u").val(),
                        "id": $("#id_u").val()
                    },
                    type: "post",
                    url: "../backend/validateSchedule.php",
                    success: function(dataResult) {
                        var dataResult1 = JSON.parse(dataResult);
                        if (dataResult1.statusCode == 200 && dataResult1.data.length > 0) {
                            for (var keys in dataResult1.data) {
                                $("#time_u option").each(function() {
                                    if (dataResult1.data[keys] == $(this).text()) {
                                        $(this).prop("disabled", true);
                                    }
                                });
                            }
                        } else if (dataResult1.statusCode == 99) {
                            console.log(dataResult);
                        }
                    }
                });
            }
        }
    });
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARG AutoSign Shop</title>
</head>

<body>
    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="user_form" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title">Schedule An Appointment</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>FIRST NAME</label>
                            <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter Your First Name" required>
                        </div>
                        <div class="form-group">
                            <label>LAST NAME</label>
                            <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter Your Last Name" required>
                        </div>
                        <div class="form-group">
                            <label>PHONE NUMBER</label>
                            <input type="phone" id="phoneNumber" name="phoneNumber" class="form-control" maxlength="11" placeholder="Enter Your Phone Number" required>
                        </div>
                        <div class="form-group">
                            <label>DATE</label>
                            <input type="date" id="date" name="date" class="form-control" required>
                        </div>
                        <script language="javascript">
                            // DISABLE PAST DATES
                            var today = new Date();
                            var dd = String(today.getDate()).padStart(2, '0');
                            var mm = String(today.getMonth() + 1).padStart(2, '0');
                            var yyyy = today.getFullYear();

                            today = yyyy + '-' + mm + '-' + dd;
                            $('#date').attr('min', today);
                        </script>
                        <div class="form-group">
                            <label>SERVICES</label>
                            <select class="form-control" name="services" id="services">
                                <option value="0" selected disabled style="text-align: center;">-Select a Service-</option>
                                <option value="2">Full Wrap</option>
                                <option value="2">Hood Wrap</option>
                                <option value="2">HeadLight Film</option>
                                <option value="2">Customized Plate</option>
                                <option value="2">Signage</option>
                            </select>
                            <input type="text" name="inputServices" id="inputServices" hidden></input>
                        </div>
                        <div class="form-group">
                            <label>TIME SLOTS</label>
                            <select class="form-control" name="time" id="time">
                                <option value="0" selected disabled style="text-align: center;">-Select Service First-</option>
                                <option value="1">7:00 AM - 9:00 AM</option>
                                <option value="1">9:00 AM - 11:00 AM</option>
                                <option value="1">1:00 PM - 3:00 PM</option>
                                <option value="1">3:00 PM - 5:00 PM</option>

                                <option value="2">7:00 AM - 8:00 AM</option>
                                <option value="2">8:00 AM - 9:00 AM</option>
                                <option value="2">9:00 AM - 10:00 AM</option>
                                <option value="2">10:00 AM - 11:00 AM</option>
                                <option value="2">1:00 PM - 2:00 PM</option>
                                <option value="2">2:00 PM - 3:00 PM</option>
                                <option value="2">3:00 PM - 4:00 PM</option>
                                <option value="2">4:00 PM - 5:00 PM</option>
                                <option value="2">5:00 PM - 6:00 PM</option>
                            </select>
                            <input type="text" name="inputTime" id="inputTime" hidden></input>
                        </div>
                        <script>
                            var $services = $('#services'),
                                $time = $('#time'),
                                $options = $time.find('option');

                            $services.on('change', function() {
                                $time.html($options.filter('[value="' + this.value + '"]'));
                            }).trigger('change');
                        </script>
                        <script>
                            $("#time option[value='jquery']").attr("disabled", "disabled");
                        </script>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="1" name="type">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-success" id="btn-add" disabled>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>