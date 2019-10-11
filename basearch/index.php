<?php
  
include('conn.php');  //Eto nalang gamitin mong connection
?>



<html>
  <head>
        <title>Professional Search Bar</title>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
  </head>

      <script type ="text/javascript">
      function active(){
        var searchBar = document.getElementById('search');
        
        if(searchBar.value == 'Search...'){
          searchBar.value = ''
          searchBar.placeholder = 'Search...'
        }
      } 
      
      function inactive(){
        var searchBar = document.getElementById('search');
        
        if(searchBar.value == ''){
          searchBar.value = 'Search...'
          searchBar.placeholder = ''
        }
      }
    </script> 


  <body>
    <div class="s130">
      <form method="POST"  id= "searchForm" >
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
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
