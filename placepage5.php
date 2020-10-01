<?php include("dbconn.php"); ?>
<html>
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Rivers & Lakes</title>
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
			<div class="image">
              <a href="#"><img src="bangladesh.jpg" alt="Bangladesh" /></a>
            </div>
			<div class="author-content">
              <h4 style="color:white">Let's Travel Bangladesh</h4>
              <span style="color:black"><b>Site Scenes Of Beautiful Bangladesh</b></span>
            </div>
			</br>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
			  <li><a href="main.php" style="color:DarkRed"><b>HOME</b></a><br></br>
               	    <?php


 mysqli_select_db($conn,"place");
$result = mysqli_query($conn,"select * FROM place where cate_id=5");
while($row = mysqli_fetch_array($result) 
	){
                echo"<li><a href=#".$row['place_name']."><b style='color:DarkRed'>".$row['place_name']."</b></a></li>";
				}
?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
</div>
   <section class="section about-me" data-section="section1">
        <div class="container" style="margin-top:-50px">
          <?php


 mysqli_select_db($conn,"place");
$result = mysqli_query($conn,"select * FROM place where cate_id=5");
while($row = mysqli_fetch_array($result) )
{
		 echo"<h2 align='center' id=".$row['place_name']."></br><p style='color:DarkRed'><b>".$row['place_name']."</p></h2>";
		 echo "<p style='text-align:left;margin-left:20px;color:black'>".$row['full_description']."</p></br>";
		 echo "<p style='text-align:left;margin-left:20px;color:black;margin-top:-15px'><b style='color:DarkRed'>Route :  </b>".$row['route']."</p>";
		 echo "<p style='text-align:left;margin-left:20px;color:black;margin-top:-25px'><b style='color:DarkRed'>Hotels : </b>".$row['hotel1']."</p>";
		 echo "<p style='text-align:left;margin-left:85px;margin-top:-27px;color:black'>".$row['hotel2']."</p>";
		 echo "<p style='text-align:left;margin-left:20px;color:black;margin-top:-19px'><b style='color:DarkRed'>Tour-Guide : </b>".$row['guide']."</p>";
		 echo "<p style='text-align:left;margin-left:20px;color:black'><b style='color:DarkRed'><h4 style='margin-left:20px'>Emergency Contact</h4></b></p>";
		 echo "<p style='text-align:left;margin-left:22px;color:black;margin-top:-13px'><b style='color:DarkRed'>Police Station : </b>"."&nbsp".$row['police']."</p>";
		 echo "<p style='text-align:left;margin-left:22px;color:black;margin-top:-25px'><b style='color:DarkRed'>Hospital : </b>".$row['hospital']."</p>";
		 echo "<p style='text-align:left;margin-left:22px;color:black;margin-top:-25px'><b style='color:DarkRed'>Fire-Service and Rescue : </b>".$row['fire_service']."</p>";
		 
		 	$image = $row['image'];
			echo '<img src="image/'.$image.'" height="500" width="100%">"</br></br></br>';
			echo '___________________________________________________________________________________________________________';
}

?>
<br></br>
          </div>
       
		</section>
</div>

</body>
</html>