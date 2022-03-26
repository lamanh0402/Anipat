<?php
$this->load->view('frontend/modules/slider');
?>
<!-- pet_care_area_start  -->
<div class="pet_care_area" style="padding-top:100px ;">
    <div class="container">
        <div class="row align-items-center">

            <!-- image service -->
            <?php
            $list_banner = $this->Mslider->list_img_banner3();
            foreach ($list_banner as $value) : ?>
                <div class="col-lg-5 col-md-6">
                    <div class="pet_thumb">
                        <img src="<?php echo base_url() ?>public/uploads/banner/<?php echo $value['img'] ?>" alt="">
                    </div>
                </div>
            <?php endforeach; ?>



            <!-- start_service -->
            <div class="col-lg-6 offset-lg-1 col-md-6">

                <!-- introduce -->
                <div class="pet_info">
                    <div class="section_title">
                        <h2 style="font-size: 43px; font-weight: 700;line-height: 1.5;">Welcome to Anipat</h2>
                        <p style="color: #363F4D;font-size:17px">Your pet's health and well-being are our top priority.</p>
                        <p>With a mission to offer the best solutions to keep cats clean and healthy. <br>
                            Anipat pet care store with many years of experience in the industry will give <br>
                            advice and advice to ensure the health of your cat.
                        </p>
                    </div>
                </div>


                <div class="row ">
                    <!-- Item 1 -->
                    <div class="col-sm-6 col-md-6">
                        <div class="rs-icon-info-3 mb-5">
                            <div class="info-text">
                                <h3 style="color: #363F4D;font-weight:bold;font-size:24px"><i class="fa fa-scissors"></i>&ensp;&ensp;&ensp;&ensp;Pet Grooming</h3>
                                <p>Dolor sit amet, dolor gravida, placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="col-sm-6 col-md-6">
                        <div class="rs-icon-info-3 mb-5">
                            <div class="info-text">
                                <h3 style="color: #363F4D;font-weight:bold;font-size:24px"><i class="fa fa-home"></i>&ensp;&ensp;&ensp;&ensp;Pet Hotel</h3>
                                <p>Dolor sit amet, dolor gravida, placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="col-sm-6 col-md-6">
                        <div class="rs-icon-info-3 mb-5">
                            <div class="info-text">
                                <h3 style="color: #363F4D;font-weight:bold;font-size:24px"><i class="fa fa-shield"></i>&ensp;&ensp;&ensp;Vaccination</h3>
                                <p>Dolor sit amet, dolor gravida, placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="col-sm-6 col-md-6">
                        <div class="rs-icon-info-3 mb-5">
                            <div class="info-text">
                                <h3 style="color: #363F4D;font-weight:bold;font-size:24px"><i class="fa fa-medkit"></i>&ensp;&ensp;&ensp;&ensp;Pet Care</h3>
                                <p>Dolor sit amet, dolor gravida, placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- end_service -->


        </div>
    </div>
</div>
<!-- pet_care_area_end  -->




<!--Shipping area start-->
<div class="shipping_area" style="padding-top: 80px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="shipping_list d-flex justify-content-between ">

                    <div class="single_shipping_box d-flex">
                        <div class="" style="font-size:50px; color: #eb592d">
                            <i class="icofont-free-delivery"></i>
                        </div>
                        <div class="shipping_content">
                            <h6>Free Shipping On Order Over $120</h6>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>

                    <div class="single_shipping_box d-flex">
                        <div class="" style="font-size:45px; color: #eb592d">
                            <i class="icofont-money"></i>
                        </div>
                        <div class="shipping_content">
                            <h6>Money Return</h6>
                            <p>Back guarantee under 7 days</p>
                        </div>
                    </div>

                    <div class="single_shipping_box d-flex">
                        <div class="" style="font-size:45px; color: #eb592d">
                            <i class="icofont-sale-discount"></i>
                        </div>
                        <div class="shipping_content">
                            <h6>Member Discount</h6>
                            <p>Support online 24 hours a day</p>
                        </div>
                    </div>

                    <div class="single_shipping_box  d-flex">
                        <div class="" style="font-size:45px; color: #eb592d">
                            <i class="icofont-support"></i>
                        </div>
                        <div class="shipping_content">
                            <h6>Online Support 24/7</h6>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!--Shipping area end-->




