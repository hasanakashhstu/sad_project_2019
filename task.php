<?php
	error_reporting(0);
	session_start();
	$db_con = mysqli_connect('localhost','root','','lets_travel_bangladesh');
	$check = $_SESSION['email'];
	if($check==true){
	}
	else{
		header("refresh:0; url=main.php");
		$message = "Session Out.You need to log in first";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
?>
<html>
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>task page</title>
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
.button {
  background-color: #170706;
  float:right;
  border: none;
  width:50%;
  padding: 15px 32px;
  text-align: center;
  text-decoration:none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  color:white;
}
</style>

</head>
<body style="background-color:#35353b">
 <div id="page-wraper">
       <div class="side">
        <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu" style="background-color:Darkslategrey">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
		  
		  <div class="image">
              <a href="#"><img src="bangladesh.jpg" alt="Bangladesh" /></a>
            </div>
            <div class="author-content">
              <h4 style="color:white">Let's Travel Bangladesh</h4>
              <span style="color:black"><b>Site Scenes Of Beautiful Bangladesh</b></span>
            </div></br>
		  
		  
            <nav class="main-nav" role="navigation">
			</nav>
			
          </div>
		  
        </div>
      </div>
	</div>
	</div>
	
	<div style="margin-top:100px;margin-right:400px">
			<a href="Ad_Place.php" target="_self" class="button"><b>Add Place</b></a><br>
			<a href="Ad_Event.php" target="_self" class="button"><b>Add Event</b></a><br>
			<a href="Ad_Agency.php" target="_self" class="button"><b>Add Agency</b></a><br>
			
	</div>
	<div style="background-color:DarkRed;text-align:center;float:right; padding-top:10px;width:38%;height:40px;margin-top:70px;margin-right:385px;margin-left:40px;cursor:pointer">
	<a href="logout.php" action="main.php" style="color:white"><b> LOG OUT</b></a><br></br><br></b>
	</div>
</body>
</html>