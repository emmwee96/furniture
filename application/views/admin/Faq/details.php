<section class="content-header">
	<h1>
		<?= $faq['title'] ?>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="<?= base_url() ?>Faq">
				<i class="fa fa-users"></i> FAQ </a>
		</li>
		<li>
			<a href="<?= base_url() ?>Faq/detail/<?= $faq['faq_id'] ?>">
				<?= $faq['title'] ?>
			</a>
		</li>
	</ol>
</section>
<br>
<section class="content">
	<div class="row">
		<div class="col-md-6 col-xs-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">
						<?= $faq['title'] ?>
					</h3>
					<a href="<?php echo site_url('faq/edit') . '/' . $faq['faq_id'] ?>" class='btn btn-default pull-right'>
						<i class='fa fa-edit'></i> Edit</a>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<div class="box-body">
					<table class="formTable">
						<tr>
							<th>Title </th>
							<td>:
								<?= $faq["title"] ?>
							</td>
						</tr>
						<tr>
							<th>FAQ Category </th>
							<td>:
								<?= $faq["faq_category"] ?>
							</td>
						</tr>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">
						Content
					</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<div class="box-body">
					<?= $faq["content"] ?>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
</section>