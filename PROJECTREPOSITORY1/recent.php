<?php
//read history
require 'connection.php';
$ID = $_GET['ID'];


$Status = "0";
	mysqli_query($connection," UPDATE history SET status='$Status' WHERE ID = '$ID'");
			echo '<script>alert("HISTORY REMOVED !");</script>';
			echo'<script>window.location.replace("admin/historylogs.php?");</script>';


?>