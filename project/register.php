<?php
	require 'connection.php';
	
	// FOR DATA RETENTION PURPOSE, INCASE USERNAME IS INVALID!
			$Firstname = "";
			$SchoolID = "";
			$Middlename = "";
			$Lastname = "";
			$Gender = "";
			$Course = "";
			$Department = "";
			$RecoveryQuestion = "";
			$RecoveryAnswer = "";
			
			if(isset($_POST['btn-submit'])){
				$SchoolID = strtoupper($_POST["sid"]);
				//substr(string, start, length)
					$userid1 = substr($SchoolID, 0, 2); //16
					$userid2 = substr($SchoolID, 2, 1); //-
					$userid3 = substr($SchoolID, 3, 5); //00384
					$userid4 = substr($SchoolID, 8, 1);	//-
					$userid5 = substr($SchoolID, 9, 1); //T
					$idlength = strlen($SchoolID);
				$Firstname = $_POST["Fname"];
				$Middlename = $_POST["Mname"];
				$Lastname = $_POST["Lname"];
				$Gender = $_POST["Gender"];
				$Course = $_POST["Course"];
				$Department = $_POST["Department"];
				$Username = $_POST["Username"];
				$Password = $_POST["Password"];
				$RecoveryQuestion = $_POST["RecoveryQuestion"];
				$RecoveryAnswer = $_POST["RecoveryAnswer"];
				$Userlevel = $_POST["Userlevel"];
				$Status = $_POST["Status"];
				$Employee = $_POST["Employee"];
				$History_Description = $_POST['History_Description'];
				$History_Status = $_POST['History_Status'];
				$History_Operation = $_POST['History_Operation'];
				$History_Date = date('Y-M-d');
				
				$query = mysqli_query($connection, "SELECT * FROM account WHERE username='$Username'");
				$query2 = mysqli_query($connection, "SELECT * FROM account WHERE schoolid='$SchoolID'");
				
				$count = mysqli_num_rows($query);
				$count2 = mysqli_num_rows($query2);
				
				if($idlength==9){
					echo '<script>alert("INVALID ID!");</script>';
				} elseif($idlength==10){
					if(is_numeric($userid1)==true && $userid2=='-' && is_numeric($userid3)==true){
						if($userid4=='-' && ($userid5=='T' || $userid5=='t')){
							if ($count > 0){
								echo '<script>alert("INVALID USERNAME, TRY ANOTHER !");</script>';
							} elseif($count2 > 0){
								echo '<script>alert("SCHOOL ID TAKEN!!");</script>';
							} else {
								//Registration
								mysqli_query($connection, "INSERT INTO account(schoolid,firstname,middlename,lastname,gender,course,department,username,password,recoveryquestion,recoveryanswer,userlevel,status,employee) 
									VALUES('$SchoolID','$Firstname','$Middlename','$Lastname','$Gender','$Course','$Department','$Username','$Password','$RecoveryQuestion','$RecoveryAnswer','$Userlevel','$Status','$Employee')");
					
								//History Activity
								mysqli_query($connection,"INSERT INTO history (firstname,middlename,lastname,description,status,operation,date) 
									VALUES('$Firstname','$Middlename','$Lastname','$History_Description','$History_Status','$History_Operation','$History_Date')");
					
								echo '<script>alert("NEW ACCOUNT ADDED !");</script>';
								echo'<script>window.location.replace("index.php?");</script>';
							}
						} else {
							echo '<script>alert("INVALID ID!");</script>';
						}
				} else {
					echo '<script>alert("INVALID ID!");</script>';
				}
				
				} elseif($idlength==8){
					if(is_numeric($userid1)==true && $userid2=='-' && is_numeric($userid3)==true){
							if ($count > 0){
								echo '<script>alert("INVALID USERNAME, TRY ANOTHER !");</script>';
							} elseif($count2 > 0){
								echo '<script>alert("SCHOOL ID TAKEN!!");</script>';
							} else {
								//Registration
								mysqli_query($connection, "INSERT INTO account(schoolid,firstname,middlename,lastname,gender,course,department,username,password,recoveryquestion,recoveryanswer,userlevel,status,employee) 
									VALUES('$SchoolID','$Firstname','$Middlename','$Lastname','$Gender','$Course','$Department','$Username','$Password','$RecoveryQuestion','$RecoveryAnswer','$Userlevel','$Status','$Employee')");
					
								//History Activity
								mysqli_query($connection,"INSERT INTO history (firstname,middlename,lastname,description,status,operation,date) 
									VALUES('$Firstname','$Middlename','$Lastname','$History_Description','$History_Status','$History_Operation','$History_Date')");
					
								echo '<script>alert("NEW ACCOUNT ADDED !");</script>';
								echo'<script>window.location.replace("index.php?");</script>';
							}
				} else {
					echo '<script>alert("INVALID ID!");</script>';
				}
				}
				
				
				
				
			}
?>




			<!DOCTYPE html>
			<html>

			<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Project Repository Management System</title>
			 <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css"/>
	<link href="assets/datatable/css/jquery.dataTables.css" rel="stylesheet"/>
	<link href="assets/datatable/css/jquery.dataTables.min.css" rel="stylesheet"/>
	<link href="assets/datatable/css/dataTables.jqueryui.css" rel="stylesheet"/>
	<link href="assets/datatable/css/dataTables.jqueryui.min.css" rel="stylesheet"/>
	<link href="assets/datatable/css/dataTables.bootstrap.css" rel="stylesheet"/>
	<link href="assets/datatable/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
				
				<script>
				function showDepartment(){
					var selectBox = document.getElementById('course');
					var userInput = selectBox.options[selectBox.selectedIndex].value;
						if (userInput == 'BS in Computer Science'){
							document.getElementById('department').value = 'College of Information Computer Technology';	
						}
						else if(userInput == 'BS in Information System'){
							document.getElementById('department').value = 'College of Information Computer Technology';	
						}
						else if(userInput == 'BS in Information Technology'){
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
				
				function letterOnly(input){
					var regex = /[^a-z ]/gi;
					input.value = input.value.replace(regex, "");
				}
				
				</script>
				
			</head>

			<body>
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
							</button><a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-graduation-cap"></i> PROJECT REPOSITORY SYSTEM</a></div>
					  </div></nav>
				<center><form method="POST" action="#">
					
			  
					
					<h6 style="font-weight: bold; font-family: georgia;">STUDENT INFORMATION</h6>
					
					
					<input type="text" class="input"  placeholder="School ID" name="sid" autocomplete="on" required maxlength="10" minlength="8" value="<?php echo $SchoolID; ?>"/>
					<br>
					<input type="text" class="input"  placeholder="First Name" name="Fname" autocomplete="on" onkeyup="letterOnly(this)" required maxlength="50" minlength="2" value="<?php echo $Firstname; ?>"/>
					<br>
					<input type="text" class="input" placeholder="Middle Name" name="Mname" autocomplete="on" onkeyup="letterOnly(this)" required maxlength="50" minlength="2" value="<?php echo $Middlename; ?>"/>
					<br>
					<input type="text" class="input" placeholder="Last Name" name="Lname" autocomplete="on" onkeyup="letterOnly(this)" required maxlength="50" minlength="2" value="<?php echo $Lastname; ?>"/>
					<br>
					<select class="input" required name="Gender">

							<option name="Gender" value="">Gender</option>
							<option name="Gender" <?php if($Gender == "Male"){ echo "selected";} ?> value="Male">Male</option>
							<option name="Gender" <?php if($Gender == "Female"){ echo "selected";} ?> value="Female">Female</option>

							 </select> <br>
						
						<select class="input" id="course" required name="Course" onchange="return showDepartment();">

							<option name="Course" value="">Course</option>
							<option name="Course" <?php if($Course == "BS in Computer Science"){ echo "selected";} ?> value="BS in Computer Science">BS in Computer Science</option>
							<option name="Course" <?php if($Course == "BS in Information System"){ echo "selected";} ?> value="BS in Information System">BS in Information System</option>
							<option name="Course" <?php if($Course == "BS in Information Technology"){ echo "selected";} ?> value="BS in Information Technology">BS in Information Technology</option>
							<option name="Course" <?php if($Course == "BS in Industrial Technology"){ echo "selected";} ?> value="BS in Industrial Technology">BS in Industrial Technology</option>
							<option name="Course" <?php if($Course == "BS in Education"){ echo "selected";} ?> value="BS in Education">BS in Education</option>
							<option name="Course" <?php if($Course == "BS in Entrepreneurship"){ echo "selected";} ?> value="BS in Entrepreneurship">BS in Entrepreneurship</option>
							<option name="Course" <?php if($Course == "BS in Civil Engineering"){ echo "selected";} ?> value="BS in Civil Engineering">BS in Civil Engineering</option>
							<option name="Course" <?php if($Course == "BS in Public Administration"){ echo "selected";} ?> value="BS in Public Administration">BS in Public Administration</option>
							<option name="Course" <?php if($Course == "BS in Mechanical Engineering"){ echo "selected";} ?> value="BS in Mechanical Engineering">BS in Mechanical Engineering</option>
							<option name="Course" <?php if($Course == "BS in Tourism Management"){ echo "selected";} ?> value="BS in Tourism Management">BS in Tourism Management</option>
							<option name="Course" <?php if($Course == "BS in Psychology"){ echo "selected";} ?> value="BS in Psychology">BS in Psychology</option>
							<option name="Course" <?php if($Course == "BS in Business Administration"){ echo "selected";} ?> value="BS in Business Administration">BS in Business Administration</option>
							<option name="Course" <?php if($Course == "BS in Business Management"){ echo "selected";} ?> value="BS in Business Management">BS in Business Management</option>
							<option name="Course" <?php if($Course == "BS in Marketing Management"){ echo "selected";} ?> value="BS in Marketing Management">BS in Marketing Management</option>
							<option name="Course" <?php if($Course == "BS in Hotel and Restaurant Management"){ echo "selected";} ?> value="BS in Hotel and Restaurant Management">BS in Hotel and Restaurant Management</option>
							<option name="Course" <?php if($Course == "BS in Criminology") { echo "selected"; } ?> value="BS in Criminology">BS in Criminology</option>

							 </select> <br>

							 <input type="text" class="input" name="Department" id="department" readonly placeholder="Department" value="<?php echo $Department; ?>" />
							 
							 
					<br>
					<h6 style="font-weight: bold; font-family: georgia;">ACCOUNT INFORMATION</h6>
					<input type="text" class="input" placeholder="Username" name="Username" autocomplete="on" required maxlength="20" minlength="3"/>
					<br>
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
					
					<input type="hidden" name="Userlevel" value="CLIENT"/>
					<input type="hidden" name="History_Description" value="NEW REGISTERED USER"/>
					<input type="hidden" name="History_Operation" value="SIGN UP"/>
					<input type="hidden" name="History_Status" value="1"/>
					<input type="hidden" name="Employee" value="Taguig City University (Client)"/>
					<input type="hidden" name="Status" value="ACTIVE"/>
						
					<input id="btn-reg" class="btn btn-primary btn-medium" type="submit" name="btn-submit" value="Submit">
					<br><a id="btn-reg1" class="btn btn-success btn-medium" role="button" href="index.php?">Cancel</a>
					</form>  	
			</body>
			</html>






