<?php echo form_open_multipart('admin/service/update/'.$row['id']); ?>

<div id="content">

<div class="container-fluid ">
	<h3>Edit Service</h3>
	<div class="card shadow mb-4">

		<div class="widget-box">
			<div class="card-body">
				<div class="table-reponsive">

					<div class="widget-title">
						<a href="<?php echo base_url() ?>/admin/service" class="btn btn-success">
							<i class="icon-table"></i> List of Service
						</a>
					</div>

					<hr>

					<div class="widget-content nopadding">

					<form action="<?php echo base_url() ?>admin/service/update.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
							<h5>&nbsp;</h5>

							<!-- title -->
							<div class="form-group">
								<label class="control-label">Service Name : </label>
								<input type="text" class="form-control" name="name" style="width:100%" placeholder="Name service" value="<?php echo $row['name'] ?>">
							</div>

							

							<!-- image -->
							<div class="form-group">
								<label class="control-label">Image : </label>
								<img style="margin-bottom:20px" src="<?php echo base_url() ?>/public/uploads/service/<?php echo $row['img'] ?>" height="150px" width="150px">

								<input type="file" id="image_list" name="img">
							</div>

							<!-- description -->
							<div class="form-group">
								<label class="control-label">Description : </label>
								<textarea name="content" id="content1" class="form-control"><?php echo $row['content'] ?></textarea>
							</div>

                                 <!-- reference price list -->
								 <div class="form-group">
								<label class="control-label">Reference price list : </label>
								<textarea name="price" id="price" class="form-control"><?php echo $row['price'] ?></textarea>
							</div>

							<!-- status -->
							<div class="form-group">
								<label>Status</label>
								<select name="status" class="form-control">
										<option value="1" <?php if($row['status'] == 1) {echo 'selected';}?> >Show</option>
										<option value="0" <?php if($row['status'] == 0) {echo 'selected';}?>>Hide</option>
									</select>
							</div>

							<!-- button -->
							<div class="control-group">
								<div class="controls">
									<input type="submit" name="save" value="Update" class="btn btn-primary  btn-sm border-left-info">
									<a href="<?php echo base_url() ?>/admin/service" class="btn btn-danger  btn-sm border-left-info">Cancel</a>
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
CKEDITOR.replace('content1');
CKEDITOR.replace('price');

</script>