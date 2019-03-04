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
		<title>Information System Society Membership</title>
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
				<div class = "alert alert-info">Accounts/User/Update</div>
				<a class = "btn btn-warning" href = "user.php"><span class = "glyphicon glyphicon-hand-right"> Back</span></a>
				<br />
				<br />
				<div class = "panel panel-default">
				<div style = "width:80%; margin-left:5%;">	
					<div  class = " panel-heading" >	
							<?php
								$q_institute = $conn->query("SELECT * FROM `institute` WHERE `instituteid` = '$_REQUEST[id]'") or die(mysqli_error());
								$f_institute = $q_institute->fetch_array();
							?>
							<form method = "POST" enctype = "multipart/form-data" action = "edit_institute_save.php?id=<?php echo $f_institute['instituteid']?>">
								
								
							<div class = "alert alert-success">Institute Details</div>
							
							<div class = "form-group">
								<label>Institute Id</label>
								<input type = "text" class = "form-control" name = "instituteid" value = "<?php echo $f_institute['instituteid']?>" required = "required"/>
							</div>
							
							<div class = "form-group">
								<label>Institute Name</label>
								<input type = "text" class = "form-control" name = "institutename" value = "<?php echo $f_institute['institutename']?>"  required = "required"/>
							</div>
							
							<div class = "form-group">
							<label>Institute Type </label>
								<select name = "institutetype" class = "form-control" required = "required">
									<option >Select </option>
									<option <?php if($f_institute['institutetype'] == "Laboratory"){echo "selected";}?> value = "Laboratory">Laboratory</option>
									<option <?php if($f_institute['institutetype'] == "Pharmacy"){echo "selected";}?> value = "Pharmacy">Pharmacy</option>
								</select>
							</div>
							
							<div class = "form-group">
								<label>Institute Reg. No</label>
								<input type = "text" class = "form-control" name = "instituteregno"  value = "<?php echo $f_institute['instituteregno']?>" required = "required"/>
							</div>
							
							
							<div class = "form-group">
								<label>Address1</label>
								<input type = "text" class = "form-control" name = "address1"  value = "<?php echo $f_institute['address1']?>" required = "required"/>
							</div>
							
							<div class = "form-group">
								<label>Address2</label>
								<input type = "text" class = "form-control" name = "address2" value = "<?php echo $f_institute['address2']?>"  required = "required"/>
							</div>
							
							<div class = "form-group">
								<label>GS Division</label>
								<input type = "text" class = "form-control" name = "gsdivision" value = "<?php echo $f_institute['gsdivision']?>"  required = "required"/>
							</div>
							<div class = "form-group">
								<label>Phone No</label>
								<input type = "text" class = "form-control" name = "phoneno"  value = "<?php echo $f_institute['phoneno']?>" required = "required"/>
							</div>
							
							<div class = "form-group">
								<label>Date of Registation</label>
								<input type = "date" class = "form-control" name = "datereg"  value = "<?php echo $f_institute['datereg']?>" required = "required"/>
							</div>							
							
								
								<Br> <Br>
								
									<div class = "form-group">
										<button  style = "width:20%;" class = "btn btn-warning form-control" name = "update_institute"> <span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
									</div>
								</div>	
							</form>		
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
	<nav class = "navbar-default" id = "footer">
		<label class = "navbar-brand pull-right">&copy; Information System Society Membership <?php echo date('Y', strtotime('+8 HOURS'))?></label>
		<label class = "navbar-brand ">Developed By: Sheila Tandayag</label>
	</nav>
</body>	
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/sidebar.js"></script>
<script src = "../js/script.js"></script>
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#pic')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200)
						.css('display', 'block');
					$('.pic_hide').hide();
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
</html>