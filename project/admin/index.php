			<?php
			require '../session.php';
			require '../value.php';

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
			
			
			?>

			<!DOCTYPE html>
			<html>
			<head>
			
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>TCU - THESIS REPOSITORY SYSTEM</title>
				 <link rel="icon" href="../assets/img/faviconTCU.png">
				  <!-- Bootstrap CSS -->    
    <link href="../vendor/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="../vendor/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../vendor/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="../vendor/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="../vendor/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="../vendor/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="../vendor/stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="../vendor/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="../vendor/stylesheet" href="css/fullcalendar.css">
	<link href="../vendor/css/widgets.css" rel="stylesheet">
    <link href="../vendor/css/style.css" rel="stylesheet">
    <link href="../vendor/css/style-responsive.css" rel="stylesheet" />
	<link href="../vendor/css/xcharts.min.css" rel=" stylesheet">	
	<link href="../vendor/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
   	 

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
							</button><a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-graduation-cap"></i>TCU - THESIS REPOSITORY SYSTEM</a></div>
						<div class="collapse navbar-collapse" id="navcol-1">
							<ul class="nav navbar-nav navbar-right">
							   <li class="dropdown"><a aria-expanded="false" href="admin_project_documents.php?"><i class="fa fa-folder-open"></i>TCU - THESIS REPOSITORY SYSTEM</a></li>
								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" value=""><i class="fa fa-fw fa-id-badge"></i> ACCOUNT MANAGEMENT</a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="admin_new_user.php?"><i class="fa fa-fw fa-user-plus"></i> New Administrator</a></li>
												<li><a href="admin_new_staff.php?"><i class="fa fa-fw fa-user-plus"></i> New Staff</a></li>
												<li><a href="admin_clientaccounts.php?"><i class="fa fa-fw fa-users"></i> View Client List</a></li>
											</ul>
											</li>			
									<li role="presentation">
									<a href="historylogs.php" style="color: white;"><i class="fa fa-bell"></i> HISTORY LOGS [ <?php echo $Value; ?> ]</a>
									</li>
								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-fw fa-user-circle"></i> <?php echo strtoupper($full); ?></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="admin_profile.php?"><i class="fa fa-fw fa-user"></i> Profile</a></li>
										<li><a href="admin_setting.php?"><i class="fa fa-fw fa-gear"></i> Account Settings</a></li>
										<li><a href="admin_college_setting.php?"><i class="fa fa-fw fa-gear"></i> College</a></li>
										<li><a href="http://facebook.com/" onclick="myfun()"><i class="fa fa-fw fa-code"></i> Developer</a></li>
										<li><a href="../logout.php?" name="logout" onclick="return confirm(' ARE YOU SURE YOU WANT TO LOGOUT ?')"><i class="fa fa-fw fa-sign-out"></i> Logout </a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>
		
