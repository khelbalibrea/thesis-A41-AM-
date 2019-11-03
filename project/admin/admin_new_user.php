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
			require '../connection.php';
			// FOR DATA RETENTION PURPOSE, INCASE USERNAME IS INVALID!
			$Firstname = "";
			$Middlename = "";
			$Lastname = "";
			$Gender = "";;
			$RecoveryQuestion = "";
			$RecoveryAnswer = "";
			if(isset($_POST['btn-submit'])){
			
			
											
											$Firstname = $_POST["Fname"];
											$Middlename = $_POST["Mname"];
											$Lastname = $_POST["Lname"];
											$Gender = $_POST["Gender"];
											$Password = $_POST["Password"];
											$RecoveryQuestion = $_POST["RecoveryQuestion"];
											$RecoveryAnswer = $_POST["RecoveryAnswer"];
											$Userlevel = $_POST["Userlevel"];
											$Status = $_POST["Status"];
											$History_Description = $_POST['History_Description'];
											$History_Status = $_POST['History_Status'];
											$History_Operation = $_POST['History_Operation'];
											$History_Date = date('Y-M-d');
											
											$query = mysqli_query($conn, "SELECT * FROM adminaccount");
			
											$count = mysqli_num_rows($query);
											
											//Registration
											mysqli_query($conn, "INSERT INTO adminaccount(adminid, firstname,middlename,lastname,gender,password,recoveryquestion,recoveryanswer,userlevel,status)
												VALUES('ADM-0".($count+1)."','$Firstname','$Middlename','$Lastname','$Gender','$Password','$RecoveryQuestion','$RecoveryAnswer','$Userlevel','$Status')");
											//History Activity
											mysqli_query($conn,"INSERT INTO history (firstname,middlename,lastname,description,status,operation,date)
														VALUES('$Firstname','$Middlename','$Lastname','$History_Description','$History_Status','$History_Operation','$History_Date')");
												
													echo '<script>alert("NEW ADMINISTRATOR ACCOUNT ADDED !");</script>';
													echo'<script>window.location.replace("index.php?");</script>';
													
			
			
	}
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
				</head>

			<body>
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button><a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-graduation-cap"></i>TCU - THESIS REPOSITORY SYSTEM</a></div>
							
					<div class="collapse navbar-collapse" id="navcol-1">
						<ul class="nav navbar-nav navbar-right">
					  
							<li class="dropdown"><a aria-expanded="false" href="admin_project_documents.php?"><i class="fa fa-folder-open"></i> TCU - THESIS REPOSITORY SYSTEM</a></li>
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
						
					</div>
					  </div>
					  </nav>
					  
					 
					  
					  
					  
					  
				<center><form method="POST" action="#">
					
			  
					
					<h6 style="font-weight: bold; font-family: georgia;">ADMINISTRATOR INFORMATION</h6>
					
					
					<input type="text" class="input"  placeholder="First Name" name="Fname" autocomplete="on" required maxlength="50" minlength="2" value="<?php echo $Firstname; ?>"/>
					<br>
					<input type="text" class="input" placeholder="Middle Name" name="Mname" autocomplete="on" required maxlength="50" minlength="2" value="<?php echo $Middlename; ?>"/>
					<br>
					<input type="text" class="input" placeholder="Last Name" name="Lname" autocomplete="on" required maxlength="50" minlength="2" value="<?php echo $Lastname; ?>"/>
					<br>
					<select class="input" required name="Gender">

							<option name="Gender" value="">Gender</option>
							<option name="Gender" <?php if($Gender == "Male"){ echo "selected";} ?> value="Male">Male</option>
							<option name="Gender" <?php if($Gender == "Female"){ echo "selected";} ?> value="Female">Female</option>
							
							 </select> <br>
						
							 
							 
							 
					<br>
					<h6 style="font-weight: bold; font-family: georgia;">ACCOUNT INFORMATION</h6>
					<input type="password" class="input" placeholder="Password" name="Password" autocomplete="on" required maxlength="20" minlength="3"/>
					<br>
					
					<select class="input" required name="RecoveryQuestion">

							<option name="RecoveryQuestion" value="">Account Recovery Question</option>
							<option name="RecoveryQuestion" <?php if($RecoveryQuestion == "What is your favorite movie?"){ echo "selected";} ?> value="What is your favorite movie?">What is your favorite movie?</option>
							<option name="RecoveryQuestion" <?php if($RecoveryQuestion == "What is your mothers name?"){ echo "selected";} ?> value="What is your mothers name?">What is your mothers name?</option>
							<option name="RecoveryQuestion" <?php if($RecoveryQuestion == "What is your fathers name?"){ echo "selected";} ?> value="What is your fathers name?">What is your fathers name?</option>
							<option name="RecoveryQuestion" <?php if($RecoveryQuestion == "What is your pet name?"){ echo "selected";} ?> value="What is your pet name?">What is your pet name?</option>

							 </select> <br>
				<input type="text" class="input" placeholder="Recovery Answer"  name="RecoveryAnswer" required maxlength="30" minlength="2" value="<?php echo $RecoveryAnswer; ?>"/>
					<br>
					
					<input type="hidden" name="Userlevel" value="ADMINISTRATOR"/>
					<input type="hidden" name="History_Description" value="NEW REGISTERED ADMINISTRATOR"/>
					<input type="hidden" name="History_Operation" value="ADDED"/>
					<input type="hidden" name="History_Status" value="1"/>
					<input type="hidden" name="Employee" value="Taguig City University (Administrator)"/>
					<input type="hidden" name="Status" value="ACTIVE"/>
						
					<input id="btn-reg" class="btn btn-primary btn-medium" type="submit" name="btn-submit" value="Submit">
					<br><a id="btn-reg1" class="btn btn-success btn-medium" role="button" href="index.php?">Cancel</a>
					</form>  	
			</body>
			
			<?php
			
			require '../xcv.php';
			
			?>
			</html>
