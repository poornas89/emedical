<!DOCTYPE html>
<?php
	require_once 'session.php';
	require_once '../connect.php';
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
				
				<button type = "button" id = "add_admin" class = "btn btn-success"><span class = "glyphicon glyphicon-plus"></span> Back</button>
				<button style = "display:none;" type = "button" id = "cancel_admin" class = "btn btn-warning"><span class = "glyphicon glyphicon-hand-right"></span> Cancel</button>
				<br />
				<br />
				
				<div id = "sidecontent" class = "well pull-right">
				<div class = "alert alert-info">Pharmacy</div>
				<div class = "panel panel-default">
				<div class = "panel-heading">
					<div class = "form-inline">
						<label>PID:</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
						<input type = "text" style = "width:200px;" class = "form-control"  id = "search"/> &nbsp &nbsp &nbsp &nbsp
						<label>Patient Name &nbsp &nbsp &nbsp &nbsp  DOB</label>
					</div></br>
					
					<div class = "form-inline">	
						<label>PrescriptionID:</label>
						<input type = "text" style = "width:200px;" class = "form-control"  id = "search"/>&nbsp &nbsp &nbsp &nbsp
						<button class = "btn btn-primary" id = "btn_search"><span class = "glyphicon glyphicon">Search</span></button>&nbsp &nbsp &nbsp &nbsp
						<button class = "btn btn-primary" id = "btn_search"><span class = "glyphicon glyphicon-view">View Prescription</span></button>
					</div>
					<hr style = "border-top:1px dotted #000;"/>
					<div id = "result">
						
					</div>
					<br style = "clear:both;"/>
				</div>
				</div>
				</div>
			
				
				<div id = "a_table" class = "panel panel-default">
					<div  class = " panel-heading">	
						<table id = "table" class = "table table-bordered">
							<thead>
								<tr>
									<th>Drugname</th>
									<th>Qty</th>
									<th>Refills</th>
									<th>Dosage</th>
									<th>Frequency</th>
									<th>Status(Pending/Done)</th>
									<th>Edit</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$a_query = $conn->query("SELECT * FROM `lab`") or die(mysqli_error($conn));
									while($a_fetch = $a_query->fetch_array()){
										
								?>
								<tr>
									<td><?php echo $a_fetch['drugname']?></td>
									<td><?php echo md5($a_fetch['quantity'])?></td>
									<td><?php echo $a_fetch['refills']?></td>
									<td><?php echo $a_fetch['dosage']?></td>
									<td><?php echo md5($a_fetch['frequency'])?></td>
									<td><?php echo $a_fetch['status']?></td>
									<td><?php echo $a_fetch['edit']?></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>	
				</div>
				
				
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
<script src = "../js/jquery.dataTables.min.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/script.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	});
</script>

</html>