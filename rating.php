<?php include("dbconn.php"); ?>
<html>
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Agency</title>
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
			table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			td, th {
			  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 8px;
			}

			tr:nth-child(even) {
			  background-color: #dddddd;
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
            </div></br>


            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
			  <li style="color:sparkleBlue"><a href="index.php"> HOME</a></li>

              </ul>
            </nav>
          </div>
        </div>
      </div>
</div>
 <section class="section about-me" data-section="section1">
        <div class="container">
		</br></br>
	<h2 style='color:DarkRed'><b>Ratings of different sites</b></h2>
<?php
$connect = mysqli_connect('localhost','root','','lets_travel_bangladesh');
if(!$connect){
	die(mysqli_error());
}
mysqli_select_db($connect,"place");
$results = mysqli_query($connect,"SELECT place_name,rating FROM place");
echo "<table style='border:2px solid DarkRed;background-color:White;margin-top:20px'>
<tr>
<th><p style='padding:10px;color:DarkRed'>Beautiful Places Of Bangladesh</p></th>
<th><p style='padding:10px;color:DarkRed'>Average Rating by visitors</p></th>

</tr>";
while($row = mysqli_fetch_array($results) ){
	$t=$row['rating'];
	   echo"<tr>";
	   echo "<td><b>".$row['place_name']."</b></td>";
	   echo "<td><b>";
	      for ($x = 1; $x <= $t; $x++) {
    echo "* ";
}
	   echo"</td>";
	   echo"</tr>";

}
echo"</table>";
?>
</body>
</html>
