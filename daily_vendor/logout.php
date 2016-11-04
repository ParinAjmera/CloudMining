<?php
include('header.php');
?>

<?php

$result = mysqli_query($con,"SELECT * FROM cart");
$p = new SplFixedArray(13);
$i=0;
while($row = mysqli_fetch_array($result))
  {

  $usr=$row['user'];
  $p[$i]=$row['productname'];
  $i=$i+1;
  
  
  

  
 

 
  } 
 $sql="INSERT INTO transaction (p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12)
VALUES
('$p[0]','$p[1]','$p[2]','$p[3]','$p[4]','$p[5]','$p[6]','$p[7]','$p[8]','$p[9]','$p[10]','$p[11]')";  
  if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_query($con,"DELETE FROM login");
mysqli_query($con,"DELETE FROM cart");
header( 'Location: index.php' ) ;

?>

<?php
include('footer.php');
?>
