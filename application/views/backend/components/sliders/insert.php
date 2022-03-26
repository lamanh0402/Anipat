<?php echo form_open_multipart('admin/sliders/insert'); ?>

<div id="content">

<div class="container-fluid ">
    <h3>Add New Banner</h3>
    <div class="card shadow mb-4">

        <div class="widget-box">
            <div class="card-body">
                <div class="table-reponsive">

                    <div class="widget-title">
                        <a href="<?php echo base_url() ?>/admin/sliders" class="btn btn-success">
                            <i class="icon-table"></i> List of Banner
                        </a>
                    </div>

                    <hr>

                    <div class="widget-content nopadding">

                    <form action="<?php echo base_url() ?>admin/sliders/insert.html" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            <h5>&nbsp;</h5>

                            <!-- title -->
                            <div class="form-group">
                                <label class="control-label">Name Banner : </label>
                                <input name="name" class="form-control" type="text" />
                            </div>

                            

                            <!-- image -->
                            <div class="form-group">
                                <label class="control-label">Image : </label>
                                <input type="file" name="img" class="form-control" required="">
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
                                    <a href="<?php echo base_url() ?>/admin/sliders" class="btn btn-danger  btn-sm border-left-info">Cancel</a>
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
