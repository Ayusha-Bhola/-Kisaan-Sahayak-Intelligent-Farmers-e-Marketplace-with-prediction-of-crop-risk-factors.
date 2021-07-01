<?php
session_start();
$name=$_SESSION['name'];
$email=$_SESSION['email'];
//echo $_SESSION['TID'];
//echo '<br/>';
//echo '<pre>';
//$product_id=$_SESSION['product_id'];
$id=$_REQUEST['payment_id'];
/*
$status=$_REQUEST['payment_status'];
echo "<h3> id: $id</h3>";
echo "<h3> status: $status</h3>";
print_r(
$_REQUEST);
*/
require 'config.php';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_5f065af946a18464a3b3552f2ba",
                  "X-Auth-Token:test_cf7dc45312b26c71ce0d15ee522"));
/*curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_dbb3888227460d6140843f66398",
                  "X-Auth-Token:test_6db535639e5589183b3a569dfb2"));*/

$response = curl_exec($ch);
$response=json_decode($response);
//print_r($response);
$success=($response->{'success'});
//echo("success:");
//print_r($success);
$buyer_details=( $response->{'payment_requests'});
$details=( $buyer_details[0]);
//print_r($details);

$bid=$details->{'id'};
$phone=$details->{'phone'};
$email=$details->{'email'};
$buyer_name=$details->{'buyer_name'};
$total=$_SESSION['total'];
//echo $j->{'id'} ;
//$n= $response;
// echo $n;
$sql1 = "SELECT * FROM `mycart`";

$result1=mysqli_query($conn,$sql1);
				
 while ($row1=mysqli_fetch_array($result1)) {
 	//print_r($row1);
 	$bid=$details->{'id'};

 	$product_id=$row1['product_id'];
 	$name=$row1['name'];
 	$email=$row1['email'];
 	$phone=$row1['phone'];
 	$product=$row1['product'];
 	$amount=$row1['amount'];
 	$success=1;
 	$userid=$row1['userid'];
 	$country=$row1['country'];
 	$state=$row1['state'];
 	$district=$row1['district'];
 	$address=$row1['address'];
 	$quantity=$row1['quantity'];
 	$msg="";
$sql="INSERT INTO buyerdetails (bid,product_id,name,phone,email,product,amount,success,userid,country,state,district,address,quantity) VALUES ('$bid','$product_id','$name','$phone','$email','$product','$amount','$success','$userid','$country','$state','$district','$address','$quantity')";
//echo $sql;
$sql1="UPDATE `product` SET `qauntity`=(SELECT `qauntity` FROM `product` WHERE id='$product_id')-".$quantity." WHERE id='$product_id'";
if ($conn->query($sql1) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


if(mysqli_query($conn,$sql))
		{
			$b="Added to Database";
		}
		else
		{
			$b= "Failed";
		}
		if( $b=='Added to Database')
		{
			$msg= "Sucessful Payment!";
		}


 	}
mysqli_query($conn,'TRUNCATE TABLE mycart');



curl_close($ch); 
header('Location: temp.php?name='.$name.'&email='.$email);

?>