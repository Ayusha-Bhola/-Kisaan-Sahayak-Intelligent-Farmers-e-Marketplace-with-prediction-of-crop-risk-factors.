<?php
//session_start();
$name="";

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
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $list_id=array();
                                if(isset($_SESSION['cart']))
                                {
                                    $i=0;
                                    $total=0;
                                foreach ($_SESSION['cart'] as  $key => $products) {

                                    array_push($list_id,$products[0]);
                                    $total=$total+$products[2];

                                    echo "<tr>";
                                    
                                    echo "<td class='shoping__cart__item'>";
                                    echo "<img src=".$products[3]." style='width:100px;height:110px;'    alt=''>";
                                    echo "<h5>".$products[1]."</h5>";
                                    echo "</td>";
                                    echo "<td class='shoping__cart__price '>".$products[2]."<input type='hidden' class='iprice' value=".$products[2]."></td>";
                                    echo "<td class='shoping__cart__quantity'>";
                                   
                                    ?>
                                   
                                        <!--<input type="number" id="number" value="0" />-->

        
        <?php 

                                    echo      "<input  class='iquantity' onchange='subTotal()' type='number' value='1' id='quantity'min='0'>";
                                    
                                    echo "</td>";
                                    ?>
                                    <td class="shoping__cart__total itotal"></td>
                                    <?php
                                    echo "<td class='shoping__cart__item__close'>";
                                    if($name!="" && $name !=NULL){
                                    ?>
<a href='remove_cart.php?id=<?=$key?>&name=<?=$name?>&email=<?=$email?>'><span class='icon_close' ></a>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
<a href='remove_cart.php?id=<?=$key?>'><span class='icon_close' ></a>

                                        <?php
                                    }
                                    echo "</span>";
                                    echo "</td>";
                                echo      "</tr>";
                                echo $total;
                                
                                $i=$i+1;
                                ?>
                                
                              
                          <?php } $_SESSION['list_id']=$list_id;}?>      
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            
                           <li>Total <span id="gtotal" >
                            <input type="hidden" id="gtotal1"  name="gtotal">
                            </span></li>
                        </ul>
                     

                        <?php if($name != "" && $name != NULL): ?>

                            <input type="hidden" name="fname" id="name" value="<?=$name?>">
                            <input type="hidden" name="email" id="email" value="<?=$email?>">
                    <a onclick="add()" href="" id=".clickable" class="primary-btn">PROCEED TO CHECKOUT</a>
                    <!--<input type="submit" name="submit" class="primary-btn"value="PROCEED TO CHECKOUT">-->
                    <!--<input type="button" id="button" name="button"  class="primary-btn"value="PROCEED TO CHECKOUT">-->
                        <?php endif; ?>
                            <?php if($name == "" && $name == NULL): ?>
                        <a href="Buyer_login.php" class="primary-btn">PROCEED TO CHECKOUT</a>
                        <?php endif; ?>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
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
         var gt=0;
         var iprice=document.getElementsByClassName('iprice');
         var iquantity=document.getElementsByClassName('iquantity');
         var itotal=document.getElementsByClassName('itotal');
         


        function add()
        {
            var total=document.getElementById('gtotal'); 
            //var name=document.getElementById('name').value;
            //var email=document.getElementById('email').value;
            //console.log(name);
            //console.log(email);
            //window.location="addTO.php?"+total;
            var q=[];
            var s="Order.php?name=<?= $name ?>&email=<?= $email ?>&";
            var s1="";
            gt=0;
                for(i=0;i<iprice.length;i++)
                {
                        q.push((iprice[i].value)*(iquantity[i].value));
                        gt=gt+((iprice[i].value)*(iquantity[i].value));
                        s=s+"p"+i+"="+iprice[i].value+"&";
                        if(i==0)
                            s1=s1+"q"+i+"="+iquantity[i].value;
                        else
                            s1=s1+"&q"+i+"="+iquantity[i].value;

                }
                s=s+s1+"&total="+gt;
            console.log(q);
            console.log(gt);
            var dataPost = {
           "var": "foo"
        };
        var dataString = JSON.stringify(dataPost);

        $.ajax({
           url: 'Order.php',
           data: {myData: dataString},
           type: 'POST',
           success: function(response) {
              //alert(response);
              window.location=s;
           }
        });
             /*$.ajax({
                url: 'addTO.php',
                type: 'post',
                data: {q:q,gt:gt},
                dataType: 'JSON',
                success: function(response){

                    $('.details').show();

                    // selecting values from response Object
                    
                }
            })*/
           

      
                /*var userID = 18;
                //alert($(this).attr('id'));
                $.ajax({
                    type: "POST",
                    url: 'addTO.php',
                    data: { userID : "ayu" },
                    success: function(data)
                    {
                        alert("success!");
                        window.location="addTO.php";
                    }
                });
           */
        






        
            
            
        }

         function subTotal()
         {
                gt=0;
                for(i=0;i<iprice.length;i++)
                {
                        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                        gt=gt+((iprice[i].value)*(iquantity[i].value));
                }
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