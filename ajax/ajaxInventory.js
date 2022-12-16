// <!-- Add user -->
$(document).on('click', '#btn-add', function (e) {

	var fd = new FormData();
	fd.append("type", $("#save_id").val());
	if($("#inventoryImage")[0].files[0] != null)
	{
		fd.append("inventoryImage", $("#inventoryImage")[0].files[0]); // image
	}
	
	fd.append("itemName", $('#itemName').val());
	fd.append("itemPrice", $('#itemPrice').val());
	fd.append("itemStocks", $('#itemStocks').val());
	fd.append("itemCategory", $('#itemCategory').val());

	var itemName = $(this).attr("data-itemName");

	$('#itemName_u').val(itemName);



	$.ajax({
		data: fd,
		type: "POST",
		processData: false,
		contentType: false,
		cache: false,
		url: "../backend/saveInventory.php",
		success: function (dataResult) {
			var dataResult = JSON.parse(dataResult);
			console.log(dataResult);
			if (dataResult.statusCode == 200) {
				$('#addEmployeeModal').modal('hide');
				Swal.fire(
					'Success!',
					'Data added succesfully!',
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

// UPDATE
$(document).on('click', '.update', function (e) {
	var id = $(this).attr("data-id");
	var itemName = $(this).attr("data-itemName");
	var availability = $(this).attr("data-availability");
	var itemPrice = $(this).attr("data-itemPrice");
	var itemStocks = $(this).attr("data-itemStocks");
	var itemCategory = $(this).attr("data-itemCategory");

	$('#id_u').val(id);
	$('#itemName_u').val(itemName);
	$('#availability_u').val(availability);
	$('#itemPrice_u').val(itemPrice);
	$('#itemStocks_u').val(itemStocks);
	$('#itemCategory_u').val(itemCategory);
});

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

// DELETE
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
			location.reload();
		}
	});
});

// DELETE MULTIPLE
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

// BUY
$(document).on('click', '.buy', function (e) {
	var id_b = $(this).attr("data-id_b");
	var itemName_b = $(this).attr("data-itemName_b");
	var itemPrice_b = $(this).attr("data-itemPrice_b");
	var itemStocks_b = $(this).attr("data-itemStocks_b");
	var itemCategory_b = $(this).attr("data-itemCategory_b");

	$('#id_b').val(id_b);
	$('#itemName_b').val(itemName_b);
	$('#itemPrice_b').val(itemPrice_b);
	$('#itemStocks_b').val(itemStocks_b);
	$('#itemCategory_b').val(itemCategory_b);

	
});

$(document).on('click', '#buy', function (e) {
	var data = $("#buy_form").serialize();
	$.ajax({
		data: data,
		type: "post",
		url: "../backend/saveInventory.php",
		success: function (dataResult) {
			var dataResult = JSON.parse(dataResult);
			if (dataResult.statusCode == 200) {
				$('#buyModal').modal('hide');
				Swal.fire(
					'Success!',
					'Data added succesfully!',
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
