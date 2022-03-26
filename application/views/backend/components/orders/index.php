<!-- Page Heading -->
<div id="content">
	<div class="container-fluid">


		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-body">

				<h1 class="h3 mb-2 text-gray-800">Orders List</h1>

				<div class="card-header py-3">

					<a href="<?php echo base_url() ?>admin/orders/recyclebin" class="btn btn-danger btn-sm">
						<i class="icon-plus"></i> Orders saved (<?php $total = $this->Morders->orders_trash_count();
																echo $total; ?>)
					</a>
				</div>


				<hr>

				<div class="table-responsive">

					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

						<thead>
							<tr>
								<th>ID</th>
								<th>Code</th>
								<th>Customer</th>
								<th>Total bill</th>
								<th>Invoice creation date</th>
								<th class="text-center" colspan="2">Order processing</th>
								<th class="text-center">Status</th>


								<th colspan="2">Action</th>
							</tr>
						</thead>


						<tbody>
							<?php foreach ($list as $val) : $name = $this->Mcustomer->customer_detail($val['customerid']); ?>

								<tr>
									<td><?php echo $val['id'] ?></td>

									<td class="text-center"><?php echo $val['orderCode'] ?></td>
									<td><?php echo $val['fullname']; ?></td>
									<td><?php echo number_format($val['money']); ?></td>
									<td><?php echo $val['orderdate']; ?></td>
									<td style="text-align: center; color: red; font-weight:bold">
										<?php
										switch ($val['status']) {
											case '0':
												echo 'Waiting for approval';
												break;
											case '1':
												echo 'Delivery in progress';
												break;
											case '2':
												echo 'Delivered';
												break;
											case '3':
												echo 'Customer canceled';
												break;
											case '4':
												echo 'Cancelled';
												break;
										}
										?>
									</td>
									<td style="text-align: center;">
										<?php if ($val['status'] == 1) : ?>
											<a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>admin/orders/status/<?php echo $val['id'] ?>"  role="button">
											Payment confirmation											</a>
				</div>
			<?php elseif ($val['status'] == 0) : ?>
				<a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>admin/orders/status/<?php echo $val['id'] ?>"  role="button">
				Browse orders				</a>
			<?php endif; ?>
			<td>
				<?php if ($val['status'] == 0 || $val['status'] == 1) : ?>
					<a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>admin/orders/cancelorder/<?php echo $val['id'] ?>"  role="button">
						Cancel </a>
				<?php endif; ?>
			</td>
			</td>
			</td>

			<td>
				<a class="btn btn-info btn-sm" href="<?php echo base_url() ?>admin/orders/detail/<?php echo $val['id'] ?>" role="button">View</a>
			</td>
			<td>

				<a class="btn btn-success btn-sm" href="<?php echo base_url() ?>admin/orders/trash/<?php echo $val['id'] ?>" role="button">Save </a>
			</td>
			</tr>

		<?php endforeach; ?>

		</tbody>

		</table>

			</div>

		</div>
		<div class="row" style="margin: 0 auto; font-size:17px">
                <div class="col-md-12 text-center">
                    <ul class="pagination">
                        <?php echo $strphantrang ?>
                    </ul>
                </div>
            </div>
	</div>
	<!-- /.container-fluid -->


</div>
</div>