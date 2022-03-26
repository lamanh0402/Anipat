<?php echo form_open_multipart('admin/product/insert'); ?>



<div id="content">

    <div class="container-fluid ">
        <h3>Add New Product</h3>
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

						<form action="<?php echo base_url() ?>admin/product/insert.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                            
                                <h5>&nbsp;</h5>

                                <!-- name -->
                                <div class="form-group">
                                    <label class="control-label">Product Name : </label>
									<input type="text" class="form-control" name="name" >
                                </div>

                                <!-- mainimg -->
                                <div class="form-group">
                                    <label class="control-label">Main Image : </label>
                                    <input type="file"  id="image_list" name="img" multiple required>
                                </div>

                                <!-- subimg -->
                                <div class="form-group">
                                    <label class="control-label">Sub Image : </label>
									<input type="file"  id="image_list" name="image_list[]" multiple required>
                                </div>

                               

                                <!-- quantity -->
                                <div class="form-group">
                                    <label class="control-label">Quantity : </label>
									<input name="number" class="form-control" type="number" value="1" min="1" step="1" max="1000">
                                </div>

                                <!-- price -->
                                <div class="form-group">
                                    <label class="control-label">Price : </label>
									<input name="price" class="form-control" type="number" value="0" min="0" step="1" max="1000000000">
                                </div>
                                
                                <!-- discount -->
                                <div class="form-group">
                                    <label class="control-label">Discount (%) : </label>
									<input name="sale_of" class="form-control" type="number">
                                </div>

                                <!-- brand -->
                                <div class="form-group">
                                    <label class="control-label">Brand : </label>
									<select name="producer" class="form-control">
										<option value = "">[--Choose brand--]</option>
											<?php  
												$list=$this->Mproducer->producer_list();
												$option_parentid="";
												foreach ($list as $r) {
													$option_parentid.="<option value='".$r['id']."'>".$r['name']."</option>";
												}
												echo $option_parentid;
											?>
									</select>                                </div>

                                <!-- category -->
                                <div class="form-group">
                                    <label class="control-label">Category : </label>
                                    <div class="controls">
									<select name="catid" class="form-control">
										<option value = "">[--Choose category--]</option>
											<?php  
												$list=$this->Mcategory->category_list();
												$option_parentid="";
												foreach ($list as $r) {
													$option_parentid.="<option value='".$r['id']."'>".$r['name']."</option>";
												}
												echo $option_parentid;
											?>
									</select>
                                    </div>
                                </div>

                                <!-- description -->
                                <div class="form-group">
                                    <label class="control-label">Description : </label>
									<textarea name="detail" id="detail" class="form-control" ></textarea>
                                </div>

                                <!-- nutritional -->
                                <div class="form-group">
                                    <label class="control-label">Nutritional : </label>
									<textarea name="sortDesc" id="sortDesc" class="form-control" ></textarea>
                                </div>

                                <!-- status -->
                                <div class="form-group">
                                    <label for>Status</label>
									<select name="status" class="form-control">
										<option value="1">Show</option>
										<option value="0">Hide</option>
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