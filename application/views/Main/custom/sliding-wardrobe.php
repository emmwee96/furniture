<div class="compare-area compare-single-productt">
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 col-xs-12">
            <div class="single-thumbnail-wrapper">
                <div class="single-product-tab"></div>
                <div class="single-cat-main">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab-1">
                            <div class="tab-single-image">
                                <a href="<?= site_url(); ?>/images/product/custom/slide.jpg" class="fancybox" data-fancybox-group="gallery"><img src="<?= site_url(); ?>/images/product/custom/slide.jpg" alt="" />
                                </a>
                            </div>
                            <div  class="product_extra_images">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                            <a class="gallery" data-fancybox="gallery" href="<?= site_url(); ?>/images/product/custom/slide1.jpg">
                                            <img src="<?= site_url(); ?>/images/product/custom/slide1.jpg">
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                            <a class="gallery" data-fancybox="gallery" href="<?= site_url(); ?>/images/product/custom/slide2.jpg">
                                            <img src="<?= site_url(); ?>/images/product/custom/slide2.jpg">
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                            <a class="gallery" data-fancybox="gallery" href="<?= site_url(); ?>/images/product/custom/slide3.jpg">
                                            <img src="<?= site_url(); ?>/images/product/custom/slide3.jpg">
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                            <a class="gallery" data-fancybox="gallery" href="<?= site_url(); ?>/images/product/custom/slide4.jpg">
                                            <img src="<?= site_url(); ?>/images/product/custom/slide4.jpg">
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-12 col-xs-12">
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
                    </label>
                    <select id="skillc" name="type" onchange="changeSelection('selected_type',this)">
                        <option value="">-- select a type --</option>
                        <option value="Standard Height">Standard Height</option>
                        <option value="Full Height">Full Height</option>
                    </select>
                </div>
            </div> 
            <div class="compare-conpart skill-communicate">
            <div class="skill-checklist">
                <label for="skillc"><span class="italic">Internal Frame Material</span>
                </label>
                <select id="skillc" name="internalFrame"  onchange="changeSelection('selected_internal_frame',this)">
                    <option value="">-- select a type --</option>
                    <option value="White PVC">White PVC</option>
                    <option value="Color PVC">Color PVC</option>
                </select>
            </div>


            <div class="compare-conpart skill-communicate">
                <div class="skill-checklist">
                    <label><span class="italic">External Frame Material</span>
                    </label>
                    <select  name="externalFrame"  onchange="changeSelection('selected_external_frame',this)">
                        <option value="">-- select a type --</option>
                        <option value="Laminate 1">Laminate 1</option>
                        <option value="Laminate 2">Laminate 2</option>
                        <option value="Laminate 3">Laminate 3</option>
                        <option value="Veener 1">Veener 1</option>
                        <option value="Veener 2">Veener 2</option>
                        <option value="Veener 3">Veener 3</option>
                    </select>
                </div>

            </div>
            <div class="compare-conpart skill-communicate">
                    <div class="skill-checklist">
                        <label for="skillc"><span class="italic">Door Materials</span>
                        </label><br>
                        <select id="skillc" onchange="changeSelection('selected_door_material',this)">
                            <option value="">-- select a material --</option>
                            <option value="Material 1">Material 1</option>
                            <option value="Material 2">Material 2</option>
                            <option value="Material 3">Material 3</option>
                        </select>
                    </div>
                </div>

            <div class="compare-conpart skill-communicate">
                <div class="skill-checklist">
                    <label for="skillc"><span class="italic">Add Ons</span>
                    </label><br>
                    <input type="checkbox"  onchange="changeSelection('add_on_drawer',this,true,'drawer')" name="drawer"> Drawer<br>
                    <input type="checkbox"  onchange="changeSelection('add_on_shelving',this,true,'shelving')" name="shelving"> Shelving<br>
                </div>

            </div>
                
        </div>
        </div>


        </div>
        <div class="col-md-2 col-lg-2">
                        <div class="floating_price">
                            <h3>My Selection</h3>
                            <hr>
                            <label>Type : </label><br>
                            <span id="selected_type" ></span>
                            <br>
                            <label>Internal Frame Material</label><br>
                            <span id="selected_internal_frame"></span>
                            <br>
                            <label>External Frame Material</label><br>
                            <span id="selected_external_frame"></span><br>
                            <label>Selected Door Material</label><br>
                            <span id="selected_door_material"></span><br>

                            <label>Add Ons</label><br>
                            <div class="selected_add_ons"></div>
                            <span id="add_on_drawer"></span><br>
                            <span id="add_on_shelving"></span>
                            <hr>
                            <h5>Total : </h5>
                            <h2>$ 450</h2>
                            <div class="skill-cart-option skill-sep posr" style="margin-left:0;">
                                        <a href="#" 
                                        onclick="addItem()"
                                        ><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                        </div>
                    </div>
    </div>
</div>
</div>

<script>
        var selections = {
        };
        function addItem(){
            var product_id = <?= $product['product_id']; ?>;
            var product_name = "<?= $product['name']; ?>";

            add_to_cart(2,'Sliding Wardrobe',{});
            window.location = window.location;
        }

        $(document).ready(function(){
        
        });

        function changeSelection(key,ele,checkbox = false,label=''){
            if(checkbox){
                if($(ele).is(":checked")){
                    selections[key] = label;
                }else{
                    delete selections[key];
                }
                refreshSelection();
                return;
            }
            selections[key] = $(ele).val();
            refreshSelection();
        }
        function refreshSelection(){
            for(key in selections){
                console.log("#"+key);
                $("#"+key).html(selections[key]);
            }
        
        }
</script>