	// <!-- Add user -->
	$(document).on('click','#btn-add',function(e) {
		var data = $("#user_form").serialize();
		$.ajax({
			data: data,
			type: "post",
			url: "backend/process.php",
			success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$('#addEmployeeModal').modal('hide');
						alert('Data added successfully !'); 
                        location.reload();						
					}
					else if(dataResult.statusCode==201){
					   alert(dataResult);
					}
			}
		});
	});
	// UPDATE
	$(document).on('click','.update',function(e) {
		var id=$(this).attr("data-id");
		var fullName=$(this).attr("data-fullName");
		var phoneNumber=$(this).attr("data-phoneNumber");
		var services=$(this).attr("data-services");
		var time=$(this).attr("data-time");
		$('#id_u').val(id);
		$('#fullName_u').val(fullName);
		$('#phoneNumber_u').val(phoneNumber);
		$('#time_u').val(time);
		$('#services_u').val(services);
	});
	// <!-- UPDATE MODAL -->
	$(document).on('click','#update',function(e) {
		var data = $("#update_form").serialize();
		$.ajax({
			data: data,
			type: "post",
			url: "backend/process.php",
			success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$('#editEmployeeModal').modal('hide');
						alert('Data updated successfully !'); 
                        location.reload();						
					}
					else if(dataResult.statusCode==201){
					   alert(dataResult);
					}
			}
		});
	});
	// DELETE
	$(document).on("click", ".delete", function() { 
		var id=$(this).attr("data-id");
		$('#id_d').val(id);
		
	});
	$(document).on("click", "#delete", function() { 
		$.ajax({
			url: "backend/process.php",
			type: "POST",
			cache: false,
			data:{
				type:3,
				id: $("#id_d").val()
			},
			success: function(dataResult){
					$('#deleteEmployeeModal').modal('hide');
					$("#"+dataResult).remove();
			
			}
		});
	});
	$(document).on("click", "#delete_multiple", function() {
		var user = [];
		$(".user_checkbox:checked").each(function() {
			user.push($(this).data('user-id'));
		});
		if(user.length <=0) {
			alert("Please select records."); 
		} 
		else { 
			WRN_PROFILE_DELETE = "Are you sure you want to delete "+(user.length>1?"these":"this")+" row?";
			var checked = confirm(WRN_PROFILE_DELETE);
			if(checked == true) {
				var selected_values = user.join(",");
				console.log(selected_values);
				$.ajax({
					type: "POST",
					url: "backend/process.php",
					cache:false,
					data:{
						type: 4,						
						id : selected_values
					},
					success: function(response) {
						var ids = response.split(",");
						for (var i=0; i < ids.length; i++ ) {	
							$("#"+ids[i]).remove(); 
						}	
					} 
				}); 
			}  
		} 
	});
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
		var checkbox = $('table tbody input[type="checkbox"]');
		$("#selectAll").click(function(){
			if(this.checked){
				checkbox.each(function(){
					this.checked = true;                        
				});
			} else{
				checkbox.each(function(){
					this.checked = false;                        
				});
			} 
		});
		checkbox.click(function(){
			if(!this.checked){
				$("#selectAll").prop("checked", false);
			}
		});
	});
