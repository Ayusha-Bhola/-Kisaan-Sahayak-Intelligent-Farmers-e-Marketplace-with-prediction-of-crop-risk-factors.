<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content='Ayusha bhola'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>Product Page</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
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
      
	    <div id="google_translate_element"></div>
	</ul>
  </div>
</nav>
<?php
require 'config.php';
$sql="SELECT * FROM product";
$result=mysqli_query($conn,$sql);
?>
<div class="container">
	<div class="row">
	<?php
	while ($row=mysqli_fetch_array($result)) {
		$_SESSION['userid']=$row['userid'];
       	?>
	<div class="col-lg-4 mt-3 mb-3">
		<div class="card-deck">
		<div class="card border-info p-2">
           <img src="Images/<?= $row['product_image'] ?>" class="card-img-top" height="320">
			
			<h5 class="card-title">Product:<?=$row['product_name'];?></h5>
			<h3>Price:<?=number_format($row['product_price']) ?>/-</h3>
			<a href="order.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-block btn-lg">Buy Now </a> 
		</div>
		</div>
		</div>
	<?php } ?>
	</div>
</div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?php include "./template/footer.php"; ?>

</body>
</html>
