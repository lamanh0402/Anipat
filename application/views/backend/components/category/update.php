<?php echo form_open_multipart('admin/category/update/'.$row['id']); ?>
<?php
	$list=$this->Mcategory->category_list();
	$option_parentid="";
	foreach ($list as $r) 
	{
		if($r['id'] == $row['parentid'] )
		{
			$option_parentid.="<option selected value='".$r['id']."'>".$r['name']."</option>";
		}
		else
		{
			$option_parentid.="<option value='".$r['id']."'>".$r['name']."</option>";
		}
	}

	$option_orders="";
	$listtype=$this->Mcategory->category_list();
	foreach ($listtype as $val) 
	{
		if($val['orders'] == ($row['orders'] - 1))
		{
			$option_orders.="<option selected value='".($val['orders']+1)."'>Sau - ".$val['name']."</option>";
		}
		else
		{
			$option_orders.="<option value='".($val['orders']+1)."'>Sau - ".$val['name']."</option>";
		}
	}
?>
<div id="content">

    <div class="container-fluid ">
        <h3>Edit Category</h3>

        <div class="card shadow mb-4">

            <div class="widget-box">
                <div class="card-body">
                    <div class="table-reponsive">

                        <div class="widget-title">
                            <a href="<?php echo base_url() ?>/admin/category" class="btn btn-success">
                                <i class="icon-plus"></i> List of Category
                            </a>
                        </div>

                        <hr>

                        <div class="widget-content nopadding">

						<form action="<?php echo base_url() ?>admin/product/update.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                                    <h5>&nbsp;</h5>


                                    <div class="form-group">
                                        <label class="control-label">Category Name : </label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>" style="width:50%">
                                    </div>
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
										<option value = "0">Top</option>
											<?php  
												echo $option_orders;
											?>
									</select>
								</div>
								<div class="form-group">
									<label>Status</label>
									<select name="status" class="form-control" style="width:50%">
										<option value="1" <?php if($row['status'] == 1) {echo 'selected';}?> >Show</option>
										<option value="0" <?php if($row['status'] == 0) {echo 'selected';}?>>Ẩn</option>
									</select>
								</div>
                                </div>

                                    <!-- button -->
                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="submit" name="save" value="Update" class="btn btn-primary  btn-sm border-left-info">
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