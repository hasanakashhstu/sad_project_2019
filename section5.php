<?php
	error_reporting(0);
	session_start();
	$db_con = mysqli_connect('localhost','root','','lets_travel_bangladesh');
		
	if(isset($_POST['submit_log']))
	{ 
		$email = mysqli_real_escape_string($db_con,$_POST['email']);
		$password = mysqli_real_escape_string($db_con,$_POST['password']);
		$query ="select * from admin where email='$email' and password='$password'";
		$run = mysqli_query($db_con,$query);
		$count=mysqli_num_rows($run);
		
		if ($count>0)
			{
				$_SESSION['email']=$email;
				header("refresh:0; url=Ad_Place.php");
				$message = $_SESSION['email']." ,You are logged In now...";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		else
			{
				header("refresh:0; url=main.php");
				$message = "Incorrect UserName and Password combination...";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
	}
?>

<!DOCTYPE html>
<html lang="en">
 
<body>  
 <section class="section contact-me" data-section="section5">
        <div class="container">
	<div class="section-heading">
            <h2 style="color:dodgerblue">Admin Login</h2>
            <div class="line-dec"></div>
          <div class="row">
            <div class="right-content">
              <div class="container">
                <form action="section5.php" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <fieldset>
                        <input style="background-color:#2F4F4F;color:white" name="email"  type="text" class="form-control"
                          id="name" placeholder="Email" required="" />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input  style="background-color:#2F4F4F; color:white" name="password" type="text" class="form-control"
                          id="email" placeholder="Password..." required>
                      </fieldset>
					  </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button style="text-align:right;background-color:#2F4F4F;margin-top:4px"type="submit" target="_blank" name="submit_log" id="form-submit" class="button">
                          Log In
                        </button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
	</body>
	</html>