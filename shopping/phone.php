<?php
session_start();
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
$_SESSION['phone1']=$phone2;
$url="farmerdetail.php";
header('Location:'.$url);
exit();
//$url="farmerdetail.php?phone=".$phone;
//header('Location: '.$url);

//$_SESSION['phonec'] = $phone;
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
 <!-- <a href="farmerdetail.php?id=<?= $phone ?>"  class="btn btn-danger btn-block btn-lg"> </a>-->
</form>

</body>
</html>
