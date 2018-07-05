<!--slider area are start-->
<div class="banner_carousel">
	<?php foreach ($banner as $row) { ?>
	<div>
		<img src="<?= site_url() . $row['image']; ?>">
    </div>
    <?php } ?>
</div>
<!--slider area are end-->

<!--Banner3 top area start-->
<div class="banner3-top  hp3-banner-area hp3ba">
	<h2 class="title_center">How it works</h2>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-3 col-md-3 col-sm-12 col-xs-12 index_how_it_works">
				<img src="<?= site_url('/images/product.png'); ?>" class="how_it_works_icon">
				<h3>Select A Product</h3>
				<p>Choose from our array of product selections.</p>
			</div>
			<div class="col-12 col-lg-3 col-md-3 col-sm-12 col-xs-12 index_how_it_works">
				<img src="<?= site_url('/images/dimensions.png'); ?>" class="how_it_works_icon">
				<h3>Customize</h3>
				<p>Customize to your desired dimensions and add ons.
					<p>
			</div>
			<div class="col-12 col-lg-3 col-md-3 col-sm-12 col-xs-12 index_how_it_works">
				<img src="<?= site_url('/images/quot.png'); ?>" class="how_it_works_icon">
				<h3>Get Quotation</h3>
				<p>Get your quotation instantly from our product finder
					<p>
			</div>
			<div class="col-12 col-lg-3 col-md-3 col-sm-12 col-xs-12 index_how_it_works">
				<img src="<?= site_url('/images/contact.png'); ?>" class="how_it_works_icon">
				<h3>Sit Back</h3>
				<p>Our customer service will contact you to complete the order.
					<p>
			</div>
		</div>
	</div>
</div>
<!--Banner3 top area end-->


<!--Banner3 top area start
    <div class="banner3-middle bg_black" style="margin-top:0">
            <div class="banner-full-wrapper bg_black hp3-bannerbag-md">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-xs-12">
                            <div class="banner-content">
                                <div class="banner-sstitle">
                                    <h5>Supper deal only today!</h5>
                                </div>
                                <div class="banner-stitle">
                                    <h3 class="white_font">Mega sale off</h3>
                                </div>
                                <div class="banner-btitle">
                                    <h2  class="white_font">Up to <span class="text-color">70%</span></h2>
                                </div>
                                <div class="banner-text btext">
                                    <p  class="white_font">Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura. Aenean commodo ligula eget dolor Aenean massa. Portals seize data-driven, tag expedite.</p>
                                </div>
                                <div class="banner-button">
                                    <a class="btn-back2" href="shop.html">Shopping Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 col-xs-12">
                            <div class="banner-image text-right">
                                <img src="<?= site_url(); ?>/images/banner_1.jpg" alt="Domino" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        Banner3 top area end-->


<!--Product banner area start-->

<div class="product-banner-area">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="product-banner-left">
					<a href="<?= site_url('Main/category/'.$categories[0]['category_id']); ?>">
						<div class="pbanner-image hvreff-defm20 posr">
							<img src="<?= site_url().$categories[0]['image']; ?>" alt="" />
						</div>
					</a>
				</div>

			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="product-banner-right">
					<div class="img-banner">
						<a href="<?= site_url('Main/category/'.$categories[1]['category_id']); ?>">
							<div class="pbanner-image hvreff-defm10 posr">
								<img src="<?= site_url().$categories[1]['image']; ?>" alt="" />
							</div>
						</a>
					</div>
					<div class="img-banner">
						<a href="<?= site_url('Main/category/'.$categories[2]['category_id']); ?>">
							<div class="pbanner-image hvreff-defm10 posr">
								<img src="<?= site_url().$categories[2]['image']; ?>" alt="" />
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Product banner area end-->


