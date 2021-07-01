<?php
session_start();
$name="";

if(isset($_GET['email']))
{
     $email=$_GET['email'];
     //echo $email;
}
if (isset($_GET['name'])) {
    # code...

    $name=$_GET['name'];
    //echo $name;

}
$k=0;
if(isset($_POST['submit']))
{
    $v=$_POST['submit'];
    if($v=='Logout')
    {
        $k=1;

        session_destroy();

    }
}
?>
<header class="header">
        <div class="header__top">
            
        </div>
        <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                               
                                <li>Free Shipping for all Order of Rs 499</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <?php if($name != "" && $name != NULL): ?>
                                <a href="#"><h6>Welcome<b> <?=$name;?></b></h6></a>
                                <?php endif; ?>
                                
                                 
                            </div>
                            <?php if($name == "" && $name == NULL): ?>
                            <div class="header__top__right__auth">
                                <a href="Buyer_login.php"><i class="fa fa-user"></i> Login</a>
                            </div>
                            <?php endif; ?>
                            <?php if($name != "" && $name != NULL): ?>
                            <div class="header__top__right__auth">
                <form action="" method="POST" name="form1"class="p-2" enctype="multipart/form-data" id="form-box" >
                    
                    <?php
                    if($k==1){
                    echo '<a onclick="signout()" href=""><i class="fa fa-sign-out"></i> Logout</a>';
                }
                    else
                    {
                        echo '<input type="submit" name="submit" class="btn btn-danger btn-block"value="Logout" >';
                    }
                
                    ?>
                             </form>   

                            </div>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <?php if($name == "" && $name == NULL): ?>
                    <div class="header__logo">
                        <a href="./index1.php"><img src="img/logo1.png" alt=""><h2><b>Annadaata</b></h2></a>
                    </div>
                    <?php endif; ?>
                    <?php if($name != "" && $name != NULL): ?>
                        <div class="header__logo">
                        <a href="./index1.php?name=<?= $name ?>&email=<?= $email ?>"><img src="img/logo1.png" alt=""><h2><b>Annadaata</b></h2></a>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <?php if($name == "" && $name == NULL): ?>

                            <li class="active"><a href="./index1.php">Home</a></li>
                            <?php endif;?>
                            <?php if($name != "" && $name != NULL): ?>
                                <li class="active"><a href="./index1.php?name=<?= $name ?>&email=<?= $email ?>">Home</a></li>
                            <?php endif;?>

                            
                            <?php if($name == "" && $name == NULL): ?>
                            <li><a href="Buyer_Orders.php">My Orders</a></li>

                            <?php endif;?>
                            <?php if($name != "" && $name != NULL): ?>
                                <li class="a"><a href="./Buyer_Orders.php?name=<?= $name ?>&email=<?= $email ?>">My Orders</a></li>
                            <?php endif;?>
                            
                            <?php if($name == "" && $name == NULL): ?>
                                <li><a href="Buyer_Profile.php">My Profile</a></li>

                            <?php endif;?>
                            <?php if($name != "" && $name != NULL): ?>
                                <li class="a"><a href="./Buyer_Profile.php?name=<?= $name ?>&email=<?= $email ?>">My Profile</a></li>
                            <?php endif;?>

                            <?php if($name == "" && $name == NULL): ?>
                                <li><a href="./contact.php">Contact</a></li>

                            <?php endif;?>
                            <?php if($name != "" && $name != NULL): ?>
                                <li class=""><a href="./contact.php?name=<?= $name ?>&email=<?= $email ?>">Contact</a></li>
                            <?php endif;?>
							<li class=""><a href="./home.php">Kisaan Sahayak</a></li>

							
                            
                                
                        </ul>
						    
                            <div id="google_translate_element"></div>
                                <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <!--<li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>-->
                            <?php if(isset($_SESSION['wish'])): ?>
                            <?php if(count($_SESSION['wish']) != "" && count($_SESSION['wish']) != NULL): ?>
                            <?php if($name!="" && $name!=NULL): ?>
                            <li><a href="wishlist.php?name=<?= $name ?>&email=<?= $email ?>"><i class="fa fa-heart"></i> <span><?=count($_SESSION['wish']);?></span></a></li>
                            <?php endif; endif;endif; ?>
                            <?php if(isset($_SESSION['wish'])): ?>
                            <?php if(count($_SESSION['wish']) != "" && count($_SESSION['wish']) != NULL): ?>
                            <?php if($name=="" && $name==NULL): ?>
                            <li><a href="wishlist.php"><i class="fa fa-heart"></i> <span><?=count($_SESSION['wish']);?></span></a></li>
                            

                            <?php endif;endif;endif; 
                            if((empty($_SESSION['wish'])) ||(!isset($_SESSION['wish']))): ?>
                            
                            <li><a href="wishlist.php"><i class="fa fa-heart"></i> <span>0</span></a></li>
                            <?php endif; ?>


                            <?php if(isset($_SESSION['cart'])): ?>
                            <?php if(count($_SESSION['cart']) != "" && count($_SESSION['cart']) != NULL): ?>
                            <?php if($name!="" && $name!=NULL): ?>
                            <li><a href="shopping-cart.php?name=<?= $name ?>&email=<?= $email ?>"><i class="fa fa-shopping-bag"></i> <span><?=count($_SESSION['cart']);?></span></a></li>
                            <?php endif; endif;endif; ?>
                            <?php if(isset($_SESSION['cart'])): ?>
                            <?php if(count($_SESSION['cart']) != "" && count($_SESSION['cart']) != NULL): ?>
                            <?php if($name=="" && $name==NULL): ?>
                            <li><a href="shopping-cart.php"><i class="fa fa-shopping-bag"></i> <span><?=count($_SESSION['cart']);?></span></a></li>
                            

                            <?php endif; endif;endif;
                    
                        
                        if((empty($_SESSION['cart'])) ||(!isset($_SESSION['cart'])))
                        {
                            ?>
                            <li><a href="shopping-cart.php"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
                      <?php  }
                         ?>
                        


                        </ul>
                        <div class="header__cart__price ">item: <span id="gtotal1"></span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    
        
