
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content='Ayusha bhola'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>Thankyou For Purchasing</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-info">
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Shopping</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Catagories</a>
      </li>
    </ul>
		    <div id="google_translate_element"></div>

  </div>
</nav>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<h1 class="text-center">Thank You For Purchasing!!</h1>
				<?php
session_start();
//echo $_SESSION['TID'];
//echo '<br/>';
//echo '<pre>';

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
            array("X-Api-Key:test_dbb3888227460d6140843f66398",
                  "X-Auth-Token:test_6db535639e5589183b3a569dfb2"));

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
$amount=$details->{'amount'};
$product=$details->{'purpose'};
//echo $j->{'id'} ;
//$n= $response;
// echo $n;
$msg="";
$sql="INSERT INTO buyerdetails (bid,name,phone,email,product,amount,success) VALUES ('$bid','$buyer_name','$phone','$email','$product','$amount','$success')";

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
curl_close($ch); 

?>
                <h2><?=$msg;?></h2>
				<h3>Payment Details</h3>

		<table class="table table-bordered">
			<tr>
				<th>Payment ID:</th>
				<td><?=$bid?></td>
			</tr>
			<tr>
				<th>Buyer Name:</th>
				<td><?=$buyer_name?></td>
			</tr>
			<tr>
				<th>Product Name:</th>
				<td><?=$product?></td>
			</tr>
			<tr>
				<th>Amount:</th>
				<td><?=$amount?></td>
			</tr>
			<tr>
				<th>Phone Number:</th>
				<td><?=$phone?></td>
			</tr>
			<tr>
				<th>Email:</th>
				<td><?=$email?></td>
			</tr>
			<tr>
				<th>Payment Success:</th>
				<td><?=$success?></td>
			</tr>
			
		</table>
			</div>
		</div>
	</div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>