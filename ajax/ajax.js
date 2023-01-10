// <!-- Add user -->
$(document).on('click', '#btn-add', function (e) {
	//start added shepo changes

	$(function () {

		var currPath = window.location.pathname; // Gets the current pathname ( /_display/ )

		$('.path').text('Current path is : ' + currPath);
		if (currPath == '/arg/php/designTemplates.php') { // Checks if the pathname equals the webpage you want the sidebar to be displayed on
			if ($("#selectedStocks").val() == "0" || $("#selectedStocks").val() == undefined || $("#selectedStocks").val() == "" || $("#selectedStocks").val() == null) {
				alert('No Available Stock!');
				location.reload();
			}
		} else { }

	})



	//end added shepo changes
	var data = $("#user_form").serialize();
	$.ajax({
		data: data,
		type: "post",
		url: "../backend/save.php",
		success: function (dataResult) {
			console.log(dataResult);
			var dataResult = JSON.parse(dataResult);
			if (dataResult.statusCode == 200) {
				$('#addEmployeeModal').modal('hide');
				// alert('Data added successfully !');

				const el = document.createElement('div')
				el.innerHTML = "Please proceed to the payment tab to settle your <a href='../php/payment.php'>payment</a> within the given time."

				Swal.fire(
					'Success!',
					el,
					'success'
				).then((result) => {
					/* Read more about isConfirmed, isDenied below */
					if (result.isConfirmed) {
						window.location.href = "../php/payment.php";
					}
				})
			}
			else if (dataResult.statusCode == 201) {
				alert(dataResult);
			}
		}
	});
});
$(document).on('click', '.update', function (e) {
	var id = $(this).attr("data-id");
	var firstName = $(this).attr("data-firstName");
	var lastName = $(this).attr("data-lastName");
	var phoneNumber = $(this).attr("data-phoneNumber");
	var date = $(this).attr("data-date");
	var services = $(this).attr("data-services");
	var time = $(this).attr("data-time");
	var user_status = $(this).attr("data-user_status");

	$('#id_u').val(id);
	$('#firstName_u').val(firstName);
	$('#lastName_u').val(lastName);
	$('#phoneNumber_u').val(phoneNumber);
	$('#date_u').val(date);
	$('#inputTime_u').val(time);
	$('#inputServices_u').val(services);

	$('#user_status').val(user_status);

	var services_u = $('#services_u'),
		$time_u = $('#time_u'),
		$options = $time_u.find('option');

	$('#services_u option').each(function () {
		if ($(this).text() == services) {
			$(this).prop("selected", true).trigger('change');
		}
	});

	$('#time_u option').each(function () {
		if ($(this).text() == time) {
			$(this).prop("selected", true);
		}
	});

});
// <!-- Update -->
$(document).on('click', '#update', function (e) {
	var data = $("#update_form").serialize();
	$.ajax({
		data: data,
		type: "post",
		url: "../backend/save.php",
		success: function (dataResult) {
			var dataResult = JSON.parse(dataResult);
			if (dataResult.statusCode == 200) {
				$('#editEmployeeModal').modal('hide');
				// alert('Data added successfully !');
				Swal.fire(
					'Updated!',
					'Data updated succesfully!',
					'success'
				).then((result) => {
					/* Read more about isConfirmed, isDenied below */
					if (result.isConfirmed) {
						location.reload();
					}
				})
			}
			else if (dataResult.statusCode == 201) {
				alert(dataResult);
			}
		}
	});
});
$(document).on("click", ".delete", function () {
	var id = $(this).attr("data-id");
	$('#id_d').val(id);

});
$(document).on("click", "#delete", function () {
	$.ajax({
		url: "../backend/save.php",
		type: "POST",
		cache: false,
		data: {
			type: 3,
			id: $("#id_d").val()
		},
		success: function (dataResult) {
			$('#deleteEmployeeModal').modal('hide');
			$("#" + dataResult).remove();
			location.reload();
		}
	});
});
$(document).on("click", "#delete_multiple", function () {
	var user = [];
	$(".user_checkbox:checked").each(function () {
		user.push($(this).data('user-id'));
	});
	if (user.length <= 0) {
		alert("Please select records.");
	}
	else {
		WRN_PROFILE_DELETE = "Are you sure you want to delete " + (user.length > 1 ? "these" : "this") + " row?";
		var checked = confirm(WRN_PROFILE_DELETE);
		if (checked == true) {
			var selected_values = user.join(",");
			console.log(selected_values);
			$.ajax({
				type: "POST",
				url: "../backend/save.php",
				cache: false,
				data: {
					type: 4,
					id: selected_values
				},
				success: function (response) {
					var ids = response.split(",");
					for (var i = 0; i < ids.length; i++) {
						$("#" + ids[i]).remove();
						location.reload();
					}
				}
			});
		}
	}
});
$(document).ready(function () {
	$('[data-toggle="tooltip"]').tooltip();
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function () {
		if (this.checked) {
			checkbox.each(function () {
				this.checked = true;
			});
		} else {
			checkbox.each(function () {
				this.checked = false;
			});
		}
	});
	checkbox.click(function () {
		if (!this.checked) {
			$("#selectAll").prop("checked", false);
		}
	});
});
