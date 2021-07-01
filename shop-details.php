<?php
require 'config.php';
$id=$_GET['id'];
        $sql="SELECT * FROM product WHERE `id`='$id'";
        //echo $sql;
        $result=mysqli_query($conn,$sql);
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

    
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?php include "./template/header.php"; ?>

    <!-- Header Section End -->
    <?php
    while ($row=mysqli_fetch_array($result)) {
        //$_SESSION['userid']=$row['userid'];
        $path= "Images/".$row['product_image'];
        //echo $path;
        ?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?=$row['topcategory'];?></h2>
                        <div class="breadcrumb__option">
                            <a href="">Home</a>
                            <a href=""><?=$row['topcategory'];?></a>
                            <span><?=$row['subcategory'];?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src=<?=$path?> alt="">
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?=$row['product_name'];?></h3>
                        <h4><?=$row['brandname'];?></h4>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">Rs <?=$row['product_price'];?>/-</div>
                        
                         <?php if($name != "" && $name != NULL): ?>
                    <a href="insertcart.php?id=<?=$row['id'] ?>&name=<?=$name?>&email=<?=$email?>&pname=<?=$row['product_name']?>&price=<?=$row['product_price']?>&img=<?=$path?>" class="primary-btn">ADD TO CARD</a>
                    <?php endif; ?>
                            <?php if($name == "" && $name == NULL): ?>
                                <a href="insertcart.php?id=<?=$row['id'] ?>&pname=<?=$row['product_name']?>&price=<?=$row['product_price']?>&img=<?=$path?>" class="primary-btn">ADD TO CARD</a>
                    <?php endif; ?>

                    <?php if($name != "" && $name != NULL): ?>
                    <a href="insertwishlist.php?id=<?=$row['id'] ?>&name=<?=$name?>&email=<?=$email?>&pname=<?=$row['product_name']?>&price=<?=$row['product_price']?>&img=<?=$path?>" class="heart-icon"><span class="icon_heart_alt"></span></a>
                    <?php endif; ?>
                            <?php if($name == "" && $name == NULL): ?>
                                <a href="insertwishlist.php?id=<?=$row['id'] ?>&pname=<?=$row['product_name']?>&price=<?=$row['product_price']?>&img=<?=$path?>" class="heart-icon"><span class="icon_heart_alt"></span></a>
                    <?php endif; ?>
                        
                        <ul>
                            <?php if($row['qauntity']==0):?>
                            <li><b>Availability</b> <span> Out of Stock</span></li>
                            <?php endif;
                            if($row['qauntity']>0):
                            ?>
                            <li><b>Availability</b> <span>In Stock</span></li>
                        <?php endif;?>
                            
                            <li><b>Weight</b> <span><?=$row['weightvolume']?>kg</span></li>
                            
                                
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Farmer's Description</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <?php
                                    $userid=$row['userid'];
                                    $sql1="SELECT * FROM farmerdetails WHERE `fid`='$userid'";
                                    //echo $sql;
                                    $result1=mysqli_query($conn,$sql1);
                                    //echo $sql1;
                                    while ($rowF=mysqli_fetch_array($result1)) {
                                        ?>
                                        <table style="width:50%">
                                        <h6>Farmer's Details</h6>

                                          <tr>
                                            <td>Company Name</td>
                                            <td><?=$rowF['cname']?></td>
                                            
                                          </tr>
                                          <tr>
                                            <td>Farmer Name</td>
                                            <td><?=$rowF['fname']?></td>
                                          </tr>
                                          <tr>
                                            <td>Farmer Phone Number</td>
                                            <td><?=$rowF['phone']?></td>
                                          </tr>
                                          <tr>
                                            <td>Farmer Email Address</td>
                                            <td><?=$rowF['email']?></td>
                                          </tr>
                                          <tr>
                                            <td>Country</td>
                                            <td>Made in <?=$rowF['country']?></td>
                                          </tr>
                                          <tr>
                                            <td>State</td>
                                            <td><?=$rowF['state'].",".$rowF['district']?></td>
                                          </tr>

                                        </table>
                                        
                                    <?php }?>
                                    </div>
                            </div>
                            
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                                    $topcategory=$row['topcategory'];
                                    $subcategory=$row['subcategory'];
                                    $pname=$row['product_name'];

$sql2 = "SELECT * FROM `product` WHERE `product_name`!='$pname' AND `topcategory`='$topcategory'
 LIMIT 4";
                                    //echo $sql2;
                                    $result2=mysqli_query($conn,$sql2);
                                    //echo $sql1;
                                    while ($rowR=mysqli_fetch_array($result2)) {
                                    $path= "Images/".$rowR['product_image'];

                                        ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg>
                            <ul class="product__item__pic__hover">
                                <?php if($name != "" && $name != NULL): ?>
                            <a href="shop-details.php?id=<?=$rowR['id'] ?>&name=<?=$name?>&email=<?=$email?>"><img src="Images/<?= $rowR['product_image'] ?>"></a>
                            <ul class="featured__item__pic__hover">
                                <li><a href="insertwishlist.php?id=<?=$rowR['id'] ?>&name=<?=$name?>&email=<?=$email?>&pname=<?=$rowR['product_name']?>&price=<?=$rowR['product_price']?>&img=<?=$path?>"><i class="fa fa-heart"></i></a></li>
                                <li><a href="insertcart.php?id=<?=$rowR['id'] ?>&name=<?=$name?>&email=<?=$email?>&pname=<?=$rowR['product_name']?>&price=<?=$rowR['product_price']?>&img=<?=$path?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        <?php endif;?>
                            <ul class="product__item__pic__hover">
                                <?php if($name == "" && $name == NULL): ?>
                                <a href="shop-details.php?id=<?=$rowR['id'] ?>"><img src="Images/<?= $rowR['product_image'] ?>"></a>
                                <ul class="featured__item__pic__hover">
                                <li><a href="insertwishlist.php?id=<?=$rowR['id'] ?>&pname=<?=$rowR['product_name']?>&price=<?=$rowR['product_price']?>&img=<?=$path?>"><i class="fa fa-heart"></i></a></li>
                                <li><a href="insertcart.php?id=<?=$rowR['id'] ?>&pname=<?=$rowR['product_name']?>&price=<?=$rowR['product_price']?>&img=<?=$path?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <?php endif; ?>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"><?=$rowR['product_name']?></a></h6>
                            <h5>Rs <?=$rowR['product_price']?>/-</h5>
                        </div>
                    </div>
                </div>
            <?php }?>
                
            </div>
        </div>
    </section>
<?php }?>
    <!-- Related Product Section End -->

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


</body>

</html>