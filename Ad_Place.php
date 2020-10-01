<?php
			session_start();
			$db_con = mysqli_connect('localhost','root','','lets_travel_bangladesh');
			$check = $_SESSION['email'];
			if($check==true){
			}
			else{
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
				$full_description = mysqli_real_escape_string($db_con,$_POST['full_description']);
				$route = mysqli_real_escape_string($db_con,$_POST['route']);
				$hotel1 = mysqli_real_escape_string($db_con,$_POST['hotel1']);
				$hotel2 = mysqli_real_escape_string($db_con,$_POST['hotel2']);
				$police = mysqli_real_escape_string($db_con,$_POST['police']);
				$hospital = mysqli_real_escape_string($db_con,$_POST['hospital']);
				$fire_service = mysqli_real_escape_string($db_con,$_POST['fire_service']);
				$guide = mysqli_real_escape_string($db_con,$_POST['guide']);
				$rating = mysqli_real_escape_string($db_con,$_POST['rating']);

				$sql = "INSERT INTO place(cate_id,place_name,full_description,route,hotel1,hotel2,police,hospital,fire_service,guide,rating,image)
					VALUES ('$cate_id','$place_name','$full_description','$route','$hotel1','$hotel2','$police','$hospital','$fire_service','$guide','$rating','$filename')";
				$run = mysqli_query($db_con,$sql);
						if($run){
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
				<link rel="stylesheet" type="text/css" href="ad_place.css">
			</head>
			<body>
				<div class="form">
						<div class="container"><h1>Place Information</h1>
							<form action="Ad_Place.php" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-25">
										<label for="cate_id">Place Category</label>
									</div>
									<div class="col-75">
										<input type="number" name="cate_id" required>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="place_name">Place Name</label>
									</div>
									<div class="col-75">
										<input type="text" name="place_name" required>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="full_description">Full Description</label>
									</div>
									<div class="col-75">
										<input type="text" name="full_description" required>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="route">Route</label>
									</div>
									<div class="col-75">
										<input type="text" name="route" required>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="hotel1">Hotel-1</label>
									</div>
									<div class="col-75">
										<input type="text" name="hotel1" required>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="hotel2">Hotel-2</label>
									</div>
									<div class="col-75">
										<input type="text"  name="hotel2" required>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="police">Police Station</label>
									</div>
									<div class="col-75">
										<input type="text"  name="police" required>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="hospital">Hospital</label>
									</div>
									<div class="col-75">
										<input type="text" name="hospital" required>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="fire_service">Fire Service</label>
									</div>
									<div class="col-75">
										<input type="text"  name="fire_service" required>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="guide">Guide</label>
									</div>
									<div class="col-75">
										<input type="text" name="guide">
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="rating">Rating</label>
									</div>
									<div class="col-75">
										<input type="number" name="rating" min=1 max=5 required>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="Image">Image</label>
									</div>
									<div class="col-75">
									 <input type="file" name="uploadfile"/>
									</div>
								</div>



								<div class="row">
									<input type="submit" name="submit_log" value="Add_Place"><br></br><br>
								</div>
								<div style="background-color:Blue;text-align:center; padding-top:10px;width:30%;height:40px;margin-top:-10px;cursor:pointer">
									<a href="logout.php" action="main.php" style="color:white"><b> LOG OUT</b></a><br></br><br></br>
								</div>
							</form>
						</div>
				</div>
			</body>
		</html>
