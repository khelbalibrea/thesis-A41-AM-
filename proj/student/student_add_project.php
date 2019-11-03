
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
						
		//echo date('M-D-Y'); die;
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
				
		<style>
			#fname{
			width: 35%;
			margin-bottom: 10px;
			}
			#mname{
			width: 38%;
			margin-bottom: 10px;
			}
			#lname{
			width: 38%;
			margin-bottom: 10px;
			}
			#employee{
			width: 38%;
			margin-bottom: 10px;
			}
			#gender{
			width: 38%;
			margin-bottom: 10px;
			}
			#department{
			width: 38%;
			margin-bottom: 10px;
			}
			#update{
			width: 38%;
			height: 43px;
			font-weight: bold;
			font-size: 16px;
			margin-bottom: 7px;
			}
			#cancel{
			width: 38%;
			height: 43px;
			font-weight: bold;
			font-size: 16px;
			margin-bottom: 7px;
			}
			#description{
			height: 60px;
			
			}
		</style>
	</head>
	
	<script>
				function showPlace(){
					var selectBox = document.getElementById('payment');
					var userInput = selectBox.options[selectBox.selectedIndex].value;
						if (userInput == '1'){
							document.getElementById('place1').style.visibility ='visible';
							document.getElementById('place1').value = '';
							document.getElementById('place2').style.visibility ='hidden';
							document.getElementById('place2').value = 'N/A';
							document.getElementById('place3').style.visibility ='hidden';
							document.getElementById('place3').value = 'N/A';
							document.getElementById('place4').style.visibility ='hidden';
							document.getElementById('place4').value = 'N/A';
							document.getElementById('place5').style.visibility ='hidden';
							document.getElementById('place5').value = 'N/A';	
						}
						
						else if(userInput == '2'){
							document.getElementById('place1').style.visibility ='visible';
							document.getElementById('place1').value = '';
							document.getElementById('place2').style.visibility ='visible';
							document.getElementById('place2').value = '';
							document.getElementById('place3').style.visibility ='hidden';
							document.getElementById('place3').value = 'N/A';
							document.getElementById('place4').style.visibility ='hidden';
							document.getElementById('place4').value = 'N/A';
							document.getElementById('place5').style.visibility ='hidden';
							document.getElementById('place5').value = 'N/A';										
						}

						else if(userInput == '3'){
							document.getElementById('place1').style.visibility ='visible';
							document.getElementById('place1').value = '';
							document.getElementById('place2').style.visibility ='visible';
							document.getElementById('place2').value = '';
							document.getElementById('place3').style.visibility ='visible';
							document.getElementById('place3').value = '';
							document.getElementById('place4').style.visibility ='hidden';
							document.getElementById('place4').value = 'N/A';
							document.getElementById('place5').style.visibility ='hidden';
							document.getElementById('place5').value = 'N/A';	
						}
						
						else if(userInput == '4'){
							document.getElementById('place1').style.visibility ='visible';
							document.getElementById('place1').value = '';
							document.getElementById('place2').style.visibility ='visible';
							document.getElementById('place2').value = '';
							document.getElementById('place3').style.visibility ='visible';
							document.getElementById('place3').value = '';
							document.getElementById('place4').style.visibility ='visible';
							document.getElementById('place4').value = '';
							document.getElementById('place5').style.visibility ='hidden';
							document.getElementById('place5').value = 'N/A';											
						}
						
						else if(userInput == '5'){
							document.getElementById('place1').style.visibility ='visible';
							document.getElementById('place1').value = '';
							document.getElementById('place2').style.visibility ='visible';
							document.getElementById('place2').value = '';
							document.getElementById('place3').style.visibility ='visible';
							document.getElementById('place3').value = '';
							document.getElementById('place4').style.visibility ='visible';
							document.getElementById('place4').value = '';
							document.getElementById('place5').style.visibility ='visible';
							document.getElementById('place5').value = '';											
						}
						
						else if(userInput == ''){
							document.getElementById('place1').style.visibility ='hidden';
							document.getElementById('place1').value = '';
							document.getElementById('place2').style.visibility ='hidden';
							document.getElementById('place2').value = '';
							document.getElementById('place3').style.visibility ='hidden';
							document.getElementById('place3').value = '';
							document.getElementById('place4').style.visibility ='hidden';
							document.getElementById('place4').value = '';
							document.getElementById('place5').style.visibility ='hidden';
							document.getElementById('place5').value = '';										
						}
						
						return false;
				}
				
				function showPanel(){
					var selectBox = document.getElementById('panel');
					var userInput = selectBox.options[selectBox.selectedIndex].value;
						if (userInput == '1'){
							document.getElementById('panel1').style.visibility ='visible';
							document.getElementById('panel1').value = '';
							document.getElementById('panel2').style.visibility ='hidden';
							document.getElementById('panel2').value = 'N/A';
							document.getElementById('panel3').style.visibility ='hidden';
							document.getElementById('panel3').value = 'N/A';
							document.getElementById('panel4').style.visibility ='hidden';
							document.getElementById('panel4').value = 'N/A';
							document.getElementById('panel5').style.visibility ='hidden';
							document.getElementById('panel5').value = 'N/A';	
						}                             
						                              
						else if(userInput == '2'){    
							document.getElementById('panel1').style.visibility ='visible';
							document.getElementById('panel1').value = '';
							document.getElementById('panel2').style.visibility ='visible';
							document.getElementById('panel2').value = '';
							document.getElementById('panel3').style.visibility ='hidden';
							document.getElementById('panel3').value = 'N/A';
							document.getElementById('panel4').style.visibility ='hidden';
							document.getElementById('panel4').value = 'N/A';
							document.getElementById('panel5').style.visibility ='hidden';
							document.getElementById('panel5').value = 'N/A';										
						}                             
                                                      
						else if(userInput == '3'){    
							document.getElementById('panel1').style.visibility ='visible';
							document.getElementById('panel1').value = '';
							document.getElementById('panel2').style.visibility ='visible';
							document.getElementById('panel2').value = '';
							document.getElementById('panel3').style.visibility ='visible';
							document.getElementById('panel3').value = '';
							document.getElementById('panel4').style.visibility ='hidden';
							document.getElementById('panel4').value = 'N/A';
							document.getElementById('panel5').style.visibility ='hidden';
							document.getElementById('panel5').value = 'N/A';	
						}                             
						                              
						else if(userInput == '4'){    
							document.getElementById('panel1').style.visibility ='visible';
							document.getElementById('panel1').value = '';
							document.getElementById('panel2').style.visibility ='visible';
							document.getElementById('panel2').value = '';
							document.getElementById('panel3').style.visibility ='visible';
							document.getElementById('panel3').value = '';
							document.getElementById('panel4').style.visibility ='visible';
							document.getElementById('panel4').value = '';
							document.getElementById('panel5').style.visibility ='hidden';
							document.getElementById('panel5').value = 'N/A';											
						}                             
						                              
						else if(userInput == '5'){    
							document.getElementById('panel1').style.visibility ='visible';
							document.getElementById('panel1').value = '';
							document.getElementById('panel2').style.visibility ='visible';
							document.getElementById('panel2').value = '';
							document.getElementById('panel3').style.visibility ='visible';
							document.getElementById('panel3').value = '';
							document.getElementById('panel4').style.visibility ='visible';
							document.getElementById('panel4').value = '';
							document.getElementById('panel5').style.visibility ='visible';
							document.getElementById('panel5').value = '';											
						}                             
						                              
						else if(userInput == ''){     
							document.getElementById('panel1').style.visibility ='hidden';
							document.getElementById('panel1').value = '';
							document.getElementById('panel2').style.visibility ='hidden';
							document.getElementById('panel2').value = '';
							document.getElementById('panel3').style.visibility ='hidden';
							document.getElementById('panel3').value = '';
							document.getElementById('panel4').style.visibility ='hidden';
							document.getElementById('panel4').value = '';
							document.getElementById('panel5').style.visibility ='hidden';
							document.getElementById('panel5').value = '';										
						}
						
						return false;
				}
				
	</script>

	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"></button>
					
					<a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-graduation-cap"></i> THESIS REPOSITORY SYSTEM</a>
				</div>
			</div>
		</nav>
		
		<div class="card mb-3">
			<div class="card-body">
				<form  action="student_document_upload.php?" method="POST" enctype="multipart/form-data">
					<h4 style="font-family: Georgia; margin-bottom: 2%;"><b><center><i class="fa fa-file-pdf-o"></i> NEW DOCUMENT</center></b></h4>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<label for="exampleInputName">Document Title</label>
								
								<input required type="text" maxlength="50" minlength="2" name="DocumentTitle" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter Document title">
							</div>
							
							<div class="col-md-6">
								<label for="exampleInputLastName">Course</label>
								
								<select class="form-control" required name="Course">
									<?php
										$query = mysqli_query($conn, "SELECT coursename FROM course");
										
										while($row = mysqli_fetch_array($query)){
											?>
											
											<option>
												<?php
													echo $row["coursename"];?>
											</option>
											
											<?php
										}
									?>
								</select>
							</div>
							
							<div class="col-md-6">
								<label for="exampleInputLastName">Project Type</label>
								
								<select class="form-control" required name="Proj-type">
										<option name="Proj-type" value="">Project Type</option>
										<option name="Proj-type" value="OJT">OJT</option>
										<option name="Proj-type" value="Research">Research</option>
										<option name="Proj-type" value="Thesis">Thesis</option>
										<option name="Proj-type" value="Feasibility Study">Feasibility Study</option>
								</select>
							</div>
							
							<div class="col-md-6">
								<label for="exampleInputName">College</label>
								
								<input type="text" class="form-control"  placeholder="Your College" name="College" autocomplete="on" required maxlength="250" minlength="2"/>
							</div>
						</div>
					</div>
					
					<div class="col-md-12">
						<label for="exampleInputEmail1">Project Description</label>
						
						<textarea name="Description" required id="description" class="form-control" placeholder="Project Description" ></textarea>
					</div>
					
					<div class="form-group">
						<div class="col-md-6">
							<label for="exampleInputName">Date</label>
							
							<input required name="DateUpload" type="date" class="form-control" id="exampleInputPassword1">
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<label for="exampleInputName">Abstract</label> <input type="file" class="input" name="file" accept=".pdf" required/><br>
							</div>
						</div>
					</div>
					<div class="form-group">
			<center>
            <div class="form-row" style="width: 100%;">
                <div class="col-md-6">
					<select id="payment" style="font-weight: bold;" class="form-control" required id="exampleInputLastName" name="payment" onchange="return showPlace();" >
					    <option name="gender" value="">--- Number of Authors --- (Include yourself)</option>
					    <option name="gender" value="1">1 Author only</option>
					    <option name="gender" value="2">2 Authors</option>
					    <option name="gender" value="3">3 Authors</option>
					    <option name="gender" value="4">4 Authors</option>
					    <option name="gender" value="5">5 Authors</option>
					</select>
					<br>
					
					<input style="visibility: hidden;" id="place1" required style="font-weight: bold;" type="text" class="form-control" name="author1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Author 1"><br>
					<input style="visibility: hidden;" id="place2" required style="font-weight: bold;" type="text" class="form-control" name="author2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Author 2"><br>
					<input style="visibility: hidden;" id="place3" required style="font-weight: bold;" type="text" class="form-control" name="author3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Author 3"><br>
					<input style="visibility: hidden;" id="place4" required style="font-weight: bold;" type="text" class="form-control" name="author4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Author 4"><br>
					<input style="visibility: hidden;" id="place5" required style="font-weight: bold;" type="text" class="form-control" name="author5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Author 5"><br>
				</div>
				
				<div class="col-md-6">
				    <select id="panel" style="font-weight: bold;" class="form-control" required id="exampleInputLastName" name="panel" onchange="return showPanel();" >
					    <option name="gender" value="">--- Number of Panels ---</option>
					    <option name="gender" value="1">1 Panel only</option>
					    <option name="gender" value="2">2 Panels</option>
					    <option name="gender" value="3">3 Panels</option>
					    <option name="gender" value="4">4 Panels</option>
					    <option name="gender" value="5">5 Panels</option>
				    </select>
					<br>
					
					<input style="visibility: hidden;" id="panel1" required style="font-weight: bold;" type="text" class="form-control" name="panel1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Panel 1"><br>
					<input style="visibility: hidden;" id="panel2" required style="font-weight: bold;" type="text" class="form-control" name="panel2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Panel 2"><br>
					<input style="visibility: hidden;" id="panel3" required style="font-weight: bold;" type="text" class="form-control" name="panel3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Panel 3"><br>
					<input style="visibility: hidden;" id="panel4" required style="font-weight: bold;" type="text" class="form-control" name="panel4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Panel 4"><br>
					<input style="visibility: hidden;" id="panel5" required style="font-weight: bold;" type="text" class="form-control" name="panel5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Panel 5"><br>
				</div>
			</div>
			</center>
			
			<center>
				<div class="form-group">
					<div class="form-row" style="width: 50%;">
						<div class="col-md-12">
							<input id="btn-reg" class="btn btn-primary btn-medium" type="submit" name="submit" value="Submit">
							<br>
							<a id="btn-reg1" class="btn btn-success btn-medium" role="button" href="index.php?">Cancel</a>
						</div>
					</div>
				</div>
			</center>
		</div>
				</form>
			</div>
		</div>
	</body>
    

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/vendor/popper/popper.min.js"></script>
    <script src="../vendor/vendor/bootstrap/js/bootstrap.min.js"></script>
</html>



