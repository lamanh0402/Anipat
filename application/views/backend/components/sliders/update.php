<?php echo form_open_multipart('admin/sliders/update/'.$row['id']); ?>

<div id="content">

<div class="container-fluid ">
    <h3>Edit Banner</h3>
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

                    <form action="<?php echo base_url() ?>admin/sliders/update.html" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            <h5>&nbsp;</h5>

                            <!-- title -->
                            <div class="form-group">
                                <label class="control-label">Name Banner : </label>
                                <input name="name" class="form-control" type="text" value="<?php echo $row['name'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Link </label>
                                <input type="text" name="link" class="form-control"  value="<?php echo $row['link'] ?>">
                            </div>

                            <!-- image -->
                            <div class="form-group">
                                <label class="control-label">Image : </label>
                                <img style="margin-bottom:20px" src="<?php echo base_url() ?>/public/uploads/banner/<?php echo $row['img'] ?>" height="150px" width="150px">

                                <input type="file" name="img" class="form-control" required="">
                            </div>

                   

                            <!-- status -->
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control" >
                                <option value="1" <?php if($row['status'] == 1) {echo 'selected';}?> >Show</option>
                                    <option value="0" <?php if($row['status'] == 0) {echo 'selected';}?>>Hide</option>                                </select>
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
