<section class="content-header">
	<h1>
		Edit product
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="<?= base_url() ?>Product">
				<i class="fa fa-users"></i> Product</a>
		</li>
		<li>
			<a href="<?= base_url() ?>Product/details/<?= $product['custom_product_id']?>">
				<i class="fa fa-users"></i>
				<?= $product['name'] ?>
			</a>
		</li>
		<li>
			<a href="<?= base_url() ?>Product/edit_prices/<?= $product['custom_product_id'] ?>"> Edit product prices</a>
		</li>
	</ol>
</section>
<br>
<section class="content">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
			<div class="box box-default">
				<div class="box-header">
					Prices
				</div>
				<div class="box-body" id="family-tree-container">
					<h3>Options</h3>
					<div class="col-xs-12">
						<?php
                        foreach($selection_labels as $row){
                            ?>
							<div class="col-md-6 col-xs-12">
								<h4>
									<?= ucfirst($row['label']) ?>
								</h4>
								<hr>
								<?php
                                            foreach($row["options"] as $option_row){
                                                ?>
									<label>
										<?= ucfirst($option_row['label']) ?> Prices</label>
									<table class="formTable">
										<tr>
											<td>Standard Height w White PVC</td>
											<td>:
												<?= ($option_row['standard_white_pvc'] > 0)? "RM " . $option_row['standard_white_pvc'] : "-" ?>
											</td>
										</tr>
										<tr>
											<td>Standard Height w Color PVC</td>
											<td>:
												<?= ($option_row['standard_color_pvc'] > 0)? "RM " . $option_row['standard_color_pvc'] : "-" ?>
											</td>
										</tr>
										<tr>
											<td>Full Height w White PVC</td>
											<td>:
												<?= ($option_row['full_white_pvc'] > 0)? "RM " . $option_row['full_white_pvc'] : "-" ?>
											</td>
										</tr>
										<tr>
											<td>Full Height w Color PVC</td>
											<td>:
												<?= ($option_row['full_color_pvc'] > 0)? "RM " . $option_row['full_color_pvc'] : "-" ?>
											</td>
										</tr>
									</table>
									<br>
									<?php
                                            }
                                        ?>
										</table>
							</div>
							<?php
                        }
                    ?>
					</div>
					<h3>Add Ons</h3>
					<div class="col-xs-12">
						<?php
                        foreach($add_ons as $row){
                            ?>
							<div class="col-md-4 col-xs-12">
								<h4>
									<?= ucfirst($row['label']) ?>
								</h4>
								<hr>
								<table class="formTable">
									<tr>
										<td>Price</td>
										<td>:
											<?= "RM " . $row["value"]?>
										</td>
									</tr>
								</table>
							</div>
							<?php
                        }
                    ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>