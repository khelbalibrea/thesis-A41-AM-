								<?php
								require '../session.php';
								require '../value.php';
								require'../connection.php';
								
									if($userlevel == "STAFF"){	
			echo '<script>
					window.location.replace("../staff/");
			</script>';
				}
				
					if($userlevel == "CLIENT"){	
			echo '<script>
					window.location.replace("../client/");
			</script>';
				}
								
								
								
								
								if(isset($_POST['btn-read'])){
								$Status = 0;
								mysqli_query($connection," UPDATE history SET status='$Status'");
								echo '<script>alert("ALL HISTORY ARE VIEWED !");</script>';
								$Status = "MQ==";
								$view_query = mysqli_query($connection, "SELECT * FROM history WHERE status='$Status'");
								$Value = 1;
								while($row = mysqli_fetch_assoc($view_query)){
						
									$Value++;
								}
								}
								
								
								?>
								<!DOCTYPE html>
								<html>
			
								<head>
									<meta charset="utf-8">
									<meta name="viewport" content="width=device-width, initial-scale=1.0">
									<title>TCU - THESIS REPOSITORY SYSTEM</title>
									 <link rel="icon" href="../assets/img/faviconTCU.png">
									<?php
									require '../zxc.php';
									?>
									<style>
									#edit{
									width: 100px;
									margin-bottom: 3px;
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
												</button><a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-graduation-cap"></i> TCU - THESIS REPOSITORY SYSTEM</a></div>
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
												<a href="#" style="color: white;"><i class="fa fa-bell"></i> HISTORY LOGS [ <?php echo $Value; ?> ]</a>
												</li>
													
													<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-fw fa-user-circle"></i> <?php echo strtoupper($full); ?></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="admin_profile.php?"><i class="fa fa-fw fa-user"></i> Profile</a></li>
															<li><a href="admin_setting.php?"><i class="fa fa-fw fa-gear"></i> Account Settings</a></li>
															<li><a href="admin_college_setting.php?"><i class="fa fa-fw fa-gear"></i> College</a></li>
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
												<h4 style="font-family: Georgia;"><b><center><i class="fa fa-fw fa-book"></i> RECENT USERS ACTIVITIES</center></b></h4>
												
												<button class="btn btn-primary btn-med" onclick="return confirm(' ARE YOU SURE YOU WANT TO CLEAR ALL HISTORIES ?')" style="margin-right: 100%;" name="btn-read" ><i class ="fa fa-fw fa-check-square"></i> Clear History</button>
											<br><br><div class="table-responsive">
												<table width="100%" id="dataTable" class="table table-striped table-bordered table-hover">
											
											
											<thead>
											<tr>
												<th>Users</th>
												<th>Description</th>
												<th>Operation</th>
												<th>Date of Activity<br>( YYYY - MM - DD )</th>
												<th>Option</th>
											</tr>
										</thead>
										<?php
												$status = "1";
												$view_query = mysqli_query($connection, "SELECT * FROM history WHERE status='$status'");
													
													while($row = mysqli_fetch_assoc($view_query)){
													
														$ID = $row["ID"]; 
														$Firstname = $row["firstname"]; 
														$Middlename = $row["middlename"]; 
														$Lastname = $row["lastname"]; 
														$Description = $row["description"];
														$Operation = $row["operation"];
														$Date = $row["date"];
														$hide = "";
										$full_name = ucfirst($Lastname) . ", " . ucfirst($Firstname) . " " . ucfirst($Middlename[0]). ". ".($hide);
										// $full_name = ucfirst($Firstname) . " " . ucfirst($Middlename[0]) . ". " . ucfirst($Lastname);
														
															echo "
															<tr> 
																<td>$full_name</td>
																<td>$Description</td>
																<td>$Operation</td>
																<td>$Date</td>
																
																<td>
															
																<center><a onClick=\"javascript: return confirm('ARE YOU SURE YOU WANT TO REMOVE THIS ?');\" id='edit' class='btn btn-danger'  href='../recent.php?ID=$ID'><i class='fa fa-fw fa-trash'></i> Remove</a> 
																</td>	
																</td>
													
															
														
														";
													}

								?>
										
										</table></div></form></div>
												</body>
									<?php
									require '../xcv.php';
									?>
												
												</html>