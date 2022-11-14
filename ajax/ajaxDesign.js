// <!-- Add user -->
$(document).on('click', '#btn-add', function (e) {

	var fd = new FormData();
	fd.append("type", $("#save_id").val());
	fd.append( "designImage", $("#designImage")[0].files[0]); // image
	fd.append("designName", $('#designName').val());
	fd.append("designPrice", $('#designPrice').val());
	fd.append("designStocks", $('#designStocks').val());
	fd.append("designCategory", $('#designCategory').val());
	$.ajax({
		data: fd,
		type: "POST",
		processData: false,
		contentType: false,
		cache: false,
		url: "../backend/saveDesign.php",
		success: function (dataResult) {
			var dataResult = JSON.parse(dataResult);
			console.log(dataResult);
			if (dataResult.statusCode == 200) {
				$('#addEmployeeModal').modal('hide');
				alert(dataResult.message);
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
	var designName = $(this).attr("data-designName");
	var designPrice = $(this).attr("data-designPrice");
	var designStocks = $(this).attr("data-designStocks");
	var designCategory = $(this).attr("data-designCategory");
	$('#id_u').val(id);
	$('#designName_u').val(designName);
	$('#designPrice_u').val(designPrice);
	$('#designStocks_u').val(designStocks);
	$('#designCategory_u').val(designCategory);
});
// <!-- Update -->
$(document).on('click', '#update', function (e) {
	var data = $("#update_form").serialize();
	$.ajax({
		data: data,
		type: "post",
		url: "../backend/saveDesign.php",
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
		url: "../backend/saveDesign.php",
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
				url: "../backend/saveDesign.php",
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
