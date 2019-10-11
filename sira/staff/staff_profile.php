		
	<?php 
	
	require '../session.php';
	
		if($userlevel == "CLIENT"){	
			echo '<script>
					window.location.replace("../client/");
			</script>';
				}
	
	if($userlevel == "ADMINISTRATOR"){	
			echo '<script>
					window.location.replace("../admin/");
			</script>';
				}
	
	
	
	require '../value.php';
	
	
$infoID;
$get_record = mysqli_query($connection, "SELECT * FROM account WHERE ID='$infoID'");

			 $get_record_num = mysqli_num_rows($get_record);

			 if ($get_record_num > 0){
		 while ($row = mysqli_fetch_assoc($get_record)){
				 $db_Firstname = $row["firstname"];
				 $db_Middlename = $row["middlename"];
				 $db_Lastname = $row["lastname"];
				 $db_Gender = $row["gender"];
				$db_Employee = $row["employee"];
				 $db_Department = $row["department"];
				}
				
				if (isset($_POST["btn-update"])){
				$new_ID = $_POST['new_ID'];
				$new_Fname = $_POST["new_Fname"];
				$new_Mname = $_POST["new_Mname"];
				$new_Lname = $_POST["new_Lname"];
				$new_Gender = $_POST["new_Gender"];
				$new_Department = $_POST["new_Department"];
				$History_Description = "U1RBRkYgSU5GT1JNQVRJT04gQ0hBTkdFRA==";
					$History_Status = 1;
					$History_Operation = "VVBEQVRF";
					$History_Date = date('Y-M-d');
				
					
					mysqli_query($connection, "UPDATE account SET firstname='$new_Fname',Middlename= '$new_Mname',Lastname= '$new_Lname',Gender= '$new_Gender',Department= '$new_Department' WHERE ID = '$new_ID;'");
					mysqli_query($connection,"INSERT INTO history (firstname,middlename,lastname,description,status,operation,date)
													VALUES('$new_Fname','$new_Mname','$new_Lname','$History_Description','$History_Status','$History_Operation','$History_Date')");
					echo '<script>alert("STAFF INFORMATION UPDATED SUCCESSFUL !");</script>';
					echo'<script>window.location.replace("index.php?");</script>';
						 while ($row = mysqli_fetch_assoc($get_record)){
				 $db_Firstname = $row["firstname"];
				 $db_Middlename = $row["middlename"];
				 $db_Lastname = $row["lastname"];
				 $db_Gender = $row["gender"];
				$db_Employee = $row["employee"];
				 $db_Department = $row["department"];
				}
					}}
				
					
	?>
		
		

		<!DOCTYPE html>
		<html>

		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Project Repository Management System</title>
			<?php
			require '../zxc.php';
			?>
			<style>
			#fname{
			width: 38%;
			margin-bottom: 10px;
			}
			#mname{
			width: 38%;
			margin-bottom: 10px;
			}
			#lname{
			width: 38%;
			margin-bottom: 10px;
			}
			#employee{
			width: 38%;
			margin-bottom: 10px;
			}
			#gender{
			width: 38%;
			margin-bottom: 10px;
			}
			#department{
			width: 38%;
			margin-bottom: 10px;
			}
			#update{
			width: 38%;
			height: 43px;
			font-weight: bold;
			font-size: 16px;
			margin-bottom: 7px;
			}
			#cancel{
			width: 38%;
			height: 43px;
			font-weight: bold;
			font-size: 16px;
			margin-bottom: 7px;
			}
			</style>
			
		</head>

		<body>
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button><a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-graduation-cap"></i> PROJECT REPOSITORY SYSTEM</a></div>
					<div class="collapse navbar-collapse" id="navcol-1">
						<ul class="nav navbar-nav navbar-right">
					  
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-folder-open"></i> TCU PROJECT DOCUMENTS</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="staff_cbm.php?"><i class="fa fa-fw fa-file"></i> CBM</a></li>
									<li><a href="staff_chtm.php?"><i class="fa fa-fw fa-file"></i> CHTM</a></li>
									<li><a href="staff_cict.php?"><i class="fa fa-fw fa-file"></i> CICT</a></li>
									<li><a href="staff_cte.php?"><i class="fa fa-fw fa-file"></i> CTE</a></li>
									<li><a href="staff_cas.php?"><i class="fa fa-fw fa-file"></i> CAS</a></li>
									<li><a href="staff_coe.php?"><i class="fa fa-fw fa-file"></i> COE</a></li>
									<li><a href="staff_ccj.php?"><i class="fa fa-fw fa-file"></i> CCJ</a></li>
								</ul>
							</li>

							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-fw fa-user-circle"></i> <?php echo strtoupper($full); ?></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="staff_profile.php"><i class="fa fa-fw fa-user"></i> Profile</a></li>
									<li><a href="staff_setting.php?"><i class="fa fa-fw fa-gear"></i> Account Settings</a></li>
									<li><a href="http://facebook.com/Rasdie.07"><i class="fa fa-fw fa-code"></i> Developer</a></li>
									<li><a href="../logout.php?" name="logout" onclick="return confirm(' ARE YOU SURE YOU WANT TO LOGOUT ?')"><i class="fa fa-fw fa-sign-out"></i> Logout </a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		  
			</div>
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<center><img src="../assets/img/Avatar.png" width="6%" style="margin-top: 5px;"><br><h5 style="font-weight: bold;">STAFF</h5>
			<center><form method="POST" action="#" style="margin-top: 20px;">
			<input type="hidden" name="new_ID" value="<?php echo $infoID; ?>"/>
			<input id="employee" readonly type="text" name="new_Employee" required value="<?php echo $db_Employee; ?>" class="input-lg"/><br>
			<input placeholder="First Name" id="fname" type="text" name="new_Fname" required value="<?php echo $db_Firstname; ?>" class="input-lg" maxlength="50" minlength="2"/><br>
			<input placeholder="Middle Name" id="mname" type="text" name="new_Mname" required value="<?php echo $db_Middlename; ?>" class="input-lg" maxlength="50" minlength="2"/><br>
		  <input placeholder="Last Name" id="lname" type="text" name="new_Lname" required value="<?php echo $db_Lastname; ?>" maxlength="50" minlength="2" class="input-lg"/><br>
		 <select class="input-lg" id="gender" required name="new_Gender">
						<option name="Gender" value="">Gender</option>
						<option name="Gender" <?php if($db_Gender == "Male"){echo "selected";} ?> value="Male">Male</option>
						<option name="Gender" <?php if($db_Gender == "Female"){echo "selected";} ?> value="Female">Female</option>
						 </select> <br>
	<select id="department" class="input-lg" required name="new_Department">
					<option name="Department" <?php if($db_Department == "College of Business Management"){echo "selected";} ?> value="College of Business Management">College of Business Management</option>
					<option name="Department" <?php if($db_Department == "College of Technology & Engineering"){echo "selected";} ?> value="College of Technology & Engineering">College of Technology & Engineering</option>
					<option name="Department" <?php if($db_Department == "College of Information Computer Technology"){echo "selected";} ?> value="College of Information Computer Technology">College of Information Computer Technology</option>
					<option name="Department" <?php if($db_Department == "College of Arts and Science"){echo "selected";} ?> value="College of Arts and Science">College of Arts and Science</option>
					<option name="Department" <?php if($db_Department == "College of Education"){echo "selected";} ?> value="College of Education">College of Education</option>
					<option name="Department" <?php if($db_Department == "College of Hotel Tourism Management"){echo "selected";} ?> value="CHTM">College of Hotel Tourism Management</option>
					<option name="Department" <?php if($db_Department == "College of Criminal Justice"){echo "selected";} ?> value="College of Criminal Justice">College of Criminal Justice</option>
					 </select><br>
					 
					 <input type="submit" value="Update" onclick="return confirm(' ARE YOU SURE YOU WANT TO CHANGE ?')" name="btn-update" id="update" class="btn btn-primary btn-medium"/><br>
					 <a role="button" href="index.php?" name="btn-cancel" id="cancel" class="btn btn-success btn-medium">Cancel</a>
			
			</form>

		</body>

		</html>