<html>
<body>
	<div style="color: #000;">
		<p>Hi, <?php echo $customer['fullname']?>,</p>
		<p>Thank you for ordering at <strong>Anipat Store</strong>!</p>
		<p>Your order has been received, we will contact you shortly.</p>
		<div>
			<div style="font-size:18px;padding-top:10px"><strong>Customer information</strong></div>
			<table style="width:100%;">
				<tbody>
					<tr>
						<td style="border-left:1px solid #d7d7d7;border-right:1px solid #d7d7d7;border-bottom:1px solid #d7d7d7;padding:5px 10px">
							<table style="width:100%">
								<tbody>
									<tr>
										<td>Fullname:</td>
										<td><?php echo $order['fullname'] ?></td>
									</tr>
									<tr>
										<td>Email:</td>
										<td><?php echo $customer['email'] ?></td>
									</tr>
									<tr>
										<td>Phone:</td>
										<td><?php echo $order['phone'] ?></td>
									</tr>
									<tr>
										<td>Address:</td>
										<td>
											<?php echo $order['address'] ?>, <?php echo $district; ?>, <?php echo $province; ?> 
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div>
			<div style="font-size:18px;padding-top:10px"><strong>Order Information</strong></div>
			<table>
				<tbody>
					<tr>
						<td>Order code: <strong>#<?php echo $order['orderCode'] ?></strong></td>
						<td style="padding-left:40px">Date created: <?php echo $order['orderdate'] ?></td>
					</tr>
				</tbody>
			</table>
			<table style="width:100%;border-collapse:collapse">
				<thead>
					<tr style="border:1px solid #d7d7d7;background-color:#f8f8f8">
						<th style="text-align:left;padding:5px 10px"><strong>Product</strong></th>
						<th style="text-align:center;padding:5px 10px"><strong>Quantity</strong></th>
						<th style="text-align:center;padding:5px 10px"><strong>Price</strong></th>
						<th style="text-align:right;padding:5px 10px"><strong>Total</strong></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$total = 0;
					foreach ($orderDetail as $value) :?>
						<tr style="border:1px solid #d7d7d7">
							<td><?php echo $value['name']; ?></td>
							<td style="text-align:center;padding:5px 10px"><?php echo $value['count'] ?></td>
							<td style="padding:5px 10px;text-align:center;"><?php echo number_format($value['priceorder']-($value['sale']*$value['priceorder']/100)) ?> VND</td>
							<td style="padding:5px 10px;text-align:right">
								<?php 
								$price = ($value['priceorder']-($value['sale']*$value['priceorder']/100)) * $value['count'];
								echo number_format($price);
								$total += $price;
								?>
							VNĐ</td>
						</tr>

					<?php endforeach; ?>
					<tr style="border:1px solid #d7d7d7">
						<td colspan="2">&nbsp;</td>
						<td colspan="2">
							<table style="width:100%">
								<tbody>
									<tr>
										<td><strong>Total order:</strong></td>
										<td style="text-align:right"><?php echo  number_format($total) ?> VND</td>
									</tr>
									<tr>
										<td><strong>Shipping fee:</strong></td>
										<td style="text-align:right"><?php echo  number_format($priceShip) ?> VND</td>
									</tr>
									<tr>
										<td><strong>Voucher:</strong></td>
										<td style="text-align:right">- <?php echo  number_format($coupon) ?> VND</td>
									</tr>
									<tr>
										<td><strong>Total payment:</strong></td>
										<td style="text-align:right color: red; font-size: 19px;"><?php echo number_format($order['money']) ?> VND</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<p><strong>Method of payments: </strong>Payment on delivery (COD)</p>
	</div>
</div>
</body>
</html>