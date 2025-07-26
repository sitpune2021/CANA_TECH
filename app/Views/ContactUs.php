 <!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>CANATECH</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="<?=base_url();?>public/assets/css/style.css">
      <link rel="stylesheet" href="<?=base_url();?>public/assets/css/fontawesome.min.css">
   </head>
   <body>

      <?=view('/include/navbar')?>

      <!-- Breadcrumb Section -->
      <div class="breadcumb-wrapper" data-bg-src="<?=base_url();?>public/assets/img/bg/breadcumb-bg.jpg">
         <div class="container">
            <div class="breadcumb-content text-center">
               <h1 class="breadcumb-title">Contact Us</h1>
               <ul class="breadcumb-menu">
                  <li><a href="<?=base_url();?>">Home</a></li>
                  <li>Contact Us</li>
               </ul>
            </div>
         </div>
      </div>

      <!-- Contact Section -->
<div class="space">
    <div class="container">
        <div class="row gy-4">
           
            <!-- Contact Info -->
            <div class="col-xl-5">
                <div class="contact-infobox smoke-bg p-4 rounded-4 shadow-sm">
                    <div class="title-area mb-4 text-center">
                        <h3 class="sec-title mb-2" style="font-size: 28px; font-weight: 600;">Contact Information</h3>
                        <p class="sec-text" style="font-size: 16px;">
                            Thank you for your interest in <strong>CANATECH</strong>. We're excited to hear from you and discuss your project ideas.
                        </p>
                    </div>

                    <!-- Phone Section -->
                    <div class="about-contact-grid inner-style d-flex align-items-start mb-4">
                        <span class="about-contact-icon me-3 mt-1">
                            <i class="fa-solid fa-headphones-simple fa-2x text-primary"></i>
                        </span>
                        <div class="about-contact-details">
                            <span class="sec-text d-block mb-2 fw-semibold" style="font-size: 18px;">Call Us For Query</span>
                            <p class="about-contact-details-text mb-1" style="font-size: 15px;">
                                <a href="tel:+918983149299" class="text-decoration-none text-dark hover-text-primary">+91 89831 49299</a>
                            </p>
                            <p class="about-contact-details-text mb-1" style="font-size: 15px;">
                                <a href="tel:+917798113344" class="text-decoration-none text-dark hover-text-primary">+91 77981 13344</a>
                            </p>
                            <p class="about-contact-details-text" style="font-size: 15px;">
                                <a href="tel:+917030531445" class="text-decoration-none text-dark hover-text-primary">+91 70305 31445</a>
                            </p>
                        </div>
                    </div>

                    <!-- Email Section -->
                    <div class="about-contact-grid inner-style d-flex align-items-start mb-4">
                        <span class="about-contact-icon me-3  ">
                            <i class="fa-regular fa-envelope-open-text fa-2x text-primary"></i>
                        </span>
                        <div class="about-contact-details">
                            <span class="sec-text d-block mb-2 fw-semibold" style="font-size: 18px;">Email Us Anytime</span>
                            <p class="mb-0" style="font-size: 17px;">
                                <a href="mailto:info@thecanatech.com?subject=Inquiry&body=Hello CANATECH team," 
                               class="text-decoration-none text-dark hover-text-primary">
                               info@thecanatech.com
                            </a>
                            </p>
                        </div>
                    </div>

                    <!-- Address Section -->
                    <div class="about-contact-grid inner-style d-flex align-items-start">
                        <span class="about-contact-icon me-3 ">
                            <i class="fa-regular fa-map-location-dot fa-2x text-primary"></i>
                        </span>
                        <div class="about-contact-details">
                            <span class="sec-text d-block mb-2 fw-semibold" style="font-size: 18px;">Visit Our Office</span>
                            <address class="text-dark " style="font-size: 15px; line-height: 1.6; font-style: normal;">
                                S. No. 47, Pune Satara Road,<br>
                                Opp. City Pride Theatre,<br>
                                Near Bhapkar Petrol Pump, Bibwewadi, Parvati,<br>
                                Pune - 411009.
                            </address>
                        </div>
                    </div>

                </div>
            </div>
               <!-- Contact Form -->
                <div class="col-xl-7 mt-5y">
                  <div class="ContactUs-formbox ms-xl-3 ps-xl-3">
                     <?php if(session()->getFlashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                <?php elseif(session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>
                   
                  <form action="<?= base_url('/SendContact') ?>" method="post" autocomplete="off" class=" p-0 myForm ">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="name" class="form-label" >First Name </label>
                                <input type="text" class="AlphabetsOnly form-control" name="name" id="name" value="<?= old('name'); ?>" placeholder="Enter Name">

                                <?php if (isset($validation) && $validation->hasError('name')){ ?>
                                 <div class="text-danger error-message" id="error-name">
                                 <?= $validation->getError('name'); ?>
                                 </div>
                                 <?php } ?>
                            </div>
 
                            <div class="col-md-6 mb-4">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class=" AlphabetsOnly form-control" name="lastname" id="lastname" value="<?= old('lastname'); ?>" Placeholder="Enter Last Name">
                                 <?php if (isset($validation) && $validation->hasError('lastname')){ ?>
                                    <div class="text-danger" style="text-align: left; margin-left: 5px; color: #ec536c!important;">
                                        <?= $validation->getError('lastname'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
 
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control allownumericwithoutdecimal" name="phone" id="phone" maxlength="10" value="<?=old('phone'); ?>" Placeholder="Enter Number">
                                <?php if (isset($validation) && $validation->hasError('phone')){ ?>
                                    <div class="text-danger" style="text-align: left; margin-left: 5px; color: #ec536c!important;">
                                        <?= $validation->getError('phone'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="<?=old('email'); ?>" Placeholder="Enter Email">
                                <?php if (isset($validation) && $validation->hasError('email')){ ?>
                                    <div class="text-danger" style="text-align: left; margin-left: 5px; color: #ec536c!important;">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
 
                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="4" ><?= old('message');?></textarea>
                            <?php if (isset($validation) && $validation->hasError('message')){ ?>
                                    <div class="text-danger" style="text-align: left; margin-left: 5px; color: #ec536c!important;">
                                        <?= $validation->getError('message'); ?>
                                    </div>
                                <?php } ?>
                        </div>
 
                       <div class="btn-part text-center mt-5">                                            
                       <div class="form-group mb-0">
                       
                         <button class="readon learn-more submit" type="submit" id="submitBtn" disabled style="filter: blur(2px); opacity: 0.7; cursor: not-allowed;">Submit Now</button>
                     </div>
                     </div>

                  </form>
                  </div>
               </div>

            </div>
         </div>
      </div>
 
   <!-- Map Section -->
<div class="space-bottom">
   <div class="container">
      <div class="contact-map style2 position-relative overflow-hidden rounded-4 shadow-sm">
         
         <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.8271565290784!2d73.85500801039858!3d18.491486782523822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c01bbbbd88ef%3A0xe6813b5e163648bd!2s47%2C%20Pune%20-%20Satara%20Rd%2C%20Navmaharshtra%20Society%2C%20Parvati%20Industrial%20Estate%2C%20Maharshi%20Nagar%2C%20Pune%2C%20Maharashtra%20411009!5e0!3m2!1sen!2sin!4v1728989350732!5m2!1sen!2sin" 
            width="100%" 
            height="200" 
            style="border:0; border-radius: 12px;" 
            allowfullscreen 
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
         </iframe>

         <div class="contact-icon position-absolute top-0 start-0 m-3 bg-white p-3 rounded-circle shadow" style="width: 60px; height: 60px;">
            <img src="<?=base_url();?>public/assets/img/icon/location-dot3.svg" alt="Location Icon" style="width: 100%; height:150%;">
         </div>

      </div>
   </div>
</div>


  <script src="<?= base_url();?>public/assets/css/jquery-3.6.0.min.js"></script>
 <script>

$('.AlphabetsOnly').keypress(function (e) {
      var regex = new RegExp(/^[a-zA-Z]+$/);
      var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
      if (regex.test(str)) {
         return true;
      }
      else {
         e.preventDefault();
         return false;
      }
   });


$(".allownumericwithoutdecimal").on("keypress keyup blur",function (event) {    
    $(this).val($(this).val().replace(/[^\d].+/, ""));
    if ((event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const inputs = form.querySelectorAll('input, textarea');
    const submitBtn = document.getElementById('submitBtn');
 
    // Enable/disable submit button with blur effect
    function toggleSubmitButton() {
        let allFilled = true;
 
        inputs.forEach(input => {
            if (input.value.trim() === '') {
                allFilled = false;
            }
        });
 
        if (allFilled) {
            submitBtn.disabled = false;
            submitBtn.style.filter = 'none';
            submitBtn.style.opacity = '1';
            submitBtn.style.cursor = 'pointer';
        } else {
            submitBtn.disabled = true;
            submitBtn.style.filter = 'blur(2px)';
            submitBtn.style.opacity = '0.7';
            submitBtn.style.cursor = 'not-allowed';
        }
    }
 
    // Hide validation error on input
    inputs.forEach(input => {
        input.addEventListener('input', function () {
            const errorDiv = document.getElementById('error-' + input.id);
            if (errorDiv) {
                errorDiv.style.display = 'none';
            }
 
            toggleSubmitButton();
        });
    });
 
    // Initial check
    toggleSubmitButton();
});

if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
  }

</script>
 <section class="team-area space-bottom" data-bg-src="<?=base_url();?>public/assets/img/bg/team_bg_1.png">
         <div class="container z-index-common">
            <div class="title-area text-center">
               <!-- <span class="sub-title text-anime-style-2" style="font-size: 40px;"></span> -->
               <h2 style="font-size: 40px;">Our Clients</h2>
         
            </div>
            <div class="slider-area team-slider-1">
               <div class="swiper th-slider teamSlider1 has-shadow" id="teamSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="th-team team-box">
                           <div class="team-img"><img src="<?=base_url();?>public/assets/img/team/c12.png" alt="Team" width="30%"></div>
                            
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="th-team team-box">
                           <div class="team-img"><img src="<?=base_url();?>public/assets/img/team/cab.png" alt="Team"></div>
                           
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="th-team team-box">
                           <div class="team-img"><img src="<?=base_url();?>public/assets/img/team/pune2.png" alt="Team"></div>
                          
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="th-team team-box">
                           <div class="team-img"><img src="<?=base_url();?>public/assets/img/team/aipex1.jpeg" alt="Team"></div>
                            
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="th-team team-box">
                           <div class="team-img"><img src="<?=base_url();?>public/assets/img/team/nagar1.png" alt="Team"></div>
                           
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="th-team team-box">
                           <div class="team-img"><img src="<?=base_url();?>public/assets/img/brand/satara.png" alt="Team"></div>
                        
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="th-team team-box">
                           <div class="team-img"><img src="<?=base_url();?>public/assets/img/team/ntpl.png" alt="Team"></div>
                          
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="th-team team-box">
                           <div class="team-img"><img src="<?=base_url();?>public/assets/img/team/rohida.png" alt="Team"></div>
                       
                        </div>
                     </div>
                  </div>
                  <div class="slider-pagination"></div>
               </div>
            </div>
         </div>
      </section>
      <?=view('/include/footer')?>

   </body>
</html>
