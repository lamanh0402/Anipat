
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
                            <li>
                                <a href="<?php echo base_url() ?>/Product">Shop |</a>
                            </li>
                                <a style="color: #fff; font-size:15px"><?php echo $row['name']; ?></a>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumb area end-->


    <!-- start_details_products_table -->
    <div class="table_primary_block pt-100">
        <div class="container">
            <div class="row">

                <!-- start tab image -->
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="product-flags">

                        <div class="tab-content" style="background-color: #fff;">
                            <div class="tab-pane fade show active" id="tabone" role="tabpanel">
                                <div class="product_tab_img">
                                    <a href="#">
                                        <img src="public/uploads/product/<?php echo $row['avatar'] ?>" style="height:457.5px; width:457.5px" alt="">
                                    </a>
                                </div>
                            </div>
							<?php 
   $img = $row['img'];
   $mang = explode('#', $img);
   foreach ($mang as $value) :?>
                            <div class="tab-pane fade" id="tabtwo" role="tabpanel">
                                <div class="product_tab_img">
                                    <a href="#">
                                        <img src="public/uploads/product/<?php echo $value; ?>" style="height:457.5px; width:457.5px" alt="">
                                    </a>
                                </div>
                            </div>
							<?php endforeach; ?>

						</div>

                        <div class="products_tab_button">
                            <ul class="nav product_navactive" role="tablist">
                                <li class="product_button_one">
                                    <a class="nav-link active" data-toggle="tab" href="#tabone" role="tab" aria-controls="imgeone" aria-selected="false">
                                        <img src="public/uploads/product/<?php echo $row['avatar'] ?>" style="height:92px; width:92px" alt="">
                                    </a>
                                </li>
								<?php 
   $img = $row['img'];
   $mang = explode('#', $img);
   foreach ($mang as $value) :?>
                                <li>
                                    <a class="nav-link" data-toggle="tab" href="#tabtwo" role="tab" aria-controls="imgetwo" aria-selected="false">
                                        <img src="public/uploads/product/<?php echo $value ?>" alt="" style="height: 92px; width:92px">
                                    </a>
								</li>
								<?php endforeach; ?>

                            </ul>
                        </div>

                    </div>
                </div>
                <!-- end tab image -->


                <!-- start_infomation -->
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="product__details_content" style="padding: 0 15px">
                        <div class="demo_product">
                            <h2 style="line-height: 1.4; font-size:32px;"><?php echo $row['name']; ?></h2>
                        </div>

                        <div class="product_comments_block">
                            <div class="comments_note clearfix">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="comments_advices">
                                <ul>
                                    <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                            Reviews (<span>1</span>)</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="current_price" style="padding-top:40px;">
                            <span><?php echo $row['price']; ?> ₫</span>
                        </div>

                        <!-- start_add cart -->
                        <div class="quickview_plus_minus" style="padding: 15px 0 ;">
                            <div class="quickview_plus_minus_inner">
                              
								<?php
								if($row['number'] - $row['number_buy']==0 || $row['status'] == 0){
									echo'<h4 style="color:red;font-weight:bold">Ngừng kinh doanh</h4>';
								} else{
									echo '<div class="add_button">
									<button class="button btn-cart add_to_cart_detail detail-button" title="Mua ngay" type="button" aria-label="Add to cart" class="fa fa-shopping-cart" onclick="onAddCart('.$row['id'].')"> Add to cart</button>
								</div>';
								}
								?>                                
                                <div class="yeu_thich">
                                    <a href="#"><i class="ionicons ion-android-favorite-outline" style="font-size: 25px; font-weight:900; color:#686868;">
                                        </i></a>

                                </div>
                            </div>
                        </div>
                        <!-- end_add cart -->

                        <div class="product_information">

                            <ul>
                                <li><b>Category</b> <?php $name=$this->Mcategory->category_name($row['catid']); echo $name; ?></span></li>
                                <li><b>Brand</b> <?php $name=$this->Mcategory->category_name($row['catid']); echo $name; ?></span></li>
                                <li><b>Availability</b> <span style="color:red"><?php if($row['number'] - $row['number_buy']==0 || $row['status'] == 0) echo 'Sold out'; else echo 'In stock' ?></span></li>
                                <li><b>Share on</b>
                                    <div class="share">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
                <!-- start_infomation -->


            </div>
        </div>
    </div>
    <!-- end_details_products_table -->



    <!-- start product page tab -->
    <div class="product_page_tab ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__tab">

                        <!-- tab title -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">Nutritional Info</a>
                            </li>
                          
                        </ul>

                        <!-- tab content -->
                        <div class="tab-content">

                            <!-- description -->
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <?php echo $row['detail'] ?>
                                </div>
                            </div>

                            <!-- nutritional -->
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <?php echo $row['sortDesc'] ?>
                                </div>
                            </div>

                            <!-- reviews -->
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <div class="fb-comments" data-href="https://anipatt.000webhostapp.com/<?php echo $row['alias'] ?>" data-width="1000" data-numposts="5"></div>
        </div>
    </div>
    <!-- start product page tab -->
						

<!--Features product area-->
<div class="features_product " style="padding-bottom: 70px;">
    <div class="container-fluid">

        <!-- title -->
        <div class="row">
            <div class="col-12">
                <div class="section_title text-center">
                    <h3 style="font-size:36px"> Related Products </h3>
                </div>
            </div>
        </div>

        <!-- features product single -->
        <div class="row" style="padding-top: 20px;">
            <div class="features_product_active owl-carousel">
			<?php
						$list_spcungloai = $this->Mproduct->product_cungloai($row['catid'], $row['id'], 5);?>
						<?php 
						if(count($list_spcungloai)>0):?>>
															<?php foreach ($list_spcungloai as $sp) :?>

                    <div class="col-lg-2">
                        <div class="single__product">
                            <div class="single_product__inner">
                                <div class="product_img">
								<a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>" >
                                        <img src="public/uploads/product/<?php echo $sp['avatar'] ?>" alt="" style="padding: 10px; height: 220px ">
                                    </a>
                                </div>
                                <div class="product__content text-center">
                                    <div class="produc_desc_info">
                                        <div class="product_title" style="max-height: 37px; overflow:hidden; padding: 0px 10px;">
                                            <h3>
											<a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>" >
                                                    <?php echo $sp['name']; ?>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="product_price" style="padding: 10px 0;">
                                            <p><?php echo number_format($sp['price']); ?>₫</p>
                                        </div>
                                        <div class="product__hover">
                                            <ul>
                                            <li><a href="#"><i class="ion-android-cart" onclick="onAddCart(<?php echo $sp['id'] ?>)"></i></a></li>
																<li><a class="cart-fore" href="#" data-toggle="modal" title="Quick View"><i class="ion-android-favorite"></i></a></li>

																<li>
																	<a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>">
																		<i class="ion-clipboard"></i>
																	</a>
																</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php endforeach; ?>
				
					<?php endif; ?>	

            </div>
        </div>

        
    </div>
</div>
<!--Features product end-->

<script>

				function onAddCart(id){
					var strurl="<?php echo base_url();?>"+'/sanpham/addcart';
					jQuery.ajax({
						url: strurl,
						type: 'POST',
						dataType: 'json',
						data: {id: id},
						success: function(data) {
							document.location.reload(true);
						}
					});
				}
			</script>