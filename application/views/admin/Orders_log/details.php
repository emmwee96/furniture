<br />
<div class="mediumBox">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
			<div class="box box-info">
				<div class="box-header agent-panel">
					<h4 class="pull-left">ORDER NO :
						<?= $orders['order_id'] ?>
					</h4>
				</div>
				<div class="box-body">

					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs" id="tabs">
							<li class="active">
								<a href="#login" data-toggle="tab">Info</a>

							</li>

						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane active" id="login">
							<h4>Modified Details </h4>
							<table class='formTable'>
								<tr>
									<th>Modified By</th>
									<td>:
										<?= $orders['modified_user']; ?>
									</td>
								</tr>
								<tr>
									<th>Modified Date</th>
									<td>:
										<?= $orders['modified_date']; ?>
									</td>
								</tr>
							</table>
							<hr>
							<h4>User </h4>
							<table class='formTable'>
								<tr>
									<th>name</th>
									<td>:
										<?= $orders['name']; ?>
									</td>
								</tr>
								<tr>
									<th>email</th>
									<td>:
										<?= $user['email']; ?>
									</td>
								</tr>
								<tr>
									<th>contact</th>
									<td>:
										<?= $orders['contact']; ?>
									</td>
								</tr>

							</table>
							<hr>
							<h4>Order Details</h4>
							<table class='formTable'>
								<tr>
									<th>Date</th>
									<td>:
										<?= $orders['created_date']; ?>
									</td>
								</tr>
								<tr>
									<th>Grand Total</th>
									<td>: RM
										<?= number_format($orders['total'], 2); ?>
									</td>
								</tr>
								<tr>
									<th>Address </th>
									<td>:
										<?= $orders['address1']; ?>
									</td>
								</tr>
								<tr>
									<th> </th>
									<td>
										<?= $orders['address2']; ?>
									</td>
								</tr>
								<tr>
									<th>Postcode </th>
									<td>:
										<?= $orders['postcode']; ?>
									</td>
								</tr>
								<tr>
									<th>State </th>
									<td>:
										<?= $orders['state']; ?>
									</td>
								</tr>
								<tr>
									<th>City </th>
									<td>:
										<?= $orders['city']; ?>
									</td>
								</tr>
								<tr>
									<th>Promo Code </th>
									<td>:
										<?= $orders['promo_code']; ?>
									</td>
								</tr>
							</table>
							<hr>
							<h4>Remarks</h4>
							<p>
								<?= $orders["remarks"] ?>
							</p>
							<hr>
							<h4>Admin Remarks</h4>
							<p>
								<?= $orders["admin_remarks"] ?>
							</p>
							<hr>
							<h4>Current Status :
								<?= $orders['status']; ?>
							</h4>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
			<div class="box box-info">
				<div class="box-header agent-panel">

					<h4 style="margin-left:20px;" class="pull-left">Details</h4>
				</div>
				<div class="box-body">

					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs" id="tabs">
							<li class="active">
								<a href="#login" data-toggle="tab">product</a>

							</li>

						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane active" id="login">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>No </th>
										<th>Description</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody>
									<?php 
                                    for ($i = 0; $i < count($orders['details']); $i++) { ?>

									<tr>
										<td>
											<?= $i + 1; ?>
										</td>
										<td>
											<?= $orders['details'][$i]['name']; ?>
										</td>
										<td>
											<?= $orders['details'][$i]['total']; ?>
										</td>
									</tr>
									<tr>
										<td></td>
										<td>Height :
											<?= $orders['details'][$i]['height']; ?> (mm)</td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td>Width :
											<?= $orders['details'][$i]['width']; ?> (mm)</td>
										<td></td>
									</tr>
									<?php 
                                        $details = json_decode($orders["details"][$i]['options']);
                                        foreach ($details as $key => $opt) { ?>
									<tr>
										<td></td>
										<td>
											<?= $opt->name; ?> :
												<?= $opt->label; ?>
										</td>
										<td></td>
									</tr>
									<?php 
                                    } ?>
									<?php 
                                    } ?>

								</tbody>
							</table>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<script>
	<?php
    if ($this->session->flashdata("quotation")) {
        ?>
	$(document).ready(function () {
		alert("quotation sent");
	});
	<?php

    }
    ?>
</script>