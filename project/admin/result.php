<?php

	require '../session.php';
	//require '../value.php';

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
			
		$id = $_GET['ID'];
		
        
          ?>

			<!DOCTYPE html>
			<html>
			<head>
			
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>TCU - THESIS REPOSITORY SYSTEM</title>
				 <link rel="icon" href="../assets/img/faviconTCU.png">
				  <link href="../assets/css/main2.css" rel="stylesheet" />
				<?php
				require '../zxc.php';
				?>
			</head>

			<body>
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button><a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-graduation-cap"></i> TCU - THESIS REPOSITORY SYSTEM</a></div>
						<div class="collapse navbar-collapse" id="navcol-1">
							<ul class="nav navbar-nav navbar-right">
							   	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-fw fa-user-circle"></i> <?php echo strtoupper($full); ?></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="student_profile.php?"><i class="fa fa-fw fa-user"></i> Profile</a></li>
										<li><a href="student_setting.php?"><i class="fa fa-fw fa-gear"></i> Account Settings</a></li>
										<li><a href="http://facebook.com/" onclick="myfun()"><i class="fa fa-fw fa-code"></i> Developer</a></li>
										<li><a href="../logout.php?" name="logout" onclick="return confirm(' ARE YOU SURE YOU WANT TO LOGOUT ?')"><i class="fa fa-fw fa-sign-out"></i> Logout </a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			 

 <!-- </center> -->
  <body>
    <div class="s130" id="s130left">
      <form method="POST"  id= "searchForm" class="">
		<center>
	   <img src="../assets/img/LagakanLogo.png" width="60%"; ><br><br>
	   </center>
      
<?php

            $sql ="SELECT * FROM document WHERE ID = '$id'";
            $result = $conn->query($sql); // eto na ung pinaka connection nya 
          // echo $num_rows;
         while($row = $result->fetch_array()) {		  
		 $sql1 = mysqli_num_rows($result);
          if($sql1 == true){

            $id = $row['ID']; 
            $prodtype = $row['project_type'];
            $desc = $row['description'];
            $advice = $row ['Adviser'];
            //echo '<h3>' . $prodtype . '</h3><p> ' . $desc . '</p><br/>';
           // echo '<h3><a href = "result.php?ID='.$id.'"> ' . $prodtype . '</h3><p> ' . $desc . '</p><br/>';

			echo "<label>ID:</label><a href='#' style='font-family:Arial;'>$id</a><br>";
			echo "<label>Project Type:</label> <a href='#' style='font-family:Arial;'>$prodtype</a><br>";
			echo "<label>Description:</label><a href='#' style='font-family:Arial;'>$desc</a><br>";
			echo "<label>Adviser:</label><a href='#' style='font-family:Arial;'>$advice</a><br>";
		 }}
        ?>

      </form>
    </div>

    <script src="js/extention/choices.js"></script>

			  

				<?php
				
				require '../xcv.php';
				
				?>
				
			</body>

			</html>