<section class="content-header">
	<h1>
		Edit orders
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="<?= base_url() ?>Order">
				<i class="fa fa-users"></i> Order</a>
		</li>
		<li>
			<a href="<?= base_url() ?>Order/edit/<?= $order['order_id'] ?>"> Edit orders</a>
		</li>
	</ol>
</section>
<br>
<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Order</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" method="POST" action="<?= base_url() ?>orders/edit/<?= $order['order_id'] ?>">
			<div class="box-body">
				<h4>Order Details</h4>
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" id="form_name" placeholder="Name" name="name" required value="<?= $order['name'] ?>">
				</div>
				<div class="form-group">
					<label>Contact</label>
					<input type="text" class="form-control" id="form_contact" placeholder="Contact" name="contact" required value="<?= $order['contact'] ?>">
				</div>
				<div class="form-group">
					<label>Address Line 1</label>
					<input type="text" class="form-control" id="form_address1" placeholder="Address Line 1" name="address1" required value="<?= $order['address1'] ?>">
				</div>
				<div class="form-group">
					<label>Address Line 2</label>
					<input type="text" class="form-control" id="form_address2" placeholder="Address Line 2" name="address2" value="<?= $order['address2'] ?>">
				</div>
				<div class="form-group">
					<label>City</label>
					<input type="text" class="form-control" id="form_city" placeholder="City" name="city" value="<?= $order['city'] ?>">
				</div>
				<div class="form-group">
					<label>State</label>
					<input type="text" class="form-control" id="form_state" placeholder="State" name="state" value="<?= $order['state'] ?>">
				</div>
				<div class="form-group">
					<label>Postcode</label>
					<input type="text" class="form-control" id="form_postcode" placeholder="Postcode" name="postcode" value="<?= $order['postcode'] ?>">
				</div>
				<hr/>
				<div class="form-group">
					<button type="button" class="btn btn-info add-product pull-right" onclick="showProductModal()">Add Product</button>
					<h4>Order Products</h4>
					<div id="product_content">
						<?php
					foreach ($order["details"] as $row) {
						?>
							<div class="product_row_details col-xs-12" id="wrapper_<?= $row['product_id'] ?>">
								<button type="button" class="btn btn-danger delete-product pull-right" onClick="deleteProduct(<?= $row['product_id'] ?>)">
									<i class="fa fa-close"></i>
								</button>
								<h4>
									<?= $row["name"] ?>
								</h4>
								<input type="hidden" name="product_id[]" value="<?= $row['product_id'] ?>">
								<div class="col-xs-12">
									<div class="col-md-6 col-xs-12">
										<label>Height (mm)</label>
										<input type="number" class="form-control" name="height_<?= $row['product_id'] ?>" value="<?= $row['height'] ?>" id="height_form_<?= $row['product_id'] ?>">
									</div>
									<div class="col-md-6 col-xs-12">
										<label>Width (mm)</label>
										<input type="number" class="form-control" name="width_<?= $row['product_id'] ?>" value="<?= $row['width'] ?>" id="width_form_<?= $row['product_id'] ?>">
									</div>
								</div>
								<div class="col-xs-12">
									<hr>
									<?php
							foreach ($row["labels"] as $label_row) {
								?>
										<div class="col-md-3 col-xs-12">
											<select class="form-control" name="<?= $label_row['label_id'] ?>_<?= $row['product_id'] ?>" onchange="changeSelection('<?= $row['product_id'] ?>', '<?= $label_row['label_id']; ?>',this)">
												<option value="">
													<?= $label_row["label"] ?>
												</option>
												<?php
										foreach ($label_row["options"] as $option_row) {
											?>
													<option value="<?= $option_row['custom_product_options_id'] ?>" <?php if (!empty($row["options"][$label_row['label_id']]['row'][ 'custom_product_options_id']) and 
													$row[ "options"][$label_row[ 'label_id']][ 'row']['custom_product_options_id'] == $option_row['custom_product_options_id']) echo "selected"; ?>>
														<?= $option_row["label"] ?>
													</option>
													<?php

										}
										?>
											</select>
										</div>
										<?php

							}
							?>
								</div>
								<div class="col-xs-12">
									<hr>
									<div class="col-xs-12">
										<?php
								foreach ($row["add_ons"] as $add_on_row) {
									
									?>
											<div class="checkbox-inline">
												<label>
													<input type="checkbox" name="<?= $add_on_row['label_id'] ?>_<?= $row['product_id'] ?>" value="CHECKED" <?php 
													if (!empty($row["options"][$add_on_row[ 'label_id']])) echo "checked"; ?>  onchange="changeSelection('<?= $row['product_id'] ?>','<?= $add_on_row['label_id']; ?>',this,true,'<?= $add_on_row['label']; ?>',<?= $add_on_row['value']; ?>)">
													<?= $add_on_row["label"] ?>
												</label>
												<input type="number" min="1" class="form-control add_on_qty" id="<?= $add_on_row['label_id'] ?>_qty" value="<?= (!empty($row["options"][$add_on_row['label_id']]))? ($row["options"][$add_on_row['label_id']]["row"]["quantity"]) : 0 ?>" onchange="changeSelection('<?= $row['product_id'] ?>','<?= $add_on_row['label_id']; ?>',this,false,'<?= $add_on_row['label']; ?>',<?= $add_on_row['value']; ?>)">
											</div>
											<?php

								}
								?>
									</div>
								</div>
								<div class="col-xs-12">
									<hr/>
									<div class="col-xs-12">
										<label>Price</label>
										<input type="number" name="price_<?= $row['product_id'] ?>" class="form-control" value="<?= $row['total'] ?>" required min="1" id="form_price_<?= $row['product_id'] ?>">
									</div>
									<hr/>
								</div>
							</div>
							<?php

					}
					?>
					</div>
				</div>
			</div>
			<!-- /.box-body -->
			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</section>
