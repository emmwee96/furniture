<form method="POST" action="<?= base_url()?>product/edit_add_on/<?= $custom_product_add_ons_id ?>">
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel"><?= ucfirst($add_ons["label"]) ?></h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">
		<label>Value</label>
		<input type="number" min="0" required name="value" value="<?= $add_ons['value'] ?>" step="any" class="form-control">
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="input" class="btn btn-primary">Save changes</button>
	</div>
</form>