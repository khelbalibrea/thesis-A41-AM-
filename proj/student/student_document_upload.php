<?php
require '../connection.php';
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
				
				
if(isset($_FILES['file'])){
	$file = $_FILES['file'];
	$title = $_POST['DocumentTitle'];
	$Course = $_POST['Course'];
	$new_course = $_POST['Course'];
	$College = $_POST['Department'];
	$ProjectType = $_POST['Proj-type'];
	$DD = $_POST['Description'];
	$DateUpload = $_POST['DateUpload'];
	
	//For authors
	$author1 = $_POST['author1'];
	$author2 = $_POST['author2'];
	$author3 = $_POST['author3'];
	$author4 = $_POST['author4'];
	$author5 = $_POST['author5'];
	
	//For panels
	$panel1 = $_POST['panel1'];
	$panel2 = $_POST['panel2'];
	$panel3 = $_POST['panel3'];
	$panel4 = $_POST['panel4'];
	$panel5 = $_POST['panel5'];
	
	//For urls
	$url1 = $_POST['url1'];
	$url2 = $_POST['url2'];
	$url3 = $_POST['url3'];
	$url4 = $_POST['url4'];
	$url5 = $_POST['url5'];
	$url6 = $_POST['url6'];
	$url7 = $_POST['url7'];
	$url8 = $_POST['url8'];
	$url9 = $_POST['url9'];
	$url10 = $_POST['url10'];
		
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
		
		
		mysqli_query($conn, "INSERT INTO uploads (documenttitle, course , department , project_type, description , file , dateuploaded, author1, 
		author2, author3, author4, author5, panel1, panel2, panel3, panel4, panel5, url1, url2, url3, url4, url5, url6, url7, url8, url9, url10) 
VALUES('$title','$Course','$College','$ProjectType','$DD','$file_name_new','$DateUpload', '$author1', '$author2', '$author3', '$author4', 
		'$author5', '$panel1', '$panel2', '$panel3', '$panel4', '$panel5', '$url1', '$url2', '$url3', '$url4', '$url5', '$url6', '$url7', '$url8', 
		'$url9', '$url10')");

		
		echo '<script>alert("NEW DOCUMENT WAS UNDER APPROVAL");</script>';
		echo '<script>alert($College");</script>';
		echo'<script>window.location.replace("index.php?");</script>';
		
		} else {
			echo '<script>alert("ERROR!");</script>';
		}
	
	}
	} else {
		echo '<script>alert("ERROR!");</script>';
	}



?>