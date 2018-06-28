<section class="content-header">
	<h1>
		<?= $faq_category['faq_category'] ?>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="<?= base_url() ?>Faq_category">
				<i class="fa fa-users"></i> FAQ category</a>
		</li>
		<li>
			<a href="<?= base_url() ?>Faq_category/detail/<?= $faq_category['faq_category_id'] ?>">
				<?= $faq_category['faq_category'] ?>
			</a>
		</li>
	</ol>
</section>
<br>
<section class="content">
	<div class="col-md-6 col-xs-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">
					<?= $faq_category['faq_category'] ?>
				</h3>
				<a href="<?php echo site_url('faq_category/edit') . '/' . $faq_category['faq_category_id'] ?>" class='btn btn-default pull-right'>
					<i class='fa fa-edit'></i> Edit</a>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<div class="box-body">
				<table class="formTable">
					<tr>
						<th>FAQ Category</th>
						<td>:
							<?= $faq_category["faq_category"] ?>
						</td>
					</tr>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
	</div>
</section>
