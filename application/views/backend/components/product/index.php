<div id="content">
    <div class="container-fluid">
        <div class="card shadow mb-4">

            <div class="card-body">
                <h1 class="h3 mb-2 text-gray-800">List of Products </h1>

                <div class="card-header py-3">
                    <a href="<?php echo base_url() ?>/admin/product/insert" class="btn btn-success btn-sm"><i class="icon-plus"></i> New
                    </a>
                    <a href="<?php echo base_url() ?>/admin/product/recyclebin" class="btn btn-danger btn-sm"> Recycle Bin (<?php $total = $this->Mproduct->product_trash_count();
                                                                                                                            echo $total; ?>)
                    </a>
                </div>

                <hr>

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr>

                                <th>ID</th>
                                <th width="250px">Product Name</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>In stock</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Status</th>
                                <th>Import goods</th>
                                <th>Date Post</th>
                                <th colspan="2">Action</th>

                            </tr>
                        </thead>


                        <tbody>
                            <?php foreach ($list as $row) : ?>



                                <tr>
                                    <td><?php echo $row['id'] ?></td>

                                    <td><?php echo $row['name'] ?> </td>

                                    <td>
                                        <img height="75px" width="75px" src="<?php echo base_url() ?>/public/uploads/product/<?php echo $row['avatar'] ?>" alt="">
                                    </td>

                                    <?php
                                    $namecat = $this->Mcategory->category_name($row['catid']);
                                    ?>
                                    <td><?php echo $namecat ?></td>
                                    <td class="text-center"> <?php echo $row['number'] - $row['number_buy'] ?></td>

                                    <td> <?php echo $row['price'] ?></td>

                                    <td><?php echo $row['sale'] ?>% </td>



                                    <td>
                                        <a href="<?php echo base_url() ?>admin/product/status/<?php echo $row['id'] ?>">
                                            <?php if ($row['status'] == 1) : ?>
                                                <button class="btn btn-success btn-circle">
                                                    <i class="fas fa-check"></i>
                                                </button> <?php else : ?>
                                                <button class="btn btn-warning btn-circle">
                                                    <i class="fas fa-exclamation-triangle"></i>
                                                </button> <?php endif; ?>
                                    </td>
                                    <td class="text-center"><a class="btn btn-info btn-sm" href="admin/product/import/<?php echo $row['id'] ?>">
                                            <span class="glyphicon glyphicon-trash"></span>Import goods
                                        </a>
                                    </td>
                                    <td><?php echo $row['created'] ?> </td>

                                    <td>
                                        <a href="<?php echo base_url() ?>/admin/product/update/<?php echo $row['id'] ?>" type="button" class="btn btn-warning text-xs">Edit</a>
                                    </td>
                                    <td>

                                        <a href="<?php echo base_url() ?>/admin/product/trash/<?php echo $row['id'] ?>" type="button" class="btn btn-danger text-xs">Delete</a>
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