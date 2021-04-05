<?php
session_start();
require 'config.php';
$msg="";
/*if (!isset($_SESSION['phone'])) {
	# code...
	header("Location:phone.php");
	exit();
}
*/
//if (isset($_GET['id'])) {
	# code...
//$phone= $_GET['phonec'];
if(isset($_POST['submit']))
{
	$phone=$_SESSION['phone1'];
	//echo $phone;
	$email = ($_POST["Femail"]);
	//$Mob=$_POST['phone'];	
	//$t1=preg_match('/^[0-9]{10}+$/', $Mob);
	$t2=filter_var($email, FILTER_VALIDATE_EMAIL);
	if (!$t2 ) 
	{
		
		if(!$t2)
			echo '<script>alert("Invalid email format")</script>'; 
		
		
	  
	}
	else
	{
	
			$Fname=$_POST['FName'];
			$Company=$_POST['Cname'];
			$Email=$_POST['Femail'];
			//$Mob=$_POST['phone'];
			$Country=$_POST['country'];
			$State=$_POST['state'];
			$District=$_POST['district'];
			$Address=$_POST['address'];
			$sqlE="select * from farmerdetails where email='$Email'";
			//$sqlP="select * from farmerdetails where phone='$Mob'";
			//echo $sqlE;
			//echo $sqlP;
			$duplicate_email=mysqli_query($conn,$sqlE);
			//$duplicate_phone=mysqli_query($conn,$sqlP);
		//echo mysqli_num_rows($duplicate_email);
		if (mysqli_num_rows($duplicate_email)>0)
		{
		echo '<script>alert("User Email id already exists.")</script>';
		}
		else{
			

				try {
					$sql="INSERT INTO farmerdetails (fname, cname, email,phone, country, state, district, address) VALUES  ('$Fname','$Company','$Email','$phone','$Country','$State','$District','$Address')";
					//echo $sql;
					if(mysqli_query($conn,$sql))
						{
							$b="Added to Database";
						}
						else
						{
							$b= "Failed";
							echo "<script type='text/javascript'>"; 
     					 echo "alert('Failed')"; 
     					 echo "</script>"; 
						}
						if( $b=='Added to Database')
						{
							$msg="Details sucessfully added!";
							echo "<script type='text/javascript'>"; 
						      echo "alert('Details sucessfully added!')"; 
						      echo "</script>"; 
							//echo "<script type='text/javascript'>alert('$msg');</script>";

						}
				}
				catch(PDOException $e)
				{
				  echo $sql . "
				  " . $e->getMessage();
				}

		}	
			
		$conn = null;	
		}
		$_SESSION['email']=$Email;
		$_SESSION['name']=$Fname;
$url="farmerdashboard.php";
header('Location:'.$url);
exit();
	}

//}
?>


<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	
	<meta name="author" content='Ayusha bhola'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

	<title>Farmer's information</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
body {
  overflow-y: scroll; /* Show vertical scrollbar */
  overflow-x: scroll; /* Show horizontal scrollbar */
}
</style>
</head>




<body  >
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Farmer Details</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    

    <div id="google_translate_element"></div>
  </div>
</nav>

<div class="container">
		
			<div class="col-md-6 bg-light mt-5 rounded">
				<h2 class="text-center p-2">Farmer information </h2>
				
				<form action="" method="POST" name="form1"class="p-2" enctype="multipart/form-data" id="form-box" >
				<div class="form-group"><label class="checkbox-inline"><input type="checkbox" value=""> Farmer</label></div>

					<div class="form-group">
						<input type="text " name="FName" class="form-control" placeholder="Farmer Name" required>
					</div>
					<div class="form-group">
						<input type="text" name="Cname" class="form-control" placeholder="Company Name" required>
					</div>
					<div class="form-group">
						<input type="email " name="Femail" class="form-control" placeholder="Email  example:sophie@example.com" required >
					</div>
					<!--
					<div class="form-group">
					<input type="tel"  name="phone"  class="form-control" placeholder="Mobile Number" required=>
					</div>-->
			<div class="form-group">
		    <select class="form-control" id="inputCountry" name="country" required>
                        <option value="Select Country">Select Country</option>
                        <option value="India">India</option>
			</select>
			</div>
	<div class="form-group">
		
    <select class="form-control" id="inputState" name="state" required>
                        <option value="SelectState">Select State</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
					</select>
</div>
                      <div class="form-group">
					  </select>
						<select class="form-control" id="inputDistrict" name="district" required>
							<option value="">-- select district -- </option>
						</select>
					  </div>
					  <div class="form-group">
						<input type="text" name="address" class="form-control" placeholder="Address" required>
					</div>
					 
				


					
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-danger btn-block"value="Submit" >
					</div>
					<div class="form-group">
						<h4 class="text-center"><?=$msg;?></h4>
					</div>
				</form>
				</div>
</div>
<script src="email-validation.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>




<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script  src="js/district.js" type="text/javascript"></script>

<?php include "./template/footer.php"; ?>
</body>
</html>
