<form method="POST" action="<?= base_url()?>product/edit_option/<?= $custom_product_field_id ?>">
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Edit Product Option</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">
		<?php
			foreach($options as $row){
				?>
					<h4><?= ucfirst($row["label"]) ?></h4>
					<hr>
					<label>Standard Height w White PVC</label>
					<input type="number" min="0" required name="standard_white_pvc_<?= $row['custom_product_options_id'] ?>" value="<?= $row['standard_white_pvc'] ?>" step="any" class="form-control">
					<label>Standard Height w Color PVC</label>
					<input type="number" min="0" required name="standard_color_pvc_<?= $row['custom_product_options_id'] ?>" value="<?= $row['standard_color_pvc'] ?>" step="any" class="form-control">
					<label>Full Height w White PVC</label>
					<input type="number" min="0" required name="full_white_pvc_<?= $row['custom_product_options_id'] ?>" value="<?= $row['full_white_pvc'] ?>" step="any" class="form-control">
					<label>Full Height w Color PVC</label>
					<input type="number" min="0" required name="full_color_pvc_<?= $row['custom_product_options_id'] ?>" value="<?= $row['full_color_pvc'] ?>" step="any" class="form-control">
					<hr>
				<?php
			}
		?>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="input" class="btn btn-primary">Save changes</button>
	</div>
</form>