		<?php
		require 'connection.php';
		//session_start();	
		
	
		if(isset($_POST['btn-submit'])){
		$username = $_POST['txt-user'];
		$password = $_POST['txt-pass'];
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
		
		}


		?>