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
                        <li>Services</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb area end-->



<section>

<!-- start_banner_service -->
    <?php
    $list_banner = $this->Mslider->list_img_banner11();
    foreach ($list_banner as $value) : ?>
        <div class="gap-element clearfix" style="display:hidden; height:auto;position:relative; opacity:1; background-image:url(<?php echo base_url() ?>/public/uploads/banner/<?php echo $value['img'] ?>) ">
        <?php endforeach; ?>

        <div class="row ">

            <!-- start_text -->
            <div class="col-12">
                <div class="inner f-right" style="padding: 60px 0;width:auto">
                    <h2 class="title" style="color: #eb592d; font-weight:700">The difference in our clinic</h2>
                    <div class="xiu d-lg-flex mt-30">

                        <div class="xiu1 mr-60">
                            <h3 class="title" style="font-size: 18px; color:#414750; font-weight:500">
                                <i class="icofont-tick-mark" style="color: #78a206; font-size:40px"></i>&ensp;&ensp;Free consultation
                            </h3>

                            <h3 class="title" style="font-size: 18px; color:#414750; font-weight:500">
                                <i class="icofont-tick-mark" style="color: #78a206; font-size:40px"></i>&ensp;&ensp;Professional doctor
                            </h3>

                            <h3 class="title" style="font-size: 18px; color:#414750; font-weight:500">
                                <i class="icofont-tick-mark" style="color: #78a206; font-size:40px"></i>&ensp;&ensp;Service 24/7
                            </h3>
                        </div>

                        <div class="xiu2 pr-15">
                            <h3 class="title" style="font-size: 18px; color:#414750; font-weight:500">
                                <i class="icofont-tick-mark" style="color: #78a206; font-size:40px"></i>&ensp;&ensp;Good price
                            </h3>

                            <h3 class="title" style="font-size: 18px; color:#414750; font-weight:500">
                                <i class="icofont-tick-mark" style="color: #78a206; font-size:40px"></i>&ensp;&ensp;Professional Staff
                            </h3>

                            <h3 class="title" style="font-size: 18px; color:#414750; font-weight:500">
                                <i class="icofont-tick-mark" style="color: #78a206; font-size:40px"></i>&ensp;&ensp;More than 5000 satisfied customers
                            </h3>
                        </div>

                    </div>

                </div>
            </div>
            <!-- end_text -->

            <!-- start_box -->
            <div class="col-12">
                <div class="containera d-lg-flex">

                    <!-- time -->
                    <div class="carda mb-lg-0">

                        <div class="face face1">
                            <div class="contenta">
                                <div class="icon">
                                    <i class="icofont-ui-clock"></i>
                                    <h4>Working Hours</h4>
                                </div>
                            </div>
                        </div>


                        <div class="face face2">
                            <div class="contenta">
                                <span style="font-size: 19px;">Timing schedule</span>
                                <ul class="w-hours list-unstyled">
                                    <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
                                    <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
                                    <li class="d-flex justify-content-between">Sat - Sun : <span>10:00 - 17:00</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Emegency -->
                    <div class="carda mb-lg-0">
                        <div class="face face1">
                            <div class="contenta">
                                <div class="icon">
                                    <i class="icofont-support"></i>
                                    <h4>Emegency Cases</h4>
                                </div>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="contenta">
                                <span class="mb-3" style="font-size:19px">1-800-700-6200</span>
                                <p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
                            </div>
                        </div>
                    </div>

                    <!-- online -->
                    <div class="carda mb-lg-0">
                        <div class="face face1">
                            <div class="contenta">
                                <div class="icon">
                                    <i class="icofont-surgeon-alt"></i>
                                    <h4> Online Appoinment</h4>
                                </div>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="contenta">
                                <span style="font-size: 19px;">24 Hours Service</span>
                                <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- end_box -->

        </div>

        </div>
</section>
<!-- start_banner_service -->


<!-- start_list_service -->
<section>


    <!-- start_service detail -->
    <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Our Service </h2>
                <p class="text-center" style="padding: 30px 0">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div>
            <div class="row people">

                <?php foreach ($list as $item) :?>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box"><img style="height:200px;" class="rounded-circle" src="<?php echo base_url() ?>/public/uploads/service/<?php echo $item['img'] ?>">
                            <h3 class="name"><?php echo $item['name'] ?></h3>
                            <div class="description" style="max-height:150px; overflow:hidden"><?php echo $item['content'] ?></div>
                            <div class="social" style="padding-top:10px;">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a class="btn btn-success btn-sm" type="button" href="Service/<?php echo $item['alias'] ?> "><i class="icofont-external-link"></i> More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>   
 
            </div>
        </div>
    </div>

    <!-- end_service detail -->


</section>
<!-- end_list_service -->


<!-- start_bookapointment -->
<section class="section appoinment" style="padding:150px 0; background-color: #f4f9fc ">
    <div class="containerx" style="width:80%; margin: 0 auto;">
        <div class="row">

            <!-- start_form_book -->
            <div class="col-lg-6 col-md-12 ">
                <div class="appoinment-wrap">
                    <div style="background: #eb592d; border:1px solid #eb592d; padding: 10px 0; border-radius:15px 15px 0 0;text-align:center">
                        <p style="font-size:30px; font-weight:700; color:#fff; line-height:1.3">BOOK APPOINTMENT</p>
                    </div>
                    <form id="#" class="appoinment-form" method="post" action="#" style="padding: 30px ;">
                        <p class="mb-30" style="text-align: center; font-size:15px; color: #363F4D;">After successfully booking an appointment by filling out the form below, please wait for a confirmation call from Anipat before bringing your pet!</p>

                        <div class="row">

                            <!-- name -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                                </div>
                            </div>

                            <!-- phone -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input name="phone" id="phone" type="text" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>

                            <!-- service -->
                            <div class="col-lg-12" style="margin-bottom:1rem">
                                <p style="color: #363F4D;font-size:20px;font-weight:700">Choose service</p>
                                <div class="form-control" style="padding:25px">
                                    <label class="containercheck">One
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>

                                </div>
                            </div>

                            <!-- date -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="date" type="date" class="form-control" placeholder="dd/mm/yyyy">
                                </div>
                            </div>

                            <!-- time -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="time" id="time" type="time" class="form-control" placeholder="Time">
                                </div>
                            </div>

                            <!-- messeger -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" type="text" class="form-control" rows="6" placeholder="Your Message"></textarea>
                                </div>
                            </div>

                        </div>

                        <!-- button -->
                        <div class="product-add-to-xiu" style="text-align: center; padding-bottom: 30px;padding-top: 30px;">
                            <a href="shop.php" style="font-size: 18px;padding:5px 20px">Book Now<i class="icofont-simple-right ml-2  "></i></a>
                        </div>

                    </form>
                </div>
            </div>
            <!-- end_form_book -->


            <div class="col-lg-5 col-md-10 ">
                <div class="appoinment-content" style="padding: 0 40px;">
                    <img src="<?php echo base_url() ?>/public/img/h2.png">
                    <h2 style="color: #363f4d;font-weight:700; line-height:1.3">Book an appointment now via Hotline</h2>
                    <p style="font-size: 15px;color:#363F4D; padding: 25px 0">Please make an appointment with us before bringing your pet to use the service to ensure we always arrange personnel to best serve you.</p>
                    <h1 style="color: #ff3500;font-weight:700"><i class="icofont-phone-circle text-lg"></i>+84 911 451 240</h1>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- end_bookapointment -->





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>