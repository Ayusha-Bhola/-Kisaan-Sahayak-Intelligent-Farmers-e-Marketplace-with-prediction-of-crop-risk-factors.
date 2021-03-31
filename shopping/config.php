<?php
	$conn = mysqli_connect("localhost", "root", "", "shopping");
    $img = mysqli_query($conn, "SELECT * FROM product");
     //while ($row = mysqli_fetch_array($img)) {     
		
      //	echo "<img src='Images/".$row['product_image']."' >";   
      
    //}     
?>