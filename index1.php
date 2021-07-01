<?php
//session_start();

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

    
    /*
if(isset($_GET['id']))
{
    $_SESSION['cart']=array_diff($_SESSION['cart'],$_GET['id']);
    //array_push($_SESSION['cart'],$_GET['id']);
    print_r($_SESSION['cart']);
}*/
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
    <style>
.filterDiv {
  
  background-color: white;
  color: black;
  display: none;
}

.show {
  display: block;
}



/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
.dropbtn {
  background-color: white;
  color: white;
  padding: 6px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 60px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #ddd;}
</style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Header Section Begin -->
        <?php include "./template/header.php"; ?>

    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                        
                            
                                <div class="dropdown">
                                    <button class="dropbtn"><li><a href="#fruits">Protein Rich Fruits</a></li></button>
                                      <div class="dropdown-content">
                                        <a href="#">Acerola – West Indian Cherry</a>
                                            <a href="#">Pomme</a>
                                            <a href="#">Apple</a>
                                            <a href="#">Apricots</a>
                                            <a href="#">Avocado</a>
                                            <a href="#">Banana</a>
                                            <a href="#">Blackberries</a>
                                            <a href="#">Blackcurrant</a>
                                            <a href="#">Blueberries</a>
                                            <a href="#">Breadfruit</a>
                                            <a href="#">Cantaloupe</a>
                                            <a href="#">Carambola</a>
                                            <a href="#">Cherimoya</a>
                                            <a href="#">Cherries</a>
                                            <a href="#">Clementine</a>
                                            <a href="#">Coconut Meat</a>
                                            <a href="#">Cranberries</a>
                                            <a href="#">Custard-Apple</a>
                                            <a href="#">Date Fruit</a>
                                            <a href="#">Durian</a>
                                            <a href="#">Elderberries</a>
                                            <a href="#">Feijoa</a>
                                            <a href="#">Figs</a>
                                            <a href="#">Gooseberries</a>
                                            <a href="#">Grapefruit</a>
                                            <a href="#">Grapes</a>
                                            <a href="#">Guava</a>
                                            <a href="#">Honeydew Melon</a>
                                            <a href="#">Jackfruit</a>
                                            <a href="#">Java-Plum</a>
                                            <a href="#">Jujube Fruit</a>
                                            <a href="#">Kiwifruit</a>
                                            <a href="#">Kumquat</a>
                                            <a href="#">Lemon</a>
                                            <a href="#">lime</a>
                                            <a href="#">Lime</a>
                                            <a href="#">Longan</a>
                                            <a href="#">Loquat</a>
                                            <a href="#">Lychee</a>
                                            <a href="#">Mandarin</a>
                                            <a href="#">Mango</a>
                                            <a href="#">Mangosteen</a>
                                            <a href="#">Mulberries</a>
                                            <a href="#">Nectarine</a>
                                            <a href="#">Olives</a>
                                            <a href="#">Orange</a>
                                            <a href="#">Papaya</a>
                                            <a href="#">Passion Fruit</a>
                                            <a href="#">Peaches</a>
                                            <a href="#">Pear</a>
                                            <a href="#">Persimmon – Japanese</a>
                                            <a href="#">Pitaya (Dragonfruit)</a>
                                            <a href="#">Pineapple</a>
                                            <a href="#">Pitanga</a>
                                            <a href="#">Plantain</a>
                                            <a href="#">Plums</a>
                                            <a href="#">Pomegranate</a>
                                            <a href="#">Prickly Pear</a>
                                            <a href="#">Prunes</a>
                                            <a href="#">Pummelo</a>
                                            <a href="#">Quince</a>
                                            <a href="#">Raspberries</a>
                                            <a href="#">Rhubarb</a>
                                            <a href="#">Rose-Apple</a>
                                            <a href="#">Sapodilla</a>
                                            <a href="#">Sapote, Mamey</a>
                                            <a href="#">Soursop</a>
                                            <a href="#">Strawberries</a>
                                            <a href="#">Sugar-Apple</a>
                                            <a href="#">Tamarind</a>
                                            <a href="#">Tangerine</a>
                                      </div>
                                </div>
                            
                        
                            <div class="dropdown">
                            <button class="dropbtn"><li><a href="#vegetables">Fresh Green Vegetables</a></li></button>
                            <div class="dropdown-content">
                                <a href="#"> AMARANTE, FEUILLESAmaranth Leaves</a>
                                <a href="#">ARROWROOT</a>
                                <a href="#">Arrowroot</a>
                                <a href="#">Artichoke</a>
                                <a href="#">Arugula</a>
                                <a href="#">Asparagus</a>
                                <a href="#">Bamboo Shoots</a>
                                <a href="#">Beans, Green</a>
                                <a href="#">Beets</a>
                                <a href="#">Belgian Endive</a>
                                <a href="#">Bitter Melon*</a>
                                <a href="#">Bok Choy</a>
                                <a href="#">Broadbeans (Fava Beans)</a>
                                <a href="#">Broccoli</a>
                                <a href="#">Broccoli Rabe</a>
                                <a href="#">Brussel Sprouts</a>
                                <a href="#">Cabbage, Green</a>
                                <a href="#">Cabbage, Red</a>
                                <a href="#">Carrot</a>
                                <a href="#">Cassava (Yuca Root)</a>
                                <a href="#">Cauliflower</a>
                                <a href="#">Celeriac (Celery Root)</a>
                                <a href="#">Celery</a>
                                <a href="#">Chayote*</a>
                                <a href="#">Chicory (Curly Endive)</a>
                                <a href="#">Collards</a>
                                <a href="#">Corn</a>
                                <a href="#">Crookneck</a>
                                <a href="#">Cucumber</a>
                                <a href="#">Daikon</a>
                                <a href="#">Dandelion Greens</a>
                                <a href="#">Edamame, Soybeans</a>
                                <a href="#">Eggplant</a>
                                <a href="#">Fennel</a>
                                <a href="#">Fiddleheads</a>
                                <a href="#">Ginger Root</a>
                                <a href="#">Horseradish</a>
                                <a href="#">Jicama</a>
                                <a href="#">Kale</a>
                                <a href="#">Kohlrabi</a>
                                <a href="#">Leeks</a>
                                <a href="#">Lettuce, Iceberg</a>
                                <a href="#">Lettuce, Leaf</a>
                                <a href="#">Lettuce, Romaine</a>
                                <a href="#">Mushrooms</a>
                                <a href="#">Mustard Greens</a>
                                <a href="#">Okra</a>
                                <a href="#">Onion (Red)</a>
                                <a href="#">Onions</a>
                                <a href="#">Parsnip</a>
                                <a href="#">Peas, Green</a>
                                <a href="#">Pepper, Green</a>
                                <a href="#">Red pepper</a>
                                <a href="#">Pepper, Sweet Red</a>
                                <a href="#">Potato, Red</a>
                                <a href="#">Potato, White</a>
                                <a href="#">potatoes_small</a>
                                <a href="#">Potato, Yellow</a>
                                <a href="#">Pumpkin</a>
                                <a href="#">Radicchio</a>
                                <a href="#">Radishes</a>
                                <a href="#">Rutabaga</a>
                                <a href="#">Salsify (Oysterplant)</a>
                                <a href="#">Shallots</a>
                                <a href="#">Snow Peas</a>
                                <a href="#">Sorrel (Dock)</a>
                                <a href="#">Spaghetti Squash</a>
                                <a href="#">Spinach</a>
                                <a href="#">Squash, Butternut</a>
                                <a href="#">Sugar Snap Peas</a>
                                <a href="#">Sweet Potato</a>
                                <a href="#">Swiss Chard</a>
                                <a href="#">Tomatillo*</a>
                                <a href="#">Tomato*</a>
                                <a href="#">Turnip</a>
                                <a href="#">Watercress</a>
                                <a href="#">Yam Root</a>
                                <a href="#">Zucchini</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn"><li><a href="#Foodgrains">Healthy FoodGrains</a></li></button>
                            <div class="dropdown-content">
                            
                            <a href="#">wheat </a>
                            <a href="#">maize</a>
                            <a href="#">jawar</a>
                            <a href="#">rice</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn"><li><a href="#edible">Edible oil and Ghee</a></li></button>
                            <div class="dropdown-content">
                            <a href="#">soya&mustard oil</a>
                            <a href="#">        sunflower &rice bran oil</a>
                            <a href="#">        gingelly &groundnut oils</a>
                            <a href="#">        other</a>
                            <a href="#">        blended cooking oils</a>
                            <a href="#">        oilve & canola oil</a>
                            <a href="#">        ghee & vanaspati</a>
                        </div>
                    </div>
                    <div class="dropdown">
                            <button class="dropbtn"><li><a href="#dal">Organic Dal and Pulses</a></li></button>
                            <div class="dropdown-content">
                                <a href="#">urad & other dals</a>
                                <a href="#">        toor & channa & moong dal</a>
                                <a href="#">        Cereals & millets</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn"><li><a href="#Dryfruits">Natural exotic Dry Fruits</a></li></button>
                            <div class="dropdown-content">
                                <a href="#">almond</a>
                                <a href="#">        cashews</a>
                                <a href="#">        raisins</a>
                                <a href="#">        walnuts</a>
                                <a href="#">        other</a>
                            </div>
                        </div>
                        
                        <div class="dropdown">
                            <button class="dropbtn"><li><a href="#salt">Pure Salt,Sugar and Jaggery</a></li></button>
                            <div class="dropdown-content">
                                <a href="#">        salt</a>
                                <a href="#">        sugar</a>
                                <a href="#">        jaggery</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn"><li><a href="#rice">Rice</a></li></button>
                            <div class="dropdown-content">
                                <a href="#">        poha & sabudana , murmura</a>
                                <a href="#">        basmati rice</a>
                                <a href="#">        boiled & steam rice</a>
                                <a href="#">        raw rice</a>
                                <a href="#">        brown rice</a>
                            </div>
                        </div>
                            
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                            <h5><a href="#fruits">Protein Rich Fruit</a></h5>
                        </div>
                    </div>
                    
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/veg.jpg">
                            <h5><a href="#vegetables">Fresh Green Vegetables</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-3.png">
                            <h5><a href="#edible">Edible oil & Ghee</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/Foodgrains.jpg">
                            <h5><a href="#Foodgrains">Healthy Foodgrains</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/dal.jpg">
                            <h5><a href="#dal">Dal & Pulses</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-6.jpg">
                            <h5><a href="#salt">Salt,Sugar & Jaggery</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-7.jpg">
                            <h5><a href="#rice">Rice</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-8.jpg">
                            <h5><a href="#Dryfruits">Dry Fruits</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">

                        <div id="myBtnContainer">
  <button id="showall"class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button id="fruits" class="btn" onclick="filterSelection('fruits')"> Fruits</button>
  <button id="vegetables" class="btn" onclick="filterSelection('vegetables')"> Vegetables</button>
  <button id="Foodgrains" class="btn" onclick="filterSelection('foodgrains')"> Foodgrain</button>
  <button id="edible" class="btn" onclick="filterSelection('Edible oil,ghee')"> Edible oil,ghee</button>
  <button id="dal" class="btn" onclick="filterSelection('dal ,pulses')"> Dal ,pulses</button>
  <button id="Dryfruits" class="btn" onclick="filterSelection('Dry Fruits')"> Dry Fruits</button>
  <button id="rice" class="btn" onclick="filterSelection('Rice')"> Rice</button>
  <button id="salt" class="btn" onclick="filterSelection('salt,sugar,jaggery')"> Salt,sugar,jaggery</button>

</div>
                    </div>
                </div>
            </div>
            <div class="row featured__filter" id="#all">
                <?php
        require 'config.php';
        $sql="SELECT * FROM product";
        $result=mysqli_query($conn,$sql);
        ?>
        <?php
    while ($row=mysqli_fetch_array($result)) {
        //$_SESSION['userid']=$row['userid'];
        $path= "Images/".$row['product_image'];
        //echo $path;
        ?>
        
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="filterDiv cars <?=$row['topcategory'] ?>">
                       
                        <div class="featured__item__pic set-bg" data-setbg="" >

                            <?php if($name != "" && $name != NULL): ?>
                            <a href="shop-details.php?id=<?=$row['id'] ?>&name=<?=$name?>&email=<?=$email?>"><img src="Images/<?= $row['product_image'] ?>"></a>
                            <ul class="featured__item__pic__hover">
                                <li><a href="insertwishlist.php?id=<?=$row['id'] ?>&name=<?=$name?>&email=<?=$email?>&pname=<?=$row['product_name']?>&price=<?=$row['product_price']?>&img=<?=$path?>"><i class="fa fa-heart"></i></a></li>
                                <li><a href="insertcart.php?id=<?=$row['id'] ?>&name=<?=$name?>&email=<?=$email?>&pname=<?=$row['product_name']?>&price=<?=$row['product_price']?>&img=<?=$path?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <?php endif; ?>
                            <?php if($name == "" && $name == NULL): ?>
                                <a href="shop-details.php?id=<?=$row['id'] ?>"><img src="Images/<?= $row['product_image'] ?>"></a>
                                <ul class="featured__item__pic__hover">
                                <li><a href="insertwishlist.php?id=<?=$row['id'] ?>&pname=<?=$row['product_name']?>&price=<?=$row['product_price']?>&img=<?=$path?>"><i class="fa fa-heart"></i></a></li>
                                <li><a href="insertcart.php?id=<?=$row['id'] ?>&pname=<?=$row['product_name']?>&price=<?=$row['product_price']?>&img=<?=$path?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <?php endif; ?>
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?=$row['product_name'];?></a></h6>
                            <h5>Rs <?=number_format($row['product_price']) ?>/-</h5>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>  
                
                
                
                
                
                
            </div>

        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <a href="#fruits">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <a href="#vegetables">
                        <img src="img/banner/banner-21.jpg"  style="width:570px;height:270px;" alt="">
                    </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <?php
                                    require 'config.php';
                                  $sql = "SELECT `id`,  SUM(`qauntity`),product_image,product_price,product_name FROM `product` GROUP BY id ORDER BY SUM(qauntity) DESC LIMIT 10";


                                    //echo $sql;
                                    $result=mysqli_query($conn,$sql);
                                    ?>
                            <div class="latest-prdouct__slider__item">
                                
                                    <?php
                                    $x=0;
                                while ($row=mysqli_fetch_array($result)) {
                                $x=$x+1;
                                if($x==4)
                                    break;
                                    ?>
                                <a href="shop-details.php?id=<?=$row['id'] ?>" class="latest-product__item">
                                   
                                    <div class="latest-product__item__pic">

                                        <img src="Images/<?= $row['product_image'] ?>"  style="width:110px;height:110px;" alt="">
                                    </div>

                                    <div class="latest-product__item__text">
                                        <h6><?=$row['product_name'];?></h6>
                                        <span>Rs <?=number_format($row['product_price']) ?>/-</span>
                                    </div>
                                </a>
                                <?php } ?> 
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <?php
                                    $x=0;
                                while ($row=mysqli_fetch_array($result)) {
                                $x=$x+1;
                                if($x==4)
                                    break;
                                    ?>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="Images/<?= $row['product_image'] ?>"  style="width:110px;height:110px;" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?=$row['product_name'];?></h6>
                                        <span>Rs <?=number_format($row['product_price']) ?>/-</span>
                                    </div>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    

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
	<script type="text/javascript"></script>
    <script src="js/filteritems.js"></script>
    <!--firebase-->
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-auth.js"></script>

 <script src="js/firebaseauth.js" type="text/javascript"></script>

<script src="js/firebase.js" type="text/javascript"></script>





</body>

</html>