<?php echo form_open_multipart('admin/useradmin/update/'.$row['id']); ?>

<div id="content">

<div class="container-fluid ">
	<h3>Update profile</h3>
	<div class="card shadow mb-4">

		<div class="widget-box">
			<div class="card-body">
				<div class="table-reponsive">

				
					<hr>

					<div class="widget-content nopadding">

                    <form action="<?php echo base_url() ?>admin/useradmin/update.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
							<h5>&nbsp;</h5>

							<!-- title -->
                            <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="fullname" value="<?php echo $row['fullname'] ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" value="<?php echo $row['username']?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file"  id="image_list" name="image" style="width: 100%">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'] ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>" >
                                </div>

							<!-- button -->
							<div class="control-group">
								<div class="controls">
									<input type="submit" name="save" value="Update" class="btn btn-primary  btn-sm border-left-info">
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

