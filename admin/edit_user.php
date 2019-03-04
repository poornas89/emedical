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
								$q_user = $conn->query("SELECT * FROM `user` WHERE `usercode` = '$_REQUEST[id]'") or die(mysqli_error());
								$f_user = $q_user->fetch_array();
							?>
							<form method = "POST" enctype = "multipart/form-data" action = "edit_user_save.php?id=<?php echo $f_user['usercode']?>">
								
								
							<div class = "alert alert-success">Personal Details</div>
							<div class = "form-inline">
								<label>User Type</label>
								<input type = "text"  style = "width:20%;" class = "form-control"  name = "usertype" value = "<?php echo $f_user['usertype']?>"required = "required"/>
								
								
								<label>User Code</label>
								<input type = "text"  class = "form-control" name = "usercode" value = "<?php echo $f_user['usercode']?>"required = "required"/>
							</div>
							<br />
												
							<div class = "form-group">
								<label>Hospital Name</label>
								<input type = "text" class = "form-control" name = "hospitalname"value = "<?php echo $f_user['hospitalname']?>" required = "required"/>
							</div>
							
							<div class = "form-group">
								<label>Title</label>
								<select name = "title" class = "form-control" required = "required">
									
									<option <?php if($f_user['title'] == "Rev"){echo "selected";}?> value = "Rev">Rev</option>
									<option <?php if($f_user['title'] == "Mr"){echo "selected";}?> value = "Mr">Mr</option>
									<option <?php if($f_user['title'] == "Mrs"){echo "selected";}?> value = "Mrs">Mrs</option>
									<option <?php if($f_user['title'] == "Master"){echo "selected";}?> value = "Master">Master</option>
									<option <?php if($f_user['title'] == "Miss"){echo "selected";}?> value = "Miss">Miss</option>
								</select>
							</div>
							<div class = "form-group">
								<label>First Name</label>
								<input type = "text" class = "form-control" name = "firstname" value = "<?php echo $f_user['firstname']?>"required = "required"/>
							</div>
							
							<div class = "form-group">
								<label>Middle Name</label>
								<input type = "text" class = "form-control" name = "middlename" value = "<?php echo $f_user['middlename']?>"required = "required"/>
							</div>
													
							<div class = "form-group">
								<label>Last Name</label>
								<input type = "text" class = "form-control" name = "lastname" value = "<?php echo $f_user['lastname']?>"required = "required"/>
							</div>
							
							<div class = "form-inline">
								<label>Date of Birth</label>
								<br />
								<input type = "date"   class = "form-control" name = "dateofbirth" value = "<?php echo $f_user['dateofbirth']?>"required = "required"/>
							</div>
							
							<div class = "form-group">
								<label>NIC Number</label>
								<input type = "text" class = "form-control" name = "nicno" value = "<?php echo $f_user['nicno']?>"required = "required"/>
							</div>
							<div class = "form-group">
							<label>Sex</label>
								<select name = "sex" class = "form-control" required = "required">
									<option >Select </option>
									<option <?php if($f_user['sex'] == "Male"){echo "selected";}?>  value = "Male">Male</option>
									<option <?php if($f_user['sex'] == "Female"){echo "selected";}?> value = "Female">Female</option>
								</select>
							</div>
							
							<div class = "alert alert-success">Contact Details</div>
							<div class = "form-inline">
								<label>Residence</label>
								<input type = "text" style = "width:30%;" class = "form-control"  name = "residence" value = "<?php echo $f_user['residence']?>"required = "required"/>
							
								<label>Address</label>
								<input type = "textarea" class = "form-control" name = "address"value = "<?php echo $f_user['address']?>" required = "required"/>
							</div>
							<br>
							<div class = "form-inline">
								<label>MobileNo</label>
								<input type = "text"  style = "width:30%;" class = "form-control" value = "<?php echo $f_user['mobile']?>" name = "mobile" required = "required"/>
							
								<label>Email Id</label>
								<input type = "mail" class = "form-control" name = "email" value = "<?php echo $f_user['email']?>"required = "required"/>
							</div>
							
								
								<Br> <Br>
								
									<div class = "form-group">
										<button  style = "width:20%;" class = "btn btn-warning form-control" name = "update_user"> <span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
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