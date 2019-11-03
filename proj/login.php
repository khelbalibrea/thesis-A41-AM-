		<?php
		require 'conn.php';
		//session_start();
		
		$db_id = "";
		$db_password= "";
		$db_status = "";
		$userlevel = "";
	
		if(isset($_POST['btn-submit'])){
			$Id = $_POST["ID"];
			$Password = $_POST["Password"];
			$Substr = substr($Id, 2, 1);
			
			if($Substr=='-'){
				$query = mysqli_query($conn, "SELECT studentid, password, status, userlevel FROM studentaccount WHERE studentid = '$Id'");
				
				while($row = mysqli_fetch_array($query)){
					$db_id = $row['studentid'];
					$db_password = $row['password'];
					$db_status = $row['status'];
					$userlevel = $row['userlevel'];
				}
				
				if($Id==$db_id && $Password==$db_password){
					if($db_status=='ACTIVE'){
						
						$_SESSION['login-user-id']=$Id;
						$_SESSION["userlevel"]=$userlevel;
						
						echo '<script>alert("LOGIN SUCCESSFUL!");</script>';
						echo'<script>window.location.replace("student/");</script>';
					} else {
						echo '<script>alert("LOGIN FAILED! CONTACT THE ADMINISTRATOR");</script>';
					}
				} else {
					echo '<script>alert("USERNAME OR PASSWORD IS INCORRECT!");</script>';
					echo '<script>window.location.replace("index.php");</script>';
				}
			} elseif($Substr=='U'){
				
			} elseif($Substr=='T'){
				
			} elseif($Substr=='M'){
				$query = mysqli_query($conn, "SELECT adminid, password, status, userlevel FROM adminaccount WHERE adminid = '$Id'");
				
				while($row = mysqli_fetch_array($query)){
					$db_id = $row['adminid'];
					$db_password = $row['password'];
					$db_status = $row['status'];
					$userlevel = $row['userlevel'];
				}
				
				if($Id==$db_id && $Password==$db_password){
					if($db_status=='ACTIVE'){
						
						$_SESSION['login-user-id']=$Id;
						$_SESSION["userlevel"]=$userlevel;
						
						echo '<script>alert("LOGIN SUCCESSFUL!");</script>';
						echo'<script>window.location.replace("admin/");</script>';
					} else {
						echo '<script>alert("LOGIN FAILED!");</script>';
					}
				} else {
					echo '<script>alert("USERNAME OR PASSWORD IS INCORRECT!");</script>';
					echo '<script>window.location.replace("index.php");</script>';
				}
			} else {
				echo '<script>alert("USERNAME OR PASSWORD IS INCORRECT!");</script>';
				echo '<script>window.location.replace("index.php");</script>';
			}
			
				/*
				$status = "ACTIVE";
				$query = mysqli_query($connection, "SELECT username, password, userlevel, status FROM account");
				
					while($row = mysqli_fetch_array($query)){
				
					$db_username = $row['username'];
					$db_password = $row['password'];
					$db_status = $row['status'];
					$db_userlevel = $row['userlevel'];
					
					$d_username = $row['username'];
					 
					if($username == $db_username && $password == $db_password && $status == $db_status ){
					
					session_start();
					$_SESSION['login-user']=$username;
					$_SESSION["userlevel"]=$db_userlevel;
					
					if($_SESSION["userlevel"]=='ADMINISTRATOR'){
						echo '<script>alert("LOGIN SUCCESSFUL !");</script>';
						echo'<script>window.location.replace("admin/");</script>';
						}
					
					elseif($_SESSION["userlevel"]=='CLIENT'){
						echo '<script>alert("LOGIN SUCCESSFUL !");</script>';
						echo'<script>window.location.replace("client/");</script>';
						
				}
				
				elseif($_SESSION["userlevel"]=='STAFF'){
						echo '<script>alert("LOGIN SUCCESSFUL !");</script>';
						echo'<script>window.location.replace("staff/");</script>';
						
				}
				
				}
				}
							echo '<script>alert("USERNAME OR PASSWORD IS INCORRECT !");</script>';
							echo'<script>window.location.replace("index.php");</script>';
				*/
		}
?>