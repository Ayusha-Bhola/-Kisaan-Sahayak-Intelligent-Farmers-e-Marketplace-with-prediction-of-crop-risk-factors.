<?php
require 'config.php';
$msg="";
if(isset($_POST['submit']))
{
	$p_name=$_POST['pName'];
	$p_price=$_POST['pPrice'];
	$name = $_FILES["file"]["name"];
	$tmp_name = $_FILES['file']['tmp_name'];
	$error = $_FILES['file']['error'];
	$sql="INSERT INTO product (product_name,product_price,product_image) VALUES ('$p_name','$p_price','$name')";
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
			<div class="col-md-6 bg-light mt-5 rounded">
				<h2 class="text-center p-2">Add product information </h2>
				<form action="" method="POST" class="p-2" enctype="multipart/form-data" id="form-box">
					<div class="form-group">
						<input type="text " name="pName" class="form-control" placeholder="Product Name" required="">
					</div>
					<div class="form-group">
						<input type="text " name="pPrice" class="form-control" placeholder="Product Price" required="">
					</div>
					<div class="form-group">
						<div class="custom-file">
							    <input type="file" name="file"class="custom-file-input" required>
								<label for="customFile" class="custom-file-label">Choose Product Image</label>
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

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>
</html>