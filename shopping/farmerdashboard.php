<?php
session_start();
require 'config.php';
$phone2=$_SESSION['phone1'];
  $sql1 = "SELECT * FROM `farmerdetails` WHERE `phone`='$phone2'";
  $result1=mysqli_query($conn,$sql1);
  if (mysqli_num_rows($result1)!=null)
  {
  $row1=mysqli_fetch_array($result1);

  $name=$row1['fname'];
  $userid=$row1['fid'];
  $_SESSION['email']=$row1['email'];
  $_SESSION['fid']=$row1['fid'];
  $_SESSION['name']=$row1['fname'];
  $sql2 = "SELECT count(*) as COUNT FROM `farmerdetails`";
  $result2=mysqli_query($conn,$sql2);
  $row2=mysqli_fetch_array($result2);
  $ActiveFarmers=$row2['COUNT'];
  //echo $ActiveFarmers*0.01;
  

  $sql3 = "SELECT count(*) as COUNT1 FROM `buyerdetails` WHERE `userid`=$userid";
  $result3=mysqli_query($conn,$sql3);
  $row3=mysqli_fetch_array($result3);
  $Orders=$row3['COUNT1'];
  //echo $Orders;

  $sql4 = "SELECT count(*) as COUNT1 FROM `product` WHERE `userid`=$userid";
  $result4=mysqli_query($conn,$sql4);
  $row4=mysqli_fetch_array($result4);
  $Products=$row4['COUNT1'];
  //echo $Products;

}

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content='Ayusha bhola'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="css/styles/style1.css">

	<title>Home Page</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body >
<nav class="navbar navbar-dark bg-success">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Brand -->
  <a class="navbar-brand mr-auto" href="#"><h4><b>Farmer dashboard</b></h4></a>
  
  <!-- Toggler/collapsibe Button -->
  <a class="navbar-brand" href="#"><b><h5>Welcome <?=$name;?></h5></b></a>
<div id="google_translate_element"></div>
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto" >
      
      <li class="nav-item">
        <a class="nav-link"href="farmerdashboard.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="displayproducts.php">My Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="displayfarmerdetails.php">My Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add.php">Add Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="displayorder.php">Order recevied</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
    
  </div>
</nav>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 bg-light mt-5 rounded">

				<h2 class="text-center p-2">Home dashboard after login </h2>
        
      </div>
    </div>
  </div>






<section id="circleBar">

  <div class="container">
    <div class="row">
      <div class="col-md-3">            
        <div class="round"
          data-value="0.5"
          data-size="200"
          data-thickness="6">
          <strong></strong>
          <span><i class="fa fa-html5" aria-hidden="true"></i>Active Farmers</span>
        </div>
      </div>
      <div class="col-md-3">          
        <div class="round"
          data-value="0.74"
          data-size="200"
          data-thickness="6">
          <strong></strong>
          <span><i class="fa fa-css3" aria-hidden="true"></i>Order received</span>
        </div>
      </div>
      <div class="col-md-3">      
        <div class="round"
          data-value="0.65"
          data-size="200"
          data-thickness="6">
          <strong></strong>
          <span><i class="fa fa-jsfiddle" aria-hidden="true"></i> Products added</span>
        </div>
      </div>
      <div class="col-md-3">      
        <div class="round"
          data-value="0.95"
          data-size="200"
          data-thickness="6">
          <strong></strong>
          <span><i class="fa fa-laptop" aria-hidden="true"></i> Profit</span>
        </div>
      </div>
    </div>  
  </div>
  
</section>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.0/circle-progress.min.js'></script>
<script  src="js/function.js"></script>







  <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}


</script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#translateButton").click(function () {

            var url = "https://translation.googleapis.com/language/translate/v2";
            //Strings requiring translation
            url += "?q=" + escape($("#textField").text());
            url += "&q=" + escape($("#title").text());
            //Target language
            url += "&target=" + $("#targetLanguage").val();
            //Replace with your API key
            url += "&key=YOUR_API_KEY";
            $.get(url, function (data, status) {
                //Results are returned in an array following the order they were passed. 
                $("#textField").text(data.data.translations[0].translatedText);
                $("#title").text(data.data.translations[1].translatedText);
            });       
        });
    </script>  


<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?php include "./template/footer.php"; ?>



</body>
</html>