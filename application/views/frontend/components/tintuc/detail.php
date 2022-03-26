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
                            <a href="<?php echo base_url() ?>Blog">Blog |</a>
                        </li>
                        <a style="color: #fff; font-size:15px"><?php echo $row['title']; ?></a>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb area end-->


<!--blog details area start-->
<div class="blog_details_area">
    <div class="container">
        <div class="row">

            <!-- start_left_colum -->
            <div class="col-lg-3 col-12">
                <div class="blog_details_left">
                    <!-- start blog_gợi ý -->
                    <?php
                    $posts = $this->Mcontent->content_get_news(1);
                    foreach ($posts as $value) : ?>
                        <div class="blog_left_sidebar mb-50">
                            <div class="blog_sidebar_img">
                                <img class="img-circle-custom" src="public/uploads/blog/<?php echo $value['img']; ?>" alt="">
                            </div>
                            <div class="blog_sidebar_img_content">
                                <h4> <a href="Blog/<?php echo $value['alias'] ?>"><?php echo $value['title']; ?></a>
                                </h4>

                                <div style="height:100px; overflow:hidden"><?php echo $value['fulltext'] ?> <br>[...]</div>

                                <p style="text-align:right; padding-top:15px; color:#eb592d;font-style: italic;font-size:13px"><?php echo $value['created'] ?></p>

                            </div>
                        </div>
                        <!-- end blog_gợi ý -->
                    <?php endforeach; ?>

                    <div class="blog_left_sidebar mb-50">
                        <h3>Tags</h3>
                        <div class="blog-tags-style">
                            <ul>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Print</a></li>
                                <li><a href="#">Adobe</a></li>
                            </ul>
                        </div>
                    </div>




                  
<?php
$this->load->view('frontend/modules/news');
?>

<?php
$this->load->view('frontend/modules/sale_product');
?>



                </div>
            </div>
            <!-- end_left_colum -->


            <!-- start_blog_details -->
            <div class="col-lg-9 col-12">
                <div class="blog_details_info">

                    <div class="blog_meta" style="font-size: 15px; color: #F78536;">
                        <ul>
                            <li><i class="icofont-ui-calendar"></i> <?php echo $row['created']; ?></li>
                        </ul>
                    </div>
                    <h3 style="font-size: 36px; line-height: 1.3"><?php echo $row['title']; ?> </h3>
                    <div class="blog_details_img">
                        <img style=" width: 100%;" src="public/uploads/blog/<?php echo $row['img'] ?>" alt="">
                    </div>
                    <div class="post_excerpt" style="padding-top: 50px;"><?php echo $row['fulltext']; ?>
                    </div>
                    <div style="float: right;">
                        <div class="fb-like" data-href="https://anipatt.000webhostapp.com/Blog/<?php echo $row['alias'] ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                    </div>
                    <div class="blog_replay_wrapper">
                        <div class="fb-comments" data-href="https://anipatt.000webhostapp.com/Blog/<?php echo $row['alias'] ?>" data-width="800" data-numposts="5"></div>

                    </div>




                </div>

            </div>


        </div>
    </div>
</div>

<!--blog details area end-->