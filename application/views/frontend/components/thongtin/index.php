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
                        <li>My Account</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb area end-->


<!-- Start Maincontent  -->

<section class="main-content-area my-account ptb-100">
    <div class="container">
        <div class="account-dashboard">
            <div class="row">

                <div class="col-md-3" style="padding: 30px; border-radius: 0.5rem; border: 1px solid #f3f3f7; margin: 20px 50px">

                    <!-- Nav tabs -->
                    <div class="profile" style="margin: 0 auto; text-align:center">

                        <div class="img" style="position:relative; top:0; left:0">
                            <img src="<?php echo base_url() ?>/public/uploads/user/noimage.png" style="height:170px; width:170px; border-radius:50%; position:relative; top: 0; left:0">
                            <button type="button" href="#myModal" data-toggle="modal" style="position:absolute; top:80%; left:65%;">
                                <i class="icofont-camera-alt"></i>
                            </button>
                        </div>

                        <h5 style="font-size: 18px; font-weight:700;margin-top:30px; color: #626262;"><?php echo $info['fullname'] ?></h5>
                    </div>

                    <ul role="tablist" class="nav flex-column dashboard-list" style="font-size: 17px; font-weight:500">

                        <li><a href="#dashboard" data-toggle="tab" class="nav-link active" style="margin-top: 35px"><i class="icofont-ui-user"></i> &nbsp;&nbsp;Profile</a></li>

                        <li> <a href="#hehee" data-toggle="tab" class="nav-link"><i class="icofont-ui-password"></i> &nbsp;&nbsp;Change password</a></li>

                        <li> <a href="#unapprovedorders" data-toggle="tab" class="nav-link"><i class="icofont-shopping-cart"></i> &nbsp;&nbsp;Unapproved orders</a></li>

                        <li> <a href="#orders" data-toggle="tab" class="nav-link"><i class="icofont-shopping-cart"></i> &nbsp;&nbsp;Orders</a></li>

                    

                    </ul>

                </div>

                <div class=" col-md-7 " style="padding: 30px; border-radius: 0.5rem; border: 1px solid #f3f3f7; margin: 20px 0 ">

                    <div class="tab-content dashboard-content">

                         <!-- Tab profile -->
                        <div class="tab-pane fade show active" id="dashboard">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="account-login-form">
                                        <form action="<?php echo base_url() ?>/Thongtin/updateprofile/<?php echo $info['id'] ?>" method="POST" enctype="multipart/form-data">

                                            <h5 style="font-weight:700; font-size:19px">Personal information</h5>

                                            <hr>
                                            <label>Fullname</label>
                                            <input type="text" name="fullname" id="fullname" value="<?php echo $info['fullname'] ?>">
                                      

                                            <label>Phone</label>
                                            <input type="text" name="phone" id="phone" value="<?php echo $info['phone'] ?>">
                                            <label>Email</label>
                                            <input type="text" name="email" id="email" value="<?php echo $info['email'] ?>">
                                          

                                            <div class="text-center mt-3" style="padding-top: 20px;  ">
                                                <button type="submit" name="save" value="Save" class="btn-sm"> Update
                                                </button>
                                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                                                <button type="reset" name="save" value="Save" class="btn0sm"> Cancel
                                                </button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- password -->
                        <div class="tab-pane fade" id="hehee">
                            <?php
                            if (isset($success))
                                echo '<h6 style="color:green;">Đổi mật khẩu thành công</h6>';
                            ?>

                            <div class="login">
                                <div class="login-form-container">
                                    <div class="account-login-form">
                                        <form  accept-charset="UTF-8" action="<?php echo base_url() ?>Thongtin/reset_password" id="reset_password" method="post">

                                            <h5 style="font-weight:700; font-size:19px">Change the password</h5>
                                            <hr>
                                            </hr>

                                            <label>Current Password</label>
                                            <input type="password" id="login-form-password" name="password_old" value="" class="form-control">
                                            <div class="error" id="password_error"><?php echo form_error('password_old') ?></div>
                                            <label>Password new</label>
                                            <input type="password" id="login-form-password" name="password" value="" class="form-control">
                                            <div class="error" id="password_error"><?php echo form_error('password') ?></div> <label>Confirm Password new</label>
                                            <input type="password" id="login-form-password" name="re_password" value="" class="form-control">
                                            <div class="error" id="password_error"><?php echo form_error('re_password') ?></div>
                                            <div class="text-center mt-3" style="padding-top: 20px;  ">
                                                <button type="submit" name="save" value="Save" class="btn-sm"> Update
                                                </button>

                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- unapproved orders -->
                        <div class="tab-pane fade" id="unapprovedorders">
                            <?php if ($this->Minfocustomer->order_listorder_customerid_not($info['id']) != null) { ?>
                                <h5 style="font-weight:700; font-size:19px">List of unapproved orders</h5>
                                <div class="organic-table-area table-responsive">
                                    <table class="table">

                                        <thead>
                                            <tr>
                                                <th>ID Order</th>
                                                <th>Date</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th colspan="2">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $order = $this->Minfocustomer->order_listorder_customerid_not($info['id']);
                                            foreach ($order as $value) : ?>
                                                <tr>
                                                    <td>#<?php echo $value['orderCode'] ?></td>
                                                    <td><?php echo $value['orderdate'] ?></td>
                                                    <td><?php echo number_format($value['money']) ?> </td>
                                                    <td><span class="success"> <?php
                                                                                switch ($value['status']) {
                                                                                    case '0':
                                                                                        echo 'Waiting for approval';
                                                                                        break;
                                                                                }
                                                                                $id = $value['id'];
                                                                                ?></span></td>


                                                    <td style="color:#fff; font-weight:700"><a href="account/orders/<?php echo $value['id'] ?>" type="button" class="btn btn-success btn-sm" style="color:#fff;">View</a></td>

                                                    <td style="color:#fff; font-weight:700"><a href="thongtin/update/<?php echo $value['id']; ?>" onclick="return confirm('Xác nhận hủy đơn hàng này ?')"" type=" button" class="btn btn-danger btn-sm" style="color:#fff;">Cancel</a></td>
                                                </tr>
                                            <?php endforeach; ?>

                                        </tbody>

                                    </table>
                                </div>
                            <?php
                            }
                            ?>
                        </div>


                        <!-- order -->
                        <div class="tab-pane fade" id="orders">

                            <h5 style="font-weight:700; font-size:19px">List orders</h5>
                            <div class="organic-table-area table-responsive">
                                <table class="table">

                                    <thead>
                                        <tr>
                                            <th>ID Order</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $order = $this->Minfocustomer->order_listorder_customerid($info['id']);
                                        foreach ($order as $value) : ?>
                                            <tr>
                                                <td>#<?php echo $value['orderCode'] ?></td>
                                                <td><?php echo $value['orderdate'] ?></td>
                                                <td><?php echo number_format($value['money']) ?> </td>
                                                <td><span class="success"> <?php
                                                                            switch ($value['status']) {

                                                                                case '1':
                                                                                    echo 'Delivery in progress';
                                                                                    break;
                                                                                case '2':
                                                                                    echo 'Delivered';
                                                                                    break;
                                                                                case '3':
                                                                                    echo 'Customer has canceled';
                                                                                    break;
                                                                                case '4':
                                                                                    echo 'Staff canceled';
                                                                                    break;
                                                                            }
                                                                            $id = $value['id'];
                                                                            ?></span></td>


                                                <td style="color:#fff; font-weight:700"><a href="account/orders/<?php echo $value['id'] ?>" type="button" class="btn btn-success btn-sm" style="color:#fff;">View</a></td>


                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>

                                </table>
                            </div>

                        </div>



                        <!-- tab 3-->
                        <div class="tab-pane fade" id="downloads">
                            <h3>Downloads</h3>
                            <div class="organic-table-area table-responsive">
                                <table class="table">

                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Downloads</th>
                                            <th>Expires</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>Shopnovilla - Free Real Estate PSD Template</td>
                                            <td>May 10, 2018</td>
                                            <td><span class="danger">Expired</span></td>
                                            <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>
                        </div>


                        <!-- tab 4 -->
                        <div class="tab-pane" id="address">
                            <p>The following addresses will be used on the checkout page by default.</p>
                            <h4 class="billing-address">Billing address</h4>
                            <a href="#" class="view">Edit</a>

                            <p><strong>Bobby Jackson</strong></p>
                            <address>
                                House #15<br>
                                Road #1<br>
                                Block #C <br>
                                Banasree <br>
                                Dhaka <br>
                                1212
                            </address>
                            <p>Bangladesh</p>

                        </div>


                        <!-- tab 5 -->
                        <div class="tab-pane fade" id="account-details">
                            <h3>Account details </h3>

                            <div class="login">
                                <div class="login-form-container">
                                    <div class="account-login-form">
                                        <form action="#">
                                            <p>Already have an account? <a href="#">Log in instead!</a></p>
                                            <div class="input-radio">
                                                <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                                <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                            </div> <br>
                                            <label>First Name</label>
                                            <input type="text" name="first-name">
                                            <label>Last Name</label>
                                            <input type="text" name="last-name">
                                            <label>Email</label>
                                            <input type="text" name="email-name">
                                            <label>Password</label>
                                            <input type="password" name="user-password">
                                            <label>Birthdate</label>
                                            <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
                                            <span class="example">
                                                (E.g.: 05/31/1970)
                                            </span>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" value="1" name="optin">
                                                <label>Receive offers from our partners</label>
                                            </span>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" value="1" name="newsletter">
                                                <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                            </span>
                                            <div class="save-button primary-btn default-button">
                                                <a href="#">Save</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Maincontent  -->



<!-- modal change img -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog contact-modal" style="align-items:center">
        <div class="modal-content">
                <form action="<?php echo base_url() ?>Thongtin/updateimg/<?php echo $info['id'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title">Update profile picture</h5>
                        <a type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
                    </div>

                    <div class="modal-body">
                        <div class="row" style="align-content:center">
                            <div class="col-md-12">

                                <input class="form-control input-sm" id="id" name="id" type="Hidden">
                                <div class="form-group">
                                    <input type="file" class="form-control" id="img" name="img" />
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer" style="width:30%; margin: 0 auto">
                        <input type="reset" class="btn btn-outline-danger btn-sm" data-dismiss="modal" value="Cancel">&nbsp;&nbsp;&nbsp;
                        <input type="submit" class="btn btn-outline-danger btn-sm" value="Update" name="save">
                    </div>
                </form>

        </div>

    </div>
</div>