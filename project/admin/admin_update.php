
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
				
				 require '../connection.php';
				$ClientID = $_GET['ID'];
			$get_record = mysqli_query($connection, "SELECT * FROM account WHERE ID='$ClientID'");

						 $get_record_num = mysqli_num_rows($get_record);

						 if ($get_record_num > 0){
					 while ($row = mysqli_fetch_assoc($get_record)){
							 $db_Firstname = $row["firstname"];
							 $db_Middlename = $row["middlename"];
							 $db_Lastname = $row["lastname"];
							 $db_Gender = $row["gender"];
							$db_Course = $row["course"];
							 $db_Department = $row["department"];
							 $db_Username = $row["username"];
							 $db_Password = $row["password"];
							 $db_RecoveryQuestion = $row["recoveryquestion"];
							 $db_RecoveryAnswer = $row["recoveryanswer"];
							}
			}
			
			
					
					if (isset($_POST["btn-update"])){
						$new_ID = $_POST['new_ID'];
						$new_Fname = $_POST["new_Fname"];
						$new_Mname = $_POST["new_Mname"];
						$new_Lname = $_POST["new_Lname"];
						$new_Gender = $_POST["new_Gender"];
						$new_Course = $_POST["new_Course"];
						$new_Department = $_POST["new_Department"];
						$History_Description = "Q0xJRU5UIElORk9STUFUSU9OIENIQU5HRUQ=";
						$History_Status = 1;
						$History_Operation = "VVBEQVRF";
						$History_Date = date('Y-M-d');
							
							//Info Update
							mysqli_query($connection, "UPDATE account SET firstname='$new_Fname',Middlename= '$new_Mname',Lastname= '$new_Lname',Gender= '$new_Gender', Course='$new_Course', Department= '$new_Department' WHERE ID = '$new_ID;'");
							//History Activity
							mysqli_query($connection,"INSERT INTO history (firstname,middlename,lastname,description,status,operation,date)
														VALUES('$new_Fname','$new_Mname','$new_Lname','$History_Description','$History_Status','$History_Operation','$History_Date')");
							
							echo '<script>alert("CLIENT INFORMATION WAS UPDATED SUCCESSFULLY !");</script>';
							echo'<script>window.location.replace("admin_clientaccounts.php?");</script>';
							
							
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
					
					width: 30%;
					margin-bottom: 10px;
					}
						#mname{
					
					width: 30%;
					margin-bottom: 10px;
					}
						#lname{
					
					width: 30%;
					margin-bottom: 10px;
					}
					#course{
					
					width: 30%;
					margin-bottom: 10px;
					}
					#gender{
					
					width: 30%;
					margin-bottom: 10px;
					}
					#department{
					
					width: 30%;
					margin-bottom: 10px;
					}
					#btn1{
					margin-top: 6px;
					width: 30%;
					margin-bottom: 2px;
					height: 38px;
					font-size: 17px;
					}
					#btn2{
					margin-top: 6px;
					width: 30%;
					height: 38px;
					font-size: 17px;
					}
					</style>
					
				</head>

				<body>
					<nav class="navbar navbar-inverse">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
								</button><a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-fw fa-home"></i>TCU - THESIS REPOSITORY SYSTEM</a></div>
						  </div></nav>
					<center><form method="POST" action="#">
						
				  
						
						<h6 style="font-weight: bold;">--- STUDENT INFORMATION ---</h6>
						
						<input type="hidden" value="<?php echo $ClientID ?>" name="new_ID">
						
						<input type="text" id="fname" class="input-lg" value="<?php echo $db_Firstname; ?>"  placeholder="First Name" name="new_Fname" autocomplete="on" required maxlength="50" minlength="2"/>
						<br>                           
						<input type="text" id="mname" class="input-lg" value="<?php echo $db_Middlename; ?>" placeholder="Middle Name" name="new_Mname" autocomplete="on" required maxlength="50" minlength="2"/>
						<br>                           
						<input type="text" id="mname" class="input-lg" value="<?php echo $db_Lastname; ?>" placeholder="Last Name" name="new_Lname" autocomplete="on" required maxlength="50" minlength="2"/>
						<br>
						
						 <select class="input-lg" id="gender" required name="new_Gender">
								<option name="Gender" <?php if($db_Gender == "Male"){echo "selected";} ?> value="Male">Male</option>
								<option name="Gender" <?php if($db_Gender == "Female"){echo "selected";} ?> value="Female">Female</option>
								 </select> <br>
							
							<select id="course" class="input-lg" required name="new_Course" onchange="return showDepartment();">

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
					
								 
						
						
						<input type="hidden" name="Userlevel" value="CLIENT"/>
							
						<input id="btn1" class="btn btn-primary btn-medium" type="submit" onclick="return confirm(' ARE YOU SURE YOU WANT TO CHANGE ?')" name="btn-update" value="Update">
						<br><a id="btn2" class="btn btn-success btn-medium" role="button" href="admin_clientaccounts.php?">Cancel</a>
						</form>  	
				</body>
				</html>






