<?php
session_start();
if(isset($_GET['id']))
{
	//echo $_GET['id'];
	//$key = array_search("34", $_SESSION['cart']);
	$id=$_GET['id'];

print_r($_SESSION['cart'][$id]);
echo "<br>";
unset($_SESSION['cart'][$id]);
print_r($_SESSION['cart']);
	if(isset($_GET['name']))
	{
		$name=$_GET["name"];
		$email=$_GET["email"];
		header('location:shopping-cart.php?name='.$name.'&email='.$email);

	}
	else
	{
				header('location:shopping-cart.php');

	}
}

?>