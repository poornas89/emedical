<?php
	require_once '../connect.php';
	$admin_query = $conn->query("SELECT * FROM `user`") or die(mysqli_error());
	$admin_valid = $admin_query->num_rows;
	if($admin_valid == 1){
		echo '<script>alert("Error: Can\'t delete if only one user account is available")</script>';
		echo '<script>window.location = "user.php"</script>';
	}else{
		$conn->query("DELETE FROM `user` WHERE 'usercode' = '$_REQUEST[usercode]'") or die(mysqli_error());
		header('location:user.php');
	}	