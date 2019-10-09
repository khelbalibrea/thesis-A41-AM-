			
		<?php 
	
		require '../connection.php';
		
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
		//$new_Username = "";
		//$new_Password = "";
		//$new_RecoveryQuestion = "";
		//$new_RecoveryAnswer = "";
		//$infoID;
		
		$CollegeName = "";
		$CollegeCode = "";
		
		if(isset($_POST['btn-add'])){
			$CollegeName = $_POST["college_name"];
			$CollegeCode = $_POST["college_code"];
			
			$query = mysqli_query($connection, "SELECT * FROM college WHERE collegename='$CollegeName'");
			
			$count = mysqli_num_rows($query);
			
			if ($count > 0){
				echo '<script>alert("COLLEGE ALREADY REGISTERED!");</script>';
			} else {
				//Registration
				mysqli_query($connection, "INSERT INTO college(collegename, collegecode) VALUES('$CollegeName', '$CollegeCode')");
				
				//History Activity
				//mysqli_query($connection,"INSERT INTO history (firstname,middlename,lastname,description,status,operation,date)
				//VALUES('$Firstname','$Middlename','$Lastname','$History_Description','$History_Status','$History_Operation','$History_Date')");
				
				echo '<script>alert("NEW COLLEGE ADDED !");</script>';
				echo'<script>window.location.replace("index.php?");</script>';
													
			}
		}
						
					
						
		?>
			
			

			<!DOCTYPE html>
			<html>

			<head>
			
				
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Thesis Repository Management System</title>
				<?php
				require '../zxc.php';
				?>
				<style>
				#collegename{
				width: 38%;
				margin-bottom: 10px;
				}
				#collegecode{
				width: 38%;
				margin-bottom: 10px;
				}
				#question{
				width: 38%;
				margin-bottom: 10px;
				}
				#answer{
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
				#add{
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
							</button><a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-graduation-cap"></i> THESIS REPOSITORY SYSTEM</a></div>
						<div class="collapse navbar-collapse" id="navcol-1">
							<ul class="nav navbar-nav navbar-right">
							
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
										<li><a href="admin_profile.php?"><i class="fa fa-fw fa-user"></i> Profile</a></li>
										<li><a href="admin_setting.php?"><i class="fa fa-fw fa-gear"></i> Account Settings</a></li>
										<li><a href="admin_setting.php?"><i class="fa fa-fw fa-gear"></i> College</a></li>
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
				
	<center><img src="../assets/img/college.png" width="6%" style="margin-top: 5px;"><br><h5 style="font-weight: bold;">COLLEGES</h5>

				<center><form method="POST" action="#" style="margin-top: 20px;">
				<!-- <input type="hidden" name="new_ID" value="<?php echo $infoID; ?>"/> -->
				<input id="collegename" type="text" name="college_name" required placeholder="Enter College Name" class="input-lg" maxlength="100" minlength="3"/><br>
				<input id="collegecode" type="text" name="college_code" required placeholder="Enter College Code" class="input-lg" maxlength="10" minlength="3"/><br>
				<!-- <input id="mname" type="password" name="new_Password" required placeholder="Confirm New Password" class="input-lg" maxlength="20" minlength="3"/><br> -->
				
						 
						 <input type="submit" value="Add" onclick="return confirm(' ARE YOU SURE YOU WANT TO ADD THIS COLLEGE?')" name="btn-add" id="add" class="btn btn-primary btn-medium"/><br>
						 <a role="button" href="index.php?" name="btn-cancel" id="cancel" class="btn btn-success btn-medium">Cancel</a>
				
				</form>

			</body>

			</html>