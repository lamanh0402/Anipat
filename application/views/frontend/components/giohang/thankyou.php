<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="breadcrumb_container" style="background-image: url(<?php echo base_url() ?>/public/img/banner.png);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav>
                    <ul>
                        <li>
                            <a href="<?php echo base_url() ?>">Home |</a>
                        </li>
                        <li>Checkout |</li>
                        <li>Thankyou</li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb area end-->
<section id="checkout-cart">
    <div class="container" style="margin: 0 auto; width:70%">
        <div class="checkout-content" style="margin: 0 auto; padding-bottom:120px; padding-top:50px">
            <div class="tks-header" style="padding: 50px 0; text-align:center; line-height:1.7; letter-spacing:1.3px">
                <h5> <i class="icofont-ui-check" style="color:green"></i> Order information has been sent to
                    <?php
                    if ($this->session->userdata('info-customer')) {
                        $data = $this->session->userdata('info-customer');
                        echo $data['email'];
                        $this->session->unset_userdata('info-customer');
                    } else {
                        if ($this->session->userdata('sessionKhachHang')) {
                            $data = $this->session->userdata('sessionKhachHang');
                            echo $data['email'];
                        }
                    }
                    ?> <br>Please login gmail to check order information.! </h5>
                <img src="public/img/ty1.gif">

                <div class="row btnclass">
                    <div class="input ipmaxn ">
                        <button class="btn-gui" id="frmSubmit" value="Keep buying" onclick="window.location.href='<?php echo base_url() ?>Home'" style="color:#eb592d; background-color:#fff; padding:8px 18px; border:1px solid #eb592d; border-radius:15px; font-size:18px;">
                            <i class="icofont-rounded-left"></i> Keep buying
                        </button>
                    </div>
                </div>

            </div>



        </div>
    </div>