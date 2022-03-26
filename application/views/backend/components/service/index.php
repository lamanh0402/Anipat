


<div id="content">

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-body">
                <h1 class="h3 mb-2 text-gray-800">List of Services </h1>

                <div class="card-header py-3">
                    <a href="<?php echo base_url() ?>/admin/service/insert" class="btn btn-success btn-sm"><i class="icon-plus"></i> New
                    </a>
					<a href="<?php echo base_url() ?>/admin/service/recyclebin" class="btn btn-danger btn-sm"><i class="icon-plus"></i> Recycle bin (<?php $total=$this->Mservice->service_trash_count(); echo $total; ?>)
                    </a>
                </div>

                <hr>

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th width="400px">Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th colspan="2">Action</th>


                            </tr>
                        </thead>


                        <tbody>

						<?php foreach ($list as $row):?>



                                <tr>
                                    <td><?php echo $row['id']  ?></td>

                                    <td><?php echo $row['name'] ?> </td>


                                    <td>
                                        <img height="85px" width="85px" src="public/uploads/service/<?php echo $row['img'] ?>" alt="">
                                    </td>

                                    <td>
									<a href="<?php echo base_url() ?>admin/service/status/<?php echo $row['id'] ?>">
															<?php if($row['status']==1):?>
																<button class="btn btn-success btn-circle">
                                        <i class="fas fa-check"></i>
                                    </button>																<?php else: ?>
										<button class="btn btn-warning btn-circle">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </button>	
									<?php endif; ?>                                    </td>


                                    <td>
                                        <a href="<?php echo base_url() ?>/admin/service/update/<?php echo $row['id'] ?>" type="button" class="btn btn-warning btn-sm">Edit</a>
									</td>
									<td>

                                        <a href="<?php echo base_url() ?>/admin/service/trash/<?php echo $row['id'] ?>" type="button" class="btn btn-danger btn-sm">Delete</a>
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
    </div>

</div>