<?php
 include("dbconn.php");
 
 
 	if(isset($_POST['form-submit']))
{ 
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$place = mysqli_real_escape_string($conn,$_POST['place']);
	$date = mysqli_real_escape_string($conn,$_POST['date']);
	$message = mysqli_real_escape_string($conn,$_POST['message']);
	$rating = mysqli_real_escape_string($conn,$_POST['rating']);
	
	
		$sql = "INSERT INTO place_review (name,email,visited_place,date_of_visit,experience,review) VALUES ('$name','$email','$place','$date','$message','$rating')";
		$run = mysqli_query($conn,$sql);
		if($run){
			
			header("refresh:0;url=main.php");
		}
		
	 
}
	
 ?>
<!DOCTYPE html>
<html lang="en">
 
<body>  
 <section class="section contact-me" data-section="section4">
        <div class="container">
          <div class="section-heading">
            <h2>Reviews</h2>
            <div class="line-dec"></div>
            <span>As a visitor of Bangladesh , please give us review about our website as well as the place that you have visited from the help of this site </span>
          </div>
          <div class="row">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input style="background-color:#2F4F4F"name="name" type="text" class="form-control"
                          id="name" placeholder="Your Name..." required="" />
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input  style="background-color:#2F4F4F" name="email" type="text" class="form-control"
                          id="email" placeholder="Your Email..." required=""  />
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input  style="background-color:#2F4F4F" name="place" type="text" class="form-control" 
                          id="place" placeholder="Name Of The Visited Place..." required="" />
                      </fieldset>
                    </div>
					<div class="col-md-6">
                      <fieldset>
                        <input  style="background-color:#2F4F4F" name="date" type="date" class="form-control" required placeholder="Date Of Visit" />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea  style="background-color:#2F4F4F" name="message" rows="6" class="form-control"
                          id="message" placeholder="Your Message..." required="" ></textarea>
                      </fieldset>
                    </div>
					<div class="col-md-12">
                      <fieldset>
                        <input  style="background-color:#2F4F4F" name="rating" type="number" min="1" max="5" class="form-control" required placeholder="Ratings(out of 5)" />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" name="form-submit" class="button">
                          Send Message
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