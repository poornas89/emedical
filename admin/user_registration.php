<!DOCTYPE html>
<?php
	require_once 'session.php';
?>
<html lang = "eng">
	<head>
<<<<<<< HEAD
		<title>Green Cross Medical Centre</title>
=======
		<title>E-Medical Record Sysytem</title>
>>>>>>> 2c4d646ac3c10524379c4394902cf8b13b8e021e
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
			<div class = "alert alert-info">User Registration</div>
							
			<div id = "exp_form"  class = "panel panel-default">
				<div  class = " panel-heading" >	
					
					<div style = "width:80%; margin-left:5%;">	
					
						<form method = "POST" action = "add_user.php">
						<div class = "alert alert-success">Personal Details</div>
							<div class = "form-inline">
								<label>User Type</label>&nbsp &nbsp &nbsp &nbsp
								<input type = "text"  style = "width:30%;" class = "form-control"  name = "usertype" required = "required"/>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								<label>User Code</label>
								<input type = "text"  style = "width:30%;"  class = "form-control" name = "usercode" required = "required"/>
							</div>
							<br />
												
							<div class = "form-group">
								<label>Hospital Name</label>
								<input type = "text" class = "form-control" name = "hospitalname" required = "required"/>
							</div>
							
							<div class = "form-group">
								<label>Title</label>
								<select name = "title" class = "form-control" required = "required">
									<option >Select </option>
									<option value = "Rev">Rev</option>
									<option value = "Mr">Mr</option>
									<option value = "Mrs">Mrs</option>
									<option value = "Master">Master</option>
									<option value = "Miss">Miss</option>
								</select>
							</div>
							<div class = "form-group">
								<label>First Name</label>
								<input type = "text" class = "form-control" name = "firstname" required = "required"/>
							</div>
							
							<div class = "form-group">
								<label>Middle Name</label>
								<input type = "text" class = "form-control" name = "middlename" required = "required"/>
							</div>
													
							<div class = "form-group">
								<label>Last Name</label>
								<input type = "text" class = "form-control" name = "lastname" required = "required"/>
							</div>
							
							<div class = "form-inline">
								<label>Date of Birth</label>
								<br />
								<input type = "date"   class = "form-control" name = "dateofbirth" required = "required"/>
							</div>
							
							<div class = "form-group">
								<label>NIC Number</label>
								<input type = "text" class = "form-control" name = "nicno" required = "required"/>
							</div>
							<div class = "form-group">
							<label>Sex</label>
								<select name = "sex" class = "form-control" required = "required">
									<option >Select </option>
									<option value = "Male">Male</option>
									<option value = "Female">Female</option>
								</select>
							</div>
							
							<div class = "alert alert-success">Contact Details</div>
							<div class = "form-inline">
								<label>Residence</label>&nbsp &nbsp &nbsp
								<input type = "text" style = "width:30%;" class = "form-control"  name = "residence" required = "required"/>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								<label>Address</label>&nbsp &nbsp &nbsp &nbsp &nbsp
								<input type = "textarea" class = "form-control" name = "address" required = "required"/>
							</div>
							<br>
							<div class = "form-inline">
								<label>MobileNo</label>&nbsp &nbsp &nbsp &nbsp 
								<input type = "text"  style = "width:30%;" class = "form-control"  name = "mobile" required = "required"/>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								<label>Email Id</label>&nbsp &nbsp &nbsp &nbsp &nbsp 
								<input type = "mail" class = "form-control" name = "email" required = "required"/>
							</div>
							
							<br>
							<div class = "form-group">
								<button style = "width:30%; class = "btn btn-primary form-control" name = "save_user"><span class = "glyphicon glyphicon-save"></span> Save</button>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<button type="Reset" style = "width:30%; class = "btn btn-primary form-control" name = "reset"><span class = "glyphicon glyphicon-save"></span> Reset</button>
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