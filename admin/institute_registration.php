<!DOCTYPE html>
<?php
	require_once 'session.php';
?>
<html lang = "eng">
	<head>
		<title>E-Medical Record Sysytem</title>
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
			<a href = "home.php" class = "btn btn-warning"><span class = "glyphicon-backward"></span> Back</a>	
			
			<div class = "alert alert-info">Institute Registration</div>
			
								
			<div id = "exp_form"  class = "panel panel-default">
				<div  class = " panel-heading" >	
					
					<div style = "width:80%; margin-left:5%;">	
					
						<form method = "POST" action = "add_institute.php">
						<div class = "alert alert-success">Institute Details</div>
											
							<div class = "form-inline">
								<label>Institute Id</label>
								<input type = "text" class = "form-control" name = "instituteid" required = "required"/>
							</div><br>
							
							<div class = "form-inline">
								<label>Institute Name</label>
								<input type = "text" class = "form-control" name = "institutename" required = "required"/>
							</div><br>
							
							<div class = "form-inline">
							<label>Institute Type </label>
								<select name = "institutetype" class = "form-control" required = "required">
									<option >Select </option>
									<option value = "Laboratory">Laboratory</option>
									<option value = "Pharmacy">Pharmacy</option>
								</select>
							</div><br>
							
							<div class = "form-inline">
								<label>Institute Reg. No</label>
								<input type = "text" class = "form-control" name = "instituteregno" required = "required"/>
							</div><br>
							
							
							<div class = "form-inline">
								<label>Address1</label>
								<input type = "text" class = "form-control" name = "address1" required = "required"/>
							</div><br>
							
							<div class = "form-inline">
								<label>Address2</label>
								<input type = "text" class = "form-control" name = "address2" required = "required"/>
							</div><br>
							
							<div class = "form-inline">
								<label>GS Division</label>
								<input type = "text" class = "form-control" name = "gsdivision" required = "required"/>
							</div><br>
							<div class = "form-inline">
								<label>Phone No</label>
								<input type = "text" class = "form-control" name = "phoneno" required = "required"/>
							</div><br>
							
							<div class = "form-inline">
								<label>Date of Registation</label>
								<input type = "text" class = "form-control" name = "datereg" required = "required"/>
							</div>							
							
							
							<br>
							<div class = "form-group">
								<button style = "width:10%; class = "btn btn-primary form-control" name = "save_institute"><span class = "glyphicon glyphicon-save"></span> Save</button>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<button type="Reset" style = "width:10%; class = "btn btn-primary form-control" name = "reset"><span class = "glyphicon glyphicon-save"></span> Reset</button>
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