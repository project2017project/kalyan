<section class="banner-form-wrapper">
            <div class="container p-relative">
               <div class="row justify-content-center">
                  <div class="col-lg-12  hero-txt text-center">
                                                
                        <h4 class="h4-xs">Start Planning Your New Dream</h4>
                           <h2>Travel and immigrate with kalyan Overseas</h2>
                        <p class="p-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud</p> 
                            
                       
                        <div class="banner-form mt-70">
                        <form>
                  <div class="row d-flex align-items-end">
                    <div class="col-lg-9">
                       <div class="row">
                          <div class="col-lg-3 col-md-6 mb-15">
                             <label>Name*</label>
                             <input type="text" name="" placeholder="Enter Your Name" class="form-control">
                          </div>
                          <div class="col-lg-3 col-md-6 mb-15">
                             <label>Phone*</label>
                             <input type="text" name="" placeholder="Enter Your Phone No." class="form-control">
                          </div>
                          <div class="col-lg-3 col-md-6 mb-15">
                             <label>Your Need*</label>
                             <select class="form-control">
                                <option>Choose Category</option>
                                <option>Category 1</option>
                                <option>Category 2</option>
                             </select>
                          </div>
                           <div class="col-lg-3 col-md-6 mb-15">
                             <label>Select Perticular*</label>
                             <select class="form-control">
                                <option>Choose Service</option>
                                <option>service 1</option>
                                <option>service  2</option>
                             </select>
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-3 mb-15">
                       <button type="submit" class="btn">Call Back Request</button>
                    </div>
                  </div>
               </form>
               </div>                                   
                              </div>
               </div>
            </div>
            
         </section>



