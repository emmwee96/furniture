</div>
<footer class="main-footer footer">
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-content-wrapper">
                            <div class="footer-content">
                                <div id="f-about" class="footer-title def-funderline ftitle-about posr">
                                    <h5 class="active-about">About us</h5>
                                </div>
                                <div class="footer-text">
                                    <p>Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura. Aenean commodo ligula eget dolor Aenean massa. Portals seize data-driven, tag expedite</p>
                                    <div class="footer-readmore"><a href="about.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="footer-list-wrapper">
                            <div id="f-info" class="footer-title def-funderline ftitle-info posr">
                                <h5 class="active">Contact</h5>
                            </div>
                            <ul class="footer-list-text jscroll-info">
                                <li><a href="shop.html" title="New products">About Us</a>
                                </li>
                                <li><a href="single-product.html" title="Best sellers">Our Team</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="footer-list-wrapper">
                            <div id="f-myac" class="footer-title def-funderline ftitle-myA posr">
                                <h5 class="active">Connect</h5>
                            </div>
                            <div class="footer_social">

                            <span class="fa fa-facebook">
                            </span>
                            </div>
                            <div class="footer_social">
                            <span class="fa fa-instagram">
                            </span>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

        <!-- Main footer area end-->

        <!--Footer bottom area start-->

        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12 footer-bottom-left">
                        <div class="footer-bottom-text">
                            <p>Copyright <i class="fa fa-copyright"></i> <a href="#" target="_blank">CommonExtract.</a> All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 footer-bottom-right">
                        <div class="footer-bottom-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="to-top posr">
            <a href="#"><i class="zmdi zmdi-arrow-merge"></i></a>
        </div>
    </div>
    <!--Footer bottom area end-->
</footer>

 <!-- all js here -->
    <!-- jquery latest version -->
    <!-- bootstrap js -->
    <script src="<?= site_url(); ?>js/Main/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="<?= site_url(); ?>js/Main/owl.carousel.min.js"></script>
    <!-- meanmenu js -->
    <script src="<?= site_url(); ?>js/Main/jquery.meanmenu.js"></script>
    <!-- jquery-ui js -->
    <script src="<?= site_url(); ?>js/Main/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="<?= site_url(); ?>js/Main/wow.min.js"></script>
    <!-- plugins js -->
    <script src="<?= site_url(); ?>js/Main/plugins.js"></script>
    <!-- Nivo slider pack js -->
    <script src="<?= site_url(); ?>js/Main/slider/jquery.nivo.slider.pack.js"></script>
    <!-- nivo active js -->
    <script src="<?= site_url(); ?>js/Main/slider/nivo-active.js"></script>
    <!-- fancybox js -->
    <script src="<?= site_url(); ?>js/Main/jquery.fancybox.js"></script>
    <!-- counter up js -->
    <script src="<?= site_url(); ?>js/Main/jquery.counterup.min.js"></script>
    <!-- Treeview js -->
    <script src="<?= site_url(); ?>js/Main/jquery.treeview.js"></script>
    <!-- main js -->
    <script src="<?= site_url(); ?>js/Main/main.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Google map API js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-IIoucJ-70FQg6xZsORjQCUPHCVj9GV4"></script>
    <!-- Google map js -->
    <script src="<?= site_url(); ?>js/Main/google-map.js"></script>
    <script src="<?= site_url(); ?>js/Main/jquery.fancybox.js"></script>
    <script src="<?= site_url(); ?>js/Main/functions.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>js/slick.min.js"></script>
    <script>
        refresh_cart();
    </script>
    <script>
        $(document).ready(function(){
            $('.ttip').tooltip()

            $('.single-carousel').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.single-carousel',
                focusOnSelect: true
            });
            $('.banner_carousel').slick({

            });
        });

        $('.panel-collapse').on('shown.bs.collapse', function (e) {
            var $panel = $(this).closest('.panel');
            $('html,body').animate({
                scrollTop: $panel.offset().top -110
            }, 500); 
        });
        

        // $(document).on("click", ".sub_image", function(e){
        //     var img = $(this).data("img");
        //     $(".main_image").attr("src", img);
        //     $(".fancybox").attr("href", img);
        // });
    </script>
</body>
</html>
