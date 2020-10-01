<?php include("dbconn.php"); ?>
<html>
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Current Events</title>
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
              <span>site scene of beautiful bangladesh</span></br></br></br>

           </div>
            <nav class="main-nav"  role="navigation">
              <ul class="main-menu">
			  <li><a href="main.php" style="color:DarkRed"><b>HOME</b></a>
               	    <?php


 mysqli_select_db($conn,"event_group");
$result = mysqli_query($conn,"select * FROM  event_group");
while($row = mysqli_fetch_array($result) 
	){
                echo"<li><a href=#".$row['event_name'].">".$row['event_name']."</a></li>";
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


 mysqli_select_db($conn,"event_group");
$result = mysqli_query($conn,"select * FROM event_group");
while($row = mysqli_fetch_array($result) 
	){
		 echo "<h2 align='center' id=".$row['event_name']."><p style='color:Black'><b>".$row['event_name']."</h2></p></br>";
		 echo "<p style='color:black';text-align:left;margin-left:20px'>".$row['event_info']."</p>";
		 echo "<p style='color:black';text-align:left;margin-left:20px'><b style='color:DarkRed'>Website/link:</b>"."&nbsp&nbsp".$row['link']."</p>";
		 echo "<p style='color:black';text-align:left;margin-left:20px'><b style='color:DarkRed'>Contact</b> :"."&nbsp".$row['contact']."</p>";
		 echo "<p style='color:black';text-align:left;margin-left:20px'><b style='color:DarkRed'>Email</b> :"."&nbsp".$row['email']."</p>";

}
?>
          </div>
       
		</section>
</div>

</body>
</html>