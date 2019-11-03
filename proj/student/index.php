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
			
			
			?>

			<!DOCTYPE html>
			<html>
			<head>
			
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Thesis Repository Management System</title>
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
							</button><a class="navbar-brand navbar-link" href="index.php?"><i class="fa fa-graduation-cap"></i> THESIS REPOSITORY SYSTEM</a></div>
						<div class="collapse navbar-collapse" id="navcol-1">
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown"><a class="dropdown-toggle" aria-expanded="false" href="student_add_project.php?"><i class="fa fa-file-pdf-o"></i> Becoming an author? UPLOAD DOCUMENT</a>
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
			 
			    <script type ="text/javascript">
      function active(){
        var searchBar = document.getElementById('search');
        
        if(searchBar.value == 'Search...'){
          searchBar.value = ''
          searchBar.placeholder = 'Search...'
        }
		
		var s130left = document.getElementById('s130left');
		s130left.addClass("s13left");
		
      } 
      
      function inactive(){
        var searchBar = document.getElementById('search');
        
        if(searchBar.value == ''){
          searchBar.value = 'Search...'
          searchBar.placeholder = ''
        }
      }
	  
		
    </script> 

 <!-- </center> -->
  <body>
    <div class="s130" id="s130left">
      <form method="POST"  id= "searchForm" class="">
		<center>
	  
	   <img src="../assets/img/LagakanLogo.png" width="60%"; ><br><br>
	   </center>
        <?php
          if(isset($_POST['searchword'])){
          $searchword = $_POST['searchword'];
            $sql ="SELECT * FROM document WHERE project_type LIKE '%$searchword%'  OR description LIKE '%$searchword%'";

            $result = $conn->query($sql); // eto na ung pinaka connection nya 
          }else {
              $sql = "SELECT * FROM document"; //KAPAG WALANG LAMAN UNG SEARCH BABALIK ULET UNG MGA LAMAN NG TABLE MO
               $result = $conn->query($sql);
             }  
        
          ?>
		  
		 
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>

			

            <input type="text" name="searchword" id="search"  placeholder="What are you looking for?" maxlength="25" />

          </div>
          <div class="input-field second-wrap">
          <!--  <button class="btn-search" type="button">SEARCH</button> -->
			
            <input type = "submit" class ="btn-search" value="Go" autocomplete ="off" onMouseDown="active();" onBlur="inactive();" />


          </div>
        </div>
        <span class="info">ex. Technology,Food,Business,Engineering</span>

<?php
        
          // echo $num_rows;
          
         while($row = $result->fetch_array()) {
            $id = $row['ID']; 
            $prodtype = $row['project_type'];
            $desc = $row['description'];
              
            //echo '<h3>' . $prodtype . '</h3><p> ' . $desc . '</p><br/>';
            echo '<h3><a href = "' . $id. '.php"> ' . $prodtype . '</h3><p> ' . $desc . '</p><br/>';
          }
          
        ?>
      </form>
    </div>

    <script src="js/extention/choices.js"></script>

			  

				<?php
				
				require '../xcv.php';
				
				?>
				
			</body>

			</html>