<center>
	  
	   <img src="../assets/img/LagakanLogo.png" width="15%"; ><hr><br><br>
	   </center>
		
	
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="fa fa-book"></i>
						<div class="count"><?php $a = mysqli_query($conn, "SELECT * FROM document WHERE department='College of Arts and Sciences'");
																	$counter = mysqli_num_rows($a); echo $counter;				
											?>
						</div>
						<div class="title">College of Arts and Sciences</div>						
					</div><!--/.info-box-->			
				</div>
		
		
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box brown-bg">
						<i class="fa fa-book"></i>
						<div class="count"><?php $a = mysqli_query($conn, "SELECT * FROM document WHERE department='College of Criminal Justice'");
																	$counter = mysqli_num_rows($a); echo $counter;				
											?>
						</div>
						<div class="title">College of Criminal Justice</div>						
					</div><!--/.info-box-->			
				</div>
				
				
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box green-bg">
						<i class="fa fa-book"></i>
						<div class="count"><?php $a = mysqli_query($conn, "SELECT * FROM document WHERE department='College of Hotel and Restaurant Management'");
																	$counter = mysqli_num_rows($a); echo $counter;				
											?>
						</div>
						<div class="title">College of Hotel and Restaurant Management</div>						
					</div><!--/.info-box-->			
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box purple-bg">
						<i class="fa fa-book"></i>
						<div class="count"><?php $a = mysqli_query($conn, "SELECT * FROM document WHERE department='College of Information and Communication Technology'");
																	$counter = mysqli_num_rows($a); echo $counter;				
											?>
						</div>
						<div class="title">College of Information and Communication Technology</div>						
					</div><!--/.info-box-->			
				</div>
				
				<div style="margin-left: 12%;" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box orange-bg">
						<i class="fa fa-book"></i>
						<div class="count"><?php $a = mysqli_query($conn, "SELECT * FROM document WHERE department='College of Engineering and Technology'");
																	$counter = mysqli_num_rows($a); echo $counter;				
											?>
						</div>
						<div class="title">College of Engineering and Technology</div>						
					</div><!--/.info-box-->			
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box red-bg">
						<i class="fa fa-book"></i>
						<div class="count"><?php $a = mysqli_query($conn, "SELECT * FROM document WHERE department='College of Education'");
																	$counter = mysqli_num_rows($a); echo $counter;				
											?>
						</div>
						<div class="title">College of Education</div>						
					</div><!--/.info-box-->			
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box yellow-bg">
						<i class="fa fa-book"></i>
						<div class="count"><?php $a = mysqli_query($conn, "SELECT * FROM document WHERE department='College of Business Management'");
																	$counter = mysqli_num_rows($a); echo $counter;				
											?>
						</div>
						<div class="title">College of Business Management</div>						
					</div><!--/.info-box-->			
				</div>
				
				<div style="margin-left: 12%;"  class="col-lg-9 col-md-12">	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-flag-o red"></i><strong>PROJECT ADVISERS</strong></h2>
							<div class="panel-actions">
								<a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						
						
						<div  class="panel-body">
							<table class="table bootstrap-datatable countries">
								<thead>
									<tr>
										
										<th>Professors Name</th>
										<th>Times Panel</th>
										<th> College</th>
										<th> Category</th>
									</tr>
								</thead>   
							<tbody>
							<?php
							$query = mysqli_query($conn, "SELECT * FROM advisercnt");
							
							
							
							
							while($row = mysqli_fetch_assoc($query)){
								$Adviser = $row['AdvName'];
								$AdvisesNo = $row['AdvicesNo.'];
								$Department = $row['Department'];
								
								
							echo "
							<tr>
							<td>$Adviser</td>
							<td>$AdvisesNo</td>
							<td>$Department</td>
							</tr>
							";
								
							}
							?>
							</tbody>
							</table>
						</div>
	
					</div>	

				</div>
			
										<div class="col-lg-12">
                  <section class="panel">
                      <header class="panel-heading">
                          <h3>General Chart
                      </h3></header>
                      <div class="panel-body">
                        <div class="tab-pane" id="chartjs">
                      <div class="row">
                          <!-- Line -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Line
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="line" height="300" width="450" style="width: 450px; height: 300px;"></canvas>
                                  </div>
                              </section>
                          </div>                      
                          <!-- Bar -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Bar
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="bar" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
                                  </div>
                              </section>
                          </div>
                      </div>
                      <div class="row">
                          <!-- Radar -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Radar
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="radar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
                                  </div>
                              </section>
                          </div>
                          <!-- Polar Area -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Polar Area
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="polarArea" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
                                  </div>
                              </section>
                          </div>
                      </div>
                      <div class="row">
                          
                          <!-- Pie -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Pie
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="pie" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
                                  </div>
                              </section>
                          </div>
                          <!-- Doughnut -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Doughnut
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="doughnut" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
                                  </div>
                              </section>
                          </div>
                      </div>
                  </div>
                      </div>
                      </section></div>		
					  	
    <!-- chartjs -->
    <script src="assets/chart-master/Chart.js"></script>
    <!-- custom chart script for this page only-->
    <script src="js/chartjs-custom.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
				<?php
				
				require '../xcv.php';
				
				?>
	
    <!-- chartjs -->
    <script src="assets/chart-master/Chart.js"></script>
    <!-- custom chart script for this page only-->
    <script src="js/chartjs-custom.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
			</body>

			</html>