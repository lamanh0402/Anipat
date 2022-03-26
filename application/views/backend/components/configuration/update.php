<?php echo form_open_multipart('admin/configuration/update/'); ?>

<div id="content">

    <div class="container-fluid ">
        <h3>Store System</h3>

        <div class="card shadow mb-4">

            <div class="widget-box">
                <div class="card-body">
                    <div class="table-reponsive">

                       

                        <hr>

                        <div class="widget-content nopadding">

						<form action="<?php echo base_url() ?>admin/configuration/update.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                                    <h5>&nbsp;</h5>
									<?php echo validation_errors(); ?>

                                    <div class="form-group">
										<label> Mail smtp </label>
										<input type="email" class="form-control" name="mail_smtp" style="width:100%" placeholder="Mail cấu hình" value="<?php echo $row['mail_smtp'] ?>">
									</div>
									<div class="form-group">
										<label>Password Mail smtp</label>
										<input type="password" class="form-control" name="mail_smtp_password" style="width:100%" placeholder=" Password Mail cấu hình" value="<?php echo $row['mail_smtp_password'] ?>">
									</div>
									<div class="form-group">
										<label>Mail admin</label>
										<input type="text" class="form-control" name="mail_noreply" style="width:100%" placeholder="Mail nhận thông tin đơn hàng" value="<?php echo $row['mail_noreply'] ?>">
									</div>
									<div class="form-group">
										<label> Price Ship </label>
										<input type="number" class="form-control" name="priceShip" style="width:100%" placeholder=" priceShip" value="<?php echo $row['priceShip'] ?>">

									</div>
									<div class="form-group">
										<label> Title </label>
										<input type="text" class="form-control" name="title" style="width:100%" placeholder=" title" value="<?php echo $row['title'] ?>">

									</div>
									<div class="form-group">
										<label> Description </label>
										<input type="text" class="form-control" name="description" style="width:100%"  value="<?php echo $row['description'] ?>">
									</div>
                                </div>

                                    <!-- button -->
                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="submit" name="save" value="Update" class="btn btn-primary  btn-sm border-left-info">
                                          
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