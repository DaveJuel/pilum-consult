<?php require '../dashboard/includes/interface.php'; ?>
<?php
$title = "Home";
ob_start();
?>
<!-- ========== REVOLUTION SLIDER ========== -->
<section id="slider" class="full_slider">
    <div class="rev_slider_wrapper fullscreen-container">
        <div id="fullscreen_slider" class="rev_slider fullscreenbanner gradient_slider" style="display:none">
            <ul>
                <?php $web->showContent("slider",1,["image","title","description"]); ?>
            </ul>
        </div>
    </div>      
</section>
<!-- ========== SERVICES ========== -->
<section class="lightgrey_bg" id="features">
    <div class="container">
        <div class="main_title mt_wave a_center">
            <h2>OUR AWESOME SERVICES</h2>
        </div>
        <p class="main_description a_center">We make your website awesome.</p>
        <div class="row">
          <?php $web->showContent("service",2,["title","description"]); ?>
        </div>
    </div>
</section>
<!-- ========== CONTACT ========== -->
<section class="white_bg" id="contact">
    <div class="container">
        <div class="main_title mt_wave mt_yellow a_center">
            <h2>CONTACT US</h2>
        </div>
        <p class="main_description a_center">if you are considering overseas business expansion, trade or investment. Get in touch today and we will get you there.</p>
        <div class="row">            
            <div class="col-md-6">
                <div class="row">
                    <div class="contact-items">
                        <div class="col-md-3 col-sm-3">
                            <div class="contact-item">
                                <i class="glyphicon glyphicon-map-marker"></i>
                                <h6>Kigali - Rwanda</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="contact-item">
                                <i class="glyphicon glyphicon-phone-alt"></i>
                                <h6>+250 787 550 669</h6>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="contact-item">
                                <i class="fa fa-envelope"></i>
                                <h6>ndabarasayvan@gmail.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <form method="post" id="contact-form">
                    <div id="contact-result"></div>
                    <div class="form-group">
                        <input class="form-control" name="name" placeholder="Your Name" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="Your Email Address">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                    </div>
                    <button class="button btn_lg btn_blue btn_full upper" type="submit">Send message</button>          
                </form>
            </div>
        </div>
    </div>
</section>
<?php $content = ob_get_clean(); ?>
<?php include '../layout/layout_main.php'; ?>