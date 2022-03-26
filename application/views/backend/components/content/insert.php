
<div id="content">

    <div class="container-fluid ">
        <h3>Add New Blog</h3>
        <div class="card shadow mb-4">

            <div class="widget-box">
                <div class="card-body">
                    <div class="table-reponsive">

                        <div class="widget-title">
                            <a href="<?php echo base_url() ?>/admin/content" class="btn btn-success">
                                <i class="icon-table"></i> List of Blog
                            </a>
                        </div>

                        <hr>

                        <div class="widget-content nopadding">

						<form action="<?php echo base_url() ?>admin/content/insert.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                                <h5>&nbsp;</h5>

                                <!-- title -->
                                <div class="form-group">
                                    <label class="control-label">Blog Title : </label>
                                    <input name="name" class="form-control" type="text" />
                                </div>

                                

                                <!-- image -->
                                <div class="form-group">
                                    <label class="control-label">Image : </label>
                                    <input type="file" id="image_list" name="img" style="width: 100%" required>
                                </div>

                                <!-- description -->
                                <div class="form-group">
                                    <label class="control-label">Description : </label>
                                    <textarea id="fulltext" name="fulltext" class="form-control" type="text"></textarea>
                                </div>

								<!-- status -->
								<div class="form-group">
									<label>Status</label>
									<select name="status" class="form-control" >
										<option value="1">Show</option>
										<option value="0">Hide</option>
									</select>
								</div>

                                <!-- button -->
                                <div class="control-group">
                                    <div class="controls">
                                        <input type="submit" name="save" value="Save" class="btn btn-primary  btn-sm border-left-info">
                                        <a href="<?php echo base_url() ?>/admin/content" class="btn btn-danger  btn-sm border-left-info">Cancel</a>
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
    CKEDITOR.replace('fulltext');
</script>