
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
				
				
						 require '../connection.php';
						$ClientID = $_GET['ID'];
						
					$get_record = mysqli_query($connection, "SELECT * FROM account WHERE ID='$ClientID'");

								 $get_record_num = mysqli_num_rows($get_record);

								 if ($get_record_num > 0){
							 while ($row = mysqli_fetch_assoc($get_record)){
									$db_ID = $row["ID"];
									 $db_Firstname = $row["firstname"];
									 $db_Fname = $row["firstname"];
									 $db_Middlename = $row["middlename"];
									 $db_Mname = $row["middlename"];
									 $db_Lastname = $row["lastname"];
									 $db_Lname = $row["lastname"];
									 $full_name = ucfirst($db_Firstname) . " " . ucfirst($db_Middlename[0]) . ". " . ucfirst($db_Lastname);
									}
					}
					if (isset($_POST['btn-deactivate'])){
						
							$deactive = $_POST['new_Deactivate'];	
							$History_Description = "QUNDT1VOVCBERUFDVElWQVRFRA==";
							$History_Status = 1;
							$History_Operation = "REVBQ1RJVkFUSU9O";
							$History_Date = date('Y-M-d');
							mysqli_query($connection, "UPDATE account SET status ='$deactive' WHERE ID = '$db_ID;'");
							mysqli_query($connection,"INSERT INTO history (firstname,middlename,lastname,description,status,operation,date)
													VALUES('$db_Fname','$db_Mname','$db_Lname','$History_Description','$History_Status','$History_Operation','$History_Date')");
						echo '<script>alert("CLIENT HAS BEEN DEACTIVATED SUCCESSFULLY !");</script>';
						echo'<script>window.location.replace("admin_clientaccounts.php?");</script>';
						
						}
					
					

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
							
							#back{
							height: 45px;
							width: 8%;
							text-position: center;
							margin-left: 10px;
							}
							#proceed{
							height: 45px;
							width: 8%;
							
							}
							</style>
							
							
						</head>

						<body>
							<nav class="navbar navbar-inverse">
								<div class="container-fluid">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
										</button><a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-fw fa-home"></i> PROJECT REPOSITORY MANAGEMENT SYSTEM</a></div>
								  </div></nav>
							<center><form method="POST" style="margin-top: 10%;" action="#">
								
						  <input type="hidden" value="REVBQ1RJVkFURUQ=" name="new_Deactivate"/>
								<h2 style="font-family: Georgia;">You're about to deactivate your client : </h2> <br><h2><font color="red"><?php echo strtoupper($full_name); ?></font></h2>
								<br>
								<h2 style="font-family: Georgia;">Do you want to continue?</h2>
									<br>
								
									
								<input id="proceed" class="btn btn-primary btn-medium" type="submit" style="font-size: 18px;"  name="btn-deactivate" value="Yes"/>
								<input type="submit" id="back" class="btn btn-success btn-medium" style="font-size: 18px;" name="btn-cancel" value="Cancel"/>
								</form>  	
						</body>
						</html>



	<?php 

		if(isset($_POST['btn-cancel'])){
			echo'<script>window.location.replace("admin_clientaccounts.php?");</script>';
	}

	?>


