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
			<div class = "alert alert-info">Registration</div>
			<a href = "patient_registration.php" class = "btn btn-success"><span class = "glyphicon glyphicon-plus"></span> Add Patient</a>
			
			<a href = "user_registration.php" class = "btn btn-success"><span class = "glyphicon glyphicon-plus"></span> Add User</a>
			<a href = "institute_registration.php" class = "btn btn-success"> <span class= "glyphicon glyphicon-plus"></span> Add Institute</a>
			
			<button style = "display:none;" type = "button" id = "cancel_expenses" class = "btn btn-warning"><span class = "glyphicon glyphicon-hand-right"></span> Cancel</button>
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