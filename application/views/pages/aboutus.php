<?php
$this->load->view('layout/header');
?>



<!--page title-->

<!--content-->
<section class="section_offset">
    <main class="container t_align_c">
        <h3 class="color_dark fw_light m_bottom_15 heading_1">New Century Tailor Co. </h3>
        <p class="m_bottom_35 heading_2">新世紀洋服公司 </p>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_20">
                <img src="<?php echo base_url(); ?>assets/images/shop2.jpg" class="r_corners" alt="">
            </div>
            <div class="col-lg-6 col-md-6 t_align_l">
                <p class="m_bottom_15 fw_light fs_large">
                </p>
                <p class="m_bottom_25 fw_light fs_large">
                    We provide the highest craftsmanship to our valuable customers with reasonable price.

                <ul class="m_bottom_25 fw_light fs_large">
                    <li>- Selected medium to high-end fabrics</li>
                    <li>-  Non fused inner facing</li>
                    <li>-  Full canvas</li>
                    <li>-  Full hand-made</li>
                    <li>-  Selected cow-horn button</li>

                </ul>
                <p class="m_bottom_25 fw_light fs_large">Best high end tailoring shop in Hong Kong. As one of Hong Kong's leading custom tailors, we are proud of our international reputation for making the highest quality tailored clothing. </p>
                </p>
                <!--                <a href="#" class="button_type_2 color_dark r_corners fs_medium color_blue_hover tr_all f_left m_right_10 m_sm_bottom_10">Meet Our Team</a>-->
            </div>
        </div>
    </main>
</section>



<div class="section_offset bg_light_2">
    <div class="container">
        <div class="row">
            <section class="col-lg-6 col-md-6 t_align_l m_sm_bottom_30">
                <h3 class="color_dark t_align_c m_bottom_15 fw_light heading_5">Testimonials</h3>

                <div class="owl-carousel" data-nav="t_nav_" data-plugin-options='{"autoPlay":true,"autoHeight":true,"transitionStyle": "backSlide"}'>
                    <!--item-->


                    <!--item-->
                    <div class="tr_all_medium">
                        <!--quote-->
                        <blockquote class="r_corners relative type_2 fs_large color_dark m_bottom_20">
                            <p style="    word-break: break-word;"><i>Carlson employs the best tailors from Shanghai, the best fabrics from the UK. His style advice is up to date without being trendy. A true class act. Expect to pay US$1000+ depending on the fabric per Saville Row quality, bespoke suit.</i></p>
                        </blockquote>
                        <div class="d_table w_full">
                            <div class="d_table_cell">
                                <!--author photo-->
                                <div class="d_inline_m circle wrapper m_right_10">
                                    <img src="images/testimonial_img_2.jpg" alt="">
                                </div>
                                <!--author name-->
                                <div class="d_inline_m">
                                    <b class="fs_large d_block color_dark">pfpedersen Florida</b>
                                    <p class="fs_medium d_mxs_none">tripadvisor.com</p>
                                </div>
                            </div>
                            <div class="d_table_cell t_align_r v_align_m">
                                <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all t_nav_prev">
                                    <i class="icon-left-open-big"></i>
                                </button>
                                <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all t_nav_next">
                                    <i class="icon-right-open-big"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div>



                        <!--quote-->
                        <blockquote class="r_corners relative type_2 fs_large color_dark m_bottom_20">
                            <p class="m_bottom_15" style="    word-break: break-word;"><i>Excellent service & quality</i></p>

                        </blockquote>
                        <div class="d_table w_full">
                            <div class="d_table_cell">
                                <!--author photo-->
                                <div class="d_inline_m circle wrapper m_right_10">
                                    <img src="images/testimonial_img_1.jpg" alt="">
                                </div>
                                <!--author name-->
                                <div class="d_inline_m">
                                    <b class="fs_large d_block color_dark">Rachel Lam</b>
                                    <p class="fs_medium d_mxs_none">Google User</p>
                                </div>
                            </div>
                            <div class="d_table_cell t_align_r v_align_m">
                                <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all t_nav_prev">
                                    <i class="icon-left-open-big"></i>
                                </button>
                                <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all t_nav_next">
                                    <i class="icon-right-open-big"></i>
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20 m_sm_bottom_30">
                <h5 class="color_dark fw_light m_bottom_15">Join Us on Facebook</h5>
                <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fnewcenturytailor&amp;width=500&amp;height=500&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" style="border:none; overflow:hidden; width:100%; height:258px;"></iframe>
                <div style="clear: both"></div>
            </div>

        </div>
    </div>
</div>




<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>