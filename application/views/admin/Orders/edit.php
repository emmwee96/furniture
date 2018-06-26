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
								<input type="hidden" name="product_id[]" value="<?= $row['product_id']?>">
								<div class="col-xs-12">
								<?php
								foreach ($row["labels"] as $label_row) {
									?>
									<div class="col-md-3 col-xs-12">
										<select class="form-control" name="<?= $label_row['label_id'] ?>_<?= $row['product_id'] ?>">
											<option value="">
												<?= $label_row["label"] ?>
											</option>
											<?php
												foreach ($label_row["options"] as $option_row) {
													?>
												<option value="<?= $option_row['custom_product_options_id'] ?>" <?php if (!empty($row[ "options"][$label_row['label_id']]['row']['custom_product_options_id']) AND $row[ "options"][$label_row['label_id']]['row']['custom_product_options_id'] == $option_row['custom_product_options_id']) echo "selected"; ?>>
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
									<br>
									<?php
								foreach ($row["add_ons"] as $add_on_row) {
									?>
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="<?= $add_on_row['label_id'] ?>_<?= $row['product_id'] ?>" value="CHECKED" <?php if
												(!empty($row["options"][$add_on_row['label_id']])) echo "checked"; ?>>
												<?= $add_on_row["label"] ?>
											</label>
										</div>
										<?php

									}
									?>
									</div>
									<div class="col-xs-12">
										<br/>
										<label>Price</label>
										<input type="number" name="price_<?= $row['product_id']?>" class="form-control" value="<?= $row['total'] ?>" required min="1">
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
	var addedProducts = [];

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
</script>