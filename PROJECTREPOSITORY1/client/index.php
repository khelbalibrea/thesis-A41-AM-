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
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thesis Repository Management System</title>
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
                </button><a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-graduation-cap"></i> THESIS REPOSITORY SYSTEM</a></div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
              
                   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-folder-open"></i> TCU PROJECT DOCUMENTS</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="client_cbm.php?"><i class="fa fa-fw fa-file"></i> CBM</a></li>
										<li><a href="client_chtm.php?"><i class="fa fa-fw fa-file"></i> CHTM</a></li>
										<li><a href="client_cict.php?"><i class="fa fa-fw fa-file"></i> CICT</a></li>
										<li><a href="client_cte.php?"><i class="fa fa-fw fa-file"></i> CTE</a></li>
										<li><a href="client_cas.php?"><i class="fa fa-fw fa-file"></i> CAS</a></li>
										<li><a href="client_coe.php?"><i class="fa fa-fw fa-file"></i> COE</a></li>
										<li><a href="client_ccj.php?"><i class="fa fa-fw fa-file"></i> CCJ</a></li>
								</ul>
							</li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-fw fa-user-circle"></i> <?php echo strtoupper($full); ?></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="client_profile.php?"><i class="fa fa-fw fa-user"></i> Profile</a></li>
                            <li><a href="client_setting.php?"><i class="fa fa-fw fa-gear"></i> Account Settings</a></li>
                            <li><a href="http://facebook.com/"><i class="fa fa-fw fa-code"></i> Developer</a></li>
                            <li><a href="../logout.php?" name="logout" onclick="return confirm(' ARE YOU SURE YOU WANT TO LOGOUT ?')"><i class="fa fa-fw fa-sign-out"></i> Logout </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  <center>  <div class="jumbotron" style="background-color: white;">
        <h1 style="font-family: Old English Text MT;">Taguig City University <img src="../assets/img/TCU.jpg" width="10%"></h1>
        <p style="text-align: justify; line-height: 2; margin-left: 5%; margin-right: 5%; text-indent: 50px; letter-spacing: 1.5px;">This is not the official web page of Taguig City University. The University shall provide higher and advanced vocational, technical, industrial, technological and professional education and training in industries and technology, and in practical arts leading to certificates, diplomas and degrees. It shall provide progressive leadership in applied research, developmental studies in technical, industrial, and technological fields and production using indigenous materials; effect technology transfer in the countryside; and assist in the development of small-and-medium scale industries in identified growth centers.</p>
        <p><a class="btn btn-primary" role="button" href="http://tcu.edu.ph"><i class="fa fa-fw fa-thumbs-up"></i> Learn more</a></p>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>