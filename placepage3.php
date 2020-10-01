<?php include("dbconn.php"); ?>
<html>
<head>
    
   <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Historical Places</title>
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
	border:2px solid DarkRed;
	height:40px;

	margin-right:75px;
	width:68%;
}
input[type=password],select{
	border:2px solid DarkRed;
	height:40px;

	margin-right:75px;
	width:68%;
}
input[type=submit],select{
	float:right;
	border:2px solid DarkRed;
	background-color:DarkRed;
	margin-top:-40px;
	margin-right:5px;
	color:White;
	height:40px;
	
}
</style>
 
</head>
<body>
 <div style="background-color:white">
       <div class="side">
        <div class="responsive-nav" >
        <i class="fa fa-bars" id="menu-toggle" ></i>
        <div id="menu" class="menu" style="background-color:GREEN" >
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
			<div class="image" style="margin-top:20px">
              <a href="#"><img src="bangladesh.jpg" alt="Bangladesh" /></a>
            </div>
			<div class="author-content">
              <h4 style="color:white">Let's Travel Bangladesh</h4>
              <span style="color:black"><b>Site Scenes Of Beautiful Bangladesh</b></span>
            </div>

		<div class="content">

            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
			  <li><a href="main.php" style="color:SparkleBlue">HOME</a><br></br>
                <?php
					mysqli_select_db($conn,"place");
					$result = mysqli_query($conn,"select * FROM place where cate_id=3");
					while($row = mysqli_fetch_array($result) )
					{
						echo"<li style='color:SparkleBlue'><a href=#".$row['place_name'].">".$row['place_name']."</a></li>";
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
			$result = mysqli_query($conn,"select * FROM place where cate_id=3");
			while($row = mysqli_fetch_array($result) )
			{
				echo"<h1 align='center' id=".$row['place_name']."><p style='color:DarkRed'><b>".$row['place_name']."</b></p></h1>";
				echo "<p style='text-align:Justify;margin-left:20px;color:black'><b>".$row['full_description']."</b></p></br>";
				echo "<p style='text-align:Justify;margin-left:20px;color:black;margin-top:-15px'><b style='color:DarkRed'>Route :  </b><b>".$row['route']."</b></p>";
				echo "<p style='text-align:Justify;margin-left:20px;color:black;margin-top:-25px'><b style='color:DarkRed'>Hotels : </b><b>".$row['hotel1']."</b></p>";
				echo "<p style='text-align:Justify;margin-left:85px;margin-top:-27px;color:black'><b>".$row['hotel2']."</b></p>";
				echo "<p style='text-align:Justify;margin-left:20px;color:black;margin-top:-19px'><b style='color:DarkRed'>Tour-Guide : </b><b>".$row['guide']."</b></p>";
				echo "<p style='text-align:Justify;margin-left:20px;color:black'><h4 style='margin-left:20px;color:DarkRed'>Emergency Contact</h4></p>";
				echo "<p style='text-align:Justify;margin-left:22px;color:black;margin-top:-13px'><b style='color:DarkRed'>Police Station : </b><b>"."&nbsp".$row['police']."</b></p>";
				echo "<p style='text-align:Justify;margin-left:22px;color:black;margin-top:-25px'><b style='color:DarkRed'>Hospital : </b><b>".$row['hospital']."</b></p>";
				echo "<p style='text-align:Justify;margin-left:22px;color:black;margin-top:-25px'><b style='color:DarkRed'>Fire-Service and Rescue : </b><b>".$row['fire_service']."</b></p>";
			 
				$image = $row['image'];
				echo '<img src="image/'.$image.'" height="500" width="100%">"</br></br></br>';
				echo "<p style='color:black'>__________________________________________________________________________________</p>";
			}

?>
<br>
          </div>
       
		</section>
</div>

</body>
</html>
