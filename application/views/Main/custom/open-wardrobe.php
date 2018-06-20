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
                                            <a href="<?= site_url(); ?>/images/product/custom/open1.JPG" class="fancybox" data-fancybox-group="gallery"><img src="<?= site_url(); ?>/images/product/custom/open1.JPG" alt="" />
                                            </a>
                                        </div>
                                        <?php foreach($product_image as $row){ ?>
                                            <div class="col-md-4 col-lg-4">
                                                <a class="gallery" data-fancybox="gallery" href="<?= site_url().$row['url']; ?>">
                                                     <img src="<?= site_url().$row['url']; ?>">
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <form id="product_form">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="compare-content-wrap">
                                <div class="cmain-heading text-uppercase">
                                    <h3>Open Wardrobe</h3>
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
                                            <input type="text" name="#" value="220" class="cart-plus-minus-box" name="ceilingHeight"/>
                                            <div class="skill-plus qtybutton">+</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="compare-conpart-pm compare-bottom">
                                
                                    <div class="plus-minus-text">Install Width (mm)&nbsp;&nbsp;</div>
                                    <div class="skill-plusminus-wrap">
                                        <div class="skill-plusminus">
                                            <div class="skill-minus qtybutton">-</div>
                                            <input type="text" id="install_width" onchange="refreshSelection()" name="#" value="400" class="cart-plus-minus-box" name="installWidth" />
                                            <div class="skill-plus qtybutton">+</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="compare-conpart skill-communicate">

                                    <?php foreach($selection_labels as $row){ 
                                        if ($row['label'] == 'Internal Frame Material') {?>
                                        
                                    <div class="skill-checklist internal_frame_container">
                                        <label for="<?= $row['label_id']; ?>">
                                            <span class="italic">Choose <?= $row['label']; ?></span>
                                            <a target="_blank" href="<?= site_url('Main/about'); ?>">
                                            <span data-toggle="tooltip" data-placement="right"

                                            title="View how it works for more info"
                                            class="ttip fa fa-info-circle"></span></a>
                                        </label>
                                        <select id="<?= $row['label_id']; ?>" name="type" onchange="changeSelection('<?= $row['label_id']; ?>',this)">
                                            <option value="">-- select a type --</option>
                                            <?php foreach($row['options'] as $option){ ?>
                                                <option value="<?= $option['custom_product_options_id']; ?>" data-label="<?= $option['label']; ?>" ><?= $option['label']; ?></option>
                                            <?php } ?>
                                        
                                        </select>
                                    </div>
                                    <?php } elseif ($row['label'] == 'External Frame Material') { ?>
                                    <div class="skill-checklist external_frame_container">
                                        <label for="<?= $row['label_id']; ?>">
                                            <span class="italic">Choose <?= $row['label']; ?></span>
                                            <a target="_blank" href="<?= site_url('Main/about'); ?>">
                                            <span data-toggle="tooltip" data-placement="right"

                                            title="View how it works for more info"
                                            class="ttip fa fa-info-circle"></span></a>
                                        </label>
                                        <select id="<?= $row['label_id']; ?>" name="type" onchange="changeSelection('<?= $row['label_id']; ?>',this)">
                                            <option value="">-- select a type --</option>
                                            <?php foreach($row['options'] as $option){ ?>
                                                <option value="<?= $option['custom_product_options_id']; ?>" data-label="<?= $option['label']; ?>" ><?= $option['label']; ?></option>
                                            <?php } ?>
                                        
                                        </select>
                                    </div>

                                        <?php } ?>
                                    <?php } ?>

                                </div>
                              
                                <?php foreach($selection_labels as $row){ 
                                    if ($row['label'] !== 'Internal Frame Material') {
                                        if ($row['label'] !== 'External Frame Material') { ?>
                                        <div class="compare-conpart skill-communicate">
                                            <div class="skill-checklist">
                                                <label for="<?= $row['label_id']; ?>">
                                                    <span class="italic">Choose <?= $row['label']; ?></span>
                                                    <a target="_blank" href="<?= site_url('Main/about'); ?>">
                                                    <span data-toggle="tooltip" data-placement="right"

                                                    title="View how it works for more info"
                                                    class="ttip fa fa-info-circle"></span></a>
                                                </label>
                                                <br>
                                                <select id="<?= $row['label_id']; ?>" name="type" onchange="changeSelection('<?= $row['label_id']; ?>',this)">
                                                    <option value="">-- select a type --</option>
                                                    <?php foreach($row['options'] as $option){ ?>
                                                        <option value="<?= $option['custom_product_options_id']; ?>" data-label="<?= $option['label']; ?>" ><?= $option['label']; ?></option>
                                                    <?php } ?>
                                                
                                                </select>
                                            </div>
                                        </div> 
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            <!--
                                <div class="compare-conpart skill-communicate">
                                    <div class="skill-checklist">
                                        <label for="skillc"><span class="italic">Choose Type</span>
                                        </label>
                                        <select id="skillc" name="type" onchange="changeSelection('c_type',this)">
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
                                    <select id="skillc" name="internalFrame"  onchange="changeSelection('c_internal_frame_material',this)">
                                        <option value="">-- select a type --</option>
                                        <option value="White PVC">White PVC</option>
                                        <option value="Color PVC">Color PVC</option>
                                    </select>
                                </div>

                            </div>

                                <div class="compare-conpart skill-communicate">
                                    <div class="skill-checklist">
                                        <label><span class="italic">External Frame Material</span>
                                        </label>
                                        <select  name="externalFrame"  onchange="changeSelection('c_external_frame_material',this)">
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
                                -->
                                <div class="compare-conpart skill-communicate">
                                    <div class="skill-checklist">
                                        <label for="skillc" style="padding-right: 5%;"><span class="italic">Add Ons</span>
                                        </label>
                                        <?php foreach($add_ons as $add_on){ ?>
                                        <input style="margin-left: 1%;" type="checkbox"  onchange="changeSelection('<?= $add_on["label_id"]; ?>',this,true,'<?= $add_on['label']; ?>',<?= $add_on['value']; ?>)" name="drawer"> <?= $add_on['label']; ?>
                                        
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
                    </form>
                    <div class="col-md-2 col-lg-2">
                        <?php $this->load->view("Main/custom/my_selection",array("selection_labels" => $selection_labels, "add_ons" => $add_ons)); ?>
                    </div>
                </div>
    
<div class="row" style="margin-top:15vh;margin-bottom : 10vh;">
<div class="col-md-10 col-lg-10 col-xs-10">
<div class="cmain-heading text-uppercase">
            <h3>You May Also Like :</h3>
        </div>
       
        <div class="row">
        <div class="col-md-3 col-lg-3">
                <a  href="<?= site_url('Main/product/'."sliding-wardrobe"); ?>">
                <img src="<?= site_url(); ?>/images/product/custom/slide1.jpg">
            </a>
        </div>
        <div class="col-md-3 col-lg-3">
        <a  href="<?= site_url('Main/product/'."sliding-wardrobe"); ?>">
                <img src="<?= site_url(); ?>/images/product/custom/slide2.jpg">
            </a>
        </div>
        <div class="col-md-3 col-lg-3">
        <a  href="<?= site_url('Main/product/'."swing-door-wardrobe"); ?>">
                <img src="<?= site_url(); ?>/images/product/custom/swing1.jpg">
            </a>
        </div>
        <div class="col-md-3 col-lg-3">
        <a  href="<?= site_url('Main/product/'."swing-door-wardrobe"); ?>">
                <img src="<?= site_url(); ?>/images/product/custom/swing2.jpg">
            </a>
        </div>
        </div>
</div>
</div>
</div>
</div>