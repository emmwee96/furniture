<section class="content-header">
	<h1>
		Edit FAQ 
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="<?= base_url() ?>Faq">
				<i class="fa fa-users"></i> FAQ </a>
		</li>
		<li>
			<a href="<?= base_url() ?>Faq/edit/<?= $faq['faq_id'] ?>"> Edit FAQ </a>
		</li>
	</ol>
</section>
<br>
<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">FAQ </h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" method="POST" action="<?= base_url() ?>faq/edit/<?= $faq['faq_id']?>">
			<div class="box-body">
			<div class="form-group">
					<label>Title </label>
					<input type="text" class="form-control" placeholder="Title " name="title" required value="<?= $faq['title'] ?>">
				</div>
				<div class="form-group">
					<label>FAQ Category </label>
					<select class="form-control" name="faq_category_id">
						<?php
					foreach ($faq_category as $row) {
						?>
							<option value="<?= $row['faq_category_id'] ?>" <?php if ($faq['faq_category_id'] == $row['faq_category_id']) echo "selected" ?>>
								<?= $row['faq_category'] ?>
							</option>
							<?php

						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Content </label>
					<textarea id="summernote" name="content"><?= $faq['content'] ?></textarea>
				</div>
			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</section>

<script>
	$(document).ready(function() {
  		$('#summernote').summernote({
        	height: 300
		});
	});
</script>
