<?php
$this->load->view('layout/header');
?>
<iframe class="w_full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.851052308715!2d114.15464130697005!3d22.28363136466797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400635c95e9d7%3A0xdb28bd0a01d76a2c!2zTmV3IENlbnR1cnkgVGFpbG9yIENvIOaWsOS4lue0gOa0i-acjeWFrOWPuA!5e0!3m2!1sen!2sin!4v1538525504584" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe><hr class="divider_type_1">


<!--content-->
<section class="section_offset">
    <div class="container clearfix">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                <h3 class="color_dark fw_light m_bottom_15 heading_1 t_align_c">Contact Information</h3>
                <p class="m_bottom_35 heading_2 t_align_c">You can get in touch with our team
                </p>		
                <p class="fw_light m_bottom_23">New Century Tailor Co. 新世紀洋服公司 - Best high end tailoring shop in Hong Kong. We provide the highest craftsmanship to our valuable customers with reasonable price.</p>
                <div class="row">
                    <ul class="col-lg-6 col-md-6 col-sm-6 fw_light w_break m_bottom_45 m_xs_bottom_30">
                        <li class="m_bottom_8">
                            <div class="d_inline_m icon_wrap_size_1 color_dark  circle m_right_10">
                                <i class="icon-phone-1"></i>
                            </div>
                            +(852) 2868 3768

                        </li>
                        <li class='fw_light m_bottom_8'>
                            <div class="d_inline_m icon_wrap_size_1 color_dark  fw_light circle m_right_10">
                                <i class="icon icon-print"></i>
                            </div>
                            +(852) 2868 3782
                        </li>



                        <li class="m_bottom_8">
                            <div class="d_inline_m icon_wrap_size_1 color_dark  circle m_right_10">
                                <i class="icon-mail-alt"></i>
                            </div>
                            <a href="mailto:newcenturytailor@yahoo.com.hk" class="  ">newcenturytailor@yahoo.com.hk</a><br/>
                            <a href="mailto:sales@newcenturytailor.com" class="  " style='margin-left:35px'>sales@newcenturytailor.com</a>
                        </li>

                    </ul>
                    <ul class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30 vr_list_type_5">

                        <li class="m_bottom_8 fw_light">
                            <div class="f_left icon_wrap_size_1 color_dark  circle">
                                <i class="icon-location"></i>
                            </div>
                            1/F AIE Building,<br/> 33 Connaught Road Central<br/> <span class="font_size_13"> 中環干諾道中 33號中亞洲大廈1樓 </span>
                            <br/>Hong Kong
                        </li>



                    </ul>

                </div>






                <h5 class="color_dark m_bottom_20 fw_light">Stay Connected</h5>
                <ul class="hr_list social_icons">
                    <!--tooltip_container class is required-->
                    <li class="m_right_15 m_bottom_15 tooltip_container">
                        <!--tooltip-->
                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Facebook</span>
                        <a href="#" class="d_block facebook icon_wrap_size_2 circle color_dark ">
                            <i class="icon-facebook fs_small"></i>
                        </a>
                    </li>
                    <li class="m_right_15 m_bottom_15 tooltip_container">
                        <!--tooltip-->
                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Twitter</span>
                        <a href="#" class="d_block twitter icon_wrap_size_2 circle color_dark ">
                            <i class="icon-twitter fs_small"></i>
                        </a>
                    </li>
                    <li class="m_right_15 m_bottom_15 tooltip_container m_xs_right_15">
                        <!--tooltip-->
                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Google Plus</span>
                        <a href="#" class="d_block googleplus icon_wrap_size_2 circle color_dark ">
                            <i class="icon-gplus-1 fs_small"></i>
                        </a>
                    </li>


                    <li class="m_right_15 m_bottom_15 tooltip_container">
                        <!--tooltip-->
                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Instagram</span>
                        <a href="#" class="d_block instagram icon_wrap_size_2 circle color_dark ">
                            <i class="icon-instagramm fs_small"></i>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                <h3 class="color_dark fw_light m_bottom_15 heading_1 t_align_c">Contact Form</h3>
                <p class="m_bottom_35 heading_2 t_align_c">For any further queries
                </p>	
                <?php
                if ($checksent == 1) {
                    ?>
                    <div class="alert_box success r_corners relative fs_medium m_bottom_10">
                        <b>Well done!</b> Mail Sent!!!
                        <i class="icon-cancel close_alert_box tr_all translucent circle t_align_c"></i>
                    </div>
                    <script>
                        setTimeout(function () {
                            window.location = "<?php echo site_url('Pages/contactus') ?>";
                        }, 2000)
                    </script>
                    <?php
                }
                ?>
                <?php
                if ($checksent == 2) {
                    ?>
                    <div class="alert_box error r_corners relative fs_medium">
                        <b>Connection Error!</b> Unable to sent mail.
                        <i class="icon-cancel close_alert_box tr_all translucent circle t_align_c"></i>
                    </div><?php
                }
                ?>
                <form method="post" action="#">
                    <ul>
                        <li class="row m_bottom_10">
                            <div class="col-lg-6 col-md-6 col-sm-6 w_xs_full m_xs_bottom_10">
                                <input type="text" name="cf_name" placeholder="Name*" class="w_full r_corners fw_light">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 w_xs_full">
                                <input type="email" name="cf_email" placeholder="Email*" class="w_full r_corners fw_light">
                            </div>
                        </li>
                        <li class="m_bottom_10">
                            <input type="text" name="cf_subject" placeholder="Subject" class="w_full r_corners fw_light">
                        </li>
                        <li class="m_bottom_5">
                            <textarea class="w_full r_corners fw_light height_3" name="cf_message" placeholder="Message"></textarea>
                        </li>
                        <li class="m_bottom_20">
                            <label for="capcha" class="d_inline_m fw_light m_right_5 w_auto">Anti-spam test: 4+4=</label>
                            <input id="capcha" type="text" name="cf_anti_spam" class="r_corners fw_light d_inline_m w_auto">
                        </li>
                        <li class="m_bottom_10">
                            <button class="button_type_5 color_blue transparent r_corners fs_medium tr_all m_right_10 m_sm_bottom_10">Submit</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</section>



<?php
$this->load->view('layout/footer');
?>