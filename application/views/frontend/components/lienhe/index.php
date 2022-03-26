<?php echo form_open( base_url()."Contact"); ?>

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
                        <li>Contact</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb area end-->


<!--contact area css satrt-->
<div class="contact_area ptb-90">
    <div class="container">
        <div class="row justify-content-between" style="align-items: center;">

            <!-- map -->
            <div class="col-lg-12 col-md-12 mb-40">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.738810452338!2d108.25104871477663!3d15.975010588939135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1633437726930!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            
            <div class="col-lg-6">
                <div class="contact_map_wrapper">

                    
                    <!-- start_contact -->
                    <div class="contact-message">
                        <div class="contact_title">
                            <h4>Contact Information</h4>
                        </div>
                  
                        <form id="contact-form" method="post" action="<?php echo base_url() ?>Contact">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="contact_n">Name <span>*</span></label>
									<input id="name" name="fullname" type="text" value="" class="form-control">
                                    <div class="error"><?php echo form_error('fullname')?></div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="contact_n2">Email <span>*</span></label>
									<input id="email" name="email" class="form-control" type="email" value="">
                                    <div class="error"><?php echo form_error('email')?></div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="contact_n3">Telephone</label>
									<input type="number" id="phone" class="form-control" name="phone">
                                    <div class="error"><?php echo form_error('phone')?></div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="contact_n4">Title</label>
                                    <input id="message" name="title" class="form-control custom-control" rows="2">
                                    <div class="error"><?php echo form_error('title')?></div>
                                </div>
                                <div class="col-12">
                                    <div class="contact-textarea">
                                        <label>Message <span>*</span></label>
                                        <textarea id="message" name="content" class="form-control custom-control" rows="5"></textarea>
                                        <div class="error"><?php echo form_error('message')?></div>
                                    </div>
                                    <button class="btn" type="submit" style="color: #fff; background-color:#eb592d;border: 1px solid #eb592d; border-radius:15px"> Send Message </button>
                                </div>
                            </div>
                            <p class="form-messege"></p>
                        </form>
                    </div>
                    <!-- end_contact -->


                </div>
            </div>


            <!-- start_information -->
            <div class="col-lg-4">
                <div class="contact_info_wrapper">
                    <div class="contact_title">
                        <h4>Location & Details</h4>
                    </div>

                    <!-- Address -->
                    <div class="contact_info mb-15">
                        <div class="contact_info_icone">
                            <a href="#"><i class="icofont icofont-location-pin"></i></a>
                        </div>
                        <div class="contact_info_text">
                            <p><span>Address :</span> 1234 - Bandit Tringi lAliquam <br> Vitae. New York</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact_info mb-15">
                        <div class="contact_info_icone">
                            <a href="#"><i class="icofont icofont-email"></i></a>
                        </div>
                        <div class="contact_info_text">
                            <p><span>Email : </span> Support@plazathemes.com </p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="contact_info mb-15">
                        <div class="contact_info_icone">
                            <a href="#"><i class="icofont icofont-phone"></i></a>
                        </div>
                        <div class="contact_info_text">
                            <p><span>Phone :</span> (800) 0123 456 789 </p>
                        </div>
                    </div>


                </div>
            </div>
            <!-- end_information -->


        </div>
    </div>
</div>
<!--contact area css end-->