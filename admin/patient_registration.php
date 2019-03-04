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
			<div class = "alert alert-info">Patient Registration</div>
			
								
			<div id = "exp_form"  class = "panel panel-default">
				<div  class = " panel-heading" >	
				<div style = "width:80%; margin-left:5%;">	
					
						<form method = "POST" action = "add_patient.php">
						
						<div class = "alert alert-success">Personal Details</div>
							<div class = "form-inline">
								<label>Patient Id</label>&nbsp &nbsp &nbsp &nbsp
								<input type = "text"  style = "width:30%;" class = "form-control"  name = "patienid" required = "required"/>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								<label>Entry date</label>&nbsp &nbsp &nbsp &nbsp
								<input type = "date"  style = "width:30%;"  class = "form-control" name = "entrydate" required = "required"/>
							</div>
							<br />
							
							<div class = "form-inline">
								<label>Title</label>&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp
								
								<select style = "width:30%;" name = "title" class = "form-control" required = "required">
									<option >Select </option>
									<option value = "Rev">Rev</option>
									<option value = "Mr">Mr</option>
									<option value = "Mrs">Mrs</option>
									<option value = "Master">Master</option>
									<option value = "Miss">Miss</option>
								</select>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								<label>Release date</label>&nbsp &nbsp 
								<input type = "date"  style = "width:30%;"  class = "form-control" name = "releasedate" required = "required"/>
							</div>
							<br/>
							
							<div class = "form-inline">
								<label>First Name</label>&nbsp &nbsp &nbsp &nbsp
								<input type = "text"  style = "width:30%;" class = "form-control"  name = "firstname" required = "required"/>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
								<label>Date of Death</label>&nbsp &nbsp  
								<input type = "date"  style = "width:30%;"  class = "form-control" name = "entrydate" />
								
							</div>
							<br/>
									
							<div class = "form-inline">
								<label>Middle Name</label>&nbsp &nbsp 
								<input type = "text"  style = "width:30%;" class = "form-control"  name = "middlename" required = "required"/>
								&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp
								<label>Blood Group</label>&nbsp &nbsp  &nbsp  
								<input type = "text"  style = "width:10%;"  class = "form-control" name = "bloodgroup" required = "required"/>
								&nbsp<label>RH factor</label>&nbsp 
								<input type = "text"  style = "width:10%;"  class = "form-control" name = "rhfactor" required = "required"/>
							</div>
							<br/>
												
							<div class = "form-inline">
								<label>Last Name</label>&nbsp &nbsp &nbsp &nbsp
								<input type = "text"  style = "width:30%;" class = "form-control"  name = "lastname" required = "required"/>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
								<label>District</label>&nbsp &nbsp  &nbsp  
								<input type = "text"  style = "width:30%;"  class = "form-control" name = "district" required = "required"/>
															
							</div>
							<br/>
							
							
							
							
							<div class = "form-inline">
								<label>NIC Number</label> &nbsp &nbsp
								<input type = "text" style = "width:30%;"class = "form-control" name = "nicno" required = "required"/>
								&nbsp &nbsp &nbsp &nbsp &nbsp
								<label>Patient Alergic</label>&nbsp &nbsp  &nbsp  
								<input type = "text"  style = "width:30%;"  class = "form-control" name = "patientalergic" required = "required"/>	
							</div>
							<br/>
							
							<div class = "form-inline">
								<label>Date of Birth</label>&nbsp
								<input type = "text" style = "width:30%;" class = "form-control" name = "dateofbirth" required = "required"/>
							</div><br/>
						
							<div class = "form-inline">
								<label>Religion</label>&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp
								<input type = "text" style = "width:30%;" class = "form-control" name = "nicno" required = "required"/>
							</div><br/>
							
							<div class = "form-inline">
							<label>Sex</label>&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp
								<select name = "sex" style = "width:30%;" class = "form-control" required = "required">
									<option >Select </option>
									<option value = "Male">Male</option>
									<option value = "Female">Female</option>
								</select>
							</div><br/>
							
							<div class = "alert alert-success">Contact Details</div>
							<div class = "form-inline">
								<label>Marital Status</label>&nbsp &nbsp &nbsp
								<input type = "text" style = "width:30%;" class = "form-control" name = "nicno" required = "required"/>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								<label>Phone</label>&nbsp &nbsp &nbsp &nbsp &nbsp
								<input type = "text"   style = "width:30%;"class = "form-control" name = "address" required = "required"/>
							</div>
							<br>
							<div class = "form-inline">
								<label>Address</label>&nbsp &nbsp &nbsp &nbsp &nbsp
								<input type = "textarea"style = "width:30%; "   class = "form-control" name = "address" required = "required"/>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								<label>Email Id</label>&nbsp &nbsp &nbsp &nbsp &nbsp 
								<input type = "mail" class = "form-control" name = "email" required = "required"/>
							</div>
							<br>
							
							<div class = "alert alert-success">Guardian Details</div>
							<div class = "form-inline">
								<label>Guardian Name</label>&nbsp &nbsp &nbsp
								<input type = "text" style = "width:30%;" class = "form-control" name = "guardianname" required = "required"/>
								&nbsp &nbsp &nbsp &nbsp 
								<label>Guardian Phone</label>&nbsp &nbsp &nbsp &nbsp &nbsp
								<input type = "text"   style = "width:30%;"class = "form-control" name = "guardianphone" required = "required"/>
							</div>
							<br>
							<div class = "form-inline">
								<label>Guardian NIC No</label>&nbsp 
								<input type = "mail" class = "form-control" name = "guardiannicno" required = "required"/>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
								<label>Guardian Address</label>&nbsp &nbsp &nbsp &nbsp &nbsp
								<input type = "textarea"style = "width:30%; "   class = "form-control" name = "guardianaddress" required = "required"/>
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								
							</div>
							<br>
							
							
							
							<div class = "form-group">
								<button style = "width:10%; class = "btn btn-primary form-control" name = "save_user"><span class = "glyphicon glyphicon-save"></span> Save</button>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<button  type="Reset" style = "width:10%; class = "btn btn-primary form-control" name = "reset"><span class = "glyphicon glyphicon-save"></span> Reset</button>
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