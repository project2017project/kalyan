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
                    <?php echo form_open(base_url().'contact/send_email',array('class' => '')); ?>
                        <div class="row">
                            <div class="col-12 mb-30">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" name="" placeholder="Full Name*" required>
                                    <span class="icon fa-thin fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6 mb-30">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address*" required>
                                    <span class="icon fa-thin fa-envelope"></span>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 mb-30">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="phone" name="phone" placeholder="Mobile* (For otp)" required>
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
                        </div>
                        <div class="col-sm-12 text-end contact-btn">
                            <button type="submit" class="btn btn-default">Submit Now <i
                                    class="fa-light fa-arrow-right"></i></button>
                        </div>
<?php echo form_close(); ?>
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
                        <span><?php echo nl2br($page_contact['contact_address']); ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-20">
                <div class="assist-box-inner">
                    <div class="assist-icon">
                        <i class="fa-light fa-mobile"></i>
                    </div>
                    <div class="assist-content">
                        <p><?php echo nl2br($page_contact['contact_phone']); ?></p>
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
                        <p><?php echo nl2br($page_contact['contact_email']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

