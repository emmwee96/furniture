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
			<?php
    foreach ($row["labels"] as $label_row) {
        ?>
				<div class="col-md-3 col-xs-12">
					<select class="form-control" name="<?= $label_row['label_id'] ?>_<?= $row['product_id'] ?>" style="margin-top:2.5%;">
						<option value="">
							<?= $label_row["label"] ?>
						</option>
						<?php
    foreach ($label_row["options"] as $option_row) {
        ?>
							<option value="<?= $option_row['custom_product_options_id'] ?>">
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
			<?php
    foreach ($row["add_ons"] as $add_on_row) {
        ?>
				<div class="checkbox-inline">
					<label>
						<input type="checkbox" name="<?= $add_on_row['label_id'] ?>_<?= $row['product_id'] ?>" value="CHECKED">
						<?= $add_on_row["label"] ?>
					</label>
				</div>
				<?php

}
?>
				<br/>
		</div>
		<div class="col-xs-12">
			<label>Price</label>
			<input type="number" name="price_<?= $row['product_id'] ?>" class="form-control" required min="1">
			<hr/>
		</div>
	</div>
	<?php

}
?>