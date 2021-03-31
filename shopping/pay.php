<?php
$product_name=$_POST['product_name'];
$price=$_POST['product_price'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$country=$_POST['country'];
$state=$_POST['state'];
$district=$_POST['district'];
$address=$_POST['address'];

session_start();
$_SESSION['country']=$country;
$_SESSION['state']=$state;
$_SESSION['district']=$district;
$_SESSION['address']=$address;
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_5f065af946a18464a3b3552f2ba",
                  "X-Auth-Token:test_cf7dc45312b26c71ce0d15ee522"));
//curl_setopt($ch, CURLOPT_HTTPHEADER,
           // array("X-Api-Key:test_dbb3888227460d6140843f66398",
                  //"X-Auth-Token:test_6db535639e5589183b3a569dfb2")
$payload = Array(
    'purpose' => $product_name,
    'amount' => $price,
    'phone' => $phone,
    'buyer_name' => $name,
    'redirect_url' => 'http://localhost/Farmer_help_portal/shopping/thankyou.php',
    'send_email' => true,
    //'webhook' => 'http://www.example.com/webhook/',
    'send_sms' => true,
    'email' => $email,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

 $response=json_decode($response);

 $_SESSION['TID']=$response->payment_request->id;
header('location:'.$response->payment_request->longurl);
die();
?>