<section class="content-header">
	<h1>
		Add FAQ category
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="<?= base_url() ?>Faq_category">
				<i class="fa fa-folder-open"></i> FAQ category</a>
		</li>
		<li>
			<a href="<?= base_url() ?>Faq_category/add"> Add FAQ category</a>
		</li>
	</ol>
</section>
<br>
<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">FAQ category</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" method="POST" action="<?= base_url()?>faq_category/add">
			<div class="box-body">
				<div class="form-group">
					<label>FAQ Category</label>
					<input type="text" class="form-control" placeholder="FAQ Category" name="faq_category" required>
				</div>
			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</section>
