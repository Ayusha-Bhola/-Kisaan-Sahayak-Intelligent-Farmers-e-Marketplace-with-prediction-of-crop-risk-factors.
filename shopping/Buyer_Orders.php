<?php
$name="";
require 'config.php';

if(isset($_GET['email']))
{
     $email=$_GET['email'];
     //echo $email;
     $_SESSION['email']=$email;
}
if (isset($_GET['name'])) {
    # code...

    $name=$_GET['name'];
    $_SESSION['name']=$name;
    

}
 $sql1= "SELECT * FROM `buyerdetails` WHERE `email`='$email' AND `name`='$name'ORDER BY whenadded";
  //echo $sql1;
  $result1=mysqli_query($conn,$sql1);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="AnnadaataTemplate">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annadaata</title>
    

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style1.css" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->

<?php include "./template/header.php"; ?>
  <?php
//session_start();
////session_destroy();

?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="#">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

 

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        
                            <table class="table table-hover">
        
  <thead>
    <tr>
      <th scope="col">Sr no</th>
      <th scope="col">Product Name</th>
      <th scope="col">Brand Name</th>
      <th scope="col">Top Category</th>
      <th scope="col">Sub Category</th>
      <th scope="col">Price (Rs)</th>
      <th scope="col">Quatity (kg/litre)</th>
      <th scope="col">Image</th>




    </tr>
  </thead>
  
  <tbody>
                                <?php
                                $i=0;
                                $x=1;
                                                                    $t=0;
                                $y=0;
                                while( $row1=mysqli_fetch_array($result1)) {
                                   //print_r($row1);
                                   
                                    $date=$row1['whenadded'];
                                    $id=$row1['product_id'];
                                    
                                    $sql = "SELECT * FROM `product` WHERE id='$id'";
                                    $result=mysqli_query($conn,$sql);
                                    $row=mysqli_fetch_array($result);
                                    //print_r($row);
                                    if($i!=0)
                                    {
                                        
                                        if($date==$predate)
                                        {
                                            //echo "same date";
                                        $t=$t+$row['product_price']*$row1['quantity'];
                                            echo "<tr><th scope='row'>".$x."</th><td>" . $row["product_name"]. "</td><td>" . $row["brandname"] . "</td><td>". $row["topcategory"]. "</td><td>". $row["subcategory"]."</td><td>". $row["product_price"]. "</td><td>". $row1["quantity"]. "</td><td><img src='Images/".$row["product_image"]."' class='card-img-top' style='width:100px;height:110px;'>"."</td></tr>";
                                            //echo $t;
                                            //echo "<br>";

                                        }
                                        else if($date!=$predate)
                                        {
                                            $x=1;
                                            //$t=0;
                                       /* $address=$row1['address'].",".$row1['district'].",".$row1['state'].",".$row1['country'];
                                        echo "<tr><th><h5><b>Shipping Address:</b></h5></th><th><h5>".$address."</h5></th></tr>";*/
                                        /*echo "<tr><th><h5><b>Price:</b></h5></th><th><h5><b>".$t."</b></h5></th></tr>";
*/                                             if($y==0)
                                        {
                                            echo "<tr><th><h5><b>Price:</b></h5></th><th><h5><b>".$t."</b></h5></th></tr>";

                                        }
                                        echo "<br>";
                                        $t=0;
                                        $y=1;
                                            echo "<tr><th><h5>".$date."</h5></th></tr>";
                                            echo "<tr><th scope='row'>".$x."</th><td>" . $row["product_name"]. "</td><td>" . $row["brandname"] . "</td><td>". $row["topcategory"]. "</td><td>". $row["subcategory"]."</td><td>". $row["product_price"]. "</td><td>". $row1["quantity"]. "</td><td><img src='Images/".$row["product_image"]."' class='card-img-top' style='width:100px;height:110px;'>"."</td></tr>";
                                        $t=$t+$row['product_price']*$row1['quantity'];
                                        echo "<tr><th><h5><b>Price:</b></h5></th><th><h5><b>".$t."</b></h5></th></tr>";
                                        /*$address=$row1['address'].",".$row1['district'].",".$row1['state'].",".$row1['country'];
                                        //echo $row1['id'];
                                        echo "<tr><th><h5><b>Shipping Address:</b></h5></th><th><h5>".$address."</h5></th></tr>";*/


                                        }
                                    }
                                    else
                                    {
                                        $t=$t+$row['product_price']*$row1['quantity'];

                                            echo "<tr><th><h5>".$date."</h5></th></tr>";
                                            echo "<tr><th scope='row'>".$x."</th><td>" . $row["product_name"]. "</td><td>" . $row["brandname"] . "</td><td>". $row["topcategory"]. "</td><td>". $row["subcategory"]."</td><td>". $row["product_price"]. "</td><td>". $row1["quantity"]. "</td><td><img src='Images/".$row["product_image"]."' class='card-img-top' style='width:100px;height:110px;'>"."</td></tr>";



                                    }
                                    $predate=$date;
                                    
                                    $i=$i+1;
                                    $x=$x+1;
                                    
                                 }?>      
                           </tbody>
</table>
                    </div>
                </div>
            </div>

            
    <!-- Shoping Cart Section End -->

    <!-- Footer Section Begin -->
    <?php include "./template/footer1.php"; ?>
    <!-- Footer Section End -->
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>

        <script src="js/jquery-3.3.1.min.js"></script>
           

    <!--firebase-->
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-auth.js"></script>

 <script src="js/firebaseauth.js" type="text/javascript"></script>

<script src="js/firebase.js" type="text/javascript"></script>
     <script type="text/javascript">
        </script> 

</body>

</html>