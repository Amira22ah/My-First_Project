<?php
$cartProducts=file_get_contents("cart.json");
$cartProductsArray=json_decode($cartProducts,true);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<!-- Start Main Top -->
<div class="main-top">
        <div class="container-fluid">
            <div class="row">
          
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                         
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Fashion
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT20
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Fashion
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT20
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                    <a class="navbar-brand" href="index.php"><img src="image\logo (1).jpg" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Product</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Top</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop2.php">Jackets</a></li>
                                                    <li><a href="shop2.php">Chemises</a></li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Bottom</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop2.php">Trousers</a></li>
                                                    <li><a href="shop2.php">Skirts</a></li>
                                                
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                       
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Accessories</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop2.php">Bags</a></li>
                                                    <li><a href="shop2.php">Sunglasses</a></li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="cart2.php">Cart</a></li>
                                <!-- <li><a href="checkout.html">Checkout</a></li> -->
                                <li><a href="account.php">My Account</a></li>
                                <!-- <li><a href="wishlist.html">Wishlist</a></li> -->
                                <!-- <li><a href="shop-detail.html">Shop Detail</a></li> -->
                            </ul>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <!-- <li class="search"><a href="#"><i class="fa fa-search"></i></a></li> -->
                        <li class="side-menu"><a href="#">
						<i class="fa fa-shopping-bag"></i>
                          
					</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                 <?php  foreach ($cartProductsArray as $item) :?>
                                <ul class="cart-list">

                                 <li>
                            <?php echo"<img src=image/" .$item['image'];?>
                            <h6><?php   echo '<h3>Name :' . htmlspecialchars($item['name']) . '</h3>';?></h6>
                            <p> <?php echo '<h3> Price :' . htmlspecialchars($item['price']) . '</h3>';?></p>
                                </li>

                               </ul>      
                            
                <?php endforeach ;?>    
                    
                 
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->









</body>
</html>

