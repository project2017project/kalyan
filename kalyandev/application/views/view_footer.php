    <?php
    $CI =& get_instance();
    $CI->load->model('Model_common');
    $footer_setting = $CI->Model_common->all_footer_setting();
    $footer_setting_lang_independent = $CI->Model_common->all_footer_setting_lang_independent();
    $all_setting = $CI->Model_common->all_setting();
    ?>
    </main>
    <?php if($_SESSION['sess_layout_direction'] == 'Left'): ?>
    <script src="<?php echo base_url(); ?>public/js/ltr.js"></script>
    <?php endif; ?>

    <?php if($_SESSION['sess_layout_direction'] == 'Right'): ?>
    <script src="<?php echo base_url(); ?>public/js/rtl.js"></script>
    <?php endif; ?>
    

    <?php
    if($all_setting['tawk_live_chat_status'] == 'On'):
        echo $all_setting['tawk_live_chat_code'];
    endif;
    ?>

    <!-- JS here -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">

    </script><script src="<?php echo base_url(); ?>public/kalyan/assets/js/vendor/jquery.js"></script>
      <script src="<?php echo base_url(); ?>public/kalyan/assets/js/bootstrap-bundle.js"></script>
      <script src="<?php echo base_url(); ?>public/kalyan/assets/js/swiper-bundle.js"></script>
      <script src="<?php echo base_url(); ?>public/kalyan/assets/js/jquery-appear.js"></script>
      <script src="<?php echo base_url(); ?>public/kalyan/assets/js/jquery-knob.js"></script>
      <script src="<?php echo base_url(); ?>public/kalyan/assets/js/magnific-popup.js"></script>
      <script src="<?php echo base_url(); ?>public/kalyan/assets/js/nice-select.js"></script>
      <script src="<?php echo base_url(); ?>public/kalyan/assets/js/purecounter.js"></script>
      <script src="<?php echo base_url(); ?>public/kalyan/assets/js/wow.js"></script>
      <script src="<?php echo base_url(); ?>public/kalyan/assets/js/range-slider.js"></script>
      <script src="<?php echo base_url(); ?>public/kalyan/assets/js/imagesloaded-pkgd.js"></script>
      <script src="<?php echo base_url(); ?>public/kalyan/assets/js/ajax-form.js"></script>
      <script src="<?php echo base_url(); ?>public/kalyan/assets/js/main.js"></script>
   </body>

<!-- Mirrored from template.wphix.com/visaho-prev/visaho/index1-one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Oct 2023 05:15:31 GMT -->
</html>