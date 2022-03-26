<?php echo form_open_multipart('admin/product/import/'.$row['id']); ?>
<?php  
	$list=$this->Mcategory->category_list();
	$option_parentid="";
	foreach ($list as $r) {
		if($r['id']==$row['catid']){
			$option_parentid.="<option selected value='".$r['id']."'>".$r['name']."</option>";
		}else{
			$option_parentid.="<option value='".$r['id']."'>".$r['name']."</option>";
		}
	}
?>

<div id="content">

    <div class="container-fluid ">
        <h3>Import goods</h3>
        <div class="card shadow mb-4">

            <div class="widget-box">
                <div class="card-body">
                    <div class="table-reponsive">

                        <div class="widget-title">
                            <a href="<?php echo base_url() ?>/admin/product" class="btn btn-success">
                                <i class="icon-table"></i> List of Products
                            </a>
                        </div>

                        <hr>

                        <div class="widget-content nopadding">

						<form action="<?php echo base_url() ?>admin/product/import.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                            
                                <h5>&nbsp;</h5>

                                <!-- name -->
                                <div class="form-group">
                                    <label class="control-label">Product Name : </label>
									<input type="text" class="form-control" disabled name="name" style="width:100%" placeholder="Tên sản phẩm" value="<?php echo $row['name'] ?>" >
                                </div>

                                <div class="form-group">
									<label>Category</label>
									<select name="catid" class="form-control" disabled>
										<option value = "0">No Parent</option>
											<?php  
												echo $option_parentid;
											?>
									</select>
									<div class="error" id="password_error"><?php echo form_error('catid')?></div>
								</div>
								<div class="form-group">
									<div class="form-group">
									<label>Total quantity entered</label>
									<input type="number" class="form-control" name="number" placeholder="Số lượng" min="0" max="10000" value="<?php echo $row['number'] ?>" disabled>
								</div>
								<div class="form-group">
									<div class="form-group">
									<label>Total quantity sold</label>
									<input type="number" class="form-control" name="number" placeholder="Số lượng" min="0" max="10000" value="<?php echo $row['number_buy'] ?>" disabled>
								</div>
								<div class="form-group">
									<div class="form-group">
									<label>Total quantity in stock</label>
									<input type="number" class="form-control" name="number" placeholder="Số lượng" min="0" max="10000" value="<?php echo $row['number']-$row['number_buy'] ?>" disabled>
								</div>
								<div class="form-group">
									<div class="form-group">
									<label>Total quantity of additional imports <span style="color:red">(*)</span></label>
									<input type="number" class="form-control" name="number" style="width:100%" placeholder="Số lượng" min="0" max="10000">

								</div>

                                <!-- button -->
                                <div class="control-group">
                                    <div class="controls">
                                        <input type="submit" name="save" value="Save" class="btn btn-primary  btn-sm border-left-info">
                                        <a href="<?php echo base_url() ?>/product/list_product" class="btn btn-danger  btn-sm border-left-info">Cancel</a>
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

<script type="text/javascript">
    CKEDITOR.replace('Description');
    CKEDITOR.replace('Nutritional');
</script>