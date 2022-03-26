    
    
    <!-- blog_start -->
    <div class="service_area1" style="width:75%;margin:0 auto; padding-top: 70px;">
        <div class="container">

            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-12">
                    <div class="section_title text-center mb-95">
                        <h3 style="font-size: 36px;">From Our Blog</h3>

                    </div>
                </div>
            </div>


            <div class="row justify-content-center" style="padding-top:30px;">

            <?php  
            $listBaiViet=$this->Mcontent->content_list_home(3,'all' );
            foreach ($listBaiViet as $rowPost) :?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog_list">
                        <div class="blog__thumb">
                        <a href="Blog/<?php echo $rowPost['alias'] ?>">
                                <img style=" width: 100%; height: 254.85px" src="public/uploads/blog/<?php echo $rowPost['img'] ?>" alt="">
                            </a>
                        </div>
                        <div class="post__content">
                            <h3>
							<a href="Blog/<?php echo $rowPost['alias'] ?>">
                                    <?php echo $rowPost['title'] ?>
                                </a>
                            </h3 style="height: 36px;">
                            <div style="padding-top: 25px; max-height:150px; overflow:hidden"><?php echo $rowPost['fulltext'] ?> </div>[...]
                            <ul>
                                <li>
								<a href="Blog/<?php echo $rowPost['alias'] ?>">
                                    Read More</a></li>
                                <li class="post_date" style="font-style: italic;color:#eb592d"><?php echo $rowPost['created'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
				<?php endforeach; ?>

               

            </div>

            <div class="product-add-to-cart" style="text-align: center; padding-bottom: 100px;padding-top: 70px;">
                <a href="Blog">See All Post</a>
            </div>

        </div>
    </div>
    <!-- blog_end -->