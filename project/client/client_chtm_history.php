	<?php
	require '../connection.php';
	require '../session.php';
if($userlevel == "ADMINISTRATOR"){	
			echo '<script>
					window.location.replace("../admin/");
			</script>';
				}
				
			if($userlevel == "STAFF"){	
			echo '<script>
					window.location.replace("../staff/");
			</script>';
				}		

	$ID = $_GET['ID'];
		$newDescription = "T1BFTkVEIEEgQ0hUTSBQUk9KRUNUIERPQ1VNRU5U";
		$newStatus = 1;
		$newOperation ="VklFVyBQUk9KRUNU";
		$newDate = date('Y-M-d');
		mysqli_query($connection,"INSERT INTO history (firstname,middlename,lastname,description,status,operation,date)
		VALUES('$infofname','$infomname','$infolname','$newDescription','$newStatus','$newOperation','$newDate')");
		echo "<script>window.location ='client_chtm_view.php?ID=".$ID."'</script>";
		


	?>