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
			<a href="<?= base_url() ?>Order/edit/<?= $orders['order_id'] ?>"> Edit orders</a>
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
		<form role="form" method="POST" action="<?= base_url() ?>orders/edit/<?= $orders['order_id']?>">
			<div class="box-body">
				<div class="form-group">
					<label>Address Line 1</label>
					<input type="text" class="form-control" id="form_address1" placeholder="Address Line 1" name="address1" required value="<?= $orders['address1'] ?>">
				</div>
				<div class="form-group">
					<label>Address Line 2</label>
					<input type="text" class="form-control" id="form_address2" placeholder="Address Line 2" name="address2" value="<?= $orders['address2'] ?>">
				</div>
				<div class="form-group">
					<label>City</label>
					<input type="text" class="form-control" id="form_city" placeholder="City" name="city" value="<?= $orders['city'] ?>">
				</div>
				<div class="form-group">
					<label>State</label>
					<input type="text" class="form-control" id="form_state" placeholder="State" name="state" value="<?= $orders['state'] ?>">
				</div>
				<div class="form-group">
					<label>Postcode</label>
					<input type="text" class="form-control" id="form_postcode" placeholder="Postcode" name="postcode" value="<?= $orders['postcode'] ?>">
				</div>
			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</section>
