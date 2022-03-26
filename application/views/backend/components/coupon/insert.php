
<?php echo form_open_multipart('admin/coupon/insert'); ?>

<div id="content">

    <div class="container-fluid ">
        <h3>Add New Discount Code</h3>

        <div class="card shadow mb-4">

            <div class="card-body">

                <div class="table-reponsive">

                    <div class="widget-title">
                        <a href="<?php echo base_url() ?>admin/coupon" class="btn btn-success">
                            <i class="icon-plus"></i> List of Discount Codes
                        </a>
                    </div>

                    <hr>

                    <div class="widget-content nopadding">

					<form action="<?php echo base_url() ?>admin/coupon/insert.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                            <h5>&nbsp;</h5>
							
                            <div class="form-group">
									<label>Mã giảm giá</label>
									<input type="text" class="form-control" name="code" style="width:100%" placeholder="Mã giảm giá">
									<div class="error" id="password_error"><?php echo form_error('code')?></div>
								</div>
								<div class="form-group">
									<label>Số tiền giảm giá</label>
									<input type="number" class="form-control" name="discount" style="width:100%" placeholder="Số tiền giảm giá">
									<div class="error" id="password_error"><?php echo form_error('discount')?></div>
								</div>
								<div class="form-group">
									<label>Số lần giới hạn nhập</label>
									<input type="number" class="form-control" name="limit_number" style="width:100%" placeholder="Số lần giới hạn nhập">
									<div class="error" id="password_error"><?php echo form_error('limit_number')?></div>
								</div>
								<div class="form-group">
									<label>Số tiền đơn hàng tối thiểu được áp dụng</label>
									<input type="number" class="form-control" name="payment_limit" style="width:100%" placeholder="Đơn hàng tối thiểu được áp dụng">
									<div class="error" id="password_error"><?php echo form_error('payment_limit')?></div>
								</div>
								
							</div>
								<div class="form-group">
									<label>Ngày giới hạn nhập</label>
									<div class="form-group">
										<input type="date"  style="width:100%" name="expiration_date" required>
									</div>
								</div>
								<div class="form-group">
									<label>Mô tả ngắn</label>
									<textarea name="description" class="form-control"></textarea>
								</div>
							
							<div class="form-group">
								<label>Status</label>
								<select name="status" class="form-control" style="width:100%">
									<option value="1">Show</option>
									<option value="0">Hide</option>
								</select>
							</div>
                            <!-- button -->
                            <div class="control-group">
                                <div class="controls">
                                    <input type="submit" name="save" value="Save" class="btn btn-primary  btn-sm border-left-info">
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