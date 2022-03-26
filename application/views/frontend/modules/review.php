<!--testimonial area start-->
<?php
    $list_banner = $this->Mslider->list_img_banner4();
    foreach ($list_banner as $value) : ?>
    <div class="about_testimonial_area mb-65" style="background-image:url(<?php echo base_url() ?>/public/uploads/banner/<?php echo $value['img'] ?>);margin-top:100px;">
	<?php endforeach; ?>

    
    <div class="about_testimonial_inner">

        <div class="container">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 col-lg-12 col-md-12" style="text-align: center; padding-top: 60px">

                    <!-- title -->
                    <h1 style="font-size:40px; font-weight:bolder"> What Customer's Say</h1>
                    <div class="divider mx-auto my-4" style="width:80px; height:5px; background:#ff3500"></div>
                    <p>Your pet's health and well-being are our top priority.</p>


                    <!-- single review -->
                    <div class="testimonial___wrapper owl-carousel">

                        <div class="single___testimonial text-center">

                            <div class="testimonial__image ">
                                <img src="public/assets/img/banner/testi1.png" alt="" style="height:100px;width:100px">
                            </div>

                            <div class="testimonial__details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod teincidi dunt ut labore et dolore gna aliqua. Ut enim ad minim veniam,voluptate accusantium autem maiores blanditiis rerum esse quaerat.</p>
                            </div>

                            <div class="testimonial__info">
                                <a href="#"> Evelyn Lucas </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    </div>

    <!--testimonial area end-->