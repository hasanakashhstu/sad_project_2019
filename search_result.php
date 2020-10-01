
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Search_Result</title>
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
 <div id="page-wraper" style="background-color:white">
       <div class="side">
        <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu" style="background-color:GREEN">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
			<div class="image">
              <a href="#"><img src="bangladesh.jpg" alt="Bangladesh" /></a>
            </div>
			<div class="author-content">
              <h4 style="color:black">Let's Travel Bangladesh</h4>
              <span style="color:white"><b>Site Scenes Of Beautiful Bangladesh</b></span>
            </div>
			</br>
			 <div class="social-network">
              <ul class="soial-icons">
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-rss"></i></a>
                </li>
              </ul>
            </div>
          
          </div>
        </div>
      </div>
	</div>
	<div style="width:900px;height:auto;margin-left:400px;margin-top:-20px">
	<?php
	
	session_start();
	$db_con = mysqli_connect('localhost','root','','lets_travel_bangladesh');
		
	if(isset($_POST['submit']))
	{ 
		$search_content = mysqli_real_escape_string($db_con,$_POST['search_by_place']);
		$query ="select * from place where place_name='$search_content'";
		$result = mysqli_query($db_con,$query);
		$count=mysqli_num_rows($result);
		if( $count>0)
		{
		
			while($row = mysqli_fetch_array($result) )
			{
				echo"<h1 align='center' id=".$row['place_name']."></br><p style='color:DarkRed'><b>".$row['place_name']."</b></p></h1>";
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
				echo '___________________________________________________________________________________________________________';
			}
		}
		else
		{
			echo"<h2><p style='margin-top:300px;margin-left:100px;color:DarkRed'><b>Ops!!!No result was found at the moment.</b></p></h2>";
		}
	}
	if(isset($_POST['submit2']))
	{ 
		$search_content = mysqli_real_escape_string($db_con,$_POST['region']);
		if ($search_content=='Dhaka'){
			$query ="select * from place where region='Dhaka'";
		}
		elseif($search_content=='Chittagong'){
			$query ="select * from place where region='Chittagong'";
		}
		elseif($search_content=='Sylhet'){
			$query ="select * from place where region='Sylhet'";
		}
		elseif($search_content=='Khulna'){
			$query ="select * from place where region='Khulna'";
		}
		elseif($search_content=='Rangpur'){
			$query ="select * from place where region='Rangpur'";
		}
		elseif($search_content=='Barishal'){
			$query ="select * from place where region='Barishal'";
		}
		elseif($search_content=='Rajshahi'){
			$query ="select * from place where region='Rajshahi'";
		}
		elseif($search_content=='Mymensingh'){
			$query ="select * from place where region='Mymensingh'";
		}
		else
				{
			echo"<h2><p style='margin-top:300px;margin-left:100px;color:black'><b>No result was found at the moment.</b></p></h2>";
		}	
	
		$result = mysqli_query($db_con,$query);
		$count = mysqli_num_rows($result);
		if( $count>0)
		{
		
			while($row = mysqli_fetch_array($result) )
			{
				echo"<h1 align='center' id=".$row['place_name']."></br><p style='color:DarkRed'><b>".$row['place_name']."</b></p></h1>";
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
				echo '___________________________________________________________________________________________________________';
			}
		}
		else
		{
			echo"<h2><p style='margin-top:300px;margin-left:100px;color:black'><b>No result was found at the moment.</b></p></h2>";
		}
	}
	if(isset($_POST['submit3']))
	{
			$search_content = mysqli_real_escape_string($db_con,$_POST['search_by_place']);
			$query = "select * FROM place where place_name='$search_content'";
			$result = mysqli_query($db_con,$query);
			$count=mysqli_num_rows($result);
			if( $count>0)
			{
			while($row = mysqli_fetch_array($result)) 
			{
					 echo"<h1 align='center' id=".$row['place_name']."></br><p style='color:DarkRed'><b style='color:DarkRed'>".$row['place_name']."</b></br></p></h1>";
					 echo "<h3><b style='color:DarkRed'>Emergency Contact</b></h3>";
					 echo "<p style='color:black'><b style='color:DarkRed'>Police-Station :</b><b>".$row['police']."</b></p>";
					 echo "<p style='color:black;margin-top:-10px'><b style='color:DarkRed'>Hospital:</b><b>".$row['hospital']."</b></p>";
					 echo "<p style='color:black;margin-top:-10px'><b style='color:DarkRed'>Fire-Service:</b><b>".$row['fire_service']."</b></p>";
					 echo "<p style='color:black;margin-top:-10px'><b style='color:DarkRed'>Tour-Guide:</b><b>".$row['guide']."</b></p></br>";
					 echo "_______________________________________________________________________________________________";

			}
			}
			else
		{
			echo"<h2><p style='margin-top:300px;margin-left:100px;color:black'><b>No result was found at the moment.</b></p></h2>";
		}
	}
?>
	
	</div>
</div>


</body>
</html>