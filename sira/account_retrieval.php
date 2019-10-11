


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
		<style>
		#pass{
	margin-top: 13px;
	width: 70%;
	}
	#btnc{
			margin-top: 7px;
			width: 70%;
			}
			
		#answer{
			margin-top: 10px;
			width: 70%;
			}
			
		#id{
			margin-top: 10px;
			width: 70%;
			}
			
		.bg-modal{
			width: 100%;
			Height: 100%;
			background-color: rgba(0, 0, 0, 0.7);
			position: absolute;
			display: flex;
			top: 0;
			justify-content: center;
			align-items: center;
			visibility: visible;
			}
			
			.modal-content{
			width: 500px;
			height: 350px;
			background-color: white;
			border-radius: 4px;
			text-align: center;
			padding: 20px;
			position: relative;
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
			  <!-- MODAL FORM -->
			
			  
			  
			<center><form method="POST" class="login-form">
			
			<img src="assets/img/recovery.png" width="18%"><br>
			
		<input type="text" name="SchoolID" id="id" class="input-lg" placeholder="Enter your School ID" required maxlength="30" minlength="2" />
			
		<select name="RecoveryQuestion" required class="input-lg" id="user">
			<option name="RecoveryQuestion" value="">Recovery Question</option>
			<option name="RecoveryQuestion" value="What is your favorite movie?">What is your favorite movie?</option>
			<option name="RecoveryQuestion" value="What is your mothers name?">What is your mothers name?</option>
			<option name="RecoveryQuestion" value="What is your fathers name?">What is your fathers name?</option>
			<option name="RecoveryQuestion" value="What is your pet name?">What is your pet name?</option>
		</select>
			<br>
			
			<input type="text" name="RecoveryAnswer" id="answer" class="input-lg" placeholder="Recovery Answer" required maxlength="30" minlength="2" />
			<input id="btn" class="btn btn-primary btn-lg" type="submit" name="recover" value="Submit"><br>
			<a id="btnc" class="btn btn-success btn-lg" style="font-weight: bold;" role="button" href="index.php?">Cancel</a>
			</form>  
		
	</body>

	</html>
	<?php

	require 'connection.php';


	if(isset($_POST['recover'])){
	 $ID = $_POST['SchoolID'];
	 $RecoverQuestion = $_POST['RecoveryQuestion'];
	 $RecoverAnswer = $_POST['RecoveryAnswer'];

	$get_record = mysqli_query($connection, "SELECT * FROM account WHERE schoolid='$ID' AND recoveryquestion='$RecoverQuestion' AND recoveryanswer='$RecoverAnswer'");

				  $get_record_num = mysqli_num_rows($get_record);

				  if ($get_record_num > 0){
			  while ($row = mysqli_fetch_assoc($get_record)){
					  $db_id = $row["schoolid"];
					  $db_RQ = $row["recoveryquestion"];
					  $db_RA = $row["recoveryanswer"];
					  $db_Username = $row["username"];
					  $db_Password = $row["password"];
					  echo '<script>alert("YOUR ACCOUNT HAS BEEN SUCCESSFULLY RETRIEVED !");</script>';
					 echo '<div class="bg-modal">
			<div class="modal-content">
			<img src="assets/img/Avatar.png" width="18%">
			<form>
			<h5 style="font-weight: bold; text-align: left; margin-left: 15%;">Username :</h5><input type="text" name="txt-username" value="'. $db_Username .'" style="color: black;" class="input-lg" readonly><br>
			<h5 style="font-weight: bold; text-align: left; margin-left: 15%;">Password :</h5><input type="text" name="txt-password" value="'.$db_Password.'" style="color: black;" class="input-lg" readonly><br>
			<a href="index.php?" class="btn btn-primary btn-md" style="margin-top: 10px;" role="button"><i class="fa fa-check"></i><b> Got It !</b></a>
			</form>
			</div>
			</div>';
					 
					  }
					 }else{
					
					 echo '<script>alert("YOUR RECOVERY INFORMATION IS INCORRECT !");</script>';
					
					 }

	 }

	?>