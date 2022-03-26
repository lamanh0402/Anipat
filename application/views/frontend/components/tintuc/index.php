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
                        <li>Blog</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb area end-->



<!-- start_bannerblog -->
<?php
$list_banner = $this->Mslider->list_img_banner10();
foreach ($list_banner as $value) : ?>
    <div class="breadcrumb_container" style="background-image: url(<?php echo base_url() ?>/public/uploads/banner/<?php echo $value['img'] ?>); height: 520px">
    </div>
<?php endforeach; ?>
<!-- end_bannerblog -->



<!--blog area start-->
<div class="blog_list_area">
    <div class="container">
        <div class="row">
            <?php foreach ($list as $item) : ?>


                <!-- start_single blog -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog_list">
                        <div class="blog__thumb">
                            <a class="fs-ne2-img" href="Blog/<?php echo $item['alias']; ?>">
                                <img style=" width: 100%; height:270px" src="public/uploads/blog/<?php echo $item['img'] ?>" alt="">
                            </a>
                        </div>
                        <div class="post__content">
                            <h3 style="height: 36px;">
                                <a class="fs-ne2-img" href="Blog/<?php echo $item['alias']; ?>">
                                    <?php echo $item['title'] ?> </a>

                            </h3>
                            <div style="padding-top: 25px; max-height:150px; overflow:hidden"><?php echo $item['fulltext'] ?> </div>
                            <ul>
                                <li>
                                    <a class="fs-ne2-img" href="Blog/<?php echo $item['alias']; ?>">
                                        Read More</a>
                                </li>
                                <li class="post_date" style="font-style: italic;color:#eb592d"><?php echo $item['created']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end_single blog -->

            <?php endforeach; ?>

            
				<div class="shop_pagination" style="padding-top: 20px;">
					<div class="row align-items-center">


						<div class="col-lg-6 offset-lg-2 col-md-6 col-sm-6">
							<div class="pagination_content">
								<ul class="pagination">
								<?php echo $strphantrang; ?>

								</ul>

							</div>
						</div>
					</div>
				</div>



        </div>
    </div>
</div>
<!--blog area end-->