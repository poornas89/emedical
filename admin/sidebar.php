<div id = "sidebar">
	<ul id = "menu" class = "nav menu">
		<li>
			<a>
				<?php 
					require_once '../connect.php';
					$q_admin_side = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
					$f_admin_side = $q_admin_side->fetch_array();
					echo "loggedin as";
					echo "<center>" .$f_admin_side['name']."</center>";
				?>
			</a>
		</li>
		<!--<li><a href = "home.php"><i class = "glyphicon glyphicon-home"></i> Home</a></li>-->
		<li><a href = "home.php"><i class = "glyphicon glyphicon-home"></i> Home</a></li>
		<li><a href = "doctor.php"><i class = "glyphicon glyphicon-user"></i> Doctor</a></li>
		<li><a href = "labtechnician.php"><i class = "glyphicon glyphicon-scale"></i> Lab Technician</a></li>
		<li><a href = "pharmacy.php"><i class = "glyphicon glyphicon-ruble"></i> Pharmacy</a></li>
		<li><a href = ""><i class = "glyphicon glyphicon-user"></i> Accounts</a>
			<ul>
				<li><a href = "admin.php"><i class = "glyphicon glyphicon-user"></i> Administrator</a></li>
				<li><a href = "user.php"><i class = "glyphicon glyphicon-user"></i> User</a></li>
				<li><a href = "patient.php"><i class = "glyphicon glyphicon-user"></i> Patient</a></li>
				<li><a href = "institute.php"><i class = "glyphicon glyphicon-user"></i> Institute</a></li>
			
			</ul>
		</li>
		<!--<li><a href = "activity.php"><i class = "glyphicon glyphicon-calendar"></i> Activities</a></li>-->
		<!--<li><a href = "expenses.php"><i class = "glyphicon glyphicon-piggy-bank"></i> Expenses</a></li>-->
		<!--<li><a href = "transaction.php"><i class = "glyphicon glyphicon-ruble"></i> Transaction</a></li>-->
		<li><a href = ""><i class = "glyphicon glyphicon-cog"></i> Options</a>
			<ul>
				<li><a href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Logout</a></li>
			</ul>
		</li>
	</ul>
</div>