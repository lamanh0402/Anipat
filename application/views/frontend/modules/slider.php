

<!--Slider start-->
<div class="slider_area">

<div class="slider_list  owl-carousel">

<?php
    $list_banner = $this->Mslider->list_img_banner1();
    foreach ($list_banner as $value) : ?>

    <!-- image1 -->
    <div class="single_slide" style="background-image: url(<?php echo base_url() ?>public/uploads/banner/<?php echo $value['img'];?>);">
        <div class="container">
            <div class="row">


            <!-- title -->
                <div class="col-6">
                    <div class="slider__content">

                    <h6>Exclusive Offer <span>-10%</span> Off This Week</h6>
                        <h2>It’s <strong>Black Furday!</strong> Discover our fantastic offers.</h2>

                        <div class="slider_btn">
                        <a href="<?php echo base_url() ?>Store">Shopping now</a>
                        </div>

                    </div>
                </div>


                <div class="col-6"></div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    <?php
    $list_banner = $this->Mslider->list_img_banner2();
    foreach ($list_banner as $value) : ?>
    <!-- image 2 -->
    <div class="single_slide" style="background-image: url(<?php echo base_url() ?>public/uploads/banner/<?php echo $value['img'];?>);">
        <div class="container">
            <div class="row">

            <!-- title -->
                <div class="col-6">
                    <div class="slider__content">
                        <p>Exclusive Offer <span>-10%</span> Off This Week</p>
                        <h2>It’s <strong>Black Furday!</strong> Discover our fantastic offers.</h2>

                        <div class="slider_btn">
                            <a href="<?php echo base_url() ?>Store">Shopping now</a>
                        </div>

                    </div>
                </div>


                <div class="col-6"></div>
            </div>
        </div>
    </div>

    <?php endforeach; ?>
</div>

</div>
<!--Slider end-->