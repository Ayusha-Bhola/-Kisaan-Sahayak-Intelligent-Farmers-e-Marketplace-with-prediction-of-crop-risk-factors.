<?php
session_start();
require 'config.php';

/*if(isset($_SESSION['phone']))
{
$url="farmerdetail.php";
header('Location:'.$url);
exit();
}
else*/

 if(isset($_POST['phone']))
{
	

        	$phone2=$_POST['phone'];

				$sql1 = "SELECT * FROM `farmerdetails` WHERE `phone`='$phone2'";
				$result1=mysqli_query($conn,$sql1);
				$row1=mysqli_fetch_array($result1);
				echo mysqli_num_rows($result1);
					if (mysqli_num_rows($result1)==1)
					{
						$_SESSION['phone1']=$phone2;
						$url="farmerdashboard.php";
						header('Location:'.$url);
						exit();
					}
			else
			{
			$phone2=$_POST['phone'];
			$_SESSION['phone1']=$phone2;
			$url="farmerdetail.php";
			header('Location:'.$url);
			exit();
			}
      

//$url="farmerdetail.php?phone=".$phone;
//header('Location: '.$url);

//$_SESSION['phonec'] = $phone;
}
else {
          echo "<script type='text/javascript'>"; 
      echo "alert('Please select the value.')"; 
      echo "</script>";  
        }
?>
<!DOCTYPE html>
<html>
<body>

<h1>Display a Telephone Input Field</h1>

<form action="" method="POST">
  <label for="phone">Enter a phone number:</label><br><br>
  <input type="tel"  name="phone" placeholder="9175822888" pattern="[789][0-9]{9}" required><br><br>
  <small>Format: 9175822888</small><br><br>
  
  <input type="submit" value="submit">
  <input type="submit" value="login" >
 <!-- <a href="farmerdetail.php?id=<?= $phone ?>"  class="btn btn-danger btn-block btn-lg"> </a>-->
 
</form>

</body>
</html>
