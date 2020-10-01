<?php
 include_once 'dbcont.php';
  mysqli_select_db($conn,"info");
  $select = " SELECT * FROM `info` " ;
$query = mysqli_query($conn, $select) ;
while($row = mysqli_fetch_array($query)) {
$image = $row['name'];
echo '<img src="images/'.$image.'" height="150" width="150" >';
}
?>