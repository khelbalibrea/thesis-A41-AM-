
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
									require '../value.php';
									require '../connection.php';
									
									?>
									
									<!DOCTYPE html>
									<html>
				
									<head>
										<meta charset="utf-8">
										<meta name="viewport" content="width=device-width, initial-scale=1.0">
										<title>Project Repository Management System</title>
										<?php
										require '../zxc.php';
										?>
										<style>
										#edit{
										width: 100%;
										margin-bottom: 4px;
											}
										</style>
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
													</button><a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-graduation-cap"></i> PROJECT REPOSITORY SYSTEM</a></div>
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
																<li><a href="http://facebook.com/Rasdie.07"><i class="fa fa-fw fa-code"></i> Developer</a></li>
																<li><a href="../logout.php?" name="logout" onclick="return confirm(' ARE YOU SURE YOU WANT TO LOGOUT ?')"><i class="fa fa-fw fa-sign-out"></i> Logout </a></li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
													</div></nav>
													
													<div class="container">
													<form method="POST">
													<h4 style="font-family: Georgia;"><b><center><img src="../assets/img/cte.jpeg" width="9%"> COLLEGE OF TECHNOLOGY & ENGINEERING ( CTE )</center></b></h4>
							
											<br>
													<table id="dataTable" class="table table-striped table-bordered table-hover">
												
												
												<thead>
												<tr>
													<th>Student Name</th>
													<th>Course</th>
													<th>Project Type</th>
													<th>Project Description</th>
													<th>Date Uploaded<br>( YYYY - MM - DD )</th>
													<th>Option</th>
												</tr>
											</thead>
											<?php 
													$status = 1;
													$Dept = "Q29sbGVnZSBvZiBUZWNob25vbG9neSAmIEVuZ2luZWVyaW5n";
												
													$view_query = mysqli_query($connection, "SELECT * FROM document WHERE department ='$Dept'");
														
														while($row = mysqli_fetch_assoc($view_query)){
														
															$ID = $row["ID"];
															$db_File = $row["file"];
															$db_Fname = $row["firstname"]; 
															$db_Mname = $row["middlename"]; 
															$db_Lname = $row["lastname"]; 
															$Course = $row['course'];
															$ProjectType = $row['project_type'];
															$Description = $row['description'];
															$DateUploaded = $row["date_uploaded"];
															$hide = "";
															$full_name = ucfirst($db_Lname) . ", " . ucfirst($db_Fname) . " " . ucfirst($db_Mname[0]). ". " . ($hide);
															// $full_name = ucfirst($db_Fname) . " " . ucfirst($db_Mname[0]) . ". " . ucfirst($db_Lname);
																echo "
																<tr> 
																	<td>$full_name</td>
																	<td>$Course</td>
																	<td>$ProjectType</td>
																	<td>$Description</td>
																	<td>$DateUploaded</td>		
																	<td>										
																
																	<center>
																			<a id='edit' class='btn btn-success' href='client_cte_history.php?ID=$ID'><i class='fa fa-file-pdf-o'></i> View</a> <br>			
																	</td>	
																	</td>
														
															";
																	
																		
																	
																			
																								}
										
									?>
								
											</table></form></div>
													</body>
										<?php
										require '../xcv.php';
										?>
													
													</html>
													
													
																	