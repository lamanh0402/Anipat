<?php echo form_open('admin/customer/update/'.$row['id']); ?>

<div id="content">

    <div class="container-fluid ">
        <h3>Customer Detail</h3>

        <div class="card shadow mb-4">

            <div class="widget-box">
                <div class="card-body">
                    <div class="table-reponsive">

                        <div class="widget-title">
                            <a href="<?php echo base_url() ?>/admin/customer" class="btn btn-success">
                                <i class="icon-plus"></i> List of Customers
                            </a>
                        </div>

                        <hr>

                        <div class="widget-content nopadding">

                        <form action="<?php echo base_url() ?>admin/customer/update.html" method="post" accept-charset="utf-8">
                                    <h5>&nbsp;</h5>


                                    <div class="form-group">
                                        <label class="control-label">Full Name : </label>
                                        <input type="text" class="form-control" name="fullname" value="<?php echo $row['fullname'] ?>" style="width:50%" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Username : </label>
                                        <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>" style="width:50%" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Phone : </label>
                                        <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'] ?>" style="width:50%" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Email : </label>
                                        <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>" style="width:50%" disabled>
                                    </div>
								<div class="form-group">
									<label>Status</label>
									<select name="status" class="form-control" style="width:50%">
										<option value="1" <?php if($row['status'] == 1) {echo 'selected';}?> >Activity</option>
										<option value="0" <?php if($row['status'] == 0) {echo 'selected';}?>>Stop Activity</option>
									</select>
								</div>
                                </div>

                                    <!-- button -->
                                    <div class="form-group">
                                        <div class="controls">
                                            <a href="<?php echo base_url() ?>/admin/category" class="btn btn-danger  btn-sm border-left-info">Cancel</a>
                                        </div>
                                    </div>

                                    <h5>&nbsp;</h5>
                                </form>
                      
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    
</div>