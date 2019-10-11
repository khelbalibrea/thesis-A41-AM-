
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
			

				
						 require '../connection.php';
						

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
								  <h4 style="font-family: Georgia; margin-bottom: 2%;"><b><center><i class="fa fa-file-pdf-o"></i> NEW CCJ PROJECT</center></b></h4>
							 	<center><form  action="staff_ccj_upload.php?" method="POST" enctype="multipart/form-data">
								<input type="text" class="input"  placeholder="Student First Name" name="Firstname" autocomplete="on" required maxlength="50" minlength="2"/>
				<br>
				<input type="text" class="input"  placeholder="Student Middle Name" name="Middlename" autocomplete="on" required maxlength="50" minlength="1"/>
				<br>
				<input type="text" class="input"  placeholder="Student Last Name" name="Lastname" autocomplete="on" required maxlength="50" minlength="2"/>
				<br>
						<select class="input" required name="Course">

						<option name="Course" value="">Course</option>
						<option name="Course" value="BS in Criminology">BS in Criminology</option>
						
						 </select> <br>
						 
						 <input type="text" class="input"  placeholder="Department" name="Department" readonly autocomplete="on" value="College of Criminal Justice" required maxlength="50" minlength="2"/>
				<br>
				
						<select class="input" required name="Proj-type">

						<option name="Proj-type" value="">Project Type</option>
						<option name="Proj-type" value="OJT">OJT</option>
						<option name="Proj-type" value="Research">Research</option>
						<option name="Proj-type" value="Thesis">Thesis</option>
						<option name="Proj-type" value="Feasibility Study">Feasibility Study</option>
						 </select> <br>
						  
						 <textarea name="Description" required id="description" class="input" placeholder="Project Description" ></textarea><br>
								<input type="date" class="input" readonly value="<?php echo date("Y-m-d"); ?>" name="DateUpload"/><br>
					
								<input type="file" class="input" name="file" accept=".pdf" required/><br>
								<input id="btn-reg" class="btn btn-primary btn-medium" type="submit" name="submit" value="Submit">
								<br><a id="btn-reg1" class="btn btn-success btn-medium" role="button" href="staff_coe.php?">Cancel</a>
								</form>
								
								
						</body>
						</html>





