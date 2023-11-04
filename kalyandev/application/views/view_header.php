<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
$error_message = '';
$success_message = '';
?>
<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from template.wphix.com/visaho-prev/visaho/index1-one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Oct 2023 05:15:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
      
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <?php
    $CI =& get_instance();
    $CI->load->model('Model_common');
    $CI->load->model('Model_lang');
    $CI->load->model('admin/Model_menu');

    $class_name = '';
    $segment_2 = 0;
    $segment_3 = 0;
    $class_name = $this->router->fetch_class();
    $segment_2 = $this->uri->segment('2');
    $segment_3 = $this->uri->segment('3');

    if($class_name == 'home')
    {
        echo '<meta name="description" content="'.$page_home['meta_description'].'">';
        echo '<meta name="keywords" content="'.$page_home['meta_keyword'].'">';
        echo '<title>'.$page_home['title'].'</title>';
    }
    if($class_name == 'about')
    {
        echo '<meta name="description" content="'.$page_about['md_about'].'">';
        echo '<meta name="keywords" content="'.$page_about['mk_about'].'">';
        echo '<title>'.$page_about['mt_about'].'</title>';
    }
    if($class_name == 'terms_and_conditions')
    {
        echo '<meta name="description" content="'.$page_term['md_term'].'">';
        echo '<meta name="keywords" content="'.$page_term['mk_term'].'">';
        echo '<title>'.$page_term['mt_term'].'</title>';
    }
    if($class_name == 'privacy_policy')
    {
        echo '<meta name="description" content="'.$page_privacy['md_privacy'].'">';
        echo '<meta name="keywords" content="'.$page_privacy['mk_privacy'].'">';
        echo '<title>'.$page_privacy['mt_privacy'].'</title>';
    }
    if($class_name == 'faq')
    {
        echo '<meta name="description" content="'.$page_faq['md_faq'].'">';
        echo '<meta name="keywords" content="'.$page_faq['mk_faq'].'">';
        echo '<title>'.$page_faq['mt_faq'].'</title>';
    }
    if($class_name == 'team')
    {
        echo '<meta name="description" content="'.$page_team['md_team'].'">';
        echo '<meta name="keywords" content="'.$page_team['mk_team'].'">';
        echo '<title>'.$page_team['mt_team'].'</title>';
    }
    if($class_name == 'team_member')
    {
        $single_team_member = $this->Model_team_member->team_member_detail($segment_2);
        echo '<meta name="description" content="'.$single_team_member['meta_description'].'">';
        echo '<meta name="keywords" content="'.$single_team_member['meta_keyword'].'">';
        echo '<title>'.$single_team_member['meta_title'].'</title>';
    }
    if($class_name == 'portfolio')
    {
        if($segment_3 == 0) {
            echo '<meta name="description" content="'.$page_portfolio['md_portfolio'].'">';
            echo '<meta name="keywords" content="'.$page_portfolio['mk_portfolio'].'">';
            echo '<title>'.$page_portfolio['mt_portfolio'].'</title>';  
        } else {
            $single_portfolio = $this->Model_portfolio->portfolio_detail($segment_3);
            echo '<meta name="description" content="'.$single_portfolio['meta_description'].'">';
            echo '<meta name="keywords" content="'.$single_portfolio['meta_keyword'].'">';
            echo '<title>'.$single_portfolio['meta_title'].'</title>';
        }       
    }
    if($class_name == 'testimonial')
    {
        echo '<meta name="description" content="'.$page_testimonial['md_testimonial'].'">';
        echo '<meta name="keywords" content="'.$page_testimonial['mk_testimonial'].'">';
        echo '<title>'.$page_testimonial['mt_testimonial'].'</title>';
    }
    if($class_name == 'contact')
    {
        echo '<meta name="description" content="'.$page_contact['md_contact'].'">';
        echo '<meta name="keywords" content="'.$page_contact['mk_contact'].'">';
        echo '<title>'.$page_contact['mt_contact'].'</title>';
    }
    if($class_name == 'search')
    {
        echo '<meta name="description" content="'.$page_search['md_search'].'">';
        echo '<meta name="keywords" content="'.$page_search['mk_search'].'">';
        echo '<title>'.$page_search['mt_search'].'</title>';
    }
    if($class_name == 'terms-and-conditions')
    {
        echo '<meta name="description" content="'.$page_term['md_term'].'">';
        echo '<meta name="keywords" content="'.$page_term['mk_term'].'">';
        echo '<title>'.$page_term['mt_term'].'</title>';
    }
    if($class_name == 'privacy-policy')
    {
        echo '<meta name="description" content="'.$page_privacy['md_privacy'].'">';
        echo '<meta name="keywords" content="'.$page_privacy['mk_privacy'].'">';
        echo '<title>'.$page_privacy['mt_privacy'].'</title>';
    }
    if($class_name == 'pricing')
    {
        echo '<meta name="description" content="'.$page_pricing['md_pricing'].'">';
        echo '<meta name="keywords" content="'.$page_pricing['mk_pricing'].'">';
        echo '<title>'.$page_pricing['mt_pricing'].'</title>';
    }
    if($class_name == 'photo_gallery')
    {
        echo '<meta name="description" content="'.$page_photo_gallery['md_photo_gallery'].'">';
        echo '<meta name="keywords" content="'.$page_photo_gallery['mk_photo_gallery'].'">';
        echo '<title>'.$page_photo_gallery['mt_photo_gallery'].'</title>';
    }
    if($class_name == 'service')
    {
        if($segment_3 == 0) {
            echo '<meta name="description" content="'.$page_service['md_service'].'">';
            echo '<meta name="keywords" content="'.$page_service['mk_service'].'">';
            echo '<title>'.$page_service['mt_service'].'</title>';  
        } else {
            $single_service = $this->Model_service->service_detail($segment_3);
            echo '<meta name="description" content="'.$single_service['meta_description'].'">';
            echo '<meta name="keywords" content="'.$single_service['meta_keyword'].'">';
            echo '<title>'.$single_service['meta_title'].'</title>';
        }       
    }
    if($class_name == 'category')
    {
        $single_category = $this->Model_category->category_by_id($segment_2);
        echo '<meta name="description" content="'.$single_category['meta_description'].'">';
        echo '<meta name="keywords" content="'.$single_category['meta_keyword'].'">';
        echo '<title>'.$single_category['meta_title'].'</title>';     
    }
    if($class_name == 'news')
    {
        if($segment_3 == 0) {
            echo '<meta name="description" content="'.$page_news['md_news'].'">';
            echo '<meta name="keywords" content="'.$page_news['mk_news'].'">';
            echo '<title>'.$page_news['mt_news'].'</title>';
        } else {
            $news_single_item = $this->Model_news->news_detail($segment_3);
            echo '<meta name="description" content="'.$news_single_item['meta_description'].'">';
            echo '<meta name="keywords" content="'.$news_single_item['meta_keyword'].'">';
            echo '<title>'.$news_single_item['meta_title'].'</title>';
            $og_id = $news_single_item['news_id'];
            $og_photo = $news_single_item['photo'];
            $og_title = $news_single_item['news_title'];
            $og_description = $news_single_item['news_content_short'];
            echo '<meta property="og:title" content="'.$og_title.'">';
            echo '<meta property="og:type" content="website">';
            echo '<meta property="og:url" content="'.base_url().'news/view/'.$og_id.'">';
            echo '<meta property="og:description" content="'.$og_description.'">';
            echo '<meta property="og:image" content="'.base_url().'public/uploads/'.$og_photo.'">';
        }
    }
    if($class_name == 'event')
    {
        if($segment_3 == 0) {
            echo '<meta name="description" content="'.$page_event['md_event'].'">';
            echo '<meta name="keywords" content="'.$page_event['mk_event'].'">';
            echo '<title>'.$page_event['mt_event'].'</title>';
        } else {
            $event_single_item = $this->Model_event->event_detail($segment_3);
            echo '<meta name="description" content="'.$event_single_item['meta_description'].'">';
            echo '<meta name="keywords" content="'.$event_single_item['meta_keyword'].'">';
            echo '<title>'.$event_single_item['meta_title'].'</title>';
            $og_id = $event_single_item['event_id'];
            $og_photo = $event_single_item['photo'];
            $og_title = $event_single_item['event_title'];
            $og_description = $event_single_item['event_content_short'];
            echo '<meta property="og:title" content="'.$og_title.'">';
            echo '<meta property="og:type" content="website">';
            echo '<meta property="og:url" content="'.base_url().'event/view/'.$og_id.'">';
            echo '<meta property="og:description" content="'.$og_description.'">';
            echo '<meta property="og:image" content="'.base_url().'public/uploads/'.$og_photo.'">';
        }
    }
    ?>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/kalyan/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/kalyan/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/kalyan/assets/css/spacing.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/kalyan/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/kalyan/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/kalyan/assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/kalyan/assets/css/flaticon_visa_and_immigration.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/kalyan/assets/css/main.css">

    <?php if($_SESSION['sess_layout_direction'] == 'Right'): ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/rtl.css">
    <?php endif; ?>

