		
	<?php 
	
	
	require '../session.php';
	if($userlevel == "ADMINISTRATOR"){	
			echo '<script>
					window.location.replace("../admin/");
			</script>';
				}
	
		if($userlevel == "STAFF"){	
			echo '<script>
					window.location.replace("../staff/");
			</script>';
				}
	
	
	
$infoID;
$get_record = mysqli_query($connection, "SELECT * FROM account WHERE ID='$infoID'");

			 $get_record_num = mysqli_num_rows($get_record);

			 if ($get_record_num > 0){
		 while ($row = mysqli_fetch_assoc($get_record)){
				 $db_Firstname = $row["firstname"];
				 $db_Middlename = $row["middlename"];
				 $db_Lastname = $row["lastname"];
				 $db_Gender = $row["gender"];
				$db_Course = $row["course"];
				 $db_Department = $row["department"];
				}
				
				if (isset($_POST["btn-update"])){
				$new_ID = $_POST['new_ID'];
				$new_Fname = $_POST["new_Fname"];
				$new_Mname = $_POST["new_Mname"];
				$new_Lname = $_POST["new_Lname"];
				$new_Gender = $_POST["new_Gender"];
				$new_Course = $_POST["new_Course"];
				$new_Department = $_POST["new_Department"];
				//History Activity
				$History_Description = "Q0xJRU5UIElORk9STUFUSU9OIENIQU5HRUQ=";
				$History_Status = 1;
				$History_Operation = "VVBEQVRF";
				$History_Date = date('Y-M-d');
					
					mysqli_query($connection, "UPDATE account SET firstname='$new_Fname',Middlename= '$new_Mname',Lastname= '$new_Lname',Gender= '$new_Gender', Course='$new_Course', Department= '$new_Department' WHERE ID = '$new_ID;'");
					mysqli_query($connection,"INSERT INTO history (firstname,middlename,lastname,description,status,operation,date)
													VALUES('$new_Fname','$new_Mname','$new_Lname','$History_Description','$History_Status','$History_Operation','$History_Date')");
					echo '<script>alert("YOUR INFORMATION WAS UPDATED SUCCESSFULLY !");</script>';
					echo'<script>window.location.replace("index.php?");</script>';
						 while ($row = mysqli_fetch_assoc($get_record)){
				 $db_Firstname = $row["firstname"];
				 $db_Middlename = $row["middlename"];
				 $db_Lastname = $row["lastname"];
				 $db_Gender = $row["gender"];
				$db_Course = $row["course"];
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
			
			<script>
				function showDepartment(){
					var selectBox = document.getElementById('course');
					var userInput = selectBox.options[selectBox.selectedIndex].value;
						if (userInput == 'BS in Computer Science'){
							document.getElementById('department').value = 'College of Information Computer Technology';	
						}
						else if(userInput == 'BS in Information Technology'){
							document.getElementById('department').value = 'College of Information Computer Technology';	
						}
						else if(userInput == 'BS in Information System'){
							document.getElementById('department').value = 'College of Information Computer Technology';	
						}
						else if(userInput == 'BS in Industrial Technology'){
							document.getElementById('department').value = 'College of Technology & Engineering';	
						}
						else if(userInput == 'BS in Education'){
							document.getElementById('department').value = 'College of Education';	
						}
						else if(userInput == 'BS in Entrepreneurship'){
							document.getElementById('department').value = 'College of Business Management';	
						}
						else if(userInput == 'BS in Civil Engineering'){
							document.getElementById('department').value = 'College of Technology & Engineering';	
						}
						else if(userInput == 'BS in Public Administration'){
							document.getElementById('department').value = 'College of Arts & Science';	
						}
						else if(userInput == 'BS in Mechanical Engineering'){
							document.getElementById('department').value = 'College of Technology & Engineering';	
						}
						else if(userInput == 'BS in Tourism Management'){
							document.getElementById('department').value = 'College of Hotel Tourism Management';	
						}
						else if(userInput == 'BS in Psychology'){
							document.getElementById('department').value = 'College of Arts and Science';	
						}
						else if(userInput == 'BS in Business Administration'){
							document.getElementById('department').value = 'College of Business Management';	
						}
						else if(userInput == 'BS in Business Management'){
							document.getElementById('department').value = 'College of Business Management';	
						}
						else if(userInput == 'BS in Marketing Management'){
							document.getElementById('department').value = 'College of Business Management';	
						}
						else if(userInput == 'BS in Hotel and Restaurant Management'){
							document.getElementById('department').value = 'College of Hotel Tourism Management';	
						}
						else if(userInput == 'BS in Criminology'){
							document.getElementById('department').value = 'College of Criminal Justice';	
						}
						return false;
				}
				
				</script>
			
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
									<li><a href="client_cbm.php?"><i class="fa fa-fw fa-file"></i> CBM</a></li>
										<li><a href="client_chtm.php?"><i class="fa fa-fw fa-file"></i> CHTM</a></li>
										<li><a href="client_cict.php?"><i class="fa fa-fw fa-file"></i> CICT</a></li>
										<li><a href="client_cte.php?"><i class="fa fa-fw fa-file"></i> CTE</a></li>
										<li><a href="client_cas.php?"><i class="fa fa-fw fa-file"></i> CAS</a></li>
										<li><a href="client_coe.php?"><i class="fa fa-fw fa-file"></i> COE</a></li>
										<li><a href="client_ccj.php?"><i class="fa fa-fw fa-file"></i> CCJ</a></li>
								</ul>
							</li>
							
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-fw fa-user-circle"></i> <?php echo strtoupper($full); ?></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="client_profile.php?"><i class="fa fa-fw fa-user"></i> Profile</a></li>
									<li><a href="client_setting.php?"><i class="fa fa-fw fa-gear"></i> Account Settings</a></li>
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
<center><img src="../assets/img/Avatar.png" width="6%" style="margin-top: 5px;"><br><h5 style="font-weight: bold;">CLIENT</h5>
			<center><form method="POST" action="#" style="margin-top: 20px;">
			<input type="hidden" name="new_ID" value="<?php echo $infoID; ?>"/>
			<input id="fname" type="text" name="new_Fname" required value="<?php echo $db_Firstname; ?>" class="input-lg" maxlength="50" minlength="2"/><br>
			<input id="mname" type="text" name="new_Mname" required value="<?php echo $db_Middlename; ?>" class="input-lg" maxlength="50" minlength="2"/><br>
		  <input id="lname" type="text" name="new_Lname" required value="<?php echo $db_Lastname; ?>" maxlength="50" minlength="2" class="input-lg"/><br>
		 <select class="input-lg" id="gender" required name="new_Gender">
						<option name="Gender" <?php if($db_Gender == "Male"){echo "selected";} ?> value="Male">Male</option>
						<option name="Gender" <?php if($db_Gender == "Female"){echo "selected";} ?> value="Female">Female</option>
						 </select> <br>
			
	
			<select id="course" style="width: 38%; margin-bottom: 10px;" class="input-lg" required name="new_Course" onchange="return showDepartment();">

					<option name="new_Course" <?php if($db_Course == "BS in Computer Science"){echo "selected";} ?> value="BS in Computer Science">BS in Computer Science</option>
					<option name="new_Course" <?php if($db_Course == "BS in Information System"){echo "selected";} ?> value="BS in Information System">BS in Information System</option>
					<option name="new_Course" <?php if($db_Course == "BS in Information Technology"){echo "selected";} ?> value="BS in Information Technology">BS in Information Technology</option>
					<option name="new_Course" <?php if($db_Course == "BS in Industrial Technology"){echo "selected";} ?> value="BS in Industrial Technology">BS in Industrial Technology</option>
					<option name="new_Course" <?php if($db_Course == "BS in Education"){echo "selected";} ?> value="BS in Education">BS in Education</option>
					<option name="new_Course" <?php if($db_Course == "BS in Entrepreneurship"){echo "selected";} ?> value="BS in Entrepreneurship">BS in Entrepreneurship</option>
					<option name="new_Course" <?php if($db_Course == "BS in Civil Engineering"){echo "selected";} ?> value="BS in Civil Engineering">BS in Civil Engineering</option>
					<option name="new_Course" <?php if($db_Course == "BS in Public Administration"){echo "selected";} ?> value="BS in Public Administration">BS in Public Administration</option>
					<option name="new_Course" <?php if($db_Course == "BS in Tourism Management"){echo "selected";} ?> value="BS in Tourism Management">BS in Tourism Management</option>
					<option name="new_Course" <?php if($db_Course == "BS in Psychology"){echo "selected";} ?> value="BS in Psychology">BS in Psychology</option>
					<option name="new_Course" <?php if($db_Course == "BS in Business Administration"){echo "selected";} ?> value="BS in Business Administration">BS in Business Administration</option>
					<option name="new_Course" <?php if($db_Course == "BS in Business Management"){echo "selected";} ?> value="BS in Business Management">BS in Business Management</option>
					<option name="new_Course" <?php if($db_Course == "BS in Marketing Management"){echo "selected";} ?> value="BS in Marketing Management">BS in Marketing Management</option>
					<option name="new_Course" <?php if($db_Course == "BS in Hotel and Restaurant Management"){echo "selected";} ?> value="BS in Hotel and Restaurant Management">BS in Hotel and Restaurant Management</option>
					<option name="new_Course" <?php if($db_Course == "BS in Criminology"){echo "selected";} ?> value="BS in Criminology">BS in Criminology</option>

					 </select> <br>
				 <input type="text" class="input-lg" name="new_Department" id="department" readonly placeholder="Department" value="<?php echo $db_Department; ?>" />
				<br>
					 
					 <input type="submit" value="Update" name="btn-update" onclick="return confirm(' ARE YOU SURE YOU WANT TO CHANGE ?')" id="update" class="btn btn-primary btn-medium"/><br>
					 <a role="button" href="index.php?" name="btn-cancel" id="cancel" class="btn btn-success btn-medium">Cancel</a>
			
			</form>

		</body>

		</html>