<!-- Start Products_new -->
<div class="features_product home_3">
    <div class="container">
        <div class="features_product_page_four_wrapper">

            <!-- title -->
            <div class="row" style="padding-top: 20px;">
                <div class="col-12">
                    <div class="section_title text-center">
                        <h3 style="font-weight:bolder;font-size: 32px;line-height:1.2">New Products </h3>
                    </div>
                </div>
            </div>

            <!-- single_product -->
            <div class="row" style="padding-top: 50px;">
                <div class="features_product_three_active owl-carousel">

                    <!-- Start-item -->
                    <?php
                    $product_new = $this->Mproduct->product_new(10);
                    foreach ($product_new as $row) : ?>
                        <div class="col-lg-2">
                            <div class="single__product cart">
                                <div class="single_product__inner cart">
                                    <span class="new_badge" style="font-size:13px;background:red">New</span>
                                    <?php if ($row['sale'] > 0) : ?>

                                        <span class="discount_price" style="font-size:13px;background:red">- <?php echo $row['sale'] ?>%</span>
                                    <?php endif; ?>

                                    <div class="product_img">
                                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                                            <img src="public/uploads/product/<?php echo $row['avatar'] ?>" alt="" style="padding:10px; height: 220px">
                                        </a>
                                    </div>
                                    <div class="product__content text-center">
                                        <div class="produc_desc_info">
                                            <div class="product_title" style="max-height: 37px; overflow:hidden; padding: 0px 10px;">
                                                <h3>
                                                    <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                                                        <?php echo $row['name'] ?></a>
                                                </h3>
                                            </div>
                                            <?php if ($row['sale'] > 0) : ?>
                                                <div class="product_price" style="padding: 10px 0;">
                                                    <a style="color:#cacdd3;font-size:16px">
                                                        <del><?php echo number_format($row['price']); ?>₫</del>
                                                    </a>&ensp;&ensp;
                                                    <a style="color: #ff3500;font-size: 18px;font-weight: 600;"><?php echo number_format($row['price'] - ($row['price'] * $row['sale'] / 100)); ?>₫
                                                    </a>
                                                </div>
                                            <?php else : ?>

                                                <div class="product_price" style="padding: 10px 0 ;">

                                                    <p><?php echo number_format($row['price']); ?>₫</p>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="product__hover">
                                            <ul> 
                                            <li><a style="color:#78a206; cursor:pointer"><i class="ion-android-cart" onclick="onAddCart(<?php echo $row['id'] ?>)"></i></a></li>
                                                <li><a class="cart-fore" data-toggle="modal" title="Quick View" style="color:#78a206; cursor:pointer"><i class="ion-android-favorite"></i></a></li>
                                                <li>
                                                    <!-- đó khác mà :d  cái đầu tiên thui ớ -->

                                                    <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                                                        <i class="ion-clipboard"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End-item -->
                    <?php endforeach; ?>



                </div>
            </div>


        </div>
    </div>
</div>
<!-- End Products_new -->



<!--Start Product Sale-->
<div class="Category_product_area" style="padding-top:120px; padding-bottom:20px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="Category_product_banner">
                    <?php
                    $list_banner = $this->Mslider->list_img_banner5();
                    foreach ($list_banner as $value) : ?>
                        <div class="Category_banner_inner">
                            <a href="#">
                                <img src="<?php echo base_url() ?>/public/uploads/banner/<?php echo $value['img'] ?>" alt="" height="350.21px" width="720px">
                            </a>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="shop_product_head shop__two d-flex justify-content-between mb-30">
                    <div class="section_title space_2 text-left">
                        <h3 style="font-size:32px">Sale Products</h3>
                    </div>

                </div>



                <div class="row">
                    <div class="category_product_active owl-carousel">
                        <?php
                        $product_sale = $this->Mproduct->product_sale();
                        foreach ($product_sale as $row) : ?>
                            <div class="col-lg-2">
                                <div class="single__product">
                                    <div class="single_product__inner">
                                        <?php if ($row['sale'] > 0) : ?>

                                            <span class="new_badge" style="font-size:14px;background:red">- <?php echo $row['sale'] ?>%</span>
                                        <?php endif; ?>

                                        <div class="product_img">
                                            <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                                                <img src="public/uploads/product/<?php echo $row['avatar'] ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content text-center">
                                            <div class="produc_desc_info">
                                                <div class="product_title" style="max-height: 37px; overflow:hidden; padding: 0px 10px;">
                                                    <h4>
                                                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                                                            <?php echo $row['name'] ?></a>
                                                    </h4>
                                                </div>
                                                <div class="product_price" style="padding: 10px 0;">
                                                    <a style="color:#cacdd3;font-size:14px">
                                                        <del><?php echo number_format($row['price']); ?>₫</del>
                                                    </a> <br>
                                                    <a style="color: #ff3500;font-size: 16px;font-weight: 600;"><?php echo number_format($row['price'] - ($row['price'] * $row['sale'] / 100)); ?>₫
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product__hover">
                                                <ul>
                                                    <li><a style="color:#78a206; cursor:pointer"><i class="ion-android-cart" onclick="onAddCart(<?php echo $row['id'] ?>)"></i></a></li>
                                                    <li><a class="cart-fore" style="color:#78a206; cursor:pointer" data-toggle="modal" title="Quick View"><i class="ion-android-favorite"></i></a></li>

                                                    <li>
                                                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                                                            <i class="ion-clipboard"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--End Product sale-->

