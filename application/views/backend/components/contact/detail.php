
<?php echo form_open_multipart('admin/contact/detail/'.$row['id']); ?>

<div id="content">

    <div class="container-fluid ">
        <h3>Customer Contact Detail</h3>

        <div class="card shadow mb-4">

            <div class="card-body">

                <div class="table-reponsive">

                   

                    <hr>

                    <div class="widget-content nopadding">

					<form action="<?php echo base_url() ?>admin/content/update.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                            <h5>&nbsp;</h5>
							<?php echo validation_errors(); ?>
                            <div class="form-group">
									<label>Name <span class = "maudo" ></span></label>
									<output type="text" class="form-control" name="SDT" style="width:100%"><?php echo $row['fullname'] ?></output>
									
								</div>
								
								<div class="form-group">
									<label>Phone </label>
									<output type="text" class="form-control" name="SDT" style="width:100%"><?php echo $row['phone'] ?></output>
									
								</div>
								<div class="form-group">
									<label>Email </label>
									<output type="text" class="form-control" name="SDT" style="width:100%"><?php echo $row['email'] ?></output>
									
								</div>
								<div class="form-group">
									<label>Title</label>
									<output type="text" class="form-control" name="SDT" style="width:100%"><?php echo $row['title'] ?></output>

								</div>
								<div class="form-group">
									<label>Content</label>
									<textarea rows="10" cols="20" name="content" style="width:100% height:100%"  id="content" class="form-control" disabled><?php echo $row['content'] ?></textarea>
      								
								</div>
                            <!-- button -->
                            <div class="control-group">
                                <div class="controls">
                                   
                                    <a href="<?php echo base_url() ?>/admin/contact" class="btn btn-danger  btn-sm border-left-info">Cancel</a>
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