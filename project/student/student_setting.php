			
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
		$new_Username = "";
		$new_Password = "";
		$new_RecoveryQuestion = "";
		$new_RecoveryAnswer = "";
		$infoID;
	$get_record = mysqli_query($conn, "SELECT * FROM studentaccount WHERE studentid='$infoID'");

				 $get_record_num = mysqli_num_rows($get_record);

				 if ($get_record_num > 0){
			 while ($row = mysqli_fetch_assoc($get_record)){
					 $db_RecoveryQuestion = $row["recoveryquestion"];
					 $db_RecoveryAnswer = $row["recoveryanswer"];

					}
					
					if (isset($_POST["btn-update"])){ 
					
					if($_POST['confirm'] <> $_POST['new_Password']){
					echo '<script>alert("PLEASE RE-CONFIRM YOUR PASSWORD!");</script>';
					
					}else{
					$new_ID = $_POST['new_ID'];
					$new_Password = $_POST["new_Password"];
					$History_Description = "QURNSU5JU1RSQVRPUiBBQ0NPVU5UIENIQU5HRUQ=";
						$History_Status = 1;
						$History_Operation = "VVBEQVRF";
						$History_Date = date('Y-M-d');
						
						
					
						
						mysqli_query($conn, "UPDATE studentaccount SET password= '$new_Password' WHERE studentid = '$new_ID'");
						mysqli_query($conn,"INSERT INTO history (firstname,middlename,lastname,description,status,operation,date)
														VALUES('$infofname','$infomname','$infolname','$History_Description','$History_Status','$History_Operation','$History_Date')");
						echo '<script>alert("YOUR ACCOUNT INFORMATION HAS BEEN UPDATED SUCCESSFULLY ! PLEASE RE-LOGIN.");</script>';
						echo'<script>window.location.replace("../index.php?");</script>';
						
						while ($row = mysqli_fetch_assoc($get_record)){
					 $db_Username = $row["username"];
					 $db_Password = $row["password"];	
					 $db_RecoveryQuestion = $row["recoverquestion"];
					 $db_RecoveryAnswer = $row["recoveryanswer"];
					}
							 
						}}
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
				#fname{
				width: 38%;
				margin-bottom: 10px;
				}
				#mname{
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
							</button><a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-graduation-cap"></i> TCU - THESIS REPOSITORY SYSTEM</a></div>
						<div class="collapse navbar-collapse" id="navcol-1">
							<ul class="nav navbar-nav navbar-right">
							   	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-fw fa-user-circle"></i> <?php echo strtoupper($full); ?></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="student_profile.php?"><i class="fa fa-fw fa-user"></i> Profile</a></li>
										<li><a href="student_setting.php?"><i class="fa fa-fw fa-gear"></i> Account Settings</a></li>
										<li><a href="http://facebook.com/" onclick="myfun()"><i class="fa fa-fw fa-code"></i> Developer</a></li>
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
				
	<center><img src="../assets/img/Avatar.png" width="6%" style="margin-top: 5px;"><br><h5 style="font-weight: bold;">STUDENT</h5>

				<center><form method="POST" action="#" style="margin-top: 20px;">
				<input type="hidden" name="new_ID" value="<?php echo $infoID; ?>"/>
				<input id="fname" type="password" name="confirm" required placeholder="Enter New Password" class="input-lg" maxlength="20" minlength="3"/><br>
				<input id="mname" type="password" name="new_Password" required placeholder="Confirm New Password" class="input-lg" maxlength="20" minlength="3"/><br>
				
						 
						 <input type="submit" value="Update" onclick="return confirm(' ARE YOU SURE YOU WANT TO CHANGE ?')" name="btn-update" id="update" class="btn btn-primary btn-medium"/><br>
						 <a role="button" href="index.php?" name="btn-cancel" id="cancel" class="btn btn-success btn-medium">Cancel</a>
				
				</form>

			</body>

			</html>