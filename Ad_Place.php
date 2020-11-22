<?php
	error_reporting(0);
	session_start();
	$db_con = mysqli_connect('localhost','root','','lets_travel_bangladesh');
	$check = $_SESSION['email'];
	if($check==true){
	}
	else{
		header("refresh:0; url=index.php");
		$message = "Session Out.You need to log in first";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	if(isset($_POST['submit_log']))
	{
			$filename = $_FILES['uploadfile']['name'];
			$filetmpname = $_FILES['uploadfile']['tmp_name'];
			$folder = 'image/';
			move_uploaded_file($filetmpname, $folder.$filename);

		$cate_id = mysqli_real_escape_string($db_con,$_POST['cate_id']);
		$place_name = mysqli_real_escape_string($db_con,$_POST['place_name']);
		$region = mysqli_real_escape_string($db_con,$_POST['region']);
		$full_description = mysqli_real_escape_string($db_con,$_POST['full_description']);
		$route = mysqli_real_escape_string($db_con,$_POST['route']);
		$hotel1 = mysqli_real_escape_string($db_con,$_POST['hotel1']);
		$hotel2 = mysqli_real_escape_string($db_con,$_POST['hotel2']);
		$police = mysqli_real_escape_string($db_con,$_POST['police']);
		$hospital = mysqli_real_escape_string($db_con,$_POST['hospital']);
		$fire_service = mysqli_real_escape_string($db_con,$_POST['fire_service']);
		$guide = mysqli_real_escape_string($db_con,$_POST['guide']);
		$rating = mysqli_real_escape_string($db_con,$_POST['rating']);

		$sql = "INSERT INTO place(cate_id,place_name,region,full_description,route,hotel1,hotel2,police,hospital,fire_service,guide,rating,image)
			VALUES ('$cate_id','$place_name','$region','$full_description','$route','$hotel1','$hotel2','$police','$hospital','$fire_service','$guide','$rating','$filename')";
		$run = mysqli_query($db_con,$sql);
				if($run){
					header("refresh:0; url=task.php");
					$message ="Place has been added to the system...";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
				else
				{
					echo 'query error';
				}

	}
	else
	{
		echo "connection problem";
	}

?>

<!D0CTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width;initial-scale:1.0">
		<title>Lets_Travel_Bangladesh</title>
		<link rel="stylesheet" type="text/css" href="assets/css/ad_place.css">
	</head>
	<body style="background-color:#170706">
		<div class="form">
				<div class="container"><h1><b style="color:DarkRed">Place Information</b></h1>
					<form action="Ad_Place.php" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-25">
								<label for="cate_id"><b>Place Category</b></label>
							</div>
							<div class="col-75">
								<input type="number" name="cate_id" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="place_name"><b>Place Name</b></label>
							</div>
							<div class="col-75">
								<input type="text" name="place_name" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="region"><b>Region</b></label>
							</div>
							<div class="col-75">
								<input type="text" name="region" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="full_description"><b>Full Description</b></label>
							</div>
							<div class="col-75">
								<input type="text" name="full_description" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="route"><b>Route</b></label>
							</div>
							<div class="col-75">
								<input type="text" name="route" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="hotel1"><b>Hotel-1</b></label>
							</div>
							<div class="col-75">
								<input type="text" name="hotel1" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="hotel2"><b>Hotel-2</b></label>
							</div>
							<div class="col-75">
								<input type="text"  name="hotel2" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="police"><b>Police Station</b></label>
							</div>
							<div class="col-75">
								<input type="text"  name="police" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="hospital"><b>Hospital</b></label>
							</div>
							<div class="col-75">
								<input type="text" name="hospital" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="fire_service"><b>Fire Service</b></label>
							</div>
							<div class="col-75">
								<input type="text"  name="fire_service" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="guide"><b>Guide</b></label>
							</div>
							<div class="col-75">
								<input type="text" name="guide">
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="rating"><b>Rating</b></label>
							</div>
							<div class="col-75">
								<input type="number" name="rating" min=1 max=5 required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="Image"><b>Image</b></label>
							</div>
							<div class="col-75">
							 <input type="file" name="uploadfile"/>
							</div>
						</div>



						<div class="row">
							<input type="submit" name="submit_log" value="Add Place"/><br></br><br>
						</div>

					</form>
				</div>
		</div>
	</body>
</html>
