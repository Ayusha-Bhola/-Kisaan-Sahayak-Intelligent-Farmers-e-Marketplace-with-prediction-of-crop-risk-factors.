<?php
//connection establishment
require 'config.php';
//after click on submit button check
if(isset($_POST['submit']))
{
$phone2=$_POST['phone'];//get phone entered in input text box
//echo $phone2;
				$sql1 = "SELECT * FROM `farmerdetails` WHERE `phone`='$phone2'";//for gettting fid from farmerdetail table with entered phone number

				$result1=mysqli_query($conn,$sql1);//query running in mysql
				$row1=mysqli_fetch_array($result1);//fetched the result in array
				//echo mysqli_num_rows($result1);
				//print_r($row1);
				//checking user entered number exists in farmerdetails table
					if (mysqli_num_rows($result1)==1)//already exists or not
					{
						$fid=$row1['fid'];
						//fetching data from buyer table for that farmer using fid
						$sql = "SELECT * FROM `buyerdetails` WHERE `userid`='$fid'";

						//echo $sql;
						//echo "<br>";
						$result=mysqli_query($conn,$sql);
						//$row=mysqli_fetch_array($result);
						//print_r($row);
				//fetching rows using while loop inserting each row in googlemap table if not existing already
						 while ($row=mysqli_fetch_array($result))
						 {
						 	//print_r($row);
						 	$buyer_id1=$row['id'];
						 	//fetching row with unique buyer_id
						 	$check="SELECT * FROM `googlemap` WHERE buyer_id='$buyer_id1'";

						 	//echo $check;
							$rs = mysqli_query($conn,$check);
							$data = mysqli_fetch_array($rs, MYSQLI_NUM);
							//print_r($data);
							//checking that if the row already exists if not means returns null then added
							if($data==null)
							{
								$userid=$row['userid'];
								$buyer_name=$row['name'];
								$address=$row['address'];
								$country=$row['country'];
								$state=$row['state'];
								$district=$row['district'];
								$product_name=$row['product'];

								$sql_buyer="INSERT INTO `googlemap`( `buyer_id`, `userid`, `buyer_name`, `address`, `country`, `state`, `district`, `product_name`) VALUES ('$buyer_id1','$userid','$buyer_name','$address','$country','$state','$district','$product_name')";
								echo $sql_buyer;
								if ($conn->query($sql_buyer) === TRUE) {
								  echo "New record created successfully";
								} else {
								  echo "Error: " . $sql_buyer . "<br>" . $conn->error;
								}


							}
							else
							{
								echo"row already exists";
								echo "<br>";
							}
						 	
						 }
						
					}
$conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="" method='POST' accept-charset="utf-8">
		<label>Enter fid of farmer</label>
<input type="tel"  name="phone" placeholder="9175822888" pattern="[789][0-9]{9}" required><br><br>
<small>Format: 9175822888</small><br><br>
<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>