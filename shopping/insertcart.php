<?php
session_start();
if(empty($_SESSION['cart']))
{
	$_SESSION['cart']=array();

}

$name=$_GET['name'];
$email=$_GET['email'];
$id=$_GET['id'];
$pname=$_GET['pname'];
$price=$_GET['price'];
$img=$_GET['img'];
$product= array($id,$pname,$price,$img);
//print_r($product);
if(in_array($product,$_SESSION['cart']))
{

}
else
{
array_push($_SESSION['cart'],$product);
}
//$_SESSION['cart']=$product;
if($name!="" && $name !=NULL)
{
	
header('location:index1.php?name='.$name.'&email='.$email);
}
else
{
	
	header('location:index1.php');

}
// To remove only one session.

// To remove all sessions.
?>