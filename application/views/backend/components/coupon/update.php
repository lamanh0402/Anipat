
<?php echo form_open_multipart('admin/coupon/update/'.$row['id']); ?>

<div id="content">

    <div class="container-fluid ">
        <h3>Edit Discount Code</h3>

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

					<form action="<?php echo base_url() ?>admin/coupon/update.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                            <h5>&nbsp;</h5>
							
                            <div class="form-group">
									<label>Mã giảm giá</label>
									<input type="text" class="form-control" name="code" style="width:100%" placeholder="Mã giảm giá" value="<?php echo $row['code'] ?>">
									<div class="error" id="password_error"><?php echo form_error('code')?></div>
								</div>
								<div class="form-group">
									<label>Số tiền giảm giá</label>
									<input type="number" class="form-control" name="discount" style="width:100%" placeholder="Số tiền giảm giá" value="<?php echo $row['discount'] ?>">
									<div class="error" id="password_error"><?php echo form_error('discount')?></div>
								</div>
								<div class="form-group">
									<label>Tổng số lần nhập</label>
									<input type="number" class="form-control" name="limit_number" style="width:100%" placeholder="Số lần giới hạn nhập" value="<?php echo $row['limit_number'] ?>">
									<div class="error" id="password_error"><?php echo form_error('limit_number')?></div>
								</div>
								<div class="form-group">
									<label>Số lần đã nhập</label>
									<input type="number" class="form-control" name="number_used" style="width:100%" value="<?php echo $row['number_used'] ?>" disabled>
									<div class="error" id="password_error"><?php echo form_error('number_used')?></div>
								</div>
								<div class="form-group">
									<?php $number_rest = $row['limit_number'] - $row['number_used']
									?>
									<label>Số lần còn lại</label>
									<input type="text" class="form-control" style="width:100%" placeholder="Số lần giới hạn nhập" value="<?php echo  $number_rest ?>" disabled>
								</div>
								<div class="form-group">
									<label>Số tiền đơn hàng tối thiểu được áp dụng</label>
									<input type="number" class="form-control" name="payment_limit" style="width:100%" placeholder="Đơn hàng tối thiểu được áp dụng" value="<?php echo $row['payment_limit'] ?>">
									<div class="error" id="password_error"><?php echo form_error('payment_limit')?></div>
								</div>
								
							</div>
								<div class="form-group">
									<label>Ngày giới hạn nhập</label>
									<div class="form-group">
										<input type="date"  style="width:100%" name="expiration_date"  value="<?php echo $row['expiration_date'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label>Mô tả ngắn</label>
									<textarea name="description" class="form-control"><?php echo $row['description'] ?></textarea>
								</div>
							
								<div class="form-group">
									<label>Status</label>
									<select name="status" class="form-control">
										<option value="1" <?php if($row['status'] == 1) {echo 'selected';}?> >Show</option>
										<option value="0" <?php if($row['status'] == 0) {echo 'selected';}?>>Hide</option>
									</select>
								</div>
                            <!-- button -->
                            <div class="control-group">
                                <div class="controls">
                                    <input type="submit" name="save" value="Save" class="btn btn-primary  btn-sm border-left-info">
                                    <a href="<?php echo base_url() ?>/admin/coupon" class="btn btn-danger  btn-sm border-left-info">Cancel</a>
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