<?php
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
				
require '../connection.php';
$ProjectID = ($_GET['ID']);

$get_record = mysqli_query($connection, "SELECT * FROM document WHERE ID='$ProjectID'");

							 $row = mysqli_fetch_assoc($get_record);
								$File = $row["file"];
							   $pdf = "../assets/pdf/$File";
$fp = fopen($pdf, "r") ;

header("Cache-Control: maxage=1");
header("Pragma: public");
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=".$File."");
header("Content-Description: PHP Generated Data");
header("Content-Transfer-Encoding: binary");
header('Content-Length:' . filesize($pdf));
ob_clean();
flush();
while (!feof($fp)) {
   $buff = fread($fp, 1024);
   print $buff;
}
exit;
							 
							 
							 
							 
?>