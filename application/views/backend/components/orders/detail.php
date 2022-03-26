

<div id="content">

    <div class="container-fluid ">

        <div class="card shadow mb-4">

            <div class="card-body">

                <div class="table-reponsive">

				<div class="control-group" style="text-align:right">
                                <div class="controls">
                                   
                                    <a href="<?php echo base_url() ?>/admin/orders" class="btn btn-danger  btn-sm border-left-info">Cancel</a>
                                </div>
                            </div>

                    <hr>

                    <div class="widget-content nopadding">

					<form action="admin/orders/detail/<?php echo $id; ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            <h6>&nbsp;</h6>
							<?php

$order = $this->Morders->orders_detail($id);
$customer = $this->Mcustomer->customer_detail($order['customerid']);
$data = $this->Morderdetail->orderdetail_orderid($id);

?>       
<h3 class="text-center" style="color: red; font-weight:bold">Order detail</h3>
</br>
								<h6>Customer name : <b><?php echo $order['fullname']; ?></b></h6>
								<h6>Phone : <i><?php echo $order['phone']; ?></i></h6>
								<h6>Time Order : <i><?php echo $order['orderdate']; ?></i></h6>
								<h6>Address: <?php echo $order['address']; ?>,
									<?php echo $this->Mdistrict->district_name($order['district']); ?>,
									<?php echo $this->Mprovince->province_name($order['province']); ?>
								</h6>
								<h6>Order Code : <b><?php echo $order['orderCode']; ?></b></h6>
								<br />                     
								
								<div class="table-responsive">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

	<thead>
		<tr>
			<th></th>
			<th>Name Product</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Total Price</th>


		</tr>
	</thead>


	<tbody>
	<?php 
											$stt = 0; $total = 0;
											foreach ($data as $row) :
												$product = $this->Mproduct->product_detail($row['productid']);												?>
												<tr>
													<td class="text-center"><?php $stt += 1; echo $stt; ?></td>
													<td><?php echo $product['name']; ?></td>
													<td class="text-center"><?php echo $row['count']; ?></td>
													<td><?php echo number_format($row['price']); ?></td>

													<td class="text-right">
														<?php 
														$price = $row['price'] * $row['count'];
														echo number_format($price);
														$total += $price;
														$price_ship= $order['price_ship'];;
														$coupon = $order['coupon'];
														?>
													</td>
												</tr>
											<?php endforeach; ?>

											<tr>
												<td colspan="6" class="text-right" style="border: none; font-size: 1em; font-weight:bold"><i>Total order :</i> <?php echo number_format($total); ?></td>
											</tr>
											<?php 
											if($coupon != 0)
											{
												echo '<tr>
												<td colspan="6" class="text-right" style="border: none; font-size: 1em;font-weight:bold"><i>Voucher discount : </i>'.number_format($coupon).'</td>
											</tr>';
											}
											?>
											<tr>
												<td colspan="6" class="text-right" style="border: none; font-size: 1em;font-weight:bold"><i>Shipping price : </i>
													<?php echo number_format($price_ship); ?>
												</td>
											</tr>
											<tr>
												<td colspan="6" class="text-right" style="border: none; color: red; font-size: 1.2em;font-weight:bold">Total : <?php echo number_format($total+$price_ship-$coupon);?></td>
											</tr>
											
												
										</tbody>
									</table>
									<div class="text-right" colspan="6">
													<a class="btn btn-primary btn-md" role="button" onclick="window.print()">
														<span class="glyphicon glyphicon-print"></span> Print
													</a>
												</div>

                            <h6>&nbsp;</h6>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
    
</div>