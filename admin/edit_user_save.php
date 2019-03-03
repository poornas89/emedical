<?php
	require_once '../connect.php';
	if(ISSET($_POST['update_user'])){
		$q_user = $conn->query("SELECT * FROM `user` WHERE `usercode` = '$_REQUEST[id]'") or die(mysqli_error());
		$f_user = $q_user->fetch_array();
		
		
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
			
		
		
		$conn->query("UPDATE `user` SET `usertype` = '$usertype',`usercode` = '$usercode',`hospitalname` = '$hospitalname', `title` = '$title',  `firstname` = '$firstname', `middlename` = '$middlename', `lastname` = '$lastname', 
		`dateofbirth` = '$dateofbirth', `nicno` = '$nicno', `sex` = '$sex',`residence` = '$residence', `address` = '$address', `mobile` = '$mobile', `email` = '$email' WHERE `usercode` = '$_REQUEST[id]'") or die(mysqli_error());
		header('location:user.php');
		//$conn->query("UPDATE `transaction` SET `student_id` = '$student_id' WHERE `student_id` = '$f_student[student_id]'");
	}
?>	