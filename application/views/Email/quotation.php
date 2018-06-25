<body>
	<table width="60%" style="border:1px solid #ddd;margin:0px auto;max-width:700px; background-color : white;">
		<tbody>
			<tr>
				<td style="padding:20px">
					<div class="m_2951267448996112857m_-4192277493023172721m_1633637225373423250tag-box m_2951267448996112857m_-4192277493023172721m_1633637225373423250tag-box-v3">
						<table>
							<tbody>
								<tr>
									<td>
										<strong>Order No</strong> :
										<?php
            if (!empty($orders["order_id"])) {
                echo ($orders["order_id"]);
            }
            ?>
									</td>
								</tr>
								<tr>
									<td>
										<strong>Name:</strong>
										<?php
            if (!empty($user["name"])) {
                echo ($user["name"]);
            }
            ?>
									</td>
								</tr>
								<tr>
									<td>
										<strong>Email:</strong>
										<?php
            if (!empty($user["email"])) {
                echo ($user["email"]);
            }
            ?>
									</td>
								</tr>
								<tr>
									<td>
										<strong>Contact Number:</strong>
										<?php
            if (!empty($user["contact"])) {
                echo ($user["contact"]);
            }
            ?>
									</td>
								</tr>
								<tr>
									<td>
										<strong>Date</strong> :
										<?php
            if (!empty($orders["created_date"])) {
                echo (date("jS F Y", strtotime($orders["created_date"])));
            }
            ?>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</td>
				<td>
					<div class="m_2951267448996112857m_-4192277493023172721m_1633637225373423250tag-box m_2951267448996112857m_-4192277493023172721m_1633637225373423250tag-box-v3">
						<table>
							<tbody>
								<tr>
									<td>
										<b>Address</b>
									</td>
								</tr>
								<tr>
									<td>
										<?php
            if (!empty($orders["address1"])) {
                echo ($orders["address1"]);
            }
            ?>
											<?php
            if (!empty($orders["address2"])) {
                echo ($orders["address2"]);
            }
            ?>
									</td>
								</tr>
								<tr>
									<td>
										<?php
            if (!empty($orders["city"])) {
                echo ($orders["city"]);
            }
            ?>,
											<?php
            if (!empty($orders["state"])) {
                echo ($orders["state"]);
            }
            ?>
									</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>
										<?php
            if (!empty($orders["postcode"])) {
                echo ($orders["postcode"]);
            }
            ?>
									</td>
								</tr>
								<tr>
									<td>
										<br/>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</td>
			</tr>


			<tr>
				<td style="padding:20px 5px 0px;text-align:center;border-top:1px solid #ddd" colspan="2">
					<h3>Quotation Details</h3>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="padding:0px">
					<table width="100%" style="border-collapse:collapse">
						<thead>
							<tr>
								<th style="padding:10px;text-align:left;border:1px solid #ddd">No.</th>
								<th style="padding:10px;text-align:left;border:1px solid #ddd">Product Details</th>
								<th style="padding:10px;text-align:left;border:1px solid #ddd">Price</th>
							</tr>
						</thead>
						<tbody>
                            <?php 
                            $total = 0;
                            for ($i = 0; $i < count($orders['details']); $i++) {
                                ?>
							<tr>
								<td style="padding:10px;text-align:right;border:1px solid #ddd;vertical-align:top;">
									<?= $i + 1; ?>
								</td>
								<td style="padding:10px;text-align:left;border:1px solid #ddd">
                                    <?= $orders['details'][$i]['name']; ?>
                                    <ul>
                                    <?php 
                                    $details = json_decode($orders["details"][$i]['options']);
                                    foreach ($details as $key => $opt) {
                                        ?>
                                        <li><?= $key; ?> : <?= $opt->label; ?></li>
                                    <?php

                                }
                                ?>
                                    </ul>
								</td>
								<td style="padding:10px;text-align:left;border:1px solid #ddd;vertical-align:top;">
									RM <?= number_format($orders['details'][$i]['total'], 2); ?>
								</td>
							</tr>
                            <?php
                            $total += $total + $orders['details'][$i]['total'];
                        }
                        ?>
                            <tr>
                                <td colspan="2" style="padding:10px;text-align:right;border:1px solid #ddd;vertical-align:top;">
                                    Total:
                                </td>
                                <td style="padding:10px;text-align:left;border:1px solid #ddd;vertical-align:top;">
                                    RM <?= number_format($total, 2) ?>
                                </td>
                            </tr>
						</tbody>
					</table>
				</td>
				<td>
				</td>
			</tr>

			<tr>
				<td colspan="2" style="text-align:right;padding-right:20px;vertical-align:text-top;padding-top:20px">
					<?php
    if (isset($payment_description)) {
        echo ($payment_description);
    }
    ?>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="height : 75px; text-align : center; border-top:1px solid #ddd">
					<p>www.furniture.com</p>
				</td>
			</tr>
		</tbody>
	</table>
</body>