<?php
$servername = "localhost";
$username = "root";
$password = "";


// $dbname = "scholar_applicants_db";
// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

$conn = new mysqli($servername, $username, $password);
mysqli_select_db($conn,"project");


 $conn->set_charset('utf8');
// check connection
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}



if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

    header('Content-Type: text/html; charset=utf-8'); 
     
?>