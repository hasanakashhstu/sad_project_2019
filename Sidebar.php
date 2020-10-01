

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
  background-color:black;
  border:2px solid DarkRed;
  height:40px;
  margin-left:-3px;
  margin-top:-50px;

}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: black;
  
  text-weight:bold;
  margin-top:-6px;
  margin-right:40px;
  width:130px;
  height:35px;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
.header {
  position: fixed;
  top: 0;
  z-index: 1;
  width: 100%;
  background-color: #f1f1f1;
}


.progress-container {
  width: 100%;
  height: 8px;
  background: #ccc;
}

.progress-bar {
  height: 8px;
  background: #4caf50;
  width: 0%;
}

.content {
  padding: 100px 0;
  margin: 50px auto 0 auto;
  width: 80%;
}
input[type=text],select{
	
	height:40px;
	color:Black;
	font-size:12px;
	text-align:center;
	margin-right:75px;
	width:68%;
}
input[type=password],select{
	height:40px;

	margin-right:75px;
	width:68%;
}
input[type=submit],select{
	float:right;
	
	background-color:transparent;
	margin-top:-40px;
	margin-right:5px;
	
	height:40px;
	
}
</style>
</head>
<body>
<?php
include_once 'indicator.php';
?>
 <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu" style="background-color:Green">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image" style="margin-top:20px">
              <a href="#"><img src="bangladesh.jpg" alt="Bangladesh" /></a>
            </div>
            <div class="author-content">
              <h4 style="color:white">Let's Travel Bangladesh</h4>
              <span style="color:black"><b>Site Scenes Of Beautiful Bangladesh</b></span>
            </div>

<div class="header">
  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>  
</div>

<div class="content" style="margin-top:-110px">
	<div>
			<form action="search_result.php" method="post" autocomplete="off">
				<input type="text" list="places" name="search_by_place" required style="font-weight:bold;background-color:white;color:black;border:none;text-align:center" placeholder="Search by Place">
				<datalist id="places">
				<?php
				$db_con = mysqli_connect('localhost','root','','lets_travel_bangladesh');
				mysqli_select_db($db_con,'lets_travel_bangladesh');
				$query ="SELECT place_name FROM place";
				$result = mysqli_query($db_con,$query);
				while($row = mysqli_fetch_array($result)) {
				
					echo "<option value=".$row['place_name'].">";
				}
				?>
				</datalist>
				<input type="submit" name="submit" style="font-weight:bold" value="Search">
			</form>
			</br>
			<form action="search_result.php" method="post" autocomplete="off">
				<input type="text" list="regions" name="region" required style="font-weight:bold;background-color:white;color:black;border:none;text-align:center" placeholder="      Search by Region">
				<datalist id="regions">
					<option value="Dhaka">
					<option value="Chittagong">
					<option value="Sylhet">
					<option value="Khulna">
					<option value="Rangpur">
					<option value="Barishal">
					<option value="Rajshahi">
					<option value="Mymensingh">
				</datalist>
				<input type="submit" name="submit2" style="font-weight:bold;margin-top:-40px" value="Search">
			</form>		
</div>
			
            <nav class="main-nav" role="navigation">
              <ul class="main-menu"  style="margin-top:10px">
                <li><a href="#section1">Intro</a></li>
                <li><a href="#section2">Support Groups & Contacts</a></li>
                <li><a href="#section4">Reviews</a></li>
                <li><a href="#section5">Admin Segment</a></li>
				<li><a href="#section3">Gallery</a></li>
				
              </ul>
            </nav>
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
</body>
</html> 
<script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script>
<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>



       