<!--Banner area start-->
<div class="banner_area banner_area-2 two pb-90 pt-90">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 col-xs-12">
                <?php
                $list_banner = $this->Mslider->list_img_banner6();
                foreach ($list_banner as $value) : ?>
                    <div class="single_banner">
                        <a href="#">
                            <img src="<?php echo base_url() ?>/public/uploads/banner/<?php echo $value['img'] ?>" alt="" style="height:200px">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-lg-6 col-xs-12">
                <?php
                $list_banner = $this->Mslider->list_img_banner7();
                foreach ($list_banner as $value) : ?>
                    <div class="single_banner">
                        <a href="#">
                            <img src="<?php echo base_url() ?>/public/uploads/banner/<?php echo $value['img'] ?>" alt="" style="height:200px">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-lg-3 col-xs-12">
                <?php
                $list_banner = $this->Mslider->list_img_banner8();
                foreach ($list_banner as $value) : ?>
                    <div class="single_banner">
                        <a href="#">
                            <img src="<?php echo base_url() ?>/public/uploads/banner/<?php echo $value['img'] ?>" alt="" style="height:200px">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--Banner area end-->

<!-- Start Products_new -->
<div class="features_product home_3">
    <div class="container">
        <div class="features_product_page_four_wrapper">

            <!-- title -->
            <div class="row" style="padding-top: 20px;">
                <div class="col-12">
                    <div class="section_title text-center">
                        <h3 style="font-weight:bolder;font-size: 32px;line-height:1.2">Bestseller Products </h3>
                    </div>
                </div>
            </div>

            <!-- single_product -->
            <div class="row" style="padding-top: 50px;">
                <div class="features_product_three_active owl-carousel">

                    <!-- Start-item -->
                    <?php 
        $product_sale = $this->Mproduct->product_selling(10);
        foreach ($product_sale as $row) :?>                        <div class="col-lg-2">
                            <div class="single__product cart">
                                <div class="single_product__inner cart">
                                    <?php if ($row['sale'] > 0) : ?>

                                        <span class="new_badge" style="font-size:13px;background:red">- <?php echo $row['sale'] ?>%</span>
                                    <?php endif; ?>

                                    <div class="product_img">
                                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                                            <img src="public/uploads/product/<?php echo $row['avatar'] ?>" alt="" style="padding:10px; height: 220px">
                                        </a>
                                    </div>
                                    <div class="product__content text-center">
                                        <div class="produc_desc_info">
                                            <div class="product_title" style="max-height: 37px; overflow:hidden; padding: 0px 10px;">
                                                <h3>
                                                    <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                                                        <?php echo $row['name'] ?></a>
                                                </h3>
                                            </div>
                                            <?php if ($row['sale'] > 0) : ?>
                                                <div class="product_price" style="padding: 10px 0;">
                                                    <a style="color:#cacdd3;font-size:16px">
                                                        <del><?php echo number_format($row['price']); ?>₫</del>
                                                    </a>&ensp;&ensp;
                                                    <a style="color: #ff3500;font-size: 18px;font-weight: 600;"><?php echo number_format($row['price'] - ($row['price'] * $row['sale'] / 100)); ?>₫
                                                    </a>
                                                </div>
                                            <?php else : ?>

                                                <div class="product_price" style="padding: 10px 0 ;">

                                                    <p><?php echo number_format($row['price']); ?>₫</p>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="product__hover">
                                            <ul>
                                            <li><a style="color:#78a206; cursor:pointer"><i class="ion-android-cart" onclick="onAddCart(<?php echo $row['id'] ?>)"></i></a></li> 
                                                <li><a class="cart-fore" style="color:#78a206; cursor:pointer" data-toggle="modal" title="Quick View"><i class="ion-android-favorite"></i></a></li>
                                                <li>
                                                    <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                                                        <i class="ion-clipboard"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End-item -->
                    <?php endforeach; ?>



                </div>
            </div>


        </div>
    </div>
</div>
<!-- End Products_new -->


<?php
$this->load->view('frontend/modules/review');
?>

<?php
$this->load->view('frontend/modules/blog_home');
?>

<script>
    function onAddCart(id) {
        var strurl = "<?php echo base_url(); ?>" + '/sanpham/addcart';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: {
                id: id
            },
            success: function(data) {
                var giatri = 0 ;
                $.each(data, function (indexInArray, valueOfElement) { 
                    if(indexInArray == id){
                        giatri = valueOfElement;
                    }
                });
                if(giatri == 1){
                    location.reload();
                }else{
                    alert("This product is already in your cart !");
                }
            }
        });
    }
</script>



