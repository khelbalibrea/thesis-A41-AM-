<?php

require 'login.php';

?>


<!DOCTYPE html>
<html>

<head>
	<script language="javascript" type="text/javascript">
	window.history.forward();
	</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCU - Thesis Repository System</title>
	 <link rel="icon" href="assets/img/faviconTCU.png">
   <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css"/>
	<link href="assets/datatable/css/jquery.dataTables.css" rel="stylesheet"/>
	<link href="assets/datatable/css/jquery.dataTables.min.css" rel="stylesheet"/>
	<link href="assets/datatable/css/dataTables.jqueryui.css" rel="stylesheet"/>
	<link href="assets/datatable/css/dataTables.jqueryui.min.css" rel="stylesheet"/>
	<link href="assets/datatable/css/dataTables.bootstrap.css" rel="stylesheet"/>
	<link href="assets/datatable/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
	<style>
	#pass{
margin-top: 13px;
width: 70%;
}
	</style>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                </button><a class="navbar-brand navbar-link" href="#"><i class="fa fa-graduation-cap"></i> TCU - Thesis Repository System</a></div>
          </div></nav>
		<center><form method="POST" class="login-form">
		<img src="assets/img/Lagakanlogo.png" width="60%"><br>
		<input type="text" id="user" class="input-lg" placeholder="Enter your ID" value="" name="ID" autocomplete="on" required maxlength="50" minlength="3"/>
		<br>
		<input type="password" id="pass" class="input-lg" placeholder="Password" value="" name="Password" autocomplete="on" required maxlength="20" minlength="8">
		<br>
		<input id="btn" class="btn btn-primary btn-lg" type="submit" name="btn-submit" value="Sign In"><br>
		<a class="links"style="font-weight: bold;" href="account_retrieval.php?"><i>Forgot Password?</i></a> <br>
		<a class="links" style="font-weight: bold;" href="register.php?"><i>Register</i></a>
		</form>  
		
		
		  
		
</body>

</html>