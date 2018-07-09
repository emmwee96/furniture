<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="<?= site_url(); ?>css/Main/bootstrap.min.css">
        <!-- Animate css -->
        <link rel="stylesheet" href="<?= site_url(); ?>css/Main/animate.css">
        <!-- jQuery-ui.min css -->
        <link rel="stylesheet" href="<?= site_url(); ?>css/Main/jquery-ui.min.css">
        <!-- Owl carousel css -->
        <link rel="stylesheet" href="<?= site_url(); ?>css/Main/owl.carousel.css">
        <!-- Font-awesome css -->
        <link rel="stylesheet" href="<?= site_url(); ?>css/Main/font-awesome.min.css">
        <!-- Material design iconic css -->
        <link rel="stylesheet" href="<?= site_url(); ?>css/Main/material-design-iconic-font.min.css">
        <!-- Nivo Slider css -->
        <link rel="stylesheet" href="<?= site_url(); ?>css/Main/nivo-slider.css" />
        <!--Slider css -->
        <link rel="stylesheet" href="<?= site_url(); ?>css/Main/slider.css" />
        <!-- Default css -->
        <link rel="stylesheet" href="<?= site_url(); ?>css/Main/default.css">
        <!-- Mean menu css -->
        <link rel="stylesheet" href="<?= site_url(); ?>css/Main/meanmenu.css">
        <!-- Main style css -->
        <link rel="stylesheet" href="<?= site_url(); ?>css/Main/style.css">
        <link rel="stylesheet" href="<?= site_url(); ?>css/custom.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="<?= site_url(); ?>css/Main/responsive.css">
        <link rel="stylesheet" href="<?= site_url(); ?>css/Main/jquery.fancybox.css">
        <link rel="stylesheet" href="<?= site_url(); ?>css/Main/jquery.fancybox.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="<?= site_url(); ?>js/Main/vendor/jquery-1.12.0.min.js"></script>
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/slick-theme.css"/>
        <script>
            site_url = "<?= site_url(); ?>";
        </script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="header-area home3-header-area">
            <!-- 
            <div class="header-topbar-area-top topbar-area-top2 topbar3">
                <div class="container">
                   <header class="main-header">
                        <div class="row">
                            <div class="col-md-9 col-sm-8 col-xs-12">
                                <div class="header-login posr">
                                    <ul>
                                        <li><a href="<?= site_url("Main/cart"); ?>">Checkout</a>
                                        </li>
                                        <li><a href="<?= site_url("Member/Account"); ?>">My Account</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                   </header>
                </div>
            </div>
        -->
            <div id="sticky-header" class="main-menu-wrapper sticky-style2 hp3-menu">
                <div class="container">
                     <section>
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="header-logo home2-header-logo header-logo-def">
                                   <a href="<?= site_url('Main'); ?>"><img src="<?= base_url()?>images/logo.png"></a>                             
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 hidden-xs">
                                <nav>
                                    <ul class="main-menu">
                                      
                                        <li class="mega-parent"><a href="#">Shop <i class="fa fa-arrow-circle-down"></i></a>
                                            <div class="mega-menu-area hp1-style1">
                                                <ul class="single-mega-item mega-underline1 mega-underline3">
                                                    <li class="mega-title"><a href="<?= site_url('Main/category/1'); ?>">Wardrobe</a>
                                                    </li>
                                                    <li><a href="<?= site_url('Main/product/open-wardrobe'); ?>">Open Wardrobe</a>
                                                    </li>
                                                    <li><a href="<?= site_url('Main/product/sliding-wardrobe'); ?>">Sliding Wardrobe</a>
                                                    </li>
                                                    <li><a href="<?= site_url('Main/product/swing-door-wardrobe'); ?>">Swing Door Wardrobe</a>
                                                    </li>
                                                  
                                                </ul>
                                                <ul class="single-mega-item mega-underline1 mega-underline3">
                                                    <li class="mega-title"><a href="<?= site_url('Main/category/2'); ?>">Kitchen Cabinet</a>
                                                    </li>
                                                    <li><a href="<?= site_url('Main/product/bottom-cabinet'); ?>">Bottom Cabinet</a>
                                                    </li>
                                                    <li><a href="<?= site_url('Main/product/top-cabinet'); ?>">Top Hung Cabinet</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item mega-underline1 mega-underline3">
                                                    <li class="mega-title"><a href="<?= site_url('Main/category/4'); ?>">TV Panel</a>
                                                    </li>
                                                    <li><a href="<?= site_url('Main/product/type-1'); ?>">Type 1</a>
                                                    </li>
                                                    <li><a href="<?= site_url('Main/product/type-2'); ?>">Type 2</a>
                                                    </li>
                                                    <li><a href="<?= site_url('Main/product/type-3'); ?>">Type 3</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </li>
                                        <li class="mega-parent"><a href="<?= site_url('Main/about'); ?>">How It Works</a>
                                        </li>
                                        <li class="mega-parent"><a href="<?= site_url('Main/gallery'); ?>">Gallery</a>
                                        </li>
                                        <li class="mega-parent"><a href="<?= site_url('Main/FAQ'); ?>">FAQ</a>
                                        </li>
                                        <li><a href="<?= site_url("Main/contact"); ?>">Contact us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <div class="main-cart-area home2-main-cart posr">
                                    <!-- <div class="header-search header-search-style2 header-search-position hps2 hps3 posr">
                                        <form action="#">
                                            <input type="text" value="Search Product..." placeholder="" />
                                            <button type="submit"><i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div> -->
                                    <div class="main-cart-area home2-cart-wrap posr cart-hover-effect">
                                        <div class="shop-bag home2-shopbag home3-shopbag">
                                            <div class="cartpoint-shopping-bag">
                                                <i class="fa fa-shopping-bag"></i>
                                            </div>
                                            <div class="cartpoint-shopping-qty">
                                                <span id="cart_count"><?= count($this->session->userdata("cart")); ?></span>
                                            </div>
                                        </div>
                                        <!-- Cart box start-->
                                        
                                        <div class="header-cart-box-wrapper cart-position-style2" id="header_cart">
                                        <?php if (count($this->session->userdata("cart"))){ ?>
                                            <?php foreach($this->session->userdata("cart") as $row){ ?>
                                                <div class="cart_row">
                                                   <?= $row['name']; ?> <span class="pull-right">$<?= $row['total']; ?></span>
                                                </div>
                                            <?php } ?>
                                            <br>
                                            <a class="btn btn-info" href="<?= site_url('Main/cart'); ?>">Checkout</a>
                                            <?php }else { ?>
                                                cart empty
                                            <?php } ?>
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
                                                    
                                                    <li><a href="#">Shop</a>
                                                        <ul>
                                                            <li><a href="<?= site_url('Main/category/1'); ?>">Wardrobe</a>
                                                            <ul class="single-mega-item mega-underline1 mega-underline3">
                                                                <li class="mega-title"><a href="#">Wardrobe</a>
                                                                </li>
                                                                <li><a href="<?= site_url('Main/product/open-wardrobe'); ?>">Open Wardrobe</a>
                                                                </li>
                                                                <li><a href="<?= site_url('Main/product/sliding-wardrobe'); ?>">Sliding Wardrobe</a>
                                                                </li>
                                                                <li><a href="<?= site_url('Main/product/swing-door-wardrobe'); ?>">Swing Door Wardrobe</a>
                                                                </li>
                                                            
                                                            </ul>
                                                          
                                                            </li>
                                                            <li><a href="<?= site_url('Main/category/2'); ?>">Cabinets</a>
                                                                <ul class="single-mega-item mega-underline1 mega-underline3">
                                                                    <li class="mega-title"><a href="#">Kitchen Cabinet</a>
                                                                    </li>
                                                                    <li><a href="<?= site_url('Main/product/bottom-cabinet'); ?>">Bottom Cabinet</a>
                                                                    </li>
                                                                    <li><a href="<?= site_url('Main/product/top-cabinet'); ?>">Top Hung Cabinet</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                          
                                                        </ul>
                                                    </li>
                                                    <li><a href="<?= site_url('Main/about'); ?>">How It Works</a>
                                                    </li>
                                                    <li><a href="<?= site_url('Main/gallery'); ?>">Gallery</a>
                                                    </li>
                                                
                                                    <li><a href="<?= site_url("Main/contact"); ?>">Contact Us</a>
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
