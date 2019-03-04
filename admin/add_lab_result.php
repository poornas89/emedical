<?php
	require_once '../connect.php';
	if(ISSET($_POST['save_lab_data'])){	
			
			$usertype = $_POST['usertype'];
			$usercode = $_POST['usercode'];
			$hospitalname = $_POST['hospitalname'];
			$title = $_POST['title'];
			$firstname = $_POST['firstname'];
			$middlename = $_POST['middlename'];
			$lastname = $_POST['lastname'];
			$dateofbirth= $_POST['dateofbirth'];
			$nicno = $_POST['nicno'];
			$sex = $_POST['sex'];
			$residence = $_POST['residence'];
			$address = $_POST['address'];
			$mobile= $_POST['mobile'];
			$email = $_POST['email'];
			
			$conn->query("INSERT INTO `user` VALUES('$usertype', '$usercode', '$hospitalname', '$title', '$firstname', '$middlename', '$lastname', '$dateofbirth', '$nicno', '$sex', '$residence', '$address','$mobile','$email')") 
			or die(mysqli_error($conn));
			header("location:labtechnician.php");
	}
?>