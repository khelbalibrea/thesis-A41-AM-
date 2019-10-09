<?php
require '../connection.php';
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
					

if(isset($_FILES['file'])){
	$file = $_FILES['file'];
	$Firstname = $_POST['Firstname'];
	$new_fname = $_POST['Firstname'];
	$Middlename = $_POST['Middlename'];
	$Lastname = $_POST['Lastname'];
	$new_lname = $_POST['Lastname'];
	$Course = $_POST['Course'];
	$new_course = $_POST['Course'];
	$Department = $_POST['Department'];
	$ProjectType = $_POST['Proj-type'];
	$DD = $_POST['Description'];
	$DateUpload = $_POST['DateUpload'];
	//History
	$full = strtoupper($new_fname)." ".strtoupper($new_lname);
	$History_Description = "PROJECT DOCUMENT";
	$History_Status = 1;
	$History_Operation = "VVBMT0FE";
	$Hdescript1 = ($full). " - " .strtoupper($new_course). " - " .($History_Description);
	$Hdescript = $Hdescript1;
	$History_Date = date('Y-M-d');
	
	// File Properties
	$file_name = $file['name'];
	$file_tmp = $file['tmp_name'];
	$file_size = $file['size'];
	
	// Working-out the file extension	
	$file_ext = explode('.', $file_name);
	$file_ext = strtolower(end($file_ext));
	
	$allowed = array('pdf');
	
	if(in_array($file_ext, $allowed)){
	
	
		
		$file_name_new = uniqid('', true) . '.' . $file_ext;
		$file_destination = '../assets/pdf/' . $file_name_new;
		
		if(move_uploaded_file($file_tmp, $file_destination)){
		
		
		 mysqli_query($connection, "INSERT INTO document ( firstname , middlename , lastname , course , department , project_type , description , file , date_uploaded) 
VALUES('$Firstname','$Middlename','$Lastname','$Course','$Department','$ProjectType','$DD','$file_name_new','$DateUpload')");
		// Insert to tbl history
		mysqli_query($connection,"INSERT INTO history (firstname,middlename,lastname,description,status,operation,date)
													VALUES('$infofname','$infomname','$infolname','$Hdescript','$History_Status','$History_Operation','$History_Date')");
		
		echo '<script>alert("NEW DOCUMENT WAS SUCCESSFULLY STORED !");</script>';
		echo'<script>window.location.replace("staff_cbm.php?");</script>';
		
		}
	
	}}



?>