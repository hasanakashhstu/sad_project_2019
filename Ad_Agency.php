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
				$agency_name = mysqli_real_escape_string($db_con,$_POST['agency_name']);

				$contact = mysqli_real_escape_string($db_con,$_POST['contact']);
				$email = mysqli_real_escape_string($db_con,$_POST['email']);
				$link = mysqli_real_escape_string($db_con,$_POST['link']);

					$sql = "INSERT INTO agencies (agency_name,contact,email,link)
							VALUES ('$agency_name','$contact','$email','$link')";
					$run = mysqli_query($db_con,$sql);
				if($run){

						header("refresh:0; url=task.php");
						$message ="Agency has been added to the system";
						echo "<script type='text/javascript'>alert('$message');</script>";
					}
			}
	?>
	<!D0CTYPE html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width;initial-scale:1.0">
			<title>Lets_Travel_Bangladesh</title>
			<link rel="stylesheet" type="text/css" href="assets/css/ad_agency.css">
		</head>
		<body style="background-color:#170706">
			<div class="form">
					<div class="container"><h1><b style="color:DarkRed">Agency Information</b></h1>
						<form action="Ad_Agency.php" method="post">

							<div class="row">
								<div class="col-25">
									<label for="agency_name"><b>Agency Name</b></label>
								</div>
								<div class="col-75">
									<input type="text" name="agency_name" required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="contact"><b>Contact</b></label>
								</div>
								<div class="col-75">
									<input type="text" name="contact" required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="email"><b>Email</b></label>
								</div>
								<div class="col-75">
									<input type="text"  name="email" required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="link"><b>Link</b></label>
								</div>
								<div class="col-75">
									<input type="text" name="link" required>
								</div>
							</div>
							<div class="row">
								<input type="submit" name="submit_log" value="Add Agency"><br></br><br><br>
							</div>
						</form>
					</div>
			</div>
		</body>
	</html>
