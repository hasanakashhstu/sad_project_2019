<?php include("dbconn.php"); ?>
<html>
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sea beaches</title>
    <meta name="description" content="" />
    <meta name="author" content="Tooplate" />
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Additional CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/tooplate-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
 
</head>
<body>
 <div id="page-wraper">
       <div class="side">
        <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
		  <div class="author-content">
              <h4>Let's Travel Bangladesh</h4>
              <span>side scene of beautiful bangladesh</span></br></br></br>

           </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
			   <li><a href="main.php"><b style='color:DarkRed'>HOME</b></a>
               	    <?php


 mysqli_select_db($conn,"place");
$result = mysqli_query($conn,"select * FROM place");
while($row = mysqli_fetch_array($result) 
	){
                echo"<li><a href=#".$row['place_name'].">".$row['place_name']."</a></li>";
				}
?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
</div>
   <section class="section about-me" data-section="section1">
        <div class="container">
          <?php


 mysqli_select_db($conn,"place");
$result = mysqli_query($conn,"select * FROM place");
while($row = mysqli_fetch_array($result) 
	){
		 echo"<h1 align='center' id=".$row['place_name']."><p style='color:Black'><b>".$row['place_name']."</br></p></h1>";
		 echo "<h2><b style='color:DarkRed'>Emergency Contact</b></h2>";
		 echo "<p style='color:black'><b style='color:DarkRed'>Police-Station :</b>".$row['police']."</p>";
		 echo "<p style='color:black'><b style='color:DarkRed'>Hospital:</b>".$row['hospital']."</p>";
		 echo "<p style='color:black'><b style='color:DarkRed'>Fire-Service:</b>".$row['fire_service']."</p>";
		 echo "<p style='color:black'><b style='color:DarkRed'>Tour-Guide:</b>".$row['guide']."</p>";

}
?>
          </div>
       
		</section>
</div>

</body>
</html>