<section class="content-header">
	<h1>
		Edit FAQ category
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="<?= base_url() ?>Faq_category">
				<i class="fa fa-users"></i> FAQ category</a>
		</li>
		<li>
			<a href="<?= base_url() ?>Faq_category/edit/<?= $faq_category['faq_category_id'] ?>"> Edit FAQ category</a>
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
		<form role="form" method="POST" action="<?= base_url() ?>faq_category/edit/<?= $faq_category['faq_category_id']?>">
			<div class="box-body">
				<div class="form-group">
					<label>FAQ Category</label>
					<input type="text" class="form-control"  placeholder="FAQ Category" name="faq_category" required value="<?= $faq_category['faq_category'] ?>">
				</div>
			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</section>
