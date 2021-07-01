<?php
require 'config.php';
$name=$_GET['name'];
$email=$_GET['email'];
  $sql1= "SELECT * FROM `buyerdetails` WHERE `email`='$email' AND `name`='$name' LIMIT 1";
  //echo $sql1;
  $result1=mysqli_query($conn,$sql1);
  $row1=mysqli_fetch_array($result1);
   //$_SESSION['fid']=$row1['fid'];
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annadaata</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style1.css" type="text/css">
</head>

<body>
           <?php include "./template/header.php"; ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>My Profile</h2>
                        <div class="breadcrumb__option">
                            <a href="./index1.php">Home</a>
                            <span>My Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    
    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>My Profile</h2>
                        
                    </div>
                </div>
                <table class="table table-hover">
        
  <thead>
    <tr>
      
      <th >Name: </th>
      <th ><?=$row1['name'];?></th>
    </tr>
    
    <tr>
      
      <th>Email Address: </th>
      <th><?=$row1['email'];?></th>
    </tr>
    <tr>
      
      <th >Phone Number: </th>
      <th><?=$row1['phone'];?></th>
    </tr>
    <tr>
      
      <th >Country: </th>
      <th><?=$row1['country'];?></th>
    </tr>
    <tr>
      
      <th >State: </th>
      <th><?=$row1['state'];?></th>
    </tr>
    <tr>
      
      <th >District: </th>
      <th><?=$row1['district'];?></th>
    </tr>
    <tr>
      
      <th >Address: </th>
      <th><?=$row1['address'];?></th>
    </tr>
  </thead>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->

    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>