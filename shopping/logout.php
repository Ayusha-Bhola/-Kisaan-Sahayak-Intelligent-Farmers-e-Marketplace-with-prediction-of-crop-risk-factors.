<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();
echo "<script type='text/javascript'>"; 
      echo "alert('User  logged off!')"; 
      echo "</script>";  

// destroy the session
//session_destroy();
?>

</body>
</html>
