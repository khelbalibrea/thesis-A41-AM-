
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
						
					$projectID = $_GET['ID'];
								
					$get_record = mysqli_query($connection, "SELECT * FROM document WHERE ID='$projectID'");

					 $get_record_num = mysqli_num_rows($get_record);

					 if ($get_record_num > 0){
				 while ($row = mysqli_fetch_assoc($get_record)){
						 $db_ID = $row['ID'];
						 $db_Firstname = $row["firstname"];
						 $db_Middlename = $row["middlename"];
						 $db_Lastname = $row["lastname"];
						 $db_Course = $row["course"];
						 $db_Department = $row["department"];
						 $db_ProjectType = $row["project_type"];
						 $db_Description = $row["description"];
						 $db_File =	$row["file"];
						 $db_DateUploaded = $row["date_uploaded"];
			
						}}
								
					//UPDATE FUNCTION			
					
				if (isset($_POST["btn-update"])){
					$new_ID = $_POST['new_ID'];
					$new_Fname = $_POST["new_Firstname"];
					$Firstname = $_POST["new_Firstname"];
					$new_Mname = $_POST["new_Middlename"];
					$new_Lname = $_POST["new_Lastname"];
					$Lastname = $_POST["new_Lastname"];
					$new_Course = $_POST["new_Course"];
					$new_ProjectType = $_POST["new_ProjectType"];
					$new_Description = $_POST["new_Description"];
					$new_full = ($Firstname)." ".($Lastname);
					//HISTORY INSERTION
						$History1 = "PROJECT DETAILS FROM CCJ HAS CHANGED";
						$History_Dec = strtoupper($new_full)." - ".($History1);
						$History_Description = $History_Dec;
						$History_Status = 1;
						$History_Operation = "VVBEQVRF";	
						$History_Date = date('Y-M-d');
					
						mysqli_query($connection, "UPDATE document SET firstname='$new_Fname',Middlename= '$new_Mname',Lastname= '$new_Lname',course= '$new_Course',project_type= '$new_ProjectType',description= '$new_Description' WHERE ID = '$new_ID;'");
						
						mysqli_query($connection,"INSERT INTO history (firstname,middlename,lastname,description,status,operation,date)
														VALUES('$infofname','$infomname','$infolname','$History_Description','$History_Status','$History_Operation','$History_Date')");
														
						echo '<script>alert("PROJECT DETAILS UPDATED SUCCESSFUL !");</script>';
						echo'<script>window.location.replace("admin_ccj.php?");</script>';
							
				}
				

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
					width: 35%;
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
					#description{
					height: 60px;
					
					}
					</style>
									
									
								</head>

								<body>
									<nav class="navbar navbar-inverse">
										<div class="container-fluid">
											<div class="navbar-header">
												<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
												</button><a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-graduation-cap"></i> PROJECT REPOSITORY SYSTEM</a></div>
										  </div></nav>
										  <h4 style="font-family: Georgia; margin-bottom: 2%;"><b><center><i class="fa fa-file-pdf-o"></i> PROJECT DETAILS</center></b></h4>
										<center><form method="POST" enctype="multipart/form-data">
										
										<input type="hidden" name="new_ID" value="<?php echo $db_ID; ?>">
										
										<input type="text" class="input"  placeholder="Student First Name" name="new_Firstname" value="<?php echo $db_Firstname; ?>" autocomplete="on" required maxlength="50" minlength="2"/>
						<br>
						<input type="text" class="input"  placeholder="Student Middle Name / Initial" name="new_Middlename" value="<?php echo $db_Middlename; ?>" autocomplete="on" required maxlength="50" minlength="1"/>
						<br>
						<input type="text" class="input"  placeholder="Student Last Name" name="new_Lastname" value="<?php echo $db_Lastname; ?>" autocomplete="on" required maxlength="50" minlength="2"/>
						<br>
								<select class="input" required name="new_Course">
								<option name="new_Course" value="">Course</option>
								<option name="new_Course" <?php if($db_Course == "BS in Criminology"){ echo "selected";} ?> value="BS in Criminology">BS in Criminology</option>

								 </select> <br>
								 
								 <input type="text" class="input"  placeholder="Department" name="new_Department" readonly autocomplete="on" value="College of Criminal Justice" required maxlength="50" minlength="2"/>
						<br>
						
								<select class="input" required name="new_ProjectType">

								<option name="new_ProjectType" value="">Project Type</option>
								<option name="new_ProjectType" <?php if($db_ProjectType == "OJT"){ echo "selected";} ?> value="OJT">OJT</option>
								<option name="new_ProjectType" <?php if($db_ProjectType == "Research"){ echo "selected";} ?> value="Research">Research</option>
								<option name="new_ProjectType" <?php if($db_ProjectType == "Thesis"){ echo "selected";} ?> value="Thesis">Thesis</option>
								<option name="new_ProjectType" <?php if($db_ProjectType == "Feasibility Study"){ echo "selected";} ?> value="Feasibility Study">Feasibility Study</option>
								 </select> <br>
								  
								 <textarea name="new_Description" required id="description" class="input" placeholder="Project Description" ><?php echo $db_Description; ?></textarea><br>
										<h6 style="font-weight: bold; font-family: georgia;">( MM - DD - YYYY )</h6>
										<input type="date" class="input" readonly value="<?php echo $db_DateUploaded; ?>" name="DateUpload"/><br>
										<input id="btn-reg" class="btn btn-primary btn-medium" type="submit" name="btn-update" value="Update">
										<br><a id="btn-reg1" class="btn btn-success btn-medium" role="button" href="admin_ccj.php?">Cancel</a>
										</form>
										
										
								</body>
								</html>