<!--Featured product area start
        <div class="featured-product-area home3-fp">
            <div class="container">
                <div class="row">
                    <div class="featured-wrapper">
                        <div class="col-xs-12">
                            <div class="home-featured-head text-center">
                                <div class="section-title title-head">
                                    <h3>Our Products</h3>
                                    <img src="<?= site_url(); ?>images/icons/icon-title.png" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="featured-product-wrapper">
                            <div class="active-featured-owl def-owl">
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">Sale</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="<?= site_url(); ?>images/product/p12.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="index.html"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="single-product.html"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view" data-toggle="modal" data-target=".modal" href="#"><i class=" product-search fa fa-search" ></i> quick View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Fiant sollemnes"><h4>fiant sollemnes</h4></a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$152.00</span> <del>160.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">New</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="<?= site_url(); ?>images/product/p12.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="index.html"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="single-product.html"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view" data-toggle="modal" data-target=".modal" href="#"><i class=" product-search fa fa-search" ></i> quick View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Mirum est notare"><h4>Mirum est notare</h4></a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$260.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">New</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="<?= site_url(); ?>images/product/p7.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="index.html"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="single-product.html"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view" data-toggle="modal" data-target=".modal" href="#"><i class=" product-search fa fa-search" ></i> quick View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Typi non habent"><h4>Typi non habent</h4></a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$180.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">Sale</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="<?= site_url(); ?>images/product/p8.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="index.html"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="single-product.html"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view" data-toggle="modal" data-target=".modal" href="#"><i class=" product-search fa fa-search" ></i> quick View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Eodem modo typi"><h4>Eodem modo typi</h4></a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$450.00</span> <del>$500.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">Sale</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="<?= site_url(); ?>images/product/p9.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="index.html"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="single-product.html"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view" data-toggle="modal" data-target=".modal" href="#"><i class=" product-search fa fa-search" ></i> quick View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Fiant sollemnes"><h4>fiant sollemnes</h4></a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$285.00</span> <del>$300.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">New</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="<?= site_url(); ?>images/product/p10.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="index.html"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="single-product.html"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view" data-toggle="modal" data-target=".modal" href="#"><i class=" product-search fa fa-search" ></i> quick View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Mirum est notare"><h4>Mirum est notare</h4></a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$320.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">Sale</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="<?= site_url(); ?>images/product/p11.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="index.html"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="single-product.html"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view" data-toggle="modal" data-target=".modal" href="#"><i class=" product-search fa fa-search" ></i> quick View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Placerat facer"><h4>placerat facer</h4></a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$210.90</span> <del>$222.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">New</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="<?= site_url(); ?>images/product/p6.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="index.html"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="single-product.html"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view" data-toggle="modal" data-target=".modal" href="#"><i class=" product-search fa fa-search" ></i> quick View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Soluta nobis"><h4>soluta nobis</h4></a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$160.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">New</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="<?= site_url(); ?>images/product/p5.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="index.html"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="single-product.html"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view" data-toggle="modal" data-target=".modal" href="#"><i class=" product-search fa fa-search" ></i> quick View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Typi non habent"><h4>Typi non habent</h4></a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$260.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">New</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="<?= site_url(); ?>images/product/p4.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="index.html"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="single-product.html"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view" data-toggle="modal" data-target=".modal" href="#"><i class=" product-search fa fa-search" ></i> quick View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Eodem modo typi"><h4>Eodem modo typi</h4></a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$230.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">Sale</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="<?= site_url(); ?>images/product/p3.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="index.html"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="single-product.html"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view" data-toggle="modal" data-target=".modal" href="#"><i class=" product-search fa fa-search" ></i> quick View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Fiant sollemnes"><h4>fiant sollemnes</h4></a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$332.00</span> <del>$350.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product single-featured-product">
                                        <div class="product-wrapper posr">
                                            <div class="product-label">
                                                <div class="label-sale">Sale</div>
                                            </div>
                                            <div class="priduct-img-wrapper posr">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="<?= site_url(); ?>images/product/p11.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-inner-text">
                                                    <div class="product-social-icon social-icon">
                                                        <ul>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="index.html"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="single-product.html"><i class="fa fa-refresh"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-btn">
                                                        <div class="product-qview-search">
                                                            <a class="btn-def btn-product-qview q-view" data-toggle="modal" data-target=".modal" href="#"><i class=" product-search fa fa-search" ></i> quick View</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-review">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-bottom-text posr">
                                                <div class="product-bottom-title deft-underline2">
                                                    <a href="single-product.html" title="Mirum est notare"><h4>Mirum est notare</h4></a>
                                                </div>
                                                <div class="product-bottom-price">
                                                    <span>$342.00</span> <del>$360.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        Featured product area end-->




<!-- Google map area start-->

<div class="hp3-map-area map-area">
	<div id="googleMap2999"></div>
</div>