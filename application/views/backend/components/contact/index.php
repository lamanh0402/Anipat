

<!-- Page Heading -->
<div id="content">
    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <h1 class="h3 mb-2 text-gray-800">Customer Contact List</h1>

                <div class="card-header py-3">
                  
					<a href="<?php echo base_url() ?>admin/contact/recyclebin" class="btn btn-danger btn-sm">
                        <i class="icon-plus"></i> Recycle Bin (<?php $total=$this->Mcontact->contact_trash_count(); echo $total; ?>)
                    </a>
                </div>


                <hr>

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Sent date</th>

                                <th>Email</th>
                                <th>Title</th>

                                <th>Status</th>


                                <th colspan="2">Action</th>
                            </tr>
                        </thead>


                        <tbody>
						<?php foreach ($list as $row):?>

                                <tr>
								<td class="text-center"><?php echo $row['id'] ?></td>
												<td class="text-center"><?php echo $row['fullname']?></td>
												<td class="text-center"><?php echo $row['created_at'] ?></td>
												<td class="text-center"><?php echo $row['email'] ?></td>
												<td class="text-center"><?php echo $row['title'] ?></td>
												<td class="text-center">
													<a href="<?php echo base_url() ?>admin/contact/status/<?php echo $row['id'] ?>">
														<?php if($row['status']==0):?>
                                                                <span class="fa fa-eye-slash maudo"  data-toggle="tooltip" data-placement="top" title="Not seen"></span>
	

															<?php else: ?>
																<span class="fa fa-eye mauxanh18"  data-toggle="tooltip" data-placement="top" title="Seen"></span>	
															<?php endif; ?>
														</a>
													</td>
									
													<td class="text-center">
														<a class="btn btn-info btn-sm" href="<?php echo base_url() ?>admin/contact/detail/<?php echo $row['id'] ?>" role = "button">
															<span class="glyphicon glyphicon-trash"></span>View
														</a>
													</td>
													<td class="text-center">
														<a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>admin/contact/trash/<?php echo $row['id'] ?>" onclick="return confirm('Xác nhận xóa liên hệ này ?')" role = "button">
															<span class="glyphicon glyphicon-trash"></span>Delete
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