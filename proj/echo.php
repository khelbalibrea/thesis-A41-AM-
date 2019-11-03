<?php
	require 'connection.php';
	
	if(isset($_POST['ID'])){
	 $ID = $_POST['ID'];
	 $Substr = substr($ID, 2, 1);
	 //$RecoverQuestion = $_POST['RecoveryQuestion'];
	 //$RecoverAnswer = $_POST['RecoveryAnswer'];
	 
	 if($Substr=='-'){
		$query = mysqli_query($conn, "SELECT studentid, password, status, recoveryanswer, recoveryquestion FROM studentaccount WHERE studentid = '$ID'");
		
		$get_record_num = mysqli_num_rows($query);
		
		if($get_record_num > 0){
			while($row = mysqli_fetch_array($query)){
				$db_id = $row['studentid'];
				$db_password = $row['password'];
				$db_status = $row['status'];
				$recoveryanswer = $row['recoveryanswer'];
				$recoveryquestion = $row['recoveryquestion'];
			}
			
			if($db_status=='ACTIVE'){
				?><label class="input-lg">YOUR QUESTION:</label><?php
				echo $recoveryquestion;
					//$_SESSION['login-user-id']=$Id;
					//$_SESSION["userlevel"]=$userlevel;
					
					//echo '<script>alert("LOGIN SUCCESSFUL!");</script>';
					//echo'<script>window.location.replace("student/");</script>';
				} else {
					echo '<script>alert("ACCOUNT MAY BE DEACTIVATED! CONTACT THE ADMINISTRATOR");</script>';
				}
		} else {
			echo '<script>alert("YOUR RECOVERY INFORMATION IS INCORRECT !");</script>';
		}
	} elseif($Substr=='U'){
		
	} elseif($Substr=='T'){
		
	} elseif($Substr=='M'){
		$query = mysqli_query($conn, "SELECT adminid, password, status, recoveryanswer, recoveryquestion FROM adminaccount WHERE adminid = '$ID'");
			
		$get_record_num = mysqli_num_rows($query);
		
		if($get_record_num > 0){
			while($row = mysqli_fetch_array($query)){
				$db_id = $row['adminid'];
				$db_password = $row['password'];
				$db_status = $row['status'];
				$recoveryanswer = $row['recoveryanswer'];
				$recoveryquestion = $row['recoveryquestion'];
			}
			
			if($db_status=='ACTIVE'){
				echo $recoveryquestion;
					//$_SESSION['login-user-id']=$Id;
					//$_SESSION["userlevel"]=$userlevel;
					
					//echo '<script>alert("LOGIN SUCCESSFUL!");</script>';
					//echo'<script>window.location.replace("student/");</script>';
				} else {
					echo '<script>alert("ACCOUNT MAY BE DEACTIVATED! CONTACT THE OTHER ADMINISTRATOR");</script>';
				}
		} else {
			echo '<script>alert("YOUR RECOVERY INFORMATION IS INCORRECT !");</script>';
		}
	} else {
		echo '<script>alert("USERNAME OR PASSWORD IS INCORRECT!");</script>';
		echo '<script>window.location.replace("index.php");</script>';
	}}
?>