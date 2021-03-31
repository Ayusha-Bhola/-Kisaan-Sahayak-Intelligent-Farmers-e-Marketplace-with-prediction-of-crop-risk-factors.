<?php
session_start();
require 'config.php';

//$fid=$_SESSION['fid'];
$row1=$_SESSION['row1'];
//print_r($row1);


if (isset($_POST['submit'])) {
	require 'config.php';
	$email=$_POST['email'];
	$sql12="SELECT count(*) as 'counte' FROM `farmerdetails` WHERE `email`='$email'";
   //echo $sql;
   	$result12=mysqli_query($conn,$sql12);
  	$row12=mysqli_fetch_array($result12);
 $ecount=$row12['counte'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  
  echo "<script type='text/javascript'>"; 
      echo "alert('Invalid email format')";
      echo "</script>";
}

	else if($ecount!=0)
   {
   	  echo "<script type='text/javascript'>"; 
      echo "alert('Email Already Exists !! Re-enter email')";
      echo "</script>";
   }
   else
   {
	$fid=$row1['fid'];
	$Fname=$_POST['FName'];
	$Company=$_POST['Cname'];
	$Email=$_POST['email'];
			//$Mob=$_POST['phone'];
	$Country=$_POST['country'];
	$State=$_POST['state'];
	$District=$_POST['district'];
	$Address=$_POST['address'];
	$sql="UPDATE `farmerdetails` SET `fname`='$Fname',`cname`='$Company',`email`='$Email',`country`='$Country',`state`='$State',`district`='$District',`address`='$Address' WHERE `fid`='$fid'";
	if ($conn->query($sql) === TRUE) {
		echo "<script type='text/javascript'>"; 
      echo "alert('Record updated successfully!')"; 
      echo "</script>";
      $url="displayfarmerdetails.php";
						header('Location:'.$url);
						exit(); 
		 
		} else {
			echo "<script type='text/javascript'>"; 
      echo "alert('Error updating record: ')"; 
      echo "</script>";
      $url="displayfarmerdetails.php";
						header('Location:'.$url);
						exit();
		  
		}
	}
	# code...
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content='Ayusha bhola'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

	<title>Edit Profile</title>
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
	<nav class="navbar navbar-dark bg-success">
	<a class="navbar-brand mr-auto" href="#"><h4><b>Edit My Profile</b></h4></a>
  
	  <!-- Toggler/collapsibe Button -->
	  
	<div id="google_translate_element"></div>
</nav>

<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 bg-light mt-5 rounded">

				<h2 class="text-center p-2">Edit My Details</h2>
<form action="" method="POST" name="form1"class="p-2" enctype="multipart/form-data" id="form-box" >
				

					<div class="form-group">
						<input type="text " name="FName" class="form-control" value="<?=$row1['fname'];?>" required>
					</div>
					<div class="form-group">
						<input type="text" name="Cname" class="form-control" value="<?=$row1['cname'];?>" required>
					</div>
					<div class="form-group">
						<input type="email " id="email" name="email"  value="<?=$row1['email'];?>" class="form-control"  onblur="checkMailStatus()" required >
						

					</div>
					<!--
					<div class="form-group">
					<input type="tel"  name="phone"  class="form-control" placeholder="Mobile Number" required=>
					</div>-->
			<div class="form-group">
		    <select class="form-control" id="inputCountry"  name="country" required>
                        <option value="India"><?=$row1['country'];?></option>
                        
			</select>
			</div>
	<div class="form-group">
		
    <select class="form-control" id="inputState"   name="state" required>
                        <option value="SelectState">Select state</option>
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
						<select class="form-control" id="inputDistrict"  value="<?=$row1['district'];?>" name="district" required>
							<option value="">select district</option>
						</select>
					  </div>
					  <div class="form-group">
						<input type="text" name="address" class="form-control" value="<?=$row1['address'];?>" required>
					</div>
					 
				


					
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-danger btn-block" value="Submit" >
					</div>
					
				</form>
        <table>
        </table>
    </div>
</div>
</div>




<script type="text/javascript" src="js/district.js"></script>


<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}

</script>
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
<script src="js/district.js" type="text/javascript">

    </script>  
    <script type="text/javascript">
function checkMailStatus(){
    //alert("came");
var email=$("#email").val();// value in field email
//alert(email);
$.ajax({
    type:'post',
        url:'checkMail.php',// put your real file name 
        data:{email: email},
        success:function(msg){
        alert(msg);
         // to show
 // your message will come here.     
        }
 });
}
</script>
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>