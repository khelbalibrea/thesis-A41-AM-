<?php
	$Status = "1";
		$view_query = mysqli_query($conn, "SELECT * FROM history WHERE status='$Status'");
				$Value = "0";
			while($row = mysqli_fetch_assoc($view_query)){
				
				$Value++;
			}
			
		?>