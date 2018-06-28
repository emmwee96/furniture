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
                                <a href="<?= site_url(); ?>/images/product/custom/ceiling.jpg" class="fancybox" data-fancybox-group="gallery"><img class="main_image" src="<?= site_url(); ?>/images/product/custom/ceiling.jpg" alt="" />
                                </a>
                            </div>
                            <br>
                            <?php foreach($product_image as $row){ ?>
								<div class="col-md-4 col-lg-4">
									<a class="gallery">
										<img class="sub_image" data-img="<?= site_url().$row['url']; ?>" src="<?= site_url().$row['url']; ?>">
									</a>
								</div>
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-12 col-xs-12">
        <div class="compare-content-wrap">
            <div class="cmain-heading text-uppercase">
                <h3>Top Hung Cabinet</h3>
            </div>
           
            <div class="compare-conpart compare-conpart-text">
                <div class="skill-long-text">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                </div>
            </div>
            <div class="compare-conpart-pm compare-bottom" style="border:none;padding-bottom:0;">
               
                <div class="plus-minus-text">Install Height (mm)</div>
                <div class="skill-plusminus-wrap">
                    <div class="skill-plusminus">
                        <div class="skill-minus qtybutton">-</div>
                            <input type="text" name="#" value="220" class="cart-plus-minus-box" name="height" id="height_form"/>
                        <div class="skill-plus qtybutton">+</div>
                    </div>
                </div>
            </div>
            <div class="compare-conpart-pm compare-bottom">
               
                <div class="plus-minus-text">Install Width (mm)&nbsp;&nbsp;</div>
                <div class="skill-plusminus-wrap">
                    <div class="skill-plusminus">
                        <div class="skill-minus qtybutton">-</div>
                            <input type="text" name="#" value="400" class="cart-plus-minus-box" name="width" id="width_form"/>
                        <div class="skill-plus qtybutton">+</div>
                    </div>
                </div>
            </div>
         
            <div class="compare-conpart-pm compare-bottom">
                <div class="skill-checklist">
                    <div class="custom_label">
                        <span class="italic">Choose Type</span>
                        <a target="_blank" href="<?= site_url('Main/about'); ?>">
                        <span data-toggle="tooltip" data-placement="right"

                        title="View how it works for more info"
                        class="ttip fa fa-info-circle"></span></a>
                            </div>
                    <select class="custom_select" name="type" onchange="changeSelection('c_type',this)">
                        <option value="">-- select a type --</option>
                        <option value="Standard Height">Standard Height</option>
                        <option value="Full Height">Full Height</option>
                    </select>
                </div>
            </div> 
        <div class="compare-conpart-pm compare-bottom">
            <div class="skill-checklist internal_frame_container">
                <div class="custom_label">
                    <span class="italic">Internal Frame Material</span>
                    <a target="_blank" href="<?= site_url('Main/about'); ?>">
                    <span data-toggle="tooltip" data-placement="right"

                    title="View how it works for more info"
                    class="ttip fa fa-info-circle"></span></a>
                </div>
                <select class="custom_select" name="internalFrame"  onchange="changeSelection('c_internal_frame_material',this)">
                    <option value="">-- select a type --</option>
                    <option value="White PVC">White PVC</option>
                    <option value="Color PVC">Color PVC</option>
                </select>
            </div>

            <div class="skill-checklist external_frame_container">
                <div class="custom_label">
                    <span class="italic">External Frame Material</span>
                    <a target="_blank" href="<?= site_url('Main/about'); ?>">
                    <span data-toggle="tooltip" data-placement="right"

                    title="View how it works for more info"
                    class="ttip fa fa-info-circle"></span></a>
                </div>
                <select class="custom_select" name="externalFrame"  onchange="changeSelection('c_external_frame_material',this)">
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

        <div class="compare-conpart-pm compare-bottom">
            <div class="skill-checklist">
                <div class="custom_label">
                    <span class="italic">Door Materials</span>
                    <a target="_blank" href="<?= site_url('Main/about'); ?>">
                    <span data-toggle="tooltip" data-placement="right"

                    title="View how it works for more info"
                    class="ttip fa fa-info-circle"></span></a>
                </div>
                <select class="custom_select" onchange="changeSelection('c_door_material',this)">
                    <option value="">-- select a material --</option>
                    <option value="Material 1">Material 1</option>
                    <option value="Material 2">Material 2</option>
                    <option value="Material 3">Material 3</option>
                </select>
            </div>
        </div>
        <div class="compare-conpart-pm compare-bottom">
            <div class="skill-checklist">
                <div class="custom_label">
                    <span class="italic">Counter top Materials</span>
                    <a target="_blank" href="<?= site_url('Main/about'); ?>">
                    <span data-toggle="tooltip" data-placement="right"

                    title="View how it works for more info"
                    class="ttip fa fa-info-circle"></span></a>
                </div>
                <select class="custom_select" onchange="changeSelection('c_counter_top_material',this)">
                    <option value="">-- select a material --</option>
                    <option value="Material 1">Material 1</option>
                    <option value="Material 2">Material 2</option>
                    <option value="Material 3">Material 3</option>
                </select>
            </div>
        </div>
        <div class="compare-conpart skill-communicate">
            <div class="skill-checklist">
                <label for="skillc" style="padding-right: 5%;">
                    <span class="italic">Add Ons</span>
                </label><br>
                <?php foreach($add_ons as $add_on){ ?>
                    <input style="margin-left: 1%;" type="checkbox"  onchange="changeSelection('<?= $add_on["label_id"]; ?>',this,true,'<?= $add_on['label']; ?>')" name="drawer"> <?= $add_on['label']; ?>>
                    
                    <?php } ?>
            </div>

        </div>
        <br>
        <h2>TOTAL : <span class="label_total">0.00 MYR</span></h2>
        <div class="product_btn_container">
            <a onclick="viewSummary()" class="btn btn-default view_summary">View Summary</a>
            <a href="#" onclick="add_to_cart()" class="btn btn-default"><i class="fa fa-shopping-cart"></i> Add to cart</a>
        </div>
         <br><br>
    </div>
    </div>


    </div>
    <div class="col-md-2 col-lg-2">
    <?php $this->load->view("Main/custom/my_selection",array("selection_labels" => $selection_labels, "add_ons" => $add_ons, "height_label" => "Install Height (mm)", "width_label" => "Install Width (mm)")); ?>
                           
    </div>

</div>

<div class="row" style="margin-top:15vh;margin-bottom : 10vh;">
    <div class="col-md-10 col-lg-10 col-xs-10">
    <div class="cmain-heading text-uppercase">
                <h3>Recommended Combination :</h3>
            </div>
           
            <div class="row">
            <div class="col-md-3 col-lg-3">
                    <a  href="<?= site_url('Main/product/'.'bottom-cabinet'); ?>">
                    <img src="<?= site_url(); ?>/images/product/custom/bottom_1.jpg">
                </a>
            </div>
            <div class="col-md-3 col-lg-3">
            <a  href="<?= site_url('Main/product/'.'bottom-cabinet'); ?>">
                    <img src="<?= site_url(); ?>/images/product/custom/bottom_2.jpg">
                </a>
            </div>
            <div class="col-md-3 col-lg-3">
            <a  href="<?= site_url('Main/product/'.'bottom-cabinet'); ?>">
                    <img src="<?= site_url(); ?>/images/product/custom/bottom_3.jpg">
                </a>
            </div>
            <div class="col-md-3 col-lg-3">
            <a  href="<?= site_url('Main/product/'.'bottom-cabinet'); ?>">
                    <img src="<?= site_url(); ?>/images/product/custom/bottom_4.jpg">
                </a>
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

        add_to_cart(2,'Swing Door Wardrobe',{});
        window.location.reload();
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
                
        $(".c_add_on").html("");
            for(key in selections){
                $("#"+key).html(selections[key]);
            }
        
        }
</script>