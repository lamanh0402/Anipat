

<!-- Page Heading -->
<div id="content">
    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <h1 class="h3 mb-2 text-gray-800">List of Customers</h1>

                <div class="card-header py-3">
                   
					<a href="<?php echo base_url() ?>admin/customer/recyclebin" class="btn btn-danger btn-sm">
                        <i class="icon-plus"></i> Recycle Bin (<?php $total=$this->Mcustomer->customer_trash_count(); echo $total; ?>)
                    </a>
                </div>


                <hr>

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>

                                <th>Phone</th>


                                <th colspan="2">Action</th>
                            </tr>
                        </thead>


                        <tbody>
						<?php foreach ($list as $row):?>

                                <tr>
                                    <td><?php echo $row['id'] ?></td>

                                    <td><?php echo $row['fullname'] ?></td>
                                    <td><?php echo $row['email'] ?></td>

                                    <td><?php echo $row['phone'] ?></td>
                                
									
                                    <td>
                                        <a href="<?php echo base_url() ?>admin/customer/update/<?php echo $row['id'] ?>" type="button" class="btn btn-info btn-sm">View</a>
                                    </td>
                                    <td>

                                        <a href="<?php echo base_url() ?>admin/customer/trash/<?php echo $row['id'] ?>" type="button" class="btn btn-danger btn-sm">Delete</a>
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