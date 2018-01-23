<div class="floating_price">
    <h3>My Selection</h3>
    <hr>
    <?php foreach($selection_labels as $row){ ?>
        <label><?= $row['label'] ?></label><br>
        <span id="<?= $row['label_id']; ?>"></span>
        <br>
    <?php } ?>

    <label>Add Ons</label><br>
    <div class="selected_add_ons">
    <?php foreach($add_ons as $add_on){ ?>
        <span class="c_add_on" id="<?= $add_on['label_id']; ?>" ></span><br>
    <?php } ?>
    </div>

    <hr>
    <h5>Total : </h5>
    <h2 id="total_price">$ 0</h2>
    <div class="skill-cart-option skill-sep posr" style="margin-left:0;">
        <a href="#" 
        onclick="add_to_cart()"
        ><i class="fa fa-shopping-cart"></i> Add to cart</a>
    </div>
</div>


<script>
// check if cabinet as cabinets have 4 variations 
     is_cabinet = true;
        var total = 0;

    // values for if cabinet
        var type;
        var internal_frame;
    // end values

    var all_selections = <?= json_encode($selection_labels); ?>;
    var selected_options = {};
    
        console.log(all_selections);
    for(var i = 0; i < all_selections.length; i++){
        selected_options[ all_selections[i]['custom_product_field_id']] = null;
    }

    var selections = {
    };


    $(document).ready(function(){
        
    });

    function changeSelection(key,ele,checkbox = false,label='',price =""){
        


        if(checkbox){
            if($(ele).is(":checked")){
                selections[key] = {
                    label : label,
                    type : "checkbox",
                    row : {
                        label : label,
                        value : price
                        
                    }
                };
            }else{
                delete selections[key];
            }
            refreshSelection();
            return;
        }

        //get the selection_label row
        var target_selection = null;
        var label = "";
        var label_value ="";
        for(var i = 0; i < all_selections.length; i++){
            if(all_selections[i]['label_id'] == key){
                target_selection = all_selections[i];
             
                // get the label for options
                for(var j = 0; j < target_selection['options'].length; j++){
                    if(target_selection['options'][j]['custom_product_options_id'] == $(ele).val()){

                        label = target_selection['options'][j]['label'];
                        label_value = target_selection['options'][j]['value'];
                        
                        if(is_cabinet){
                            //set cabinet only settings
                            if(key == "c_type"){
                                type = label;
                                
                            }else if(key == "c_internal_frame_material"){
                                internal_frame = label;
                            }


                        }
                        selections[key] = {
                            label : label,
                            type : "option",
                            row : target_selection['options'][j]
                        };
                    }
                }
            }
        }
        refreshSelection();
    }

    function refreshSelection(){
        console.log(selections);
        $(".c_add_on").html("");
        for(key in selections)
            $("#"+key).html(selections[key]);
        
        calculate();
        $("#total_price").html("$ " + total.toFixed(2));
    }

    function calculate(){
        var valueColumn;
        total = 0;

        var width = $("#install_width").val();
        ft = parseFloat(width)/300;
        var price_multiplier = ft > 1.5 ? 2 : 1.5;

        if(type == "Standard Height"){
            if(internal_frame == "White PVC")
                valueColumn = "standard_white_pvc";
            else
                valueColumn = "standard_color_pvc";
            
        }else{
            if(internal_frame == "White PVC")
                valueColumn = "full_white_pvc";
            else
                valueColumn = "full_color_pvc";
        }
       
        for(key in selections){
            $("#"+key).html(selections[key]['label']);
           // console.log(selections[key]['label'] + " : " + selections[key]['row'][valueColumn]);

            if(selections[key]['type'] == "checkbox")
                total += parseFloat(selections[key]['row']["value"]);
            else
                total += parseFloat(selections[key]['row'][valueColumn]);
        }

        total *= price_multiplier;
        
    }


    function add_to_cart(){
        $.post(site_url+'Main/add_to_cart',
            {
                product_id : "<?= $product['custom_product_id']; ?>",
                product_name : "<?= $product['name']; ?>",
                options : selections,
                total : total
            },
            function(response){
                alert("added");
                $("#cart_count").html(response.counter);
            },
            "JSON");
    }   

</script>