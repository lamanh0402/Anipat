

<!-- Page Heading -->
<div id="content">
    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <h1 class="h3 mb-2 text-gray-800">Order save</h1>

                <div class="card-header py-3">
                    <a href="admin/orders" class="btn btn-primary">
                      Exit
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
								<th class="text-center" >Status</th>


								<th colspan="2">Action</th>
							</tr>
                            </tr>
                        </thead>


                        <tbody>
						<?php foreach ($list as $val):
												$name = $this->Mcustomer->customer_detail($val['customerid']);?>
												<tr>
												<td class="text-center"><?php echo $val['id'] ?></td>
													<td class="text-center"><?php echo $val['orderCode'] ?></td>
													<td><?php echo $name['fullname']; ?></td>
													<td><?php echo number_format($val['money']); ?>₫</td>
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
													<td class="text-center">
														<a class="btn btn-info btn-sm" href="<?php echo base_url() ?>admin/orders/view/<?php echo $val['id'] ?>" role = "button">
															<span class="glyphicon glyphicon-eye-open"></span> View 
														</a>
														<a class="btn btn-warning btn-sm" href="admin/orders/restore/<?php echo $val['id'] ?>" role = "button">
															<span class="glyphicon glyphicon-edit"></span> Restore
														</a>
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