
<!DOCTYPE html>
<?php
	require_once 'session.php';
	require_once '../connect.php';
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

<!-------------------SIDEBAR0------------------>
<?php include 'sidebar.php'?>
<!-------------------SIDEBAR0------------------>

		<div id = "sidecontent" class = "well pull-right">
		<div style = "width:150%; margin-left:0%;">	
				<div class = "alert alert-info">Accounts/User</div>
				<a href = "user_registration.php" class = "btn btn-success"><span class = "glyphicon glyphicon-plus"></span> Add User</a>
				
				<button style = "display:none;" type = "button" id = "cancel_user" class = "btn btn-warning"><span class = "glyphicon glyphicon-hand-right"></span> Cancel</button>
				<br />
				<br />
				<div id = "s_table"  class = "panel panel-default">
					<div  class = " panel-heading">	
						<table id = "table" class = "table table-bordered">
							<thead>
								<tr>
									<th>usertype</th>
									<th>usercode</th>
									<th>hospitalname</th>
									<th>title</th>
									<th>firstname</th>
									<th>middlename</th>
									<th>lastname</th>
									<th>dateofbirth</th>
									<th>nicno</th>
									<th>sex</th>
									<th>residence</th>
									<th>address</th>
									<th>mobile</th>
									<th>email</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$s_query = $conn->query("SELECT * FROM `user`") or die(mysqli_error());
									while($s_fetch = $s_query->fetch_array()){	
								?>
								<tr>
									<td><?php echo $s_fetch['usertype']?></td>
									<td><?php echo $s_fetch['usercode']?></td>
									<td><?php echo $s_fetch['hospitalname']?></td>
									<td><?php echo $s_fetch['title']?></td>
									<td><?php echo $s_fetch['firstname']?></td>
									<td><?php echo $s_fetch['middlename']?></td>
									<td><?php echo $s_fetch['lastname']?></td>
									<td><?php echo $s_fetch['dateofbirth']?></td>
									<td><?php echo $s_fetch['nicno']?></td>
									<td><?php echo $s_fetch['sex']?></td>
									<td><?php echo $s_fetch['residence']?></td>
									<td><?php echo $s_fetch['address']?></td>
									<td><?php echo $s_fetch['mobile']?></td>
									<td><?php echo $s_fetch['email']?></td>
																		
									<td><center><a href = "edit_user.php?id=<?php echo $s_fetch['usercode']?>" class = "btn btn-warning"><span class=  "glyphicon glyphicon-edit"></span> Update</a> 
								
									<a href = "delete_user.php?id=<?php echo $s_fetch['usercode']?>"  class = "btn btn-warning"><span class=  "glyphicon glyphicon-trash"></span> Delete</a></center></td>
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
	
<button onclick="myFunction1()"  class = "btn">Print</button>&nbsp &nbsp &nbsp &nbsp &nbsp
<button onclick="goBack()"  class = "btn">Go Back</button>
<br><br>
<form action="excel.php" method="POST">
<input type="submit" name="export-excel" class = "btn" value="Export to Excel"/>
</form>
<script>
function myFunction1() 
{
    window.print();
}


function goBack() {
    window.history.go(-1);
}
</script>




	
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