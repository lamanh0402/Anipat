

<!-- Page Heading -->
<div id="content">
    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <h1 class="h3 mb-2 text-gray-800">Recycle Bin Contact </h1>

                <div class="card-header py-3">
                  
					<a href="<?php echo base_url() ?>admin/contact" class="btn btn-primary btn-sm">
                        <i class="icon-plus"></i> Exit
                    </a>
                </div>


                <hr>

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>

                                <th>Email</th>
                                <th>Title</th>

                                <th>Content</th>


                                <th colspan="2">Action</th>
                            </tr>
                        </thead>


                        <tbody>
						<?php foreach ($list as $row):?>

                                <tr>
								<td class="text-center"><?php echo $row['id'] ?></td>
												<td class="text-center"><?php echo $row['fullname']?></td>
												<td class="text-center"><?php echo $row['email'] ?></td>
												<td class="text-center"><?php echo $row['title'] ?></td>
												<td class="text-center"><?php echo $row['content'] ?></td>

												
									
													<td class="text-center">
														<a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>admin/contact/restore/<?php echo $row['id'] ?>" role = "button">
															<span class="glyphicon glyphicon-trash"></span>Restore
														</a>
													</td>
													<td class="text-center">
														<a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>admin/contact/delete/<?php echo $row['id'] ?>" onclick="return confirm('Xác nhận xóa liên hệ này ?')" role = "button">
															<span class="glyphicon glyphicon-trash"></span>Permanently deleted
														</a>
													</td>
                                </tr>

								<?php endforeach; ?>
                                
                        </tbody>

                    </table>

                </div>

            </div>
        </div>
        <!-- /.container-fluid -->

        
    </div>
</div>