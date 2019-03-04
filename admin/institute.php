
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

<!-------------------SIDEBAR0------------------>
<?php include 'sidebar.php'?>
<!-------------------SIDEBAR0------------------>

		<div id = "sidecontent" class = "well pull-right">
		<div style = "width:100%; margin-left:0%;">	
				<div class = "alert alert-info">Accounts/Institute</div>
				<button type = "button" id = "add_institute" class = "btn btn-success"><span class = "glyphicon glyphicon-plus"></span> Add Institute</button>
				<button style = "display:none;" type = "button" id = "cancel_user" class = "btn btn-warning"><span class = "glyphicon glyphicon-hand-right"></span> Cancel</button>
				<br />
				<br />
				<div id = "s_table" class = "panel panel-default">
					<div  class = " panel-heading">	
						<table id = "table" class = "table table-bordered">
							<thead>
								<tr>
									<th>instituteid</th>
									<th>institutename</th>
									<th>institutetype</th>
									<th>instituteregno</th>
									<th>address1</th>
									<th>address2</th>
									<th>gsdivision </th>
									<th>phoneno </th>
									<th>datereg</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$s_query = $conn->query("SELECT * FROM `institute`") or die(mysqli_error());
									while($s_fetch = $s_query->fetch_array()){	
								?>
								<tr>
									<td><?php echo $s_fetch['instituteid']?></td>
									<td><?php echo $s_fetch['institutename']?></td>
									<td><?php echo $s_fetch['instituteregno']?></td>
									<td><?php echo $s_fetch['institutetype']?></td>
									<td><?php echo $s_fetch['address1']?></td>
									<td><?php echo $s_fetch['address2']?></td>
									<td><?php echo $s_fetch['gsdivision']?></td>
									<td><?php echo $s_fetch['phoneno']?></td>
									<td><?php echo $s_fetch['datereg']?></td>
									
																		
									<td><center><a href = "edit_institute.php?id=<?php echo $s_fetch['instituteid']?>" class = "btn btn-warning"><span class=  "glyphicon glyphicon-edit"></span> Update</a> 
								
									<a href = "delete_institute.php?id=<?php echo $s_fetch['instituteid']?>"  class = "btn btn-warning"><span class=  "glyphicon glyphicon-trash"></span> Delete</a></center></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>	
				</div>
				<div class = "modal fade" id = "delete_user" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
					<div class = "modal-dialog" role = "document">
						<div class = "modal-content ">
							<div class = "modal-body">
								<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
								<br />
								<center><a class = "btn btn-danger delete_student" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
							</div>
						</div>
					</div>
				</div>
	
<button onclick="myFunction1()">Print</button>&nbsp &nbsp &nbsp &nbsp &nbsp
<button onclick="goBack()">Go Back</button>

<script>
function myFunction1() 
{
    window.print();
}


function goBack() {
    window.history.go(-1);
}
</script>
<br><br>

<form action="excel.php" method="POST">
<input type="submit" name="export-excel" class="button" value="Export to Excel"/>
</form>

	
	<?php include'footer.php'?>
</body>	
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/sidebar.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.min.js"></script>
<script src = "../js/script.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	});
</script>
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#pic')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(200)
						.css('display', 'block');
					$('.pic_hide').hide();
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('.usercode').on('click', function(){
			$usercode = $(this).attr('name');
			$('.delete_user').on('click', function(){
				window.location = 'delete_user.php?usercode=' + $usercode;
			});
		});
	});
</script>
</html>