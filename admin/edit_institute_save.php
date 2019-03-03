<?php

	
	require_once '../connect.php';
	if(ISSET($_POST['update_institute'])){
		$q_user = $conn->query("SELECT * FROM `institute` WHERE `instituteid` = '$_REQUEST[id]'") or die(mysqli_error());
		$f_user = $q_user->fetch_array();
		
		
			$instituteid = $_POST['instituteid'];
			$institutename = $_POST['institutename'];
			$institutetype = $_POST['institutetype'];
			$instituteregno = $_POST['instituteregno'];
			$address1 = $_POST['address1'];
			$address2 = $_POST['address2'];
			$gsdivision = $_POST['gsdivision'];
			$phoneno = $_POST['phoneno'];
			$datereg = $_POST['datereg'];
			
			
		echo $instituteid;
		echo $institutename;
		echo $institutetype;
			echo $instituteregno;
			echo $address1;
			echo $address2;
			echo $gsdivision;
			echo $phoneno;
			echo $datereg;
			
		$conn->query("UPDATE `institute` SET `institutename` = '$institutename',`institutetype` = '$institutetype', `instituteregno` = '$instituteregno', `address1` = '$address1', `address2` = '$address2', `gsdivision` = '$gsdivision', `phoneno` = '$phoneno', `datereg  = '$datereg' WHERE `instituteid` = '$_REQUEST[id]'")
		or die(mysqli_error($conn));
		header('location:institute.php');
		//$conn->query("UPDATE `transaction` SET `student_id` = '$student_id' WHERE `student_id` = '$f_student[student_id]'");
	}
?>	