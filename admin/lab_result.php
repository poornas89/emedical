<!DOCTYPE html>
<?php
	require_once 'session.php';
?>
<html lang = "eng">
	<head>
		<title>Green Cross Medical Centre</title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery-ui.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
	</head>
<body>
<!--------------------HEAD---------------------->
<?php include'head.php'?>
<!--------------------HEAD---------------------->
<!-------------------SIDEBAR------------------>
<?php include 'sidebar.php'?>
<!-------------------SIDEBAR------------------>

		<div id = "sidecontent" class = "well pull-right">
		<a href = "labtechnician.php" class = "btn btn-warning"><span class = "glyphicon glyphicon-hand-left"></span> Back</a>	
			<div class = "alert alert-info">Add Lab Result</div>
							
			<div id = "exp_form"  class = "panel panel-default">
				<div  class = " panel-heading" >	
					
					<div style = "width:80%; margin-left:5%;">	
					
						<form method = "POST" action = "add_lab_result.php">
						<div class = "alert alert-success">Lab Result Info</div>
							<div class = "form-inline">
								<label>Patient ID</label>&nbsp &nbsp &nbsp &nbsp
								<input type = "text"  style = "width:30%;" class = "form-control"  name = "patientid" required = "required"/>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								<label>Lab ID</label>
								<input type = "text"  style = "width:30%;"  class = "form-control" name = "labid" required = "required"/>
							</div>
							<br />
												
							<div class = "form-group">
								<label>Lab Name</label>
								<input type = "text" class = "form-control" name = "labname" required = "required"/>
							</div>

							<div class = "form-group">
								<label>Patient Name</label>
								<input type = "text" class = "form-control" name = "paitientname" required = "required"/>
							</div>
							
							<div class = "form-group">
								<label>Doctor Name</label>
								<input type = "text" class = "form-control" name = "docname" required = "required"/>
							</div>

							<div class = "form-group">
								<label>Test Type</label>
								<select name = "testtype" class = "form-control" required = "required">
									<option >Select </option>
									<option value = "FBC">FBC</option>
									<option value = "ANA">ANA</option>
									<option value = "BMP">BMP</option>
									<option value = "HCG">HCG</option>
									<option value = "ESR">ESR</option>
								</select>
							</div>
							<div class = "form-group">
								<label>Additional Test Info</label>
								<input type = "text" class = "form-control" name = "testinfo"/>
							</div>
							

							<div class = "form-inline">
							<label>Test Status</label><br>
							<div class="radio">
      							<input type="radio" name="pendone" checked><label>&nbspPending</label>
    						</div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

							<div class="radio">
      							<input type="radio" name="pendone" ><label>&nbspComplete</label>
    						</div> 
							</div> <br>
													
							<div class = "form-group">
								<label>Other Details</label>
								<textarea class="form-control" rows="5" name="otherd"></textarea>
							</div>
							
							
							
							<br>
							<div class = "form-group">
								<button style = "width:30%; class = "btn btn-primary form-control" name = "save_user"><span class = "glyphicon glyphicon-save"></span> Save</button>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<button type="Reset" style = "width:30%; class = "btn btn-primary form-control" name = "reset"><span class = "glyphicon glyphicon-remove"></span> Reset</button>
							</div>
						</form>	
					</div>	
				</div>
			</div>
		<br /><br /><br />
		<br /><br /><br />
		</div>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<?php include'footer.php'?>
</body>	
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/sidebar.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.min.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	})
</script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('.expenses_id').on('click', function(){
			$expenses_id = $(this).attr('name');
			$('.delete_expenses').on('click', function(){
				window.location = 'delete_expenses.php?expenses_id=' + $expenses_id;
			});
		})
	});
</script>
<script src = "../js/sidebar.js"></script>
<script src = "../js/script.js"></script>
</html>