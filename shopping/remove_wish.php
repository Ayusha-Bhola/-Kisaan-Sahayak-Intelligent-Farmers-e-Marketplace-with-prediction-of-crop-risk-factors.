<?php
session_start();
if(isset($_GET['id']))
{
	//echo $_GET['id'];
	//$key = array_search("34", $_SESSION['cart']);
	$id=$_GET['id'];

print_r($_SESSION['wish'][$id]);
echo "<br>";
unset($_SESSION['wish'][$id]);
print_r($_SESSION['wish']);
	if(isset($_GET['name']))
	{
		$name=$_GET["name"];
		$email=$_GET["email"];
		header('location:wishlist.php?name='.$name.'&email='.$email);

	}
	else
	{
				header('location:wishlist.php');

	}
}

?>