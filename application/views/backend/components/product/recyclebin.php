

<!-- Page Heading -->
<div id="content">
    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <h1 class="h3 mb-2 text-gray-800">Product trash</h1>

                <div class="card-header py-3">
                    <a href="admin/product" class="btn btn-primary">
                      Exit
                    </a>
                </div>


                <hr>

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>


                        <tbody>
						<?php foreach ($list as $val): ?>

                                <tr>
                                    <td><?php echo $val['id'] ?></td>

                                    <td><?php echo $val['name'] ?></td>

                                    <td>                                       
                                         <img height="75px" width="75px" src="<?php echo base_url() ?>/public/uploads/product/<?php echo $val['avatar'] ?>" alt="">
</td>
                                    <td>
                                        <a href="<?php echo base_url() ?>/admin/product/restore/<?php echo $val['id'] ?>" type="button" class="btn btn-warning btn-sm">Restore</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url() ?>/admin/product/delete/<?php echo $val['id'] ?>" type="button" class="btn btn-danger btn-sm">Permanently Deleted</a>
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