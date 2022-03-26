<!-- Page Heading -->
<div id="content">
    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <h1 class="h3 mb-2 text-gray-800">List of Category</h1>

                <div class="card-header py-3">
                    <a href="<?php echo base_url() ?>admin/category/insert" class="btn btn-success btn-sm">
                        <i class="icon-plus"></i> New
                    </a>
                    <a href="<?php echo base_url() ?>admin/category/recyclebin" class="btn btn-danger btn-sm">
                        <i class="icon-plus"></i> Recycle Bin (<?php $total = $this->Mcategory->category_trash_count();
                                                                echo $total; ?>)
                    </a>
                </div>


                <hr>

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Level</th>

                                <th>Date Created</th>
                                <th>Status</th>


                                <th colspan="2">Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php foreach ($list as $row) : ?>

                                <tr>
                                    <td><?php echo $row['id'] ?></td>

                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['level'] ?></td>

                                    <td><?php echo $row['created_at'] ?></td>
                                    <td>
                                        <a href="<?php echo base_url() ?>admin/category/status/<?php echo $row['id'] ?>">
                                            <?php if ($row['status'] == 1) : ?>
                                                <button class="btn btn-success btn-circle">
                                                    <i class="fas fa-check"></i>
                                                </button> <?php else : ?>
                                                <button class="btn btn-warning btn-circle">
                                                    <i class="fas fa-exclamation-triangle"></i>
                                                </button> <?php endif; ?>
                                    </td>

                                    <td>
                                        <a href="<?php echo base_url() ?>admin/category/update/<?php echo $row['id'] ?>" type="button" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                    <td>

                                        <a href="<?php echo base_url() ?>admin/category/trash/<?php echo $row['id'] ?>" type="button" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table>

                </div>

            </div>
            <div class="row" style="margin: 0 auto; font-size:17px; ">
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