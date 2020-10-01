<?php
 include_once 'dbconn.php';
  mysqli_select_db($conn,"place");
  $select = " SELECT * FROM `place` " ;
$query = mysqli_query($conn, $select) ;
while($row = mysqli_fetch_array($query)) {
$image = $row['image'];
echo '<img src="image/'.$image.'" height="150" width="150"/>';
}
?>