
    <div class="subpage-main-wrapper about-full">

<!--Breadcrumb start-->
<div class="breadcrumbs-wrapper breadcumbs-bg1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcrumbs breadcrumbs-style1 sep1 posr">
                    <ul>
                        <li>
                            <div class="breadcrumbs-icon1">
                                <a href="<?= site_url('Main/'); ?>" target="_blank" title="Return to home"><i class="fa fa-home"></i></a>
                            </div>
                        </li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->

<!--about us main area start-->

<div class="about-top-area">
    <h3 class="title_center">Gallery</h3>
    <p class="title_center">View our amazing collection of furnitures</p>
    <div class="container">
        <div class="row">
            <?php foreach($images as $image){ ?>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="abt-image" style="height:10vw;overflow:hidden;background-color:#fafafa">
                    
                    <a class="gallery" data-fancybox="gallery" href="<?= site_url().$image['image']; ?>">
                        
                        <img src="<?= site_url() . $image['image']; ?>" alt="Domino" />
                    </a>
                </div>
                <br>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!--about us main area end-->
<br><br><br>

</div>
