
<!--breadcrumb area start-->
<div class="breadcrumb_container" style="background-image: url(<?php echo base_url() ?>/public/img/banner.png);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav>
                    <ul>
                        <li>
                            <a href="<?php echo base_url() ?>">Home |</a>
                        </li>
                        <li> <a href="<?php echo base_url() ?>">My Account |</a></li>
						<li>Order details </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb area end-->

<div class="container order-page" style="padding:80px 0; ">

<div class="col-sm-8" style="margin: 0 auto">
<h4 style="font-weight:700; border-bottom: 3px solid #78a206;    display: inline-block; font-size:22px; margin-bottom:20px">Order Information</h4>

			<div class="general__title">
			<div class="content-order" style="font-size:15px">
				<p style="font-size:15px"> ID Order : #<?php echo $info['orderCode'] ?></p>
				<p style="font-size:15px"> Fullname : <?php echo $info['fullname'] ?></p>
				<p style="font-size:15px"> Phone : <?php echo $info['phone'] ?></p>
				<p style="font-size:15px"> Time Order : <?php echo $info['orderdate'] ?></p>
				<p style="font-size:15px"> Delivery address : <?php echo $info['address'] ?>, <?php echo $this->Mdistrict->district_name($info['district']); ?>, <?php echo $this->Mprovince->province_name($info['province']);?></p>
			</div>
		</div>
	<div class="general__title">
	<h4 style="font-weight:700; border-bottom: 3px solid #78a206;    display: inline-block; font-size:22px; margin:20px 0 35px 0">Order details</h4>
	</div>
	<div class="table-responsive">
		<fieldset>
			<table class="table table-bordered tb-detail-or">
				<thead>
					<tr class="">
						<th>Product</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total amount</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($row as $value) :?>
						<tr>
							<td><a href="<?php echo $value['alias'] ?>"><?php echo $value['name'] ?></a></td>
							<td><?php echo number_format($value['priceorder']) ?> VND</td>
							<td><?php echo $value['count'] ?></td>
							<td><?php echo number_format($value['priceorder']*$value['count']) ?> VND</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</fieldset>
	</div>
	<div class="or-detail-c">
	<h4 style="font-weight:700; border-bottom: 3px solid #78a206;    display: inline-block; font-size:20px; margin:20px 0">Total Payment</h4>

	<div class="row table-responsive">
                    <div class="col-lg-5 col-sm-5 col-md-5">
                        <div class="cart_totals  text-left">
						<?php  
							$priceShip = $info['price_ship'];
							$total=$info['money'] - $info['price_ship'];
							?>
                            <div class="cart-subtotal">
                                <h5 style="font-size:16px">Total order</h5>
                                <span><?php echo number_format($total) ?> VND</span>
                            </div>
                            <div class="cart-subtotal">
                                <h5 style="font-size:16px">Shipping fee</h5>
                                <span><?php echo number_format($priceShip) ?> VND</span>
                            </div>
							<?php
						if($info['coupon'] != 0 ){
							echo ' <div class="cart-subtotal">
							<h5 style="font-size:16px">Voucher :</h5>
							<span>-'.number_format($info['coupon']).' VND</span>
						</div>';
						}

						?>

                            <div class="order-total" style="color: red">
                                <h5 style="font-size:16px"><strong>Total</strong> </h5>
                                <span style="font-size:16px"><strong><?php echo number_format($info['money']) ?> VND </strong>
                                </span>

                            </div>
                           
                          
                            </div>
                        </div>
                    </div>
                </div>
		
		<div class="col-xs-12">
			<button class="btn"><a href="javascript:;" onclick="window.history.go(-1);" class="viewMore pull-left" style="font-size: 15px;"><i class="fa fa-angle-left" aria-hidden="true"></i> Back to previous page</a></button>
		</div>
	</div>
</div>
</div>