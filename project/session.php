<?php

require 'connection.php';


session_start();


$user_check = $_SESSION['login-user'];



$ses_sql = mysqli_query($connection,"SELECT * FROM account WHERE username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
$infoID = $row['ID'];
$infofirstname = $row['firstname'];
$infofname = $row['firstname'];
$infomiddlename = $row['middlename'];
$infomname = $row['middlename'];
$infolastname = $row['lastname'];
$infolname = $row['lastname'];
$userlevel = $row['userlevel'];

$full = strtoupper($infofirstname) . " ". strtoupper($infolastname);

if(!isset($login_session)){
	mysqli_close($connection);
	echo'<script>window.location.replace("index.php?");</script>';

}


?>

