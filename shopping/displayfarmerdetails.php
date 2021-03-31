<?php
session_start();
require 'config.php';
$fid=$_SESSION['fid'];
  $sql1 = "SELECT * FROM `farmerdetails` WHERE `fid`='$fid'";
  $result1=mysqli_query($conn,$sql1);
  $row1=mysqli_fetch_array($result1);
   //$_SESSION['fid']=$row1['fid'];
   $_SESSION['row1']=$row1;
  //print_r($row1);
 // require "config.php";
        /*if(isset($_POST('submit')))
        {
          
          $fname=$row1["fid"];
          $fnamenew=$_POST['pName1'];
          $sql = "UPDATE `farmerdetails` SET `fname`='$fnamenew' WHERE `fid`='$fname'";
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

      $msg="Successfully edited!";
      echo '<script>alert'.$msg.'</script>'; 
    }
        }*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content='Ayusha bhola'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

	<title>My Profile</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style type="text/css">
  .edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
    float: right;
}


</style>
</head>
<body >
<nav class="navbar navbar-dark bg-success">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Brand -->
  <a class="navbar-brand mr-auto" href="#"><h4><b>My Profile</b></h4></a>
  
  <!-- Toggler/collapsibe Button -->
  
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

				<h2 class="text-center p-2">My Details</h2>
        <table>

    <tr>
      
      <th>
        <a href="changefarmerdetails.php" class="edit_btn" >Edit</a>

      </th>
      
    </tr>
 </table>

        <table class="table table-hover">
        
  <thead>
    <tr>
      
      <th >Name: </th>
      <th ><?=$row1['fname'];?></th>
      <!--<th><a href="javascript:void(0);" onclick="show();">edit</a><th>-->
    </tr>
    
    
    <tr>
      
      <th >Company Name: </th>
      <th><?=$row1['cname'];?></th>
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






    

  <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}


    function show() {
    //document.getElementById("dThreshold").display ="block";
    document.getElementById("dThreshold").style.display ="block";
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




</body>

</html>
