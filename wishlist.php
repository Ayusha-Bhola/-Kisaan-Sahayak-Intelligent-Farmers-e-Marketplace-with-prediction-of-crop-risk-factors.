
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
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
                        <h2>Wish list</h2>
                        <div class="breadcrumb__option">
                            <a href="#">Home</a>
                            <span>Wishlist</span>
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
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Add to cart</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(isset($_SESSION['wish']))
                                {
                                foreach ($_SESSION['wish'] as  $key => $products) {
                                    
                                    
                                    echo "<tr>";
                                    
                                    echo "<td class='shoping__cart__item'>";
                                    echo "<img src=".$products[3]." style='width:200px;height:210px;' alt=''>";
                                    echo "<h5>".$products[1]."</h5>";
                                    echo "</td>";
                                    echo "<td class='shoping__cart__price'>".$products[2]."<input type='hidden' class='iprice' value=".$products[2]."></td>";
                                    echo "<td class='shoping__cart__quantity'>";
                                   
                                    ?>
                                   
                                        <!--<input type="number" id="number" value="0" />-->
        
        <?php 
                                    echo      "<input  class='iquantity' onchange='subTotal()' type='number' value='1' id='quantity'>";
                                    
                                    echo "</td>";
                                    ?>
                                    <td class="shoping__cart__total itotal"></td>
                                    <td ><a href="insertcart.php?id=<?=$products[0] ?>&pname=<?=$products[1]?>&price=<?=$products[2]?>&img=<?=$products[3]?>"><i class="fa fa-shopping-cart"></i></a>
                                    <?php
                                    echo "<td class='shoping__cart__item__close'>";
                                    if($name!="" && $name !=NULL){
                                    ?>
<a href='remove_wish.php?id=<?=$key?>&name=<?=$name?>&email=<?=$email?>'><span class='icon_close' ></a>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
<a href='remove_wish.php?id=<?=$key?>'><span class='icon_close' ></a>
<?php
                                    }
                                    
                                    echo "</span>";
                                    echo "</td>";
                                echo      "</tr>";
                                
                                
                                ?>
                                
                              
                          <?php }}?>      
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
    <!--firebase-->
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-auth.js"></script>

 <script src="js/firebaseauth.js" type="text/javascript"></script>

<script src="js/firebase.js" type="text/javascript"></script>
     <script type="text/javascript">
         var gt=0;
         var iprice=document.getElementsByClassName('iprice');
         var iquantity=document.getElementsByClassName('iquantity');
         var itotal=document.getElementsByClassName('itotal');
                     subTotal();
        


         function subTotal()
         {
                gt=0;
                for(i=0;i<iprice.length;i++)
                {
                        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                        gt=gt+((iprice[i].value)*(iquantity[i].value));
                }
                //console.log(gt);
                if(iprice.length!=0)
                {
                document.getElementById('gtotal').innerText=gt;
                document.getElementById('gtotal1').innerText=gt;
            }
         }
         subTotal();
    
     </script>   

</body>

</html>