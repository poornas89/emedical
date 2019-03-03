<?php
	require_once '../connect.php';
	if(ISSET($_POST['save_institute'])){	
			
			$instituteid = $_POST['instituteid'];
			$institutename = $_POST['institutename'];
			$institutetype = $_POST['institutetype'];
			$instituteregno = $_POST['instituteregno'];
			$address1 = $_POST['address1'];
			$address2 = $_POST['address2'];
			$gsdivision = $_POST['gsdivision'];
			$phoneno = $_POST['phoneno'];
			$datereg = $_POST['datereg'];
			
			$conn->query("INSERT INTO `institute` VALUES( '$instituteid', '$institutename', '$institutetype', '$instituteregno', '$address1', '$address2', '$gsdivision', '$phoneno', '$datereg')") 
			or die(mysqli_error($conn));
			header("location:institute.php");
	}
?>