<?php
foreach ($product as $row) {
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
				<input type="number" class="form-control" name="height_<?= $row['product_id'] ?>" value="3000" onchange="calculate(<?= $row['product_id']?>)" id="height_form_<?= $row['product_id'] ?>">
			</div>
			<div class="col-md-6 col-xs-12">
				<label>Width (mm)</label>
				<input type="number" class="form-control" name="width_<?= $row['product_id'] ?>" value="2400" onchange="calculate(<?= $row['product_id']?>)" id="width_form_<?= $row['product_id'] ?>">
			</div>
		</div>
		<div class="col-xs-12">
			<hr>
			<?php
		foreach ($row["labels"] as $label_row) {
			?>
				<div class="col-md-3 col-xs-12">
					<select class="form-control" name="<?= $label_row['label_id'] ?>_<?= $row['product_id'] ?>" style="margin-top:2.5%;" onchange="changeSelection('<?= $row['product_id'] ?>', '<?= $label_row['label_id']; ?>',this)" id="form_<?= $label_row['label_id'] ?>_<?= $row['product_id'] ?>">
						<option value="">
							<?= $label_row["label"] ?>
						</option>
						<?php
					foreach ($label_row["options"] as $option_row) {
						?>
							<option value="<?= $option_row['custom_product_options_id'] ?>"><?= $option_row["label"] ?></option>
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
							<input type="checkbox" name="<?= $add_on_row['label_id'] ?>_<?= $row['product_id'] ?>" value="CHECKED" onchange="changeSelection('<?= $row['product_id'] ?>','<?= $add_on_row['label_id']; ?>',this,true,'<?= $add_on_row['label']; ?>',<?= $add_on_row['value']; ?>)" id="form_<?= $add_on_row['label_id'] ?>_<?= $row['product_id'] ?>">
							<?= $add_on_row["label"] ?>
						</label>
					</div>
					<?php

			}
			?>
			</div>
		</div>
		<div class="col-xs-12">
			<hr>
			<div class="col-xs-12">
				<label>Price</label>
				<input type="number" name="price_<?= $row['product_id'] ?>" class="form-control" required min="1" id="form_price_<?= $row['product_id'] ?>">
			</div>
			<hr/>
		</div>
	</div>
	<?php

}
?>