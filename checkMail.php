<?php
require 'config.php';
$email=$_POST['email'];
$sql="SELECT count(*) as 'counte' FROM `farmerdetails` WHERE `email`='$email'";
   //echo $sql;
   $result1=mysqli_query($conn,$sql);
  $row1=mysqli_fetch_array($result1);
 $ecount=$row1['counte'];
 //echo $ecount;
  
  if($ecount!=0)
   {
      echo "Email Already Exists !! Re-enter email";
   }
   
?>
