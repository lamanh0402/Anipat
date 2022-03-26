<!-- Page Heading -->
<div id="content">
	<div class="container-fluid">


		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-body">

				<h1 class="h3 mb-2 text-gray-800">List of Discount Codes</h1>

				<div class="card-header py-3">
					<a href="<?php echo base_url() ?>admin/coupon/insert" class="btn btn-success btn-sm">
						<i class="icon-plus"></i> New
					</a>
					<a href="<?php echo base_url() ?>admin/coupon/recyclebin" class="btn btn-danger btn-sm">
						<i class="icon-plus"></i> Recycle Bin (<?php $total = $this->Mcoupon->coupon_trash_count();
																echo $total; ?>)
					</a>
				</div>


				<hr>

				<div class="table-responsive">

					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

						<thead>
							<tr>
								<th>ID</th>
								<th>Discount code</th>

								<th class="text-center">Amount reduced</th>
								<th class="text-center">Minimum order </br>amount applicable</th>
								<th class="text-center">Input limit</th>
								<th class="text-center">Entry deadline</th>

								<th>Status</th>
								<th colspan="2">Action</th>
							</tr>
						</thead>


						<tbody>
							<?php foreach ($list as $row) : ?>

								<tr>
									<td class="text-center"><?php echo $row['id'] ?></td>
									<td><?php echo $row['code'] ?></td>
									<td><?php echo number_format($row['discount'])  ?></td>
									<td><?php echo number_format($row['payment_limit']) ?></td>
									<td><?php if ($row['orders'] == 1)
											echo $row['limit_number'];
										else
											echo 'Automatic discount code';
										?>

									</td>
									<td><?php echo $row['expiration_date'] ?></td>
									<td>
										<a href="<?php echo base_url() ?>admin/coupon/status/<?php echo $row['id'] ?>">
											<?php if ($row['status'] == 1) : ?>
												<button class="btn btn-success btn-circle">
													<i class="fas fa-check"></i>
												</button> <?php else : ?>
												<button class="btn btn-warning btn-circle">
													<i class="fas fa-exclamation-triangle"></i>
												</button> <?php endif; ?>
									</td>

									<td>
										<a href="<?php echo base_url() ?>admin/coupon/update/<?php echo $row['id'] ?>" type="button" class="btn btn-warning btn-sm">Edit</a>
									</td>
									<td>

										<a href="<?php echo base_url() ?>admin/coupon/trash/<?php echo $row['id'] ?>" type="button" class="btn btn-danger btn-sm">Delete</a>
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