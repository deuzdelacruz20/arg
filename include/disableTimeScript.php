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
            $('#time').append('<option selected style="text-align: center;">-Select Service First-</option>');
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
                    <div class="modal-header" style="text-align: center;">
                        <h4 class="modal-title">Schedule An Appointment</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>FIRST NAME</label>
                                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter Your First Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>LAST NAME</label>
                                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter Your Last Name" required>
                                </div>
                            </div>
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
                            var dd = String(today.getDate() + 1).padStart(2, '0');
                            var mm = String(today.getMonth() + 1).padStart(2, '0');
                            var yyyy = today.getFullYear();

                            today = yyyy + '-' + mm + '-' + dd;
                            $('#date').attr('min', today);
                        </script>
                        <div class="form-group">
                            <label>SERVICES</label>
                            <select class="form-control" name="services" id="services">
                                <option value="0" selected disabled style="text-align: center;">-Select a Service-
                                </option>
                                <option value="2">5,000 - Full Wrap</option>
                                <option value="2">2,000 - Hood Wrap</option>
                                <option value="2">1,000 - HeadLight Film</option>
                                <option value="2">500 - Customized Plate</option>
                                <option value="2">500 - Signage</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>TIME SLOTS</label>
                            <select class="form-control" name="time" id="time">
                                <option value="0" selected disabled style="text-align: center;">-Select Service First-
                                </option>
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
                        <div class="designTemplatePage" hidden>
                            <hr>
                            <div class="form-group">
                                <label>SELECTED ITEM</label>
                                <input type="text" id="selectedItem" name="selectedItem" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label>PRICE</label>
                                <input type="text" id="selectedPrice" name="selectedPrice" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label>STOCKS</label>
                                <input type="text" id="selectedStocks" name="selectedStocks" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label>CATEGORY</label>
                                <input type="text" id="selectedCategory" name="selectedCategory" class="form-control" disabled>
                            </div>
                            <hr>
                        </div>

                        <hr>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6" style="text-align: right;">
                                    <label>RESERVATION FEE:</label><br>
                                    <label>SERVICE FEE:</label><br>
                                    <b><label>TOTAL AMOUNT:</label><br></b>
                                </div>
                                <div class="col-sm-6" style="text-align: left;">
                                    ₱ <input type="number" value="200" name="reservationFee" id="reservationFee" disabled><br>
                                    ₱ <input type="text" name="inputServices" id="inputServices" disabled><br>
                                    ₱ <b><input type="number" value="3000" name="reservationFee" id="reservationFee" disabled><br><b></b>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group">
                            <label>TERMS AND CONDITIONS</label>
                            <textarea id="textarea" name="textarea" style="width: 100%; resize: none;" rows='8' disabled>
This appointment and scheduling system allocates slots on a first come, first served basis. Limited slots are available per site and there is no guarantee that a slot will always be available for a user's first choice for an appointment schedule.

Users accept the responsibility for verifying the accuracy and correctness of the information they provide on this system in connection with their application, and consent to the collection and use of their personal information.

All fees are non-refundable. Fees shall be forfeited for the following:
1. Applicants who failed to show up ther confirmed scheduled appointment;
2. Applicants whose application was rejected due to inconsistency and/or incorrect details indicated in their appointment application form.
3. Applicants who present descrepant and/or spurious/fake documentary requirements.
                            </textarea>
                            <input id="checkbox" type="checkbox" />
                            <label for="checkbox" style="display: inline; color:red; font-style: italic;">
                                I have read and understand the instructions and information on this page, and agree to
                                the Terms and Conditions on the use of this online appointment and scheduling system.
                            </label>
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
                    <!-- <h4><b>note: </b>your schedule request will only be accepted after you pay ₱200 for your reservation.</h4> -->
                    <div class="modal-footer">
                        <input type="hidden" value="1" name="type">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-success" id="btn-add" disabled>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(function() {

            var currPath = window.location.pathname; // Gets the current pathname ( /_display/ )

            $('.path').text('Current path is : ' + currPath);
            if (currPath == '/arg/php/designTemplates.php') { // Checks if the pathname equals the webpage you want the sidebar to be displayed on
                $('.designTemplatePage').toggle(); // Set the sidebar to visibility: visible and display: block
            } else {}

        })
    </script>
</body>

</html>