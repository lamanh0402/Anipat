
<?php echo form_open_multipart('admin/category/insert'); ?>

<div id="content">

    <div class="container-fluid ">
        <h3>Add New Category</h3>

        <div class="card shadow mb-4">

            <div class="card-body">

                <div class="table-reponsive">

                    <div class="widget-title">
                        <a href="<?php echo base_url() ?>admin/category" class="btn btn-success">
                            <i class="icon-plus"></i> List of Category
                        </a>
                    </div>

                    <hr>

                    <div class="widget-content nopadding">

                    <form action="<?php echo base_url() ?>admin/category/insert.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                            <h5>&nbsp;</h5>
							
                            <div class="form-group">
								<label>Name category : </label>
								<input type="text" class="form-control" name="name" style="width:50%" placeholder="Name category">
								<div class="error" id="password_error"><?php echo form_error('name')?></div>
							</div>
							<?php  
							$list=$this->Mcategory->category_list();
							$option_parentid="";
							$option_orders="";
							foreach ($list as $row) {
								$option_parentid.="<option value='".$row['id']."'>".$row['name']."</option>";
								$option_orders.="<option value='".($row['orders']+1)."'>Sau - ".$row['name']."</option>";
							}
							?>
							<div class="form-group">
								<label>Parent Directory</label>
								<select name="parentid" class="form-control" style="width:50%">
									<option value = "0">[--Parent Directory--]</option>
									<?php echo $option_parentid;?>
								</select>
							</div>
							<div class="form-group">
								<label>Choose location</label>
								<select name="orders" class="form-control" style="width:50%">
									<option value = "0">[--Top--]</option>
									<?php  
									echo $option_orders;
									?>
								</select>
							</div>
							<div class="form-group">
								<label>Status</label>
								<select name="status" class="form-control" style="width:50%">
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