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
                        <li>Cart</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb area end-->

<div class="cart_main_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 style="font-weight:700; border-bottom: 3px solid #78a206;    display: inline-block;">Your cart</h3>
                <?php if ($this->session->userdata('cart')) :
                    $cart = $this->session->userdata('cart');
                ?>
                    <form action="" method="post" id="cartformpage">

                        <div class="table-content table-responsive" style="padding-top:30px">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="img-thumbnail">Image</th>
                                        <th class="product-name">Product</th>

                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Discount</th>
                                        <th class="product-subtotal">Total</th>

                                        <th class="product-remove">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($cart as $key => $value) :
                                        $row = $this->Mproduct->product_detail_id($key);
                                    ?>
                                        <tr>
                                            <td class="product-thumbnail" style="padding:7px">
                                                <a href="<?php echo $row['alias'] ?>">
                                                    <img src="public/uploads/product/<?php echo $row['avatar'] ?>" alt="">
                                                </a>
                                            </td>
                                            <td class="product-name" style="padding:10px">
                                                <a href="<?php echo $row['alias'] ?>" class="pull-left"><?php echo $row['name'] ?></a>
                                            </td>

                                            <td class="product-price">
                                                <span class="amount" style="font-size:17px; color:#686868; font-weight:bold"><?php echo number_format($row['price']) ?>đ</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="quickview_plus_minus quick_cart">
                                                    <div class="quickview_plus_minus_inner">
                                                        <div class="cart-plus-minus cart_page">
                                                            <input type="number" min="1" name="quantity" id="<?php echo $row['id'] ?>" value="<?php echo $value ?>" onchange="onChangeSL(<?php echo $row['id'] ?>)">
                                                        </div>
                                                    </div>
                                                </div>
                        </div>
                        </td>
                        <td class="product-subtotal" style="font-size:17px; color:#686868; font-weight:bold"> <?php echo number_format($row['sale'] * $row['price'] / 100 * $value) ?>đ</td>
                        <td class="product-subtotal" style="font-size:17px; color:#686868; font-weight:bold">
                            <?php echo number_format(($row['price'] * $value) - ($row['sale'] * $row['price'] / 100 * $value)) ?>đ</td>



                        <td class="product-remove">

                            <a style="color: #eb592d; font-size:27px; cursor:pointer" class="remove" title="delete" onclick="onRemoveProduct(<?php echo $row['id']; ?>)"><i class="icofont-trash"></i></a>

                        </td>

                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                    </table>
                    <button class="btn" onclick="window.location.href='Store'" style="margin:30px 0; padding:8px 15px; font-size:16px"> <a href="<?php echo base_url() ?>Store"><i class="icofont-simple-left"></i>Keep buying</a></button>

            </div>
            <?php $total = 0;
                    $totaldiscount = 0;
            ?>
            <?php foreach ($cart as $key => $value) :
                        $row = $this->Mproduct->product_detail_id($key); ?>
                <?php
                        $sumdiscount = $row['sale'] * $row['price'] / 100 * $value;
                        $totaldiscount += $sumdiscount;
                        $sum = ($row['price'] * $value);
                        $total += $sum;
                ?>
            <?php endforeach; ?>
            <div class="row table-responsive_bottom">
                <div class="col-lg-5 col-sm-5 col-md-5">

                    <div class="cart-subtotal">
                        <span>Total</span>
                        <span><?php echo number_format($total) ?></span>
                    </div>
                    <div class="cart-subtotal">
                        <span>Total discount</span>
                        <span><?php echo number_format($totaldiscount) ?></span>
                    </div>


                    <div class="order-total">
                        <span style="font-size:16px"><strong>Total order</strong> </span>
                        <span style="font-size:16px"><strong><?php echo number_format($total - $totaldiscount) ?> </strong>
                        </span>

                    </div>

                    <div class="wc-proceed-to-checkout">

                        <?php
                        if ($this->session->userdata('sessionKhachHang')) {
                        ?>

                            <a href="info-order">Proceed to Checkout <i class="icofont-double-right"></i></a>
                        <?php    } else { ?>
                            <h4>You need to <a href="<?php echo base_url() ?>Login">Login</a> to checkout.</h4>
                        <?php         }
                        ?>
                    </div>
                </div>
                </form>

            </div>
        <?php else : ?>
            <div class="cart-info" style="text-align:center">
                <img src="public/img/sp.png">
                <p style="padding: 15px; font-size:16px; font-weight:bold; ">Cart is currently empty !!</p>
                <br>
                <button class="btn" onclick="window.location.href='Store'" style="margin:30px 0; padding:8px 15px; font-size:16px"> <a href="<?php echo base_url() ?>Store"><i class="icofont-simple-left"></i>Keep buying</a></button>
            </div>

        <?php endif; ?>
        </div>
    </div>
</div>
</div>
</div>
</div>


<script>
    function onChangeSL(id) {
        var sl = document.getElementById(id).value;
        var strurl = "<?php echo base_url(); ?>" + '/sanpham/update';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: {
                id: id,
                sl: sl
            },
            success: function(data) {
                document.location.reload(true);
            }
        });
    }

    function onRemoveProduct(id) {
        var strurl = "<?php echo base_url(); ?>" + '/sanpham/remove';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: {
                id: id
            },
            success: function(data) {
                document.location.reload(true);
            }
        });
    }
</script>