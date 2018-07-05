<br />
<div id="user_add_content">
	<div class="mediumBox">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
				<div class="box box-default">
					<div class="box-header">
						Edit Product
					</div>
					<div class="box-body">

						<div class="alert alert-danger hidden user_form_alert" id="form_alert">

						</div>
						<div class="nav-tabs-custom">
							<ul class="nav nav-tabs" id="tabs">
								<li class="active">
									<a href="#details" data-toggle="tab">Product Detail</a>
								</li>
							</ul>
						</div>
						<form id="product_form" method="POST" action="<?php echo site_url('Product/edit_details/' . $product['custom_product_id']); ?>" enctype="multipart/form-data">
							<div class="tab-content">
								<div class="tab-pane active" id="details">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
											<label>Name</label>
											<input type="text" class="form-control" required name="name" placeholder="name" id="form_name" value="<?= $product['name'] ?>">
										</div>
										<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
											<label>Banner</label>
											<input type="file" name="banner" id="form_banner">
										</div>
									</div>
									<br/>
									<input type="submit" class="btn btn-flat btn-info pull-right" value="edit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="loader-wrapper" class="loader-wrapper hidden">
	<div class="loader">
	</div>
	<strong class="loader-font">Please wait...</strong>
</div>
<script>
	function form_submit(form) {
		$("#loader-wrapper").removeClass("hidden");
		var data = new FormData(form);
		var url = $(form).attr("action");
		$.ajax({
			url: url,
			data: data,
			processData: false,
			contentType: false,
			type: "POST",
			success: function (data) {
				if (data.status) {
					$("#loader-wrapper").addClass("hidden");
					$("body").loadingModal({
						text: "Successfully updated"
					});
					setTimeout(function () {
						window.location = "<?= site_url('Product/details/' . $product['custom_product_id']); ?>";
					}, 1500);
				} else {
					$("#loader-wrapper").addClass("hidden");
					$(".user_form_alert").html(data.message);
					$(".user_form_alert").removeClass("hidden");
				}
			},

			dataType: "JSON"
		});
	}

	$(document).ready(function () {
		var product_form = document.getElementById("product_form");

		product_form.addEventListener("submit", function (e) {
			e.preventDefault();
			form_submit(product_form);
		});

		var basic_elements = ["form_name", "form_parent_id", "form_discount_price", "form_weight", "form_description"];

		for (var i = 0; i < basic_elements.length; i++) {
			document.getElementById(basic_elements[i]).addEventListener("invalid", function () {
				$('#tabs a[href="#basic"]').tab('show');
				$("#" + basic_elements[i]).css("background-color", "#f7ada3");
			});
		}

	});
</script>