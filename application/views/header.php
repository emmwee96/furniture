<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= base_url() ?>css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?= base_url() ?>css/skins/_all-skins.min.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="<?= base_url() ?>css/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?= base_url() ?>css/jquery-jvectormap.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap-datepicker.min.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?= base_url() ?>js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> 
        
        <link rel="stylesheet" href="<?= base_url() ?>css/Main.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="header-area home3-header-area">
            <div class="header-topbar-area-top topbar-area-top2 topbar3">
                <div class="container">
                   <header class="main-header">
                        <div class="row">
                            <div class="col-md-9 col-sm-8 col-xs-12">
                                <div class="header-login posr">
                                    <ul>
                                        <li><a href="my-account.html">My Account</a>
                                        </li>
                                        <li><a href="wishlist.html">My wishlist</a>
                                        </li>
                                        <li><a href="checkout.html">Checkout</a>
                                        </li>
                                        <li><a href="login.html">Login</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                   </header>
                </div>
            </div>

            <div id="sticky-header" class="main-menu-wrapper sticky-style2 hp3-menu">
                <div class="container">
                     <section>
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="header-logo home2-header-logo header-logo-def"></div>
                            </div>
                            <div class="col-md-9 col-sm-9 hidden-xs">
                                <nav>
                                    <ul class="main-menu">
                                        <li class="active"><a href="index.html" target="_blank">Home <i class="fa fa-arrow-circle-down"></i></a>
                                            <ul class="main-drop firstli">
                                                <li><a href="index.html" target="_blank"> Home-1</a>
                                                </li>
                                                <li><a href="index2.html" target="_blank">Home-2</a>
                                                </li>
                                                <li><a href="index3.html" target="_blank">Home-3</a>
                                                </li>
                                                <li><a href="index4.html" target="_blank">Home-4</a>
                                                </li>
                                                <li><a href="index5.html" target="_blank">Home-5</a>
                                                </li>
                                                <li class="lastli"><a href="index6.html" target="_blank">Home-6</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-parent"><a href="shop.html">Shop <i class="fa fa-arrow-circle-down"></i></a>
                                            <div class="mega-menu-area hp1-style1">
                                                <ul class="single-mega-item mega-underline1 mega-underline3">
                                                    <li class="mega-title"><a href="#">Shop Layouts</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth.html">Fullwidth</a>
                                                    </li>
                                                    <li><a href="shop.html">Sidebar Left</a>
                                                    </li>
                                                    <li><a href="shop-right-sidebar.html">Sidebar right</a>
                                                    </li>
                                                    <li><a href="shop-list-view.html">List View</a>
                                                    </li>
                                                    <li><a href="shop-list-view-right.html">List View right</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item mega-underline1 mega-underline2">
                                                    <li class="mega-title"><a href="#">Shop Pages</a>
                                                    </li>
                                                    <li><a href="shop.html">Category</a>
                                                    </li>
                                                    <li><a href="my-account.html">My Account</a>
                                                    </li>
                                                    <li><a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li><a href="cart.html">Shopping Cart</a>
                                                    </li>
                                                    <li><a href="checkout.html">Checkout</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item mega-underline1">
                                                    <li class="mega-title"><a href="#">Product Types</a>
                                                    </li>
                                                    <li><a href="single-product.html">Single Product</a>
                                                    </li>
                                                    <li><a href="shop.html">Variable Product</a>
                                                    </li>
                                                    <li><a href="shop.html">Group Product</a>
                                                    </li>
                                                    <li><a href="shop.html">External Product</a>
                                                    </li>
                                                    <li><a href="shop.html">New Product</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </li>
                                        <li class="mega-parent"><a href="about.html">About us</a>
                                        </li>
                                        <li class="mega-parent"><a href="shop.html" target="_blank">Pages <i class="fa fa-arrow-circle-down"></i></a>
                                            <div class="mega-menu-area hp1-style3 mega-menu-area2">
                                                <ul class="single-mega-item single-mega-item2">
                                                    <li class="mega-title"><a>Pages-01</a>
                                                    </li>
                                                    <li><a href="about.html">About us</a>
                                                    </li>
                                                    <li><a href="404.html">Page 404</a>
                                                    </li>
                                                    <li><a href="portfolio.html">Portfolio</a>
                                                    </li>
                                                    <li><a href="portfolio2.html">Portfolio2</a>
                                                    </li>
                                                    <li><a href="single-product.html">Single Product</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item single-mega-item2">
                                                    <li class="mega-title"><a>Pages-02</a>
                                                    </li>
                                                    <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                                                    </li>
                                                    <li><a href="single-blog-video.html">Single Video</a>
                                                    </li>
                                                    <li><a href="single-blog-audio.html">Single Audio</a>
                                                    </li>
                                                    <li><a href="single-blog-slider.html">Single Gallery</a>
                                                    </li>
                                                    <li><a href="single-blog.html">Single Image</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item single-mega-item2">
                                                    <li class="mega-title"><a href="#">Pages-03</a>
                                                    </li>
                                                    <li><a href="cart.html">Cart</a>
                                                    </li>
                                                    <li><a href="address.html">Address</a>
                                                    </li>
                                                    <li><a href="checkout.html">Checkout</a>
                                                    </li>
                                                    <li><a href="payment.html">Payment</a>
                                                    </li>
                                                    <li><a href="shipping.html">Shipping</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item single-mega-item2">
                                                    <li class="mega-title"><a href="#">Pages-04</a>
                                                    </li>
                                                    <li><a href="my-account.html">My Account</a>
                                                    </li>
                                                    <li><a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li><a href="login.html">login</a>
                                                    </li>
                                                    <li><a href="shop.html">Dresses</a>
                                                    </li>
                                                    <li><a href="shop.html">T-Shirts</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="contact.html">Contact us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <div class="main-cart-area home2-main-cart posr">
                                    <div class="header-search header-search-style2 header-search-position hps2 hps3 posr">
                                        <form action="#">
                                            <input type="text" value="Search Product..." placeholder="" />
                                            <button type="submit"><i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="main-cart-area home2-cart-wrap posr cart-hover-effect">
                                        <div class="shop-bag home2-shopbag home3-shopbag">
                                            <div class="cartpoint-shopping-bag">
                                                <i class="fa fa-shopping-bag"></i>
                                            </div>
                                            <div class="cartpoint-shopping-qty">
                                                <span>0</span>
                                            </div>
                                        </div>
                                        <!-- Cart box start-->
                                        <div class="header-cart-box-wrapper cart-position-style2">
                                            <div class="single-cart-box">
                                                <div class="cart-image">
                                                    <a href="cart.html"><img src="images/product/saving-tool.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <div class="cart-heading">
                                                        <a href="#"> <span class="cart-qty">2 x</span> soluta dress</a>
                                                    </div>
                                                    <div class="cart-dress-color"><span>s, yellow</span>
                                                    </div>
                                                    <div class="cart-price">$200.00</div>
                                                </div>
                                                <div class="cart-remove deft-remove-icon">
                                                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                </div>
                                                <div class="cart-shipping-cost">
                                                    <span class="shipping-text">Shipping</span>
                                                    <span class="shipping-amt">$7.00</span>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="single-cart-box">
                                                <div class="cart-image">
                                                    <a href="cart.html"><img src="images/product/saving-tool.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <div class="cart-heading">
                                                        <a href="#"> <span class="cart-qty">2 x</span> soluta dress</a>
                                                    </div>
                                                    <div class="cart-dress-color"><span>s, yellow</span>
                                                    </div>
                                                    <div class="cart-price">$250.00</div>
                                                </div>
                                                <div class="cart-remove deft-remove-icon">
                                                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                </div>
                                                <div class="cart-shipping-cost">
                                                    <span class="shipping-text">Shipping</span>
                                                    <span class="shipping-amt">$8.00</span>
                                                </div>
                                            </div>
                                            <div class="cart-subtotal">
                                                <span class="subttl-text">Subtotal</span>
                                                <span class="subttl-amt">$465.00</span>
                                            </div>

                                            <div class="cart-checkout-btn btn-def-checkout">
                                                <a href="checkout.html">Checkout <i class="checkout-dir-icon zmdi zmdi-chevron-right "></i></a>
                                            </div>
                                        </div>

                                        <!-- Cart box end-->

                                    </div>
                                </div>
                            </div>

                            <div class="mobile-menu-area hp2-mmenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <nav class="active-mobile-menu">
                                                <ul>
                                                    <li><a href="index.html">Home</a>
                                                        <ul>
                                                            <li><a href="index.html">Home-1</a>
                                                            </li>
                                                            <li><a href="index2.html">Home-2</a>
                                                            </li>
                                                            <li><a href="index3.html">Home-3</a>
                                                            </li>
                                                            <li><a href="index4.html">Home-4</a>
                                                            </li>
                                                            <li><a href="index5.html">Home-5</a>
                                                            </li>
                                                            <li><a href="index6.html">Home-6</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Shop</a>
                                                        <ul>
                                                            <li><a href="#">Shop Layouts</a>
                                                                <ul>
                                                                    <li><a href="shop-fullwidth.html">Fullwidth</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Sidebar Left</a>
                                                                    </li>
                                                                    <li><a href="shop-right-sidebar.html">Sidebar right</a>
                                                                    </li>
                                                                    <li><a href="shop-list-view.html">List View</a>
                                                                    </li>
                                                                    <li><a href="shop-list-view-right.html">List View right</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Shop Pages</a>
                                                                <ul>
                                                                    <li><a href="shop.html">Category</a>
                                                                    </li>
                                                                    <li><a href="my-account.html">My Account</a>
                                                                    </li>
                                                                    <li><a href="wishlist.html">Wishlist</a>
                                                                    </li>
                                                                    <li><a href="cart.html">Shopping Cart</a>
                                                                    </li>
                                                                    <li><a href="checkout.html">Checkout</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Product Types</a>
                                                                <ul>
                                                                    <li><a href="single-product.html">Single Product</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Variable Product</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Group Product</a>
                                                                    </li>
                                                                    <li><a href="shop.html">External Product</a>
                                                                    </li>
                                                                    <li><a href="shop.html">New Product</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="about.html">About Us</a>
                                                    </li>

                                                    <li><a href="#">Pages</a>
                                                        <ul>
                                                            <li><a href="#">Pages-01</a>
                                                                <ul>
                                                                    <li><a href="about.html">About us</a>
                                                                    </li>
                                                                    <li><a href="404.html">Page 404</a>
                                                                    </li>
                                                                    <li><a href="portfolio.html">Portfolio</a>
                                                                    </li>
                                                                    <li><a href="portfolio2.html">Portfolio2</a>
                                                                    </li>
                                                                    <li><a href="single-product">Single Product</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Pages-02</a>
                                                                <ul>
                                                                    <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                                                                    </li>
                                                                    <li><a href="single-blog-video.html">Single Video</a>
                                                                    </li>
                                                                    <li><a href="single-blog-audio.html">Single Audio</a>
                                                                    </li>
                                                                    <li><a href="single-blog-slider.html">Single Gallery</a>
                                                                    </li>
                                                                    <li><a href="single-blog.html">Single Image</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Pages-03</a>
                                                                <ul>
                                                                    <li><a href="cart.html">Cart</a>
                                                                    </li>
                                                                    <li><a href="address.html">Address</a>
                                                                    </li>
                                                                    <li><a href="checkout.html">Checkout</a>
                                                                    </li>
                                                                    <li><a href="payment.html">Payment</a>
                                                                    </li>
                                                                    <li><a href="shipping.html">Shipping</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Pages-04</a>
                                                                <ul>
                                                                    <li><a href="my-account.html">My Account</a>
                                                                    </li>
                                                                    <li><a href="wishlist.html">Wishlist</a>
                                                                    </li>
                                                                    <li><a href="login.html">login</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Dresses</a>
                                                                    </li>
                                                                    <li><a href="shop.html">T-Shirts</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact.html">Contact Us</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!--header main menu end-->
        </div>
    </nav><div class="content">
