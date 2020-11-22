<?php include("dbconn.php"); ?>
<html>
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Emergency contact</title>
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
<style>
	input[type=text],select{
	border:none;
	height:40px;
	color:Black;
	border:NONE;
	font-size:12px;
	text-align:center;
	background-color:NONE;
	margin-right:75px;
	width:68%;
}
input[type=submit],select{
	float:right;
	border:NONE;
	background-color:NONE;
	margin-top:-40px;
	margin-right:5px;
	color:color;
	height:40px;

}
</style>
</head>
<body>
 <div id="page-wraper" style="background-color:white">
       <div class="side">
        <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu" style="background-color:GREEN">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
		  <div class="image">
              <a href="#"><img src="images/bangladesh.jpg" alt="Bangladesh" /></a>
            </div>
            <div class="author-content">
              <h4 style="color:white">Let's Travel Bangladesh</h4>
              <span style="color:black"><b>Site Scenes Of Beautiful Bangladesh</b></span>
            </div>
			<div>
				<form action="search_result.php" method="post" autocomplete="off">
					<input type="text" name="search_by_place" style="font-weight:bold" placeholder=" Place Name" required>
					<input type="submit" name="submit3" style="font-weight:bold" value="Search">
				</form>
			</div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
			   <li style="color:SparkleBlue"><a href="index.php">HOME</a><br></br>
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
        <div class="container" style="margin-top:0px">
          <?php


 mysqli_select_db($conn,"place");
$result = mysqli_query($conn,"select * FROM place");
while($row = mysqli_fetch_array($result)
	){
		 echo"<h1 align='center' id=".$row['place_name']."><p style='color:Black'><b style='color:DarkRed'>".$row['place_name']."</b></p></h1>";
		 echo "<h3><b style='color:DarkRed'>Emergency Contact</b></h3>";
		 echo "<p style='color:black'><b style='color:DarkRed'>Police-Station :</b><b>".$row['police']."</b></p>";
		 echo "<p style='color:black;margin-top:-10px'><b style='color:DarkRed'>Hospital:</b><b>".$row['hospital']."</b></p>";
		 echo "<p style='color:black;margin-top:-10px'><b style='color:DarkRed'>Fire-Service:</b><b>".$row['fire_service']."</b></p>";
		 echo "<p style='color:black;margin-top:-10px'><b style='color:DarkRed'>Tour-Guide:</b><b>".$row['guide']."</b></p></br>";
		 echo "<p style='color:black'>_______________________________________________________________________________________</p>";

}
?>
          </div>

		</section>
</div>

</body>
</html>
