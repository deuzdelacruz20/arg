// <!-- Add user -->
$(document).on('click', '#btn-add', function (e) {
	var data = $("#user_form").serialize();
	$.ajax({
		data: data,
		type: "post",
		url: "../backend/saveInventory.php",
		success: function (dataResult) {
			var dataResult = JSON.parse(dataResult);
			if (dataResult.statusCode == 200) {
				$('#addEmployeeModal').modal('hide');
				alert('Data added successfully !');
				location.reload();
			}
			else if (dataResult.statusCode == 201) {
				alert(dataResult);
			}
		}
	});
});
$(document).on('click', '.update', function (e) {
	var id = $(this).attr("data-id");
	var itemName = $(this).attr("data-itemName");
	var itemPrice = $(this).attr("data-itemPrice");
	var itemStocks = $(this).attr("data-itemStocks");
	var itemCategory = $(this).attr("data-itemCategory");

	$('#id_u').val(id);
	$('#itemName_u').val(itemName);
	$('#itemPrice_u').val(itemPrice);
	$('#itemStocks_u').val(itemStocks);
	$('#itemCategory_u').val(itemCategory);
});
// <!-- Update -->
$(document).on('click', '#update', function (e) {
	var data = $("#update_form").serialize();
	$.ajax({
		data: data,
		type: "post",
		url: "../backend/saveInventory.php",
		success: function (dataResult) {
			var dataResult = JSON.parse(dataResult);
			if (dataResult.statusCode == 200) {
				$('#editEmployeeModal').modal('hide');
				alert('Data updated successfully !');
				location.reload();
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
		url: "../backend/saveInventory.php",
		type: "POST",
		cache: false,
		data: {
			type: 3,
			id: $("#id_d").val()
		},
		success: function (dataResult) {
			$('#deleteEmployeeModal').modal('hide');
			$("#" + dataResult).remove();

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
				url: "../backend/saveInventory.php",
				cache: false,
				data: {
					type: 4,
					id: selected_values
				},
				success: function (response) {
					var ids = response.split(",");
					for (var i = 0; i < ids.length; i++) {
						$("#" + ids[i]).remove();
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