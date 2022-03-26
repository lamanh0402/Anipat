<?php echo form_open('info-order'); ?>
<?php
if (!$this->session->userdata('cart')) {
    redirect('gio-hang');
} else {
    $user = $this->session->userdata('sessionKhachHang');
}
?>

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
                        <li>Checkout</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb area end-->



<div class="Checkout_page_section">

    <div class="container">
        <div class="checkout-form" style="margin: 0 auto">

            <div class="row">
                <form action="" enctype="multipart/form-data" method="post" accept-charset="utf-8" name='info-order' novalidate>

                    <div class="col-lg-5 col-md-6 " style="margin: 0 auto">

                        <h4 style="font-weight:700; border-bottom: 3px solid #78a206;display: inline-block; ">Your delivery information</h4>
                        <hr>
                        <tr>
                            <td style="font-size:16px;">Fullname <span class="require_symbol" style="color:red">* </span></td>
                            <td>
                                <input type="text" class="form-control" name="name" value="<?php echo $user['fullname'] ?>" <?php if ($this->session->userdata('sessionKhachHang')) echo 'readonly' ?>>
                                <div class="error"><?php echo form_error('name') ?></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:16px;">Email <span class="require_symbol" style="color:red">* </span></td>
                            <td>
                                <input type="text" class="form-control" name="<?php if ($this->session->userdata('sessionKhachHang')) echo 'tv';
                                                                                else echo 'email' ?>" value="<?php echo $user['email'] ?>" placeholder="Email" <?php if ($this->session->userdata('sessionKhachHang')) echo 'readonly' ?>>
                                <div class="error"><?php echo form_error('email') ?></div>
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size:16px">Phone <span class="require_symbol" style="color:red">* </span></td>
                            <td>
                                <input type="text" class="form-control" name="phone" value="<?php echo $user['phone'] ?>" <?php if ($this->session->userdata('sessionKhachHang')) echo 'readonly' ?>>
                                <div class="error"><?php echo form_error('phone') ?></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:16px">Province/city <span class="require_symbol" style="color:red">* </span></td>
                            <td>
                                <select name="city" id="province" onchange="renderDistrict()" class="form-control next-select">
                                    <option value="">--- Choose ---</option>
                                    <?php $list = $this->Mprovince->province_all();
                                    foreach ($list as $row) : ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="error"><?php echo form_error('city') ?></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:16px">District <span class="require_symbol" style="color:red">* </span></td>
                            <td>
                                <select name="DistrictId" id="district" class="form-control next-select">
                                    <option value="">--- Choose ---</option>
                                </select>
                                <div class="error"><?php echo form_error('DistrictId') ?></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:16px">Delivery address <span class="require_symbol" style="color:red">* </span></td>
                            <td>
                                <textarea name="address" placeholder="Delivery address" class="form-control" rows="4"="" style="height: auto !important;" value="<?php echo $user['address'] ?>"></textarea>
                                <div class="error"><?php echo form_error('address') ?></div>
                            </td>
                        </tr>

                        <tr>
                            <td style="font-size:16px">Discount code (if any) </td>
                            <td>
                                <input id="coupon" style="border-radius: 5px; " type="text" class="form-control" placeholder="Discound code" name="coupon">
                                <div class="error" id="result_coupon"></div>
                            </td>
                            <td colspan="1">
                            <a style="cursor: pointer;" class="check-coupon" title="mã giảm giá" onclick="checkCoupon()">Sử dụng</a>
                            </td>
                        </tr>
                   
                        <div class="row btnclass" style="padding-top:10px">
                            <div class="input ipmaxn ">
                                <input type="submit" class="btn-gui" name="dathang" id="frmSubmit" value="Send order" style="color:#fff; background-color:#eb592d; padding:8px 20px; border:1px solid #eb592d; border-radius:15px; font-size:18px;">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg- col-md-6" style="margin:0 auto">
                        <h4 style="font-weight:700; border-bottom: 3px solid #78a206;display: inline-block; ">Your order</h4>
                        <hr>
                        <div class="order-table table-responsive mb-30">

                            <table>
                                <tbody>
                                    <thead>

                                        <tr>
                                            <th width="200px">Product</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Total</th>
                                        </tr>
                                    </thead>
                                <tbody>

                                    <?php if ($this->session->userdata('cart')) :
                                        $data = $this->session->userdata('cart');
                                        $money = 0;
                                        foreach ($data as $key => $value) :
                                            $row = $this->Mproduct->product_detail_id($key); ?>

                                            <tr>
                                                <td><?php echo $row['name']; ?>  </td>
                                                <td class="text-right"><?php echo $value ?></td>

                                                <td class="text-right">
                                                    <?php
                                                    if ($row['sale'] > 0) {
                                                        $price_end = $row['price'] - ($row['price'] * $row['sale'] / 100);
                                                    } else {
                                                        $price_end = $row['price'];
                                                    }
                                                    echo number_format($price_end);
                                                    ?> VND
                                                </td>
                                                <td class="text-right">
                                                    <?php
                                                    $total = 0;
                                                    $total = $price_end * $value;
                                                    $money += $total;
                                                    echo number_format($total);
                                                    ?> VND
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                </tbody>
                            <?php endif; ?>
                            <tr>
                                <td colspan="3">
                                    <p style="font-size: 16px; font-weight:bold">Total </p>
                                </td>
                                <td style="float: right;">
                                <p style="font-size: 16px; font-weight:bold">                                 <?php echo number_format($money) . ' VND'; ?> 
