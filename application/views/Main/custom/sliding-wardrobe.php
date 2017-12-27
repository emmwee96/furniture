<div class="compare-area compare-single-productt">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="single-thumbnail-wrapper">
                <div class="single-product-tab"></div>
                <div class="single-cat-main">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab-1">
                            <div class="tab-single-image">
                                <a href="<?= site_url(); ?>/images/product/custom/slide.jpg" class="fancybox" data-fancybox-group="gallery"><img src="<?= site_url(); ?>/images/product/custom/slide.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="compare-content-wrap">
                <div class="cmain-heading text-uppercase">
                    <h3>Sliding Wardrobe</h3>
                </div>
               
                <div class="compare-conpart compare-conpart-text">
                    <div class="skill-long-text">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                </div>
                <div class="compare-conpart-pm compare-bottom" style="border:none;padding-bottom:0;">
                   
                    <div class="plus-minus-text">Ceiling Height (mm)</div>
                    <div class="skill-plusminus-wrap">
                        <div class="skill-plusminus">
                            <div class="skill-minus qtybutton">-</div>
                            <input type="text" name="#" value="220" class="cart-plus-minus-box" />
                            <div class="skill-plus qtybutton">+</div>
                        </div>
                    </div>
                </div>
                <div class="compare-conpart-pm compare-bottom">
                   
                    <div class="plus-minus-text">Install Width (mm)&nbsp;&nbsp;</div>
                    <div class="skill-plusminus-wrap">
                        <div class="skill-plusminus">
                            <div class="skill-minus qtybutton">-</div>
                            <input type="text" name="#" value="400" class="cart-plus-minus-box" />
                            <div class="skill-plus qtybutton">+</div>
                        </div>
                    </div>
                </div>
             
                <div class="compare-conpart skill-communicate">
                    <div class="skill-checklist">
                        <label for="skillc"><span class="italic">Choose Type</span>
                        </label><br>
                        <select id="skillc">
                            <option value="">-- select a type --</option>
                            <option value="">Standard Height</option>
                            <option value="">Full Height</option>
                        </select>
                    </div>
                </div> 
                <div class="compare-conpart skill-communicate">
                <div class="skill-checklist">
                    <label for="skillc"><span class="italic">Internal Frame Material</span>
                    </label>
                    <br>
                    <select id="skillc">
                        <option value="">-- select a type --</option>
                        <option value="">White PVC</option>
                        <option value="">Color PVC</option>
                    </select>
                </div>

            </div>

                <div class="compare-conpart skill-communicate">
                    <div class="skill-checklist">
                        <label for="skillc"><span class="italic">External Frame Material</span>
                        </label>
                        <br>
                        <select id="skillc">
                            <option value="">-- select a type --</option>
                            <option value="">Laminate 1</option>
                            <option value="">Laminate 2</option>
                            <option value="">Laminate 3</option>
                            <option value="">Veener 1</option>
                            <option value="">Veener 2</option>
                            <option value="">Veener 3</option>
                        </select>
                    </div>
                </div>
                <div class="compare-conpart skill-communicate">
                    <div class="skill-checklist">
                        <label for="skillc"><span class="italic">Door Materials</span>
                        </label><br>
                        <select id="skillc">
                            <option value="">-- select a material --</option>
                            <option value="">Material 1</option>
                            <option value="">Material 2</option>
                            <option value="">Material 3</option>
                        </select>
                    </div>
                </div>
                <div class="compare-conpart skill-communicate">
                    <div class="skill-checklist">
                        <label for="skillc"><span class="italic">Add Ons</span>
                        </label><br>
                        <input type="checkbox"> Drawer<br>
                        <input type="checkbox"> Shelving<br>
                    </div>
                </div>      
                <br><br>
           

                <div class="compare-conpart-pm compare-bottom">
                    <div class="old-new-price">
                        <span>RM 342.00 </span>
                    </div>
                    <div class="skill-cart-option skill-sep posr" style="margin-left:0;">
                        <a href="#"  onclick="addItem()"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>


<script>
            function addItem(){
                var product_id = <?= $product['product_id']; ?>;
                var product_name = "<?= $product['name']; ?>";

                add_to_cart(1,'Open Wardrobe',{});
                window.location = window.location;
            }
        </script>