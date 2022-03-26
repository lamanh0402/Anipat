<!--breadcrumb area start-->
<div class="breadcrumb_container" style="background-image: url(<?php echo base_url() ?>/public/img/banner.png);">

<div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <nav>
               <ul>
                  <li>
                     <a href="<?php echo base_url() ?>">Home |</a>
                  </li>
                  <li>Reset password</li>
               </ul>
            </nav>
         </div>
      </div>
   </div>
</div>
<!--breadcrumb area end-->
<?php 
					if(isset($success))
						echo '<div class="alert alert-success">Đổi mật khẩu thành công </div>';
					?>
					<?php 
					if(isset($error))
						echo '<div class="alert alert-danger">'.$error.'</div>';
					?>


<!--login section start-->
<div class="page_login_section">
                <div class="container"  style="padding:90px 0">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                            <div class="login_page_form">
							<form action="" accept-charset="UTF-8" action="" id="reset_password" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input_text">
                                            	<label for="name">Email  </label>
												<input type="email" id="login-form-password" name="email" value="" class="form-control">
												<div class="error" id="password_error"><?php echo form_error('email')?></div>

                                            </div>
                                        </div>
                                         <div class="col-12">
                                            <div class="input_text">
												<label for="password">New password  </label>
												<input type="password" id="login-form-password" name="password" value="" class="form-control">
												<div class="error" id="password_error"><?php echo form_error('password')?></div>
																	</div>   
                                        </div>
										<div class="col-12">
                                            <div class="input_text">
												<label for="password">Confirm new password </label>
												<input type="password" id="login-form-password" name="re_password" value="" class="form-control">
												<div class="error" id="password_error"><?php echo form_error('re_password')?></div>
																	</div>   
                                        </div>
                                        <div class="col-12">
										<div class="col_full nobottommargin">
								<button class="button button-3d button-black nomargin pull-left" id="login-form-submit" name="login-form-submit" type="submit" value="login" style="color:white; background-color:#eb592d;border:1px solid #eb592d; border-radius:5px">Save</button>
							
							</div>
                                        </div>      
                                    </div>
                                </form>    
                            </div>    
                        </div>    
                    </div>    
                </div>  
            </div>