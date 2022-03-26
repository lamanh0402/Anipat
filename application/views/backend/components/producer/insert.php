
<?php echo form_open_multipart('admin/producer/insert'); ?>

<div id="content">

    <div class="container-fluid ">
        <h3>Add New Brand</h3>

        <div class="card shadow mb-4">

            <div class="card-body">

                <div class="table-reponsive">

                    <div class="widget-title">
                        <a href="<?php echo base_url() ?>admin/producer" class="btn btn-success">
                            <i class="icon-plus"></i> List of Brand
                        </a>
                    </div>

                    <hr>

                    <div class="widget-content nopadding">

                    <form action="<?php echo base_url() ?>admin/producer/insert.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                            <h5>&nbsp;</h5>
							
                            <div class="form-group">
								<label>Name Brand : </label>
								<input type="text" class="form-control" name="name" style="width:50%" >
								<div class="error" id="password_error"><?php echo form_error('name')?></div>
							</div>

                            <div class="form-group">
											<label>ID Code </label>
											<input type="text" class="form-control" name="code" placeholder="ID Code">
											<div class="error" id="password_error" style="color: red"><?php echo form_error('code')?></div>
										</div>
										<div class="form-group">
											<label>Keyword </label>
											<input type="text" class="form-control" name="keyword" placeholder="Keyword" >
											<span style="font-style: italic; line-height: 32px;">Note: Each keyword is separated by a ",". Example : dienthoai, laptop</span>
											<div class="error" id="password_error" style="color: red"><?php echo form_error('keyword')?></div>
										</div>
										<div class="form-group">
											<label>Status</label>
											<select name="status" class="form-control">
												<option value="1"  >Show</option>
												<option value="0" >Hide</option>
											</select>
										</div>
						
						
							
							
                            <!-- button -->
                            <div class="control-group">
                                <div class="controls">
                                    <input type="submit" name="save" value="Save" class="btn btn-primary  btn-sm border-left-info">
                                    <a href="<?php echo base_url() ?>/admin/producer" class="btn btn-danger  btn-sm border-left-info">Cancel</a>
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