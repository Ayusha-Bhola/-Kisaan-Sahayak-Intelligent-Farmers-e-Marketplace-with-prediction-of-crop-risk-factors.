<?php
	// $_COOKIE['googtrans'];
	  
	  $con = mysqli_connect("localhost","root","","shopping");
	  // Check connection
	
	  
	  
	  
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	

	
	
	if(isset($_COOKIE['sess_user']))
	{
	   $n = $_COOKIE['sess_user'];
	   $q = mysqli_query($con,"SELECT fname FROM farmerdetails WHERE phone='".$n."'");
	   $rcount = mysqli_num_rows($q);
	   $t = mysqli_fetch_row($q);
		if(!empty($t))
			   {
			   $na = $t[0];
			   }
	   if($rcount>0)
	   {
		   if($na=="")
		   {
			   $q2="DELETE FROM farmerdetails WHERE phone='".$n."'";
			   mysqli_query($con,$q2);
			   //unset($_COOKIE['sess_user']);
			  setcookie("sess_user","",time()-432000);
			   //header('location:index.php');
		   }
		   else
		   {
			   //header('location:index.php');
		   }
	   }
	   
	}
	
	
	   if(isset($_POST['submit']))
	   {
	  	 if(!empty($_POST['phone_no']))
	  	 {
	  		 $phone_no = $_POST['phone_no'];
	  		 echo $phone_no;
	  		 echo$_POST['phone_no'];
	  		 $query = mysqli_query($con,"SELECT fid, phone from farmerdetails WHERE phone='".$phone_no."'");
	  		 //echo $query;
	  		 
	  		 $rw = mysqli_fetch_row($query);
	  		 echo "   --";
	  		 $idold = $rw[0];
	  		 echo " ---";
	  		 $numrows = mysqli_num_rows($query);
	  		 echo $numrows;
	  		 //echo ("---------------");
	  		 if ($numrows == 0)
	  		 {
	  			 
	  			 $sql = "INSERT INTO farmerdetails (phone) VALUES('$phone_no')";
	  			
	  			 $result = mysqli_query($con,$sql);
	  			 $id = mysqli_insert_id($con);
	  			 echo($id);
	  			 if ($result)
	  			 {
	  				 //session_start();
	  				 //$_COOKIE['flag'] = False;
	  				 //$_COOKIE['id']=$id;
				 setcookie("id","$id",time()+432000);
	  				 //$_COOKIE['sess_user']=$phone_no;
				 setcookie("sess_user","$phone_no",time()+432000);
	  				 header("Location:register.php");
	  			 }
	  		 }
	  		 else
	  		 {	
	  			//$sqlnew = "SELECT "
	  			//session_start();
	  			//$_COOKIE['flag'] = True;
	  			//$_COOKIE['id']=$idold;
	  			//$_COOKIE['sess_user']=$phone_no;
			setcookie("id","$idold",time()+432000);
			setcookie("sess_user","$phone_no",time()+432000);
	  			//header("Location:home.php");
	  		 }
	  	 }
	  	 else
	  	 {?>
<script>alert("Required all fileds")</script>
<?php
	}
	}
	mysqli_close($con);
	?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<script type="text/javascript" src="js/validation.js"></script>
		<script type="text/javascript"></script>
		<!-- Required meta tags-->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Colorlib Templates">
		<meta name="author" content="Colorlib">
		<meta name="keywords" content="Colorlib Templates">
		<!-- Title Page-->
		<title>Farmer Login</title>
		<!-- Icons font CSS-->
		<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
		<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
		<!-- Font special for pages-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
		<!-- Vendor CSS-->
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
		<link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
		<!-- Main CSS-->
		<link href="css/main.css" rel="stylesheet" media="all">
		<!-- google translate script 1-->
		<script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<!-- Call back function 2 -->
		<script type="text/javascript">
			function googleTranslateElementInit() {
			  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
			}
		</script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<style>
		#otpenter{
		    display: none;
		}
		#nextpage{
		    display: none;
		}
		</style>
	
	<style>
		a:link {
		color: black;
		background-color: transparent;
		text-decoration: none;
		font-size:17px;
		}
		a:hover {
		color: blue;
		}
		body {
		
		background-color: #cccccc;
		}
	</style>
	<body>
		<div class="page-wrapper  p-t-45 p-b-50">
			<div class="wrapper wrapper--w790">
				<div class="card card-5">
					<div class="card-heading">
						<h2 class="title">Kissan Sahayak</h2>
					</div>
					<div class="card-body">
						<div id="google_translate_element" align="right"></div>
						<br>
						
						<br><br><br>
						<form method="POST">
							<div class="form-row m-b-55 ">
								<div class="name" style="padding-right:15px;">Enter Phone number </div>
								<div class="value">
									<div class="row row-space">
										<div class="col-2">
											<div class="input-group-desc">
												<input type="text" placeholder="+923********" class="input--style-5" name="phone_no" onkeyup="validateMobile(this);" id="number" value="+91" required>
												<label id="phonenolabel" style="color:red"></label>
												<label class="label--desc"> Example : +917743933364 </label>
											</div>
										</div>
										<div class="col-2">
											<div class="input-group-desc">
												<div>
													<!--<button type="button" id="sendotp" class="btn btn--radius-2 btn--blue" onclick="phoneAuth();">SEND CODE</button>-->
													<input type="button" value="SEND CODE" id="sendotp" class="btn btn--radius-2 btn--blue" onclick="phoneAuth();"/>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="recaptcha-container"></div>
							<br><br>
							<div id="otpenter">
								<div class="form-row m-b-55" >
									<div class="name" style="align:left">Enter OTP</div>
									<div class="value">
										<div class="row row-space">
											<div class="col-2">
												<div class="input-group-desc">
													<input type="text" id="verificationCode"  class="input--style-5" name="otp" onkeyup="validateotp(this);" required>
													<label id="otplabel" style="color:red"></label>
													<label class="label--desc"> Example : 123456 </label>
												</div>
											</div>
											<div class="col-2">
												<div class="input-group-desc">
													<div>
														<button type="button" id="otpsubmit" class="btn btn--radius-2 btn--blue" onclick="codeverify();">VERIFY CODE</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="nextpage">
								<center>
									<button class="btn btn--radius-2 btn--red" type="submit" name="submit">SIGNIN / SIGNUP</button>
									<p id="demo"></p>
								</center>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Jquery JS-->
		<script src="vendor/jquery/jquery.min.js"></script>
		<!-- Vendor JS-->
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/datepicker/moment.min.js"></script>
		<script src="vendor/datepicker/daterangepicker.js"></script>
		<!-- Main JS-->
		<script src="js/global.js"></script>
		<!-- The core Firebase JS SDK is always required and must be listed first -->
		<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
		<!-- TODO: Add SDKs for Firebase products that you want to use
			https://firebase.google.com/docs/web/setup#config-web-app -->
		<script>
			// Your web app's Firebase configuration
			var firebaseConfig = {
			    apiKey: "AIzaSyDgjuK1FrfxntbehpKih42daOiErA9Sb9w",
			    authDomain: "mobileotpauth-f1d7a.firebaseapp.com",
			    databaseURL: "https://mobileotpauth-f1d7a.firebaseio.com",
			    projectId: "mobileotpauth-f1d7a",
			    storageBucket: "mobileotpauth-f1d7a.appspot.com",
			    messagingSenderId: "282275742065",
			    //appId: "1:875270164038:web:09bb0cf6975e1506dec447",
			    //measurementId: "G-05YMLG9MLH"
			};
			// Initialize Firebase
			firebase.initializeApp(firebaseConfig);
		</script>
		<script src="NumberAuthentication.js" type="text/javascript"></script>
	</body>
</html>