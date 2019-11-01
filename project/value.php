<?php
	$Status = "1";
	$Value = "0";
	
	$view_query = mysqli_query($conn, "SELECT * FROM history WHERE status='$Status'");
				
	while($row = mysqli_fetch_assoc($view_query)){
		$Value++;
	}
?>