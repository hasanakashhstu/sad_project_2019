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
			  <li><a href="main.php">HOME</a>
               	    
              </ul>
            </nav>
          </div>
        </div>
      </div>
</div>
   <section class="section about-me" data-section="section1">
        <div class="container">
           <?php
$connect = mysqli_connect('localhost','root','','lets_travel_bangladesh');
if(!$connect){
	die(mysqli_error());	
}
mysqli_select_db($connect,"agencies");
$results = mysqli_query($connect,"SELECT * FROM agencies");
echo "<table border='3'>
<tr>
<th>Agency Name</th>
<th>Contact</th>
<th>Email</th>
<th>Availabel link for details information</th>
</tr>";
while($row = mysqli_fetch_array($results) ){
	   echo"<tr>";
	   echo "<td>".$row['agency_name']."</td>";
	   echo "<td>".$row['contact']."</td>";
	   echo "<td>".$row['email']."</td>";
	   echo "<td>".$row['link']."</td>";
	   echo"</tr>";
	   
}
echo"</table>";
?>
          </div>
       
		</section>
</div>

</body>
</html>