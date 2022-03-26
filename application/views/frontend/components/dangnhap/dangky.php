<?php echo form_open('Register'); ?>

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
                        <li>Register</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb area end-->


<?php
if (isset($success))
    echo '<div class="alert alert-success">' . $success . '</div>';
?>

<!--login section start-->
<div class="page_login_section">
    <div class="container" style="padding:90px 0">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <div class="login_page_form">
                    <form accept-charset="UTF-8" action="" id="customer_register" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="input_text">
                                    <label for="name">Username </label>
                                    <input type="text" id="first_name" name="username" value="" class="form-control">
                                </div>
                                <div class="error" id="username_error"><?php echo form_error('username') ?></div>

                            </div>
                            <div class="col-12">
                                <div class="input_text">
                                    <label for="password">Password </label>
                                    <input type="password" id="register-form-password" name="password" class="form-control">
                                </div>
                                <div class="error" id="password_error"><?php echo form_error('password') ?></div>

                            </div>
                            <div class="col-12">
                                <div class="input_text">
                                    <label for="password">Confirm password </label>
                                    <input type="password" id="register-form-repassword" name="re_password" value="" class="form-control">
                                </div>
                                <div class="error" id="re_password_error"><?php echo form_error('re_password') ?></div>

                            </div>
                            <div class="col-12">
                                <div class="input_text">
                                    <label for="name">Fullname </label>
                                    <input type="text" id="first_name" name="name" class="form-control">
                                </div>
                                <div class="error" id="name_error"><?php echo form_error('name') ?></div>

                            </div>
                            <div class="col-12">
                                <div class="input_text">
                                    <label for="name">Email </label>
                                    <input type="text" id="register-form-email" name="email" class="form-control">
                                </div>
                                <div class="error" id="email_error"><?php echo form_error('email') ?></div>

                            </div>
                            <div class="col-12">
                                <div class="input_text">
                                    <label for="name">Phone </label>
                                    <input type="text" id="first_name" name="phone" class="form-control">
                                </div>
                                <div class="error" id="name_error"><?php echo form_error('phone') ?></div>

                            </div>
                            <div class="col-12">
                                <div class="col_full nobottommargin">
                                    <button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" type="submit" style="color:white; background-color:#eb592d;border:1px solid #eb592d; border-radius:5px">Register</button>
                                    <ul class="pull-right">

                                        <li class="right" style="font-size: 14px;">If you already have an account, please <a href="<?php echo base_url() ?>dang-nhap" style="font-size: 16px; color: #eb592d;font-weight:bold">Login</a></li>
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