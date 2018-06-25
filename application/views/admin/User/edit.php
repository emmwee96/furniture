<section class="content-header">
	<h1>
		Edit user
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="<?= base_url() ?>User">
				<i class="fa fa-users"></i> User</a>
		</li>
		<li>
			<a href="<?= base_url() ?>User/edit/<?= $user['user_id'] ?>"> Edit user</a>
		</li>
	</ol>
</section>
<br>
<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">User</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" method="POST" action="<?= base_url() ?>user/edit/<?= $user['user_id']?>">
			<div class="box-body">
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" id="form_name" placeholder="Name" name="name" required value="<?= $user['name'] ?>">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" id="form_email" placeholder="Email" name="email" required value="<?= $user['email'] ?>">
				</div>
				<div class="form-group">
					<label>Contact Number</label>
					<input type="text" class="form-control" id="form_contact" placeholder="Contact Number" name="contact" required value="<?= $user['contact'] ?>">
				</div>
			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</section>
