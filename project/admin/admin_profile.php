		
	<?php 
	
	
	require '../session.php';
	
		if($userlevel == "CLIENT"){	
			echo '<script>
					window.location.replace("../client/");
			</script>';
				}
	
		if($userlevel == "STAFF"){	
			echo '<script>
					window.location.replace("../staff/");
			</script>';
				}
	
	
	require '../value.php';
	
	
$infoID;
$get_record = mysqli_query($conn, "SELECT * FROM adminaccount WHERE adminid='$infoID'");

			 $get_record_num = mysqli_num_rows($get_record);

			 if ($get_record_num > 0){
		 while ($row = mysqli_fetch_assoc($get_record)){
				 $db_Firstname = $row["firstname"];
				 $db_Middlename = $row["middlename"];
				 $db_Lastname = $row["lastname"];
				 $db_Gender = $row["gender"];
				}
				
				if (isset($_POST["btn-update"])){
				$new_ID = $_POST['new_ID'];
				$new_Fname = $_POST["new_Fname"];
				$new_Mname = $_POST["new_Mname"];
				$new_Lname = $_POST["new_Lname"];
				$new_Gender = $_POST["new_Gender"];
				$History_Description = "QURNSU5JU1RSQVRPUiBJTkZPUk1BVElPTiBDSEFOR0VE";
					$History_Status = 1;
					$History_Operation = "VVBEQVRF";
					$History_Date = date('Y-M-d');
				
					
					mysqli_query($conn, "UPDATE adminaccount SET firstname='$new_Fname',Middlename= '$new_Mname',Lastname= '$new_Lname',Gender= '$new_Gender' WHERE adminid = '$new_ID'");
					mysqli_query($conn,"INSERT INTO history (firstname,middlename,lastname,description,status,operation,date)
													VALUES('$new_Fname','$new_Mname','$new_Lname','$History_Description','$History_Status','$History_Operation','$History_Date')");
					echo '<script>alert("ADMINISTRATOR INFORMATION UPDATED SUCCESSFUL !");</script>';
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
			<title>TCU - THESIS REPOSITORY SYSTEM</title>
			 <link rel="icon" href="../assets/img/faviconTCU.png">
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
						</button><a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-graduation-cap"></i>TCU - THESIS REPOSITORY SYSTEM</a></div>
					<div class="collapse navbar-collapse" id="navcol-1">
						<ul class="nav navbar-nav navbar-right">
					  
							<li class="dropdown"><a aria-expanded="false" href="admin_project_documents.php?"><i class="fa fa-folder-open"></i>TCU - THESIS REPOSITORY SYSTEM</a></li>
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" value=""><i class="fa fa-fw fa-id-badge"></i> ACCOUNT MANAGEMENT</a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="admin_new_user.php?"><i class="fa fa-fw fa-user-plus"></i> New Administrator</a></li>
												<li><a href="admin_new_staff.php?"><i class="fa fa-fw fa-user-plus"></i> New Staff</a></li>
												<li><a href="admin_clientaccounts.php?"><i class="fa fa-fw fa-users"></i> View Client List</a></li>
											</ul>
											</li>			
								<li role="presentation">
								<a href="historylogs.php?" style="color: white;"><i class="fa fa-bell"></i> HISTORY LOGS [ <?php echo $Value; ?> ]</a>
								</li>
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-fw fa-user-circle"></i> <?php echo strtoupper($full); ?></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="admin_profile.php"><i class="fa fa-fw fa-user"></i> Profile</a></li>
									<li><a href="admin_setting.php?"><i class="fa fa-fw fa-gear"></i> Account Settings</a></li>
									<li><a href="admin_college_setting.php?"><i class="fa fa-fw fa-gear"></i> College</a></li>
									<li><a href="http://facebook.com/"><i class="fa fa-fw fa-code"></i> Developer</a></li>
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
<center><img src="../assets/img/Avatar.png" width="6%" style="margin-top: 5px;"><br><h5 style="font-weight: bold;">ADMINISTRATOR</h5>
			<center><form method="POST" action="#" style="margin-top: 20px;">
			<input type="hidden" name="new_ID" value="<?php echo $infoID; ?>"/>
			<input placeholder="First Name" id="fname" type="text" name="new_Fname" required value="<?php echo $db_Firstname; ?>" class="input-lg" maxlength="50" minlength="2"/><br>
			<input placeholder="Middle Name" id="mname" type="text" name="new_Mname" required value="<?php echo $db_Middlename; ?>" class="input-lg" maxlength="50" minlength="2"/><br>
		  <input placeholder="Last Name" id="lname" type="text" name="new_Lname" required value="<?php echo $db_Lastname; ?>" maxlength="50" minlength="2" class="input-lg"/><br>
		 <select class="input-lg" id="gender" required name="new_Gender">
						<option name="Gender" value="">Gender</option>
						<option name="Gender" <?php if($db_Gender == "Male"){echo "selected";} ?> value="Male">Male</option>
						<option name="Gender" <?php if($db_Gender == "Female"){echo "selected";} ?> value="Female">Female</option>
						 </select> <br>
					 
					 <input type="submit" value="Update" onclick="return confirm(' ARE YOU SURE YOU WANT TO CHANGE ?')" name="btn-update" id="update" class="btn btn-primary btn-medium"/><br>
					 <a role="button" href="index.php?" name="btn-cancel" id="cancel" class="btn btn-success btn-medium">Cancel</a>
			
			</form>

		</body>

		</html>