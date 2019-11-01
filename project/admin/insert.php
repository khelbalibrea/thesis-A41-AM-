<?php 

include('includes/conn.php');

function getExt($file){
  $extexplode=explode('.',$file);

  $extend=end($extexplode);

  $ext=strtolower($extend);

  return $ext;
}

$CollegeName = "";
$CollegeCode = "";

if(isset($_POST['btn-add'])){

 $CollegeName = $_POST["college_name"];
		$CollegeCode = $_POST["college_code"];
		
		$ext = getExt($_FILES["college_photo"]["name"]);

		$target_dir = "../uploads/";
		$target_file =  $CollegeCode.".".$ext;
		
		$query = mysqli_query($connection, "SELECT * FROM college WHERE collegename='$CollegeName'");
		
		$count = mysqli_num_rows($query);
		
		if ($count > 0){
			echo '<script>alert("COLLEGE ALREADY REGISTERED!");</script>';
		} else {
			//Registration
			if (move_uploaded_file($_FILES["college_photo"]["tmp_name"], $target_dir.$target_file)) {
 $stmt = $conn->prepare("INSERT INTO college (collegename, collegecode, collegephoto) VALUES('$CollegeName', '$CollegeCode', '$target_file')");

 $stmt->bind_param($college_name,$college_code,$target_file);


    try 
    { 
      if($stmt->execute()){
        header('location:admin_college_setting.php?success');
      }

    } 
    catch(Exception $ex) 
    { 
      // echo "Error updating information&error";
      die("Failed to run query"); 
    } 

  }else {
        echo "error";

    // echo "Error updating information&error";


  }
		}

$stmt->close();
$conn->close();
}
?>