<div class="modal" id="product_modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Select Products</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="full_width" id="add_products_modal_result">

				</div>
				<br/>
			</div>

		</div>
	</div>
</div>
<script>
	
	var existing_selections = [];
	<?php
		foreach($order["details"] as $row){
			?>
				existing_selections['<?= $row['product_id'] ?>'] = {
				<?php
				foreach($row['options'] as $key => $option_row){
					?>
						"<?= $key ?>": <?= json_encode($option_row)?>,
					<?php
				}
				?>
				};
			<?php
		}
	?>
	var is_cabinet = true;
	var addedProducts = [];
    var all_products = <?= json_encode($products); ?>;
	var selections = {};
	var selected_product_id = 0;
	var type = "";
	var internal_frame = "";

	<?php
foreach ($order["details"] as $row) {
	?>
	addedProducts.push("<?= $row['product_id'] ?>");
	<?php

}
?>

	function showProductModal() {
		loadProducts();
		$("#product_modal").modal("show");
	}

	function loadProducts() {
		postParam = {
			"product_id": addedProducts
		};

		$.post("<?= base_url() ?>ajax/loadProducts", postParam, function (data) {
			$("#add_products_modal_result").html(data);
		});

	}

	function addProduct(product_id) {
		addedProducts.push(product_id);

		postParam = {
			"product_id": product_id
		};

		$.post("<?= base_url() ?>ajax/loadProductDetails", postParam, function (data) {
			$("#product_content").append(data);
		});

		$("#product_modal").modal("hide");
	}

	function deleteProduct(product_id) {
		for (var i = 0; i < addedProducts.length; i++) {
			if (addedProducts[i] == product_id) {
				$("#wrapper_" + product_id).remove();
				addedProducts.splice(i, 1);
				break;
			}
		}
	}

	function changeSelection(product_id, key,ele,checkbox = false,label='',price =""){

		selected_product_id = product_id

		if(existing_selections[product_id] != undefined){
			selections = existing_selections[product_id];
		} else {
			selections = {};
			existing_selections[product_id] = selections;
		}
		
		for(var i = 0; i < all_products.length; i++){
			if(all_products[i]['custom_product_id'] == product_id){
				all_selections = all_products[i]['labels'];
			}
		}
		for(var i = 0; i < all_products.length; i++){
			if(all_products[i]['custom_product_id'] == product_id){
				all_add_ons = all_products[i]['add_ons'];
			}
		}
    	var label_names = {};
		var selected_options = {};
		var label_names = {};
		for(var i = 0; i < all_selections.length; i++){
			selected_options[ all_selections[i]['custom_product_field_id']] = null;
			label_names[all_selections[i]['label_id']] = all_selections[i]['label'];
		}
		for(var i = 0; i < all_add_ons.length; i++){
			label_names[all_add_ons[i]['label_id']] = all_add_ons[i]['label'];
		}

        if(checkbox){
            if($(ele).is(":checked")){
                selections[key] = {
                    name : label_names[key],
                    label : label,
                    type : "checkbox",
                    row : {
                        label : label,
                        value : price,
                        quantity : $("#" + key + "_qty").val()
                        
                    }
                };
            }else{
                delete selections[key];
            }
            refreshSelection();
            return;
        }

		if($(ele).hasClass("add_on_qty") && selections[key] != undefined){
            selections[key] = {
                name : label_names[key],
                label : label,
                type : "checkbox",
                row : {
                    label : label,
                    value : price,
                    quantity : $("#" + key + "_qty").val()
                    
                }
            };
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
                            name : label_names[key],
                            label : label,
                            type : "option",
                            row : target_selection['options'][j]
                        };
                    }
                }
            }
        }
		existing_selections[product_id] === selections;

        refreshSelection();
    }

    function refreshSelection(){
        $(".c_add_on").html("");
        for(key in selections)
            $("#"+key).html(selections[key]);
        
        calculate();
        $("#form_price_" + selected_product_id).val(total.toFixed(2));
    }

	function calculate(){
        var valueColumn;
        total = 0;

        var width = $("#width_form_" + selected_product_id).val();
        // var type = $("#form_c_type_" + selected_product_id + " option:selected").text();
        // var internal_frame = $("#form_c_internal_frame_" + selected_product_id + " option:selected").text();
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

		console.log(selections);
		for(key in selections){
            $("#"+key).html("<i>" + selections[key]['label'] + "</i>");
           	//console.log(selections[key]['label'] + " : " + selections[key]['row'][valueColumn]);

            if(selections[key]['type'] == "checkbox")
                total += parseFloat(selections[key]['row']["value"] * $("#" + key + "_qty").val());
            else    
                total += parseFloat(selections[key]['row'][valueColumn] * ft);
        }

        // total *= price_multiplier;
        // total += area;
        
    }
</script>