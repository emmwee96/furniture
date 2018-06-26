<?php
foreach ($products as $row) {
    ?>
	<div class="product_modal_row" id="product_modal_row_<?= $row['custom_product_id'] ?>" style="width:100%">
		<label>
			<?= $row["name"] ?>
		</label>
		<button type="button" class="btn btn-info pull-right" onclick="addProduct(<?= $row['custom_product_id'] ?>)">Add</button>
	</div>
	<?php

}
?>