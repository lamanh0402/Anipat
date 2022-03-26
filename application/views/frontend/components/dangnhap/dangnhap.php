<?php echo form_open('Login'); ?>

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
                  <li>Login</li>
               </ul>
            </nav>
         </div>
      </div>
   </div>
</div>
<!--breadcrumb area end-->




  <!--login section start-->
  <div class="page_login_section">
                <div class="container"  style="padding:90px 0">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                            <div class="login_page_form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input_text">
                                            	<label for="name">Username  </label>
                                            	<input type="text" id="login-form-username" name="username" value="" class="form-control">
                                                <div class="error" id="password_error"><?php echo form_error('username')?></div>

                                            </div>
                                        </div>
                                         <div class="col-12">
                                            <div class="input_text">
												<label for="password">Passwords </label>
												<input type="password" id="login-form-password" name="password" value="" class="form-control">
                                                <div class="error" id="password_error"><?php echo form_error('password')?></div>											</div>   
                                        </div>
                                        <div class="col-12">
										<div class="col_full nobottommargin">
								<button class="button button-3d button-black nomargin pull-left" id="login-form-submit" name="login-form-submit" type="submit" value="login" style="color:white; background-color:#eb592d;border:1px solid #eb592d; border-radius:5px">Login</button>
								<ul class="pull-right">
									<li><a href="quen-mat-khau" class="fright">Forgot password?</a></li>
									<li><a href="<?php echo base_url() ?>Register" class="fright">New user? Register an account</a></li>
								</ul>
							</div>
                                        </div>      
                                    </div>
                                </form>    
                            </div>    
                        </div>    
                    </div>    
                </div>  
            </div>