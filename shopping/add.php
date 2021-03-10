<?php
session_start();
if (!isset($_SESSION['email'])) {
	# code...
	header("Location:farmerdetail.php");
	exit();
}
require 'config.php';
$msg="";
$email=$_SESSION['email'];
$name=$_SESSION['name'];
	# code...
echo $email;
	$sql1 = "SELECT `fid` FROM `farmerdetails` WHERE `email`='$email'";
	$result1=mysqli_query($conn,$sql1);
	$row1=mysqli_fetch_array($result1);
	
	
if(isset($_POST['submit']))
{
	$p_topcategory=$_POST['topcategory'];
	$p_subcategory=$_POST['subcategory'];
	$p_name=$_POST['pName'];
	$p_brandname=$_POST['brandname'];
	$p_weightvolume=$_POST['weightvolume'];
	$p_costprice=$_POST['pcPrice'];
	$p_price=$_POST['pPrice'];
	$p_EANcode=$_POST['EANcode'];
	$p_quantity=$_POST['qauntity'];
	$name = $_FILES["file"]["name"];
	$tmp_name = $_FILES['file']['tmp_name'];
	$error = $_FILES['file']['error'];
	$userid=$row1['fid'];
	$sql="INSERT INTO product (topcategory,subcategory,product_name,brandname,weightvolume,costprice,product_price,EAN,qauntity,product_image,userid) VALUES ('$p_topcategory','$p_subcategory','$p_name','$p_brandname','$p_weightvolume','$p_costprice','$p_price','$p_EANcode','$p_quantity','$name','$userid')";
	echo $sql;
	if (isset ($name)) {
    	if (!empty($name)) {

    	$location = 'Images/';

    if  (move_uploaded_file($tmp_name, $location.$name)){
        $a='Uploaded';
        }

        } else {
          $a='please choose a file';
          }
    }

    if(mysqli_query($conn,$sql))
		{
			$b="Added to Database";
		}
		else
		{
			$b= "Failed";
		}
		if($a=='Uploaded' && $b=='Added to Database')
		{
			$msg="Product sucessfully added!";
		}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content='Ayusha bhola'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

	<title>Add product information</title>
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
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Product Details</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto" >
    	<li class="nav-item">
        <a class="nav-link" href="#"><b><h5><?=$name;?></h5></b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Emarket</a>
      </li>
      li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
    <div id="google_translate_element"></div>
  </div>
</nav>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 bg-light mt-5 rounded">
				<h2 class="text-center p-2">Add product information </h2>

				<form action="" method="POST" class="p-2" enctype="multipart/form-data" id="form-box">
				
<div class="form-group">
		    <select class="form-control" id="inputTop" name="topcategory" required>
                        <option value="SelectCategory">Select category</option>
                        <option value="fruits">Fruits</option>
                         <option value="vegetables">vegetables</option>
                        <option value="foodgrains">foodgrains </option>
                        <option value="oil">edible oil,ghee</option>
                        <option value="dalpulses">dal ,pulses</option>
                        <option value="dryfruits">dry fruits</option>
                        <option value="rice">rice</option>
                        <option value="saltsugarjaggery">salt,sugar,jaggery</option>
			</select>
</div>
<div class="form-group">
			<select class="form-control" id="inputsubcat" name="subcategory" required>
							<option value="">-- select subcategory -- </option>
						</select>
 </div> 
 <!--<input type="button" id="translateButton" value="Translate" />-->
 <div class="form-group">
						<input type="text " name="pName" class="form-control" placeholder="Product Name" required="">
					</div>
 <div class="form-group">
						<input type="text" name="brandname" class="form-control" placeholder="Brand name" required="">
					</div>
<div class="form-group">
						<input type="text" name="weightvolume" class="form-control" placeholder="weight /volume   g/ml" required="">
					</div>

<div class="form-group">

<div class="form-group">
						<input type="text " name="pcPrice" class="form-control" placeholder="Cost Price" required="">
					</div>	

<div class="form-group">
						<input type="text " name="pPrice" class="form-control" placeholder="Selling Price" required="">
					</div>			

<div class="form-group">
						<input type="number " name="EANcode" class="form-control" placeholder="EAN code optional" >
					</div>			

<div class="form-group">
						<input type="text " name="qauntity" class="form-control" placeholder="Qauntity Available" required="">
					</div>	

						<div class="custom-file">
								<input type="file" id="file" name="file" class="custom-file-input" required >
								<label for="customFile" class="custom-file-label" placeholder="Choose Product Image" >select image</label>
							    
								
						</div>
					</div>
					
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-danger btn-block
						"value="Add">
					</div>
					<div class="form-group">
						<h4 class="text-center"><?=$msg;?></h4>
					</div>

				</form>
				<div class="row justify-content-center">
					<div class="col-md-6 mt-3 p-4 bg-light rounded">
						<a href="index.php" class="btn btn-warning btn-block btn-lg"> Go to product page</a>
					</div>
					
				</div>
			</div>


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
<script src="js/Topcategory.js" type="text/javascript"></script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>
</html>