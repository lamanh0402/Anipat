<?php echo form_open_multipart('admin/product/update/'.$row['id']); ?>
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
$listProducer=$this->Mproducer->producer_list();
$option="";
foreach ($listProducer as $r) {
	if($r['id']==$row['producer']){
		$option.="<option selected value='".$r['id']."'>".$r['name']."</option>";
	}else{
		$option.="<option value='".$r['id']."'>".$r['name']."</option>";
	}
}
?>


<div id="content">

    <div class="container-fluid ">
        <h3>Edit Product</h3>
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

						<form action="<?php echo base_url() ?>admin/product/update.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                            
                                <h5>&nbsp;</h5>

                                <!-- name -->
                                <div class="form-group">
                                    <label class="control-label">Product Name : </label>
									<input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
                                </div>

                                <!-- mainimg -->
                                <div class="form-group">
                                    <label class="control-label">Main Image : </label>
									<img style="margin-bottom:20px" src="<?php echo base_url() ?>/public/uploads/product/<?php echo $row['avatar'] ?>" height="150px" width="150px">

                                    <input type="file"  id="image_list" name="img" multiple required>
                                </div>

                                <!-- subimg -->
                                <div class="form-group">
                                    <label class="control-label">Sub Image : </label>
                                    <?php 
   $img = $row['img'];
   $mang = explode('#', $img);
   foreach ($mang as $value) :?>
       <img style="margin-bottom:20px" src="public/uploads/product/<?php echo $value; ?>"class="img-responsive" height="150px" width="150px"> 
<?php endforeach; ?>
									<input type="file"  id="image_list" name="image_list[]" multiple required>
                                </div>

                               

                                <!-- quantity -->
                                <div class="form-group">
                                    <label class="control-label">Quantity : </label>
									<input name="number" class="form-control" type="number" value="1" min="1" step="1" max="1000">
                                </div>

                                <!-- price -->
                                <div class="form-group">
                                    <label class="control-label"> Price : </label>
									<input name="price" class="form-control" type="number" value="<?php echo $row['price'] ?>" min="0"  max="1000000000">
                                </div>
 
                                <!-- discount -->
                                <div class="form-group">
                                    <label class="control-label">Discount (%) : </label>
									<input name="sale_of" class="form-control" type="number" value="<?php echo $row['sale'] ?>">
                                </div>

                                <!-- brand -->
                                <div class="form-group">
                                    <label class="control-label">Brand : </label>
									<select name="producer" class="form-control">
													<option value = "">[--Choose--]</option>
													<?php echo $option;?>
												</select>                               
											</div>

                                <!-- category -->
                                <div class="form-group">
                                    <label class="control-label">Category : </label>
                                    <div class="controls">
									<select name="catid" class="form-control">
													<option value = "">[--Choose--]</option>
													<?php  
													echo $option_parentid;
													?>
												</select>
                                    </div>
                                </div>

                                <!-- description -->
                                <div class="form-group">
                                    <label class="control-label">Description : </label>
									<textarea name="detail" id="detail" class="form-control"><?php echo $row['detail'] ?></textarea>
                                </div>

                                <!-- nutritional -->
                                <div class="form-group">
                                    <label class="control-label">Nutritional : </label>
									<textarea name="sortDesc" id="sortDesc" class="form-control"><?php echo $row['sortDesc'] ?></textarea>
                                </div>

                                <!-- status -->
                                <div class="form-group">
                                    <label for>Status</label>
									<select name="status" class="form-control">
										<option value="1" <?php if($row['status'] == 1) {echo 'selected';}?> >Show</option>
										<option value="0" <?php if($row['status'] == 0) {echo 'selected';}?>>Hide</option>
									</select>
                                </div>

                                <!-- button -->
                                <div class="control-group">
                                    <div class="controls">
                                        <input type="submit" name="save" value="Save" class="btn btn-primary  btn-sm border-left-info">
                                        <a href="<?php echo base_url() ?>/admin/product/" class="btn btn-danger  btn-sm border-left-info">Cancel</a>
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
    CKEDITOR.replace('detail');
    CKEDITOR.replace('sortDesc');
</script>