</p>
                            </td>
                            </tr>

                            <tr>
                                <td colspan="3">
                                    <p style="font-size: 15px;font-weight:bold">(Shipping fee)</p>
                                </td>
                                <td style="float: right;">
                                <p style="font-size: 15px;font-weight:bold">
                                <?php echo number_format($this->Mconfig->config_price_ship()) . ' VND'; ?> 

                            </p>

                            </td>
                            </tr>

                            <?php
                            if ($this->session->userdata('coupon_price')) {
                                $price_coupon_money = $this->session->userdata('coupon_price');
                                $price_coupon = number_format($this->session->userdata('coupon_price'));
                                echo '
                            <td colspan="3">Voucher : </td> 
                            <td>
                            <p style="float:right;color:#303030"> -' . $price_coupon . ' VND</p> 
                            <td style="cursor: pointer;"><a onclick="removeCoupon()"><i class="icofont-ui-close"></i></td>
                            </td>
                            ';
                            }
                            ?>
                            <tr style="background: #f4f4f4">
                                <td colspan="3">
                                    <p style="font-size: 16px; color: red;font-weight:bold">Total order</p>
                                    <span style="font-weight: 100; font-style: italic;">(Total payment amount)</span>
                                </td>


                                <td class="text-center">
                                    <p style="font-size: 17px; color: red; font-weight:bold">
                                        <?php if (isset($price_coupon_money)) {
                                            $money_pay = ($money + $this->Mconfig->config_price_ship()) - $price_coupon_money;
                                        } else {
                                            $money_pay = $money + $this->Mconfig->config_price_ship();
                                        }
                                        echo number_format($money_pay) . ' VND'; ?>
                                    </p>
                                </td>
                            </tr>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php ?>
<script>
    function renderDistrict() {
        var provinceid = $("#province").val();
        var strurl = "<?php echo base_url(); ?>" + 'giohang/district';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: {
                'provinceid': provinceid
            },
            success: function(data) {
                $('#district').html(data);
            }
        });
    };

    function checkCoupon() {
        var code = $("input[name='coupon']").val();
        var strurl="<?php echo base_url();?>"+'Giohang/coupon';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            // dataType: 'json',
            data: {
                code: code
            },
            success: function(data) {
                var obj = JSON.parse(data);
                $('#result_coupon').html(obj);
            }
        });
    }

    function removeCoupon() {
        var strurl="<?php echo base_url();?>"+'/giohang/removecoupon';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#result_coupon').html(data);
                document.location.reload(true);
            }
        });
    }
</script>

<!-- error: (error) => {
                     console.log(JSON.stringify(error));
   } -->


   <!-- 


   về cơ bản đã fix hết rồi 
    lỗi : 
        - insert để khoảng cách
        - đặt tên biến thừa
        - k encode từ php về 

        em sai :)) chỗ add cart này 
        ý là à khong do tau chỗ này phải không 
    -->