<!-- categories area start -->
<?php if($page_home_lang_independent['home_service_status'] == 'Show'): ?>
<section class="tp-categories-area pt-100 pb-70 tp-categories-bg"
    data-background="<?php echo base_url(); ?>public/kalyan/assets/img/categories/bg.png">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-categories-title-wrapper text-center">
                    <span class="tp-section-title-pre"><?php echo $page_home['home_service_title']; ?> <i
                            class="flaticon-plane"></i></span>
                    <h3 class="tp-section-title"><?php echo $page_home['home_service_subtitle']; ?></h3>
                </div>
            </div>
        </div>
        <div class="tp-categories-space wow visa-container fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
            <div class="tp-visa-active swiper-container">
                <div class="swiper-wrapper">
                    <?php
                        foreach ($services as $row) {
                    ?>
                    <div class="swiper-slide">
                        <div class="tp-categories-item p-relative mb-45">
                            <div class="tp-categories-item-inner">
                                <div class="tp-categories-thumb">
                                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>"
                                        alt="">
                                </div>
                                <div class="tp-categories-content p-relative">
                                    <div class="tp-categories-icon">
                                        <i><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>"
                                                alt=""></i>
                                    </div>
                                    <h4 class="tp-categories-title"><a
                                            href="contact.html"><?php echo $row['name']; ?></a></h4>
                                    <p><?php echo nl2br($row['short_description']); ?></p>
                                    <div class="tp-categories-shape">
                                        <img src="<?php echo base_url(); ?>public/kalyan/assets/img/categories/shape-1.png"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tp-categories-btn">
                                <a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>">Enquiry Now<i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- categories area end -->
<?php endif; ?>

<!-- categories area start -->
<section class="tp-categories-2-arae pt-10 pb-50 p-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-categories-2-title-wrapper text-center mb-50">
                    <span class="tp-section-title-pre-2">Coaching we offer</span>
                    <h3 class="tp-section-title">Get the Best Trainings <br> You Deserve</h3>
                    <p>Sponsoring and managing work visas parts now becoming results the experience<br>
                        aute irure dolor in reprehenderit cepteur sint ocaecat cupidatate</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="tp-categories-2-item mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="tp-categories-2-thumb">
                        <a href="contact.html"><img
                                src="<?php echo base_url(); ?>public/kalyan/assets/img/categories/home-2/IELTS1.jpg"
                                alt=""></a>
                    </div>
                    <div class="tp-categories-2-content p-relative text-center cate-box">
                        <div class="tp-categories-2-icon text-center tour-icons">
                            <span><img
                                    src="<?php echo base_url(); ?>public/kalyan/assets/img/categories/home-2/IELTS-ic.png"
                                    alt=""></span>
                        </div>
                        <h4 class="tp-categories-title"><a href="contact.html">IELTS Coaching</a></h4>
                        <p>Write a short description, that will you describe the title or something </p>

                        <!-- <div class="tp-categories-2-content-shape">
                              <img src="<?php echo base_url(); ?>public/kalyan/assets/img/categories/home-2/global.png" alt="">
                           </div> -->
                    </div>
                    <div class="tp-categories-2-btn cate-btn-wrap">
                        <a href="contact.html"><b>Enquiry Now</b><i class="fa-regular fa-arrow-right"></i>

                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="tp-categories-2-item mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="tp-categories-2-thumb">
                        <a href="contact.html"><img
                                src="<?php echo base_url(); ?>public/kalyan/assets/img/categories/home-2/PTE Coaching.jpg"
                                alt=""></a>
                    </div>
                    <div class="tp-categories-2-content p-relative text-center cate-box">
                        <div class="tp-categories-2-icon text-center tour-icons">
                            <span><img
                                    src="<?php echo base_url(); ?>public/kalyan/assets/img/categories/home-2/pte-cao.png"
                                    alt=""></span>
                        </div>
                        <h4 class="tp-categories-title"><a href="contact.html">PTE Coaching</a></h4>
                        <p>Write a short description, that will you describe the title or something </p>

                        <!-- <div class="tp-categories-2-content-shape">
                              <img src="<?php echo base_url(); ?>public/kalyan/assets/img/categories/home-2/global.png" alt="">
                           </div> -->
                    </div>
                    <div class="tp-categories-2-btn cate-btn-wrap">
                        <a href="contact.html"><b>Enquiry Now</b><i class="fa-regular fa-arrow-right"></i>

                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="tp-categories-2-item mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                    <div class="tp-categories-2-thumb">
                        <a href="contact.html"><img
                                src="<?php echo base_url(); ?>public/kalyan/assets/img/categories/home-2/Duolingo Coaching.jpg"
                                alt=""></a>
                    </div>
                    <div class="tp-categories-2-content p-relative text-center cate-box">
                        <div class="tp-categories-2-icon text-center tour-icons">
                            <span><img
                                    src="<?php echo base_url(); ?>public/kalyan/assets/img/categories/home-2/DLo-ca.png"
                                    alt=""></span>
                        </div>
                        <h4 class="tp-categories-title"><a href="contact.html">DUOLINGO Coaching</a></h4>
                        <p>Write a short description, that will you describe the title or something </p>
                    </div>
                    <div class="tp-categories-2-btn cate-btn-wrap">
                        <a href="contact.html"><b>Enquiry Now</b><i class="fa-regular fa-arrow-right"></i>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- categories area end -->

<!-- features area start -->
<section class="tp-features-area feature-top-wrap pt-30 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="tp-features-item mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <h3 class="tp-features-title">Visa Documents</h3>
                    <p>Write a short description that will describe their visa process
                    </p>
                    <div class="tp-features-item-btn d-flex justify-content-between align-items-center">
                        <a href="visa.html"><i class="fa-regular fa-arrow-right"></i>
                            <b>Read More</b>
                        </a>
                        <span><i class="flaticon-documents"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="tp-features-item mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <h3 class="tp-features-title">Immigration Process</h3>
                    <p>Write a short description that will describe their visa process
                    </p>
                    <div class="tp-features-item-btn d-flex justify-content-between align-items-center">
                        <a href="visa.html"><i class="fa-regular fa-arrow-right"></i>
                            <b>Read More</b>
                        </a>
                        <span><i class="flaticon-passport"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="tp-features-item mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                    <h3 class="tp-features-title">Apply for Visa</h3>
                    <p>Write a short description that will describe their visa process
                    </p>
                    <div class="tp-features-item-btn d-flex justify-content-between align-items-center">
                        <a href="visa.html"><i class="fa-regular fa-arrow-right"></i>
                            <b>Read More</b>
                        </a>
                        <span><i class="flaticon-resume"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features area end -->


<!-- apply area start -->
<section class="tp-apply-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tp-apply-thumb-wrapper p-relative">
                    <img src="<?php echo base_url(); ?>public/kalyan/assets/img/apply/apply-1.jpg" alt="">
                    <div class="shape">
                        <img src="<?php echo base_url(); ?>public/kalyan/assets/img/apply/shape-1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tp-apply-wrapper">
                    <div class="tp-apply-btn"
                        data-background="<?php echo base_url(); ?>public/kalyan/assets/img/apply/apply-2.png">
                        <h4 class="tp-apply-title">Get Free Online Visa <br> Assessment!</h4>
                        <a class="tp-btn" href="contact.html">Apply for Visa</a>
                    </div>
                    <div class="tp-apply-video">
                        <p><strong>Special Discount on Coming Batches</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- apply area end -->

<!--Testomonial-Area Start-->
<?php if($page_home_lang_independent['home_testimonial_status'] == 'Show'): ?>
<section class="tp-testimonial-2-area testimonial-wrapper pt-90 pb-90 p-relative" style="background-color: #f8f9fb;">
    <div class="tp-testimonial-2-bg include-bg"
        data-background="<?php echo base_url(); ?>public/uploads/<?php echo $page_home_lang_independent['home_testimonial_photo']; ?>">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-testimonial-2-title-wrapper text-center mb-50">
                    <h3 class="tp-section-title"><?php echo $page_home['home_testimonial_title']; ?></h3>
                    <p><?php echo $page_home['home_testimonial_subtitle']; ?></p>
                </div>
            </div>
        </div>
        <div class="tp-testimonial-slider wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
            <div class="tp-testimonial-active swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($testimonials as $row) {
                        ?>
                    <div class="swiper-slide mb-30">
                        <div class="tp-testimonial-2-item p-relative">
                            <div class="tp-testimonial-2-content d-flex justify-content-between align-items-center">
                                <div class="tp-testimonial-2-left d-flex align-items-center">
                                    <div class="tp-testimonial-2-thumb">
                                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>"
                                            alt="">
                                    </div>
                                    <div class="tp-testimonial-2-avatar">

                                        <div class="tp-testimonial-avata-info">
                                            <h4 class="tp-testimonial-title"><?php echo $row['name']; ?></h4>
                                            <span><?php echo $row['designation']; ?></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tp-testimonial-2-text">
                                <p><?php echo nl2br($row['comment']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="tp-offer-nav text-center">
                    <button type="button" class="test-button-prev-1" tabindex="0" aria-label="Previous slide"
                        aria-controls="swiper-wrapper-a2101b9cd1686346e"><i
                            class="fa-light fa-arrow-left"></i></i></button>
                    <button type="button" class="test-button-next-1" tabindex="0" aria-label="Next slide"
                        aria-controls="swiper-wrapper-a2101b9cd1686346e"><i
                            class="fa-light fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!--Testomonial-Area End-->

<!-- faq area start -->
<?php if($page_home_lang_independent['home_booking_status'] == 'Show'): ?>
<section class="tp-faq-area p-relative pt-110 pb-50">
    <div class="tp-faq-shape">
        <img class="shape-1" src="<?php echo base_url(); ?>public/kalyan/assets/img/faq/shape-1.png" alt="">
        <img class="shape-2" src="<?php echo base_url(); ?>public/kalyan/assets/img/faq/shape-2.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="tp-faq-thumb"
                    data-background="<?php echo base_url(); ?>public/kalyan/assets/img/faq/faq-1.jpg"></div>
                <div class="tp-faq-counter d-lg-flex align-items-center d-none">
                    <span><i class="flaticon-customer-service"></i></span>
                    <div class="tp-faq-counter-content">
                        <h4 class="tp-faq-counter-title">
                            <span class="purecounter" data-purecounter-duration="3" data-purecounter-end="99"></span>+
                        </h4>
                        <p>Succesful Rates</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="tp-faq-wrapper">
                    <div class="tp-faq-title-wrapper wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <span class="tp-section-title-pre-2"><?php echo $page_home['home_booking_form_title']; ?></span>
                        <h3 class="tp-section-title"><?php echo $page_home['home_booking_faq_title']; ?></h3>
                    </div>
                    <div class="tp-faq-tab-content tp-accordion wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay=".3s">
                        <div class="accordion" id="general_accordion">
                            <?php
                            $i=0;
                            foreach($home_faq as $row) {
                                $i++;
                                ?>
                            <div class="accordion-item home <?php if($i!=1) {echo 'tp-faq-active';} ?>">
                                <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="false"
                                        aria-controls="collapseTwo"><span>0<?php echo $i; ?>.</span><?php echo $row['faq_title']; ?></button>
                                </h2>
                                <div id="collapse<?php echo $i; ?>"
                                    class="accordion-collapse collapse <?php if($i==1) {echo 'show';} ?>"
                                    aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#general_accordion">
                                    <div class="accordion-body">
                                        <p><?php echo nl2br($row['faq_content']); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- faq area end -->


<section class="custom-contact-wrapper pt-90 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="section--tag text--light">Enquire Now</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="form-left-content">
                    <p>Not sure what you are looking for? Fill in the details to get a call-back.</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="th-contacts">
                    <form role="form " action="" method="">
                        <div class="row">
                            <div class="col-12 mb-30">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" name="" placeholder="Full Name*"
                                        required>
                                    <span class="icon fa-thin fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6 mb-30">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email Address*" required>
                                    <span class="icon fa-thin fa-envelope"></span>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 mb-30">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="phone" name="phone"
                                        placeholder="Mobile* (For otp)" required>
                                    <span class="icon fa-thin fa-mobile"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-30">
                                <div class="form-group">
                                    <select>
                                        <option>Select Visa...</option>
                                        <option>Canada Visa</option>
                                        <option>USA Visa</option>
                                        <option>Australia Visa</option>
                                        <option>UK Visa</option>
                                        <option>Work Visa</option>
                                        <option>Student Visa</option>
                                        <option>Tourist Visa</option>
                                        <option>Business Visa</option>
                                        <option>Other Visa</option>
                                        <option>IELTS Classes</option>
                                        <option>PTE Classes</option>
                                        <option>DUOLINGO Classes</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-sm-12 text-end contact-btn">
                                <button type="submit" class="btn btn-default">Submit Now <i
                                        class="fa-light fa-arrow-right"></i></button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-assist-wrap">
    <div class="container pt-50 pb-50">
        <div class="row">
            <div class="col-12 assist-title">
                <h4>We are here to assist you</h3>
            </div>
        </div>
        <div class="row pt-15">
            <div class="col-lg-4 mb-20">
                <div class="assist-box-inner">
                    <div class="assist-icon">
                        <i class="fa-light fa-location-dot"></i>
                    </div>
                    <div class="assist-content">
                        <p>CANAM CONSULTANTS LTD</p>
                        <span>SCO 83-84, Sector 17-D,<br>
                            Chandigarh 160017,<br>
                            India</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-20">
                <div class="assist-box-inner">
                    <div class="assist-icon">
                        <i class="fa-light fa-mobile"></i>
                    </div>
                    <div class="assist-content">
                        <p>1800 137 8055</p>
                        <span>Monday - Saturday<br>10AM to 6PM IST</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-20">
                <div class="assist-box-inner">
                    <div class="assist-icon">
                        <i class="fa-light fa-envelope"></i>
                    </div>
                    <div class="assist-content">
                        <p>info@canamgroup.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>