</head>

<body>
    
    <?php echo $comment['code_body']; ?>
        <!-- back to top start -->
      <div class="back-to-top-wrapper">
         <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
         </button>
      </div>
      <!-- back to top end -->
    <!-- search area start -->
    <div class="search-area">
         <div class="search-inner p-relative">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-8">
                     <div class="search-wrapper">
                        <div class="search-close">
                           <button class="search-close-btn">
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </button>
                        </div>
                        <div class="search-content pt-35">
                           <h3 class="heading text-center mb-30">Hi! How can we help You?</h3>
                           <div class="d-flex justify-content-center px-5">
                              <div class="search w-100 p-relative">
                                 <input type="text" class="search-input" placeholder="Search...">
                                 <button  class="search-icon">
                                 <i class="fa fa-search"></i>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="search-overlay"></div>
      <!-- search area end -->

      <!-- offcanvas area start -->
      <div class="offcanvas__area">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
               </button>
            </div>
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-50 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo logo">
                     <a href="index.html">
                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="logo">
                     </a>
                  </div>
               </div>

                  <div class="tp-main-menu-mobile fix d-xl-none mb-40"></div>
               
               <div class="offcanvas__contact">
                  <h4 class="offcanvas__title">Contacts</h4>
                  <div class="offcanvas__contact-content d-flex">
                     <div class="offcanvas__contact-content-icon">
                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                     </div>
                     <div class="offcanvas__contact-content-content">
                        <a href="https://www.google.com/maps/search/86+Road+Broklyn+Street,+600+New+York,+USA/@40.6897806,-74.0278086,12z/data=!3m1!4b1">86 Road Broklyn Street, 600 </a>
                     </div>
                  </div>
                  <div class="offcanvas__contact-content d-flex">
                     <div class="offcanvas__contact-content-icon">
                        <i class="fa-solid fa-envelope"></i>
                     </div>
                     <div class="offcanvas__contact-content-content">
                        <a href="https://template.wphix.com/cdn-cgi/l/email-protection#8fe1eaeaebe7eae3ffcfece0e2ffeee1f6a1ece0e2"> <span class="__cf_email__" data-cfemail="4c022929282429203c0c2f23213c2d2235622f2321">info@gmail.com</span>  </a>
                     </div>
                  </div>
                  <div class="offcanvas__contact-content d-flex">
                     <div class="offcanvas__contact-content-icon">
                        <i class="fa-solid fa-phone"></i>
                     </div>
                     <div class="offcanvas__contact-content-content">
                        <a href="tel:01310-069824"> +92 666 888 0000</a>
                     </div>
                  </div>
               </div>
               <div class="offcanvas__social">
                  <a class="icon facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                  <a class="icon twitter" href="#"><i class="fab fa-twitter"></i></a>
                  <a class="icon youtube" href="#"><i class="fab fa-youtube"></i></a>
                  <a class="icon linkedin" href="#"><i class="fab fa-linkedin"></i></a>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->

      <!-- header area start -->
      <header class="tp-header-area p-relative">
         <div class="tp-header-main-sticky tp-header-main p-relative">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-2 col-md-3 col-4">
                     <div class="tp-header-logo">
                        <a href="index.html">
                           <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="">
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-7 d-none d-lg-block text-end">
                     
                  </div>
                  <div class="col-lg-3 col-md-9 col-8">
                     <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                        <div class="tp-header-contact d-xl-flex align-items-center">
                           <div class="tp-header-btn pl-10 d-none d-xl-block">
                              <a class="tp-btn d-none d-xl-block" href="contact.html"><i class="fa-brands fa-whatsapp"></i>Whatsapp</a>
                           </div>
                           <div class="tp-header-btn pl-10 d-none d-xl-block">
                              <a class="tp-btn d-none d-xl-block" href="contact.html">Contact Us</a>
                           </div>
                           <div class="tp-header-hamburger d-xl-none offcanvas-open-btn">
                              <button class="hamburger-btn">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <header class="tp-header-area p-relative">
         <div id="header-sticky" class="tp-header-sticky-onepage tp-header-main p-relative">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-2 col-md-3 col-4">
                     <div class="tp-header-logo">
                        <a href="index.html">
                           <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="">
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-7 d-none d-lg-block text-end">
                     
                  </div>
                  <div class="col-lg-3 col-md-9 col-8">
                     <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                        <div class="tp-header-contact d-xl-flex align-items-center">
                           <div class="tp-header-btn pl-10 d-none d-xl-block">
                              <a class="tp-btn d-none d-xl-block" href="contact.html"><i class="fa-brands fa-whatsapp"></i>Whatsapp</a>
                           </div>
                           <div class="tp-header-btn pl-10 d-none d-xl-block">
                              <a class="tp-btn d-none d-xl-block" href="contact.html">Contact Us</a>
                           </div>
                           <div class="tp-header-hamburger d-xl-none offcanvas-open-btn">
                              <button class="hamburger-btn">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <main>
        