<br />
<div class="mediumBox">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
			<div class="box box-info">
				<div class="box-header user-panel">
					<div class="pull-left image ">
						<img src="<?= base_url() . $products['banner'] ?>" class="img-circle user_thumbnail" alt="Product Image">
					</div>
					<a href="<?= site_url('product/edit_details/' . $products['custom_product_id']); ?>" class="pull-right">
						edit
					</a>

					<h4 style="margin-left:20px;" class="pull-left">
						<?= $products['name'] ?>'s info</h4>
				</div>
				<div class="box-body">

					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs" id="tabs">
							<li class="active">
								<a href="#info" data-toggle="tab">Info</a>

							</li>

						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane active" id="info">
							<table class='formTable'>
								<tr>
									<th>Name</th>
									<td>:
										<?= $products['name']; ?>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
			<div class="box box-default">
				<div class="box-header">
					Images
					<a href="<?= site_url('product/edit_images/' . $products['custom_product_id']); ?>" class="pull-right">
						edit
					</a>
				</div>
				<div class="box-body" id="family-tree-container">
					<?php
    foreach ($images as $row) {
        ?>
						<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 product-images">
							<img class="cropped" src="<?= base_url() . $row['url'] ?>">
						</div>
						<?php

    }
    ?>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
			<div class="box box-default">
				<div class="box-header">
					Recommended Images
					<a href="<?= site_url('product/edit_recommended_images/' . $products['custom_product_id']); ?>" class="pull-right">
						edit
					</a>
				</div>
				<div class="box-body" id="family-tree-container">
					<?php
    foreach ($recommended_images as $row) {
        ?>
						<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 product-images">
							<img class="cropped" src="<?= base_url() . $row['url'] ?>">
						</div>
						<?php

    }
    ?>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
			<div class="box box-default">
				<div class="box-header">
					Prices
				</div>
				<div class="box-body" id="family-tree-container">
					<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#add_option_modal">
						<i class="fa fa-plus"></i> Add
					</button>
					<h3>Options</h3>
					<hr>
					<div class="col-xs-12">
						<?php
        foreach ($selection_labels as $row) {
            ?>
							<div class="col-md-6 col-xs-12">
                                <a href="<?= base_url() ?>product/delete_option/<?= $products['custom_product_id'] ?>/<?= $row['custom_product_field_id'] ?>">
									<button class="btn btn-danger pull-right" style="margin-left:2.5%;">
										<i class="fa fa-close"></i>
									</button>
								</a>
								<button class="btn btn-warning pull-right edit_option_button" data-id="<?= $row['custom_product_field_id'] ?>">
									<i class="fa fa-edit"></i>
								</button>
								<h4>
									<?= ucfirst($row['label']) ?>
								</h4>
								<hr>
								<?php
        $i = 1;
        foreach ($row["options"] as $option_row) {
            ?>
									<label>
										Option
										<?= $i ?> -
											<?= ucfirst($option_row['label']) ?>
									</label>
									<table class="formTable">
										<tr>
											<td>Standard Height w White PVC</td>
											<td>:
												<?= ($option_row['standard_white_pvc'] > 0) ? "RM " . $option_row['standard_white_pvc'] : "-" ?>
											</td>
										</tr>
										<tr>
											<td>Standard Height w Color PVC</td>
											<td>:
												<?= ($option_row['standard_color_pvc'] > 0) ? "RM " . $option_row['standard_color_pvc'] : "-" ?>
											</td>
										</tr>
										<tr>
											<td>Full Height w White PVC</td>
											<td>:
												<?= ($option_row['full_white_pvc'] > 0) ? "RM " . $option_row['full_white_pvc'] : "-" ?>
											</td>
										</tr>
										<tr>
											<td>Full Height w Color PVC</td>
											<td>:
												<?= ($option_row['full_color_pvc'] > 0) ? "RM " . $option_row['full_color_pvc'] : "-" ?>
											</td>
										</tr>
									</table>
									<br>
									<?php
        $i++;
    }
    ?>
							</div>
							<?php

    }
    ?>
					</div>
					<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#add_add_on_modal">
						<i class="fa fa-plus"></i> Add
					</button>
					<h3>Add Ons</h3>
					<hr>
					<div class="col-xs-12">
						<?php
        foreach ($add_ons as $row) {
            ?>
							<div class="col-md-4 col-xs-12">
								<a href="<?= base_url() ?>product/delete_add_on/<?= $products['custom_product_id'] ?>/<?= $row['custom_product_add_ons_id'] ?>">
									<button class="btn btn-danger pull-right" style="margin-left:2.5%;">
										<i class="fa fa-close"></i>
									</button>
								</a>
								<button class="btn btn-warning pull-right edit_add_on_button" data-id="<?= $row['custom_product_add_ons_id'] ?>">
									<i class="fa fa-edit"></i>
								</button>
								<h4>
									<?= ucfirst($row['label']) ?>
								</h4>
								<hr>
								<table class="formTable">
									<tr>
										<td>Price</td>
										<td>:
											<?= "RM " . $row["value"] ?>
										</td>
									</tr>
								</table>
							</div>
							<?php

    }
    ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="edit_option_modal" tabindex="-1" role="dialog" aria-labelledby="edit_option_modal_label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" id="edit_option_content">
			<div class="modal-header">
				<h5 class="modal-title" id="edit_option_modal_label">Edit Product Option</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="add_option_modal" tabindex="-1" role="dialog" aria-labelledby="add_option_modal_label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" id="add_option_content">
			<form method="POST" action="<?= base_url() ?>product/add_option/<?= $products['custom_product_id'] ?>">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Product Option</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
                    <div class="option_container">
                        <label>Label</label>
                        <input type="text" required name="label" step="any" class="form-control">
                        <hr>
                        <div class="option_input_group">
                            <button type="button" class="btn btn-danger pull-right delete_option_row hidden"><i class="fa fa-close"></i></button>
                            <br>
                            <label>Option</label>
                            <input type="text" required name="option_label[]" step="any" class="form-control">
                            <label>Standard Height w White PVC</label>
                            <input type="number" min="0" required name="standard_white_pvc[]" step="any" class="form-control">
                            <label>Standard Height w Color PVC</label>
                            <input type="number" min="0" required name="standard_color_pvc[]" step="any" class="form-control">
                            <label>Full Height w White PVC</label>
                            <input type="number" min="0" required name="full_white_pvc[]" step="any" class="form-control">
                            <label>Full Height w Color PVC</label>
                            <input type="number" min="0" required name="full_color_pvc[]" step="any" class="form-control">
                            <hr>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary add_new_option pull-right">add new option</button>
                    <br>
                    <br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="input" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="edit_add_on_modal" tabindex="-1" role="dialog" aria-labelledby="edit_add_on_modal_label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" id="edit_add_on_content">
			<div class="modal-header">
				<h5 class="modal-title" id="edit_add_on_modal_label">Edit Product Option</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="add_add_on_modal" tabindex="-1" role="dialog" aria-labelledby="add_add_on_modal_label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" id="add_add_on_content">
			<form method="POST" action="<?= base_url() ?>product/add_add_on/<?= $products['custom_product_id'] ?>">
				<div class="modal-header">
					<h5 class="modal-title" id="add_add_on_modal_label">
						Add New Add On
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<label>Add On</label>
					<input type="text" required name="label" step="any" class="form-control">
					<label>Value</label>
					<input type="number" min="0" required name="value" step="any" class="form-control">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="input" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
    var option_num = 1; 

	$(document).on('click', '.delete-button', function (e) {
		if (confirm("Are you sure you want to delete this model?")) {
			id = $(this).attr('data-id');
			window.location.replace("<?= base_url() ?>product/delete_model/" + id);
		}
	});

	$(document).on('click', '.delete-variation-button', function (e) {
		if (confirm("Are you sure you want to delete this varaition?")) {
			id = $(this).attr('data-id');
			window.location.replace("<?= base_url() ?>product/delete_variation/" + id);
		}
	});

	$(".qtyChange").click(function () {
		var qty = $(this).data("qty");
		var id = $(this).data("id");
		$("#model_id").val(id);
		$("#quantity").val(qty);
	});

	$(document).on('click', '.edit_option_button', function (e) {
		var custom_product_field_id = $(this).data('id');

		postParam = {
			custom_product_field_id: custom_product_field_id
		};

		$.post("<?= base_url() ?>ajax/load_edit_option_content", postParam, function (data) {
			$("#edit_option_content").html(data);
			$("#edit_option_modal").modal("show");
		});

	});

	$(document).on('click', '.edit_add_on_button', function (e) {
		var custom_product_add_ons_id = $(this).data('id');

		postParam = {
			custom_product_add_ons_id: custom_product_add_ons_id
		};

		$.post("<?= base_url() ?>ajax/load_edit_add_on_content", postParam, function (data) {
			$("#edit_add_on_content").html(data);
			$("#edit_add_on_modal").modal("show");
		});

    });
    
    $(document).on('click', '.add_new_option', function(e){
        clone = $(".option_input_group:first").clone();
        clone.find("input").val("");
        $(".option_container").append(clone);
        option_num++;
        toggle_delete();
    });

    $(document).on('click', '.delete_option_row', function(e){
        $(this).parent('.option_input_group').remove();
        option_num--;
        toggle_delete();
    });

    function toggle_delete(){
        if(option_num > 1){
            $('.delete_option_row').removeClass("hidden");
        } else {
            $('.delete_option_row').addClass("hidden");
        }
    }
</script>