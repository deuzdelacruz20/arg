<?php include '../include/navigation.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ARG AutoSign Shop</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="../ajax/ajax.js"></script>
  <link rel="stylesheet" href="../css/style.css">

  <style>
    body {
      background: linear-gradient(120deg, #71b7e6, #9b59b6);
      background-attachment: fixed;
    }
  </style>
</head>

<body>
  <!-- <div class="container">
  <div class="table-wrapper">
    <div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>DESIGN TEMPLATES</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Design</span></a>
						<a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
					</div>
				</div>
			</div>
    </div> -->


  <div class="container" style="background-color: white; border-radius:10px; ">
    <!-- width: 98%; height: 750px; -->
    <ul class="nav nav-tabs">
      <li><a href="#home">Home</a></li>
      <li><a href="#template1">Motorcycles</a></li>
      <li><a href="#template2">Cars</a></li>
      <li><a href="#template3">SUVs</a></li>
      <li><a href="#template4">Vans</a></li>
      <a href="#addDesignTemplateModal" class="btn btn-success" data-toggle="modal" style="float: right; margin-top:3px;"><span>Add New Design Template</span></a>
    </ul>

    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <h3>HOME</h3>
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="../pictures/template_1.png" alt="...">
              <div class="caption">
                <h3>Template 1</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p style="text-align: center;">
                  <a href="#" class="btn btn-success" role="button">Buy and Schedule now</a>
                  <a href="#" class="btn btn-primary" role="button">Update</a>
                  <a href="#" class="btn btn-danger" role="button">Delete</a>
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div id="template1" class="tab-pane fade">
        <h3>Template 1</h3>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div id="template2" class="tab-pane fade">
        <h3>Template 2</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div id="template4" class="tab-pane fade">
        <h3>Template 4</h3>
        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
    </div>
    <hr>
    <!-- <p class="act"><b>Active Tab</b>: <span></span></p>
    <p class="prev"><b>Previous Tab</b>: <span></span></p> -->
  </div>

  <script>
    $(document).ready(function() {
      $(".nav-tabs a").click(function() {
        $(this).tab('show');
      });
      // $('.nav-tabs a').on('shown.bs.tab', function(event) {
      //   var x = $(event.target).text(); // active tab
      //   var y = $(event.relatedTarget).text(); // previous tab
      //   $(".act span").text(x);
      //   $(".prev span").text(y);
      // });
    });
  </script>

  <div id="addDesignTemplateModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="user_form">
          <div class="modal-header">
            <h4 class="modal-title">Add New Design Template</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>DESIGN NAME</label>
              <input type="text" id="firstName" name="firstName" class="form-control" required>
            </div>
            <div class="form-group">
              <label>PRICE</label>
              <input type="phone" id="phoneNumber" name="phoneNumber" class="form-control" required>
            </div>
            <div class="form-group">
              <label>STOCKS</label>
              <input type="number" min="0" value="1" id="phoneNumber" name="phoneNumber" class="form-control" required>
            </div>
            <div class="form-group">
              <label>CATEGORY</label>
              <select name="services" id="services" class="form-control">
                <option value="" selected="selected" disabled style="text-align: center;">-Select category-</option>
                <option value="">Motorcycles</option>
                <option value="">Cars</option>
                <option value="">SUVs</option>
                <option value="">Vans</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" value="1" name="type">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <button type="button" class="btn btn-success" id="btn-add" disabled>Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>