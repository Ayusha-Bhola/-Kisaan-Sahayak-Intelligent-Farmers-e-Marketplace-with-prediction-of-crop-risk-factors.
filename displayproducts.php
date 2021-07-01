
<?php
session_start();

require 'config.php';
$fid=$_SESSION['fid'];
$sql = "SELECT `fid` FROM `farmerdetails` WHERE `fid`='$fid'";
//echo $sql;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$fid=$row['fid'];


//should not contain all rows
//print_r( $rows );

//$row1=mysqli_fetch_array($result1);

//echo $sql1;

?>
<html>
            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title> My Products</title>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
                                <style>body {
    
    min-height: 100vh
}

.text-gray {
    color: #aaa
}

img {
    height: 170px;
    width: 140px
}</style>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'></script>
                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>

                              <nav class="navbar navbar-dark bg-success">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>

  </button>
  <!-- Brand -->
  <a class="navbar-brand mr-auto" href="#"><h4><b>My Products</b></h4></a>
  
  <!-- Toggler/collapsibe Button -->
  

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">

    <ul class="navbar-nav ml-auto" >
      
      <li class="nav-item">
        <a class="nav-link"href="farmerdashboard.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="displayproducts.php">My Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="displayfarmerdetails.php">My Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add.php">Add Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="displayorder.php">Order recevied</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
    
  </div>
</nav>

                            <div class="container py-5">
    <div class="row text-center  mb-5">
        <div class="col-lg-7 mx-auto"   >
            <h1 class=""><b>Product List</b></h1>
        </div>

<table class="table table-hover">
        
  <thead>
    <tr>
      <th scope="col">Sr no</th>
      <th scope="col">Product Name</th>
      <th scope="col">Brand Name</th>
      <th scope="col">Top Category</th>
      <th scope="col">Sub Category</th>
      <th scope="col">EAN code</th>
      <th scope="col">weight/volume (kg/L)</th>
      <th scope="col">Costprice (Rs)</th>
      <th scope="col">Selling Price (Rs)</th>
      <th scope="col">Quatity Available (kg/litre)</th>
      <th scope="col">Image</th>




    </tr>
  </thead>
  
  <tbody>
    
    <?php
$conn = mysqli_connect("localhost", "root", "", "shopping");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `product` WHERE `userid`=$fid";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
    $x=0;
while($row = $result->fetch_assoc()) {
    $x=$x+1;
echo "<tr><th scope='row'>".$x."</th><td>" . $row["product_name"]. "</td><td>" . $row["brandname"] . "</td><td>". $row["topcategory"]. "</td><td>". $row["subcategory"]."</td><td>". $row["EAN"]. "</td><td>". $row["weightvolume"]. "</td><td>". $row["costprice"]. "</td><td>". $row["product_price"]. "</td><td>". $row["qauntity"]. "</td><td><img src='Images/".$row["product_image"]."' class='card-img-top' height='320'>"."</td></tr>";

//echo $row["product_image"];
//echo "/>";
//echo $s.$s1.$s2;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
    
  </tbody>
</table>

    </div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


 <?php include "./template/footer.php"; ?>

                    </body>
                        </html>