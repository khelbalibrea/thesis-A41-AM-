<?php
	require '../session.php';
	
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
	
	require '../value.php';
	require'../connection.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TCU - Thesis Repository System</title>
	 <link rel="icon" href="../assets/img/faviconTCU.png">

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
				</button>
				
				<a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-graduation-cap"></i> TCU - Thesis Repository System</a>
			</div>
			
			<div class="collapse navbar-collapse" id="navcol-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown"><a aria-expanded="false" href="admin_project_documents.php?"><i class="fa fa-folder-open"></i> TCU - Thesis Repository System</a>
											
										</li>
						
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" value=""><i class="fa fa-fw fa-id-badge"></i> ACCOUNT MANAGEMENT</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="admin_new_user.php?"><i class="fa fa-fw fa-user-plus"></i> New Administrator</a></li>
								<li><a href="admin_new_staff.php?"><i class="fa fa-fw fa-user-plus"></i> New Staff</a></li>
								<li><a href="admin_clientaccounts.php?"><i class="fa fa-fw fa-users"></i> View Client List</a></li>
							</ul>
						</li>				
						
						<li role="presentation">
							<a href="historylogs.php?" style="color: white;"><i class="fa fa-bell"></i> HISTORY LOGS [ <?php echo $Value; ?> ]</a>
						</li>
						
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-fw fa-user-circle"></i> <?php echo strtoupper($full); ?></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="admin_profile.php?"><i class="fa fa-fw fa-user"></i> Profile</a></li>
								<li><a href="admin_setting.php?"><i class="fa fa-fw fa-gear"></i> Account Settings</a></li>
								<li><a href="admin_college_setting.php?"><i class="fa fa-fw fa-gear"></i> College</a></li>
								<li><a href="http://facebook.com/"><i class="fa fa-fw fa-code"></i> Developer</a></li>
								<li><a href="../logout.php?" name="logout" onclick="return confirm(' ARE YOU SURE YOU WANT TO LOGOUT ?')"><i class="fa fa-fw fa-sign-out"></i> Logout </a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	
	<div class="container">
		<form method="POST">
			<select class="input" name="college_search">
				<?php
					$query = mysqli_query($conn, "SELECT collegename FROM college");
					
					while($row = mysqli_fetch_array($query)){
						?>
						
						<option>
							<?php
								echo $row["collegename"];?>
						</option>
						
						<?php
					}
				?>
			</select>
			
			<input id="btn-reg" class="btn btn-primary btn-small" type="submit" name="btn-search" value="Search College">
			
			<br>
			<br>
		
			<h2 style="font-family: Georgia;"><b><center> COLLEGES (TCU)</center></b></h4>
			<!-- <img src="../assets/img/cbm.jpeg" width="8%"></img> -->
													
													<a  role="button" class="btn btn-primary btn-med" style="margin-right: 100%;" name="add-project" href="admin_cbm_project.php?"><i class ="fa fa-fw fa-plus"></i> Store Project</a>
												<br><br><div class="table-responsive">
													<table width="100%" id="dataTable" class="table table-striped table-bordered table-hover">
												
												
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
													$current_college = "";
													
													if(isset($_POST['btn-search'])){
														$selected_key = $_POST["college_search"];
														//$dept = "College of Information and Computer Technology";
														
														$view_query1 = mysqli_query($conn, "SELECT * FROM document WHERE department='$selected_key'");
														
														while($row1 = mysqli_fetch_assoc($view_query1)){
															$ID = $row1["ID"]; 
															$db_Fname = $row1["firstname"]; 
															$db_Mname = $row1["middlename"]; 
															$db_Lname = $row1["lastname"]; 
															$Course = $row1['course'];
															$ProjectType = $row1['project_type'];
															$Description = $row1['description'];
															$File = $row1["file"];
															$DateUploaded = $row1["date_uploaded"];
															$hide = "";
															
															$full_name = ucfirst($db_Lname) . ", " . ucfirst($db_Fname) . " " . ucfirst($db_Mname[0]).".".($hide);
															// $full_name = ucfirst($db_Fname) . " " . ucfirst($db_Mname[0]) . ". " . ucfirst($db_Lname);
															
															echo "
															<tr> 
																<td>$full_name</td>
																<td>$Course</td>
																<td>$ProjectType</td>
																<td>$Description</td>
																<td>$DateUploaded</td>		
																<td>
															
																<center><a id='edit' class='btn btn-success'  href='admin_cbm_view.php?ID=$ID'><i class='fa fa-file-pdf-o'></i> View</a> 
																<center><a id='edit' class='btn btn-warning'  href='admin_cbm_edit.php?ID=$ID'><i class='fa fa-fw fa-pencil'></i> Edit</a> 
																</td>	
																</td>
																";
														}
														$current_college = $selected_key;
														
														$query1 = mysqli_query($conn, "SELECT * FROM college WHERE collegename ='$current_college'");
														$name = "";
														$code = "";
														
														while($row2 = mysqli_fetch_assoc($query1)){
															$name = $row2["collegename"];
															$code = $row2["collegecode"];
														}
													} else {
														//$Dept = "College of Information Computer Technology";
													
														$view_query = mysqli_query($connection, "SELECT * FROM document");
														//$view_query3 = mysqli_query($connection, "SELECT * FROM document WHERE department='$Dept'");
															
														while($row = mysqli_fetch_assoc($view_query)){
														
															$ID = $row["ID"]; 
															$db_Fname = $row["firstname"]; 
															$db_Mname = $row["middlename"]; 
															$db_Lname = $row["lastname"]; 
															$Course = $row['course'];
															$ProjectType = $row['project_type'];
															$Description = $row['description'];
															$File = $row["file"];
															$DateUploaded = $row["date_uploaded"];
															$hide = "";
												
															$full_name = ucfirst($db_Lname) . ", " . ucfirst($db_Fname) . " " . ucfirst($db_Mname[0]).".".($hide);
															// $full_name = ucfirst($db_Fname) . " " . ucfirst($db_Mname[0]) . ". " . ucfirst($db_Lname);
																echo "
																<tr> 
																	<td>$full_name</td>
																	<td>$Course</td>
																	<td>$ProjectType</td>
																	<td>$Description</td>
																	<td>$DateUploaded</td>		
																	<td>
																
																	<center><a id='edit' class='btn btn-success'  href='admin_cbm_view.php?ID=$ID'><i class='fa fa-file-pdf-o'></i> View</a> 
																	<center><a id='edit' class='btn btn-warning'  href='admin_cbm_edit.php?ID=$ID'><i class='fa fa-fw fa-pencil'></i> Edit</a> 
																	</td>	
																	</td>
														
																
															
															";
														}
														
														$current_college = "ALL COLLEGES";
														$name = "ALL COLLEGES";
														$code = "TCU";
													}
									?>
											
											</table></div></form></div>
													</body>
										<?php
										
										require '../xcv.php';
										?>
													
													</html>