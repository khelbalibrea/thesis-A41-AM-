<?php

require 'conn.php';	

$user_check = $_SESSION['login-user-id'];

$login_session = "";
$infoID = "";
$infofirstname = "";
$infofname = "";
$infomiddlename = "";
$infomname = "";
$infolastname = "";
$infolname = "";
$userlevel = "";

$Substr = substr($user_check, 2, 1);

if($Substr=='-'){
	$ses_sql = mysqli_query($conn, "SELECT * FROM studentaccount WHERE studentid='$user_check'");
	$row = mysqli_fetch_assoc($ses_sql);
	$login_session = $row['studentid'];
	$infoID = $row['studentid'];
	$infofirstname = $row['firstname'];
	$infofname = $row['firstname'];
	$infomiddlename = $row['middlename'];
	$infomname = $row['middlename'];
	$infolastname = $row['lastname'];
	$infolname = $row['lastname'];
	$userlevel = $row['userlevel'];
} elseif($Substr=='U'){
	
} elseif($Substr=='T'){
	
} elseif($Substr=='M'){
	$ses_sql = mysqli_query($conn, "SELECT * FROM adminaccount WHERE adminid='$user_check'");
	$row = mysqli_fetch_assoc($ses_sql);
	$login_session = $row['adminid'];
	$infoID = $row['adminid'];
	$infofirstname = $row['firstname'];
	$infofname = $row['firstname'];
	$infomiddlename = $row['middlename'];
	$infomname = $row['middlename'];
	$infolastname = $row['lastname'];
	$infolname = $row['lastname'];
	$userlevel = $row['userlevel'];
}

$full = strtoupper($infofirstname) . " ". strtoupper($infolastname);

if(!isset($login_session)){
	mysqli_close($conn);
	echo'<script>window.location.replace("index.php?");</script>';

}


?>

