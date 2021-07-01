<?php
session_start();
echo "HELLO!";
//session_start();
session_destroy();
	header('location:index1.php');
?>