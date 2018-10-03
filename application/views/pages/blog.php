<?php
$this->load->view('layout/header');
?>
<style>
    .product_image_back {
        background-size: contain!important;
        background-repeat: no-repeat!important;
        background-position-x: center!important;
        background-position-y: center!important;
    }

</style>
<section class="page_title_1 bg_light_2 t_align_c relative wrapper" style="margin-top: 0px;">
    <div class="container">
        <h3 class="color_dark fw_light m_bottom_5">Blog</h3>
        <!--breadcrumbs-->
        <ul class="hr_list d_inline_m breadcrumbs">
            <li class="m_right_8 f_xs_none"><a href="<?php echo site_url("/"); ?>" class="color_default d_inline_m m_right_10">Home</a><i class="icon-angle-right d_inline_m color_default fs_small"></i></li>
            <li class="m_right_8 f_xs_none"><a href="<?php echo site_url("/"); ?>" class="color_default d_inline_m m_right_10">Blog</a></li>            
        </ul>
    </div>
</section>

<!--content-->
<section class="section_offset">
    <div class="container">

        <article class="m_bottom_50 m_xs_bottom_30 blog_post">
            <!--date,category,likes-->
            <div class="f_left blog_side_container w_sm_auto f_xs_none m_xs_bottom_5">
                <!--date-->
                <a href="#" class="d_block d_xs_inline_b m_xs_right_5 r_corners blog_side_button bg_dark color_light not_hover t_align_c blog_date m_bottom_5">
                    <span class="d_block day_of_the_month fw_light"><?php echo date('d'); ?></span>
                    <span class="d_block tt_uppercase fs_medium"><?php echo date('M'); ?></span>
                </a>
                <!--category-->
                <a href="#" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c color_dark bg_dark_hover color_light_hover bg_light_3 r_corners m_bottom_5 tr_all">
                    <i class="icon-video d_inline_m"></i>
                </a>
                <!--likes-->
                <a href="#" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c border_grey r_corners tr_all color_grey color_red_hover">
                    <span class="d_inline_m">
                        <span class="d_block"><i class="icon-heart-empty color_grey_light_2 tr_all d_block m_top_5"></i></span>
                        <i class="fs_medium">982</i>
                    </span>
                </a>
            </div>
            <!--post content-->
            <figure>
                <div class="iframe_video_wrap m_bottom_20">
                    <iframe height="200" src="https://www.youtube.com/embed/-nTfrtzsup8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <figcaption>
                    <h3 class="fw_light"><a href="blog_single_video_post.html" class="color_dark tr_all">How to Suit Up | Men’s Fashion Tips</a></h3>
                    <ul class="dotted_list m_bottom_5 color_grey_light_2">
                        <li class="m_right_15 relative d_inline_m">
                            <a href="#" class="color_grey fs_small">
                                <i>By admin</i>
                            </a>
                        </li>
                        <li class="m_right_15 relative d_inline_m">
                            <a href="#" class="fs_medium color_grey"><i>Suit Style</i></a>,
                            <a href="#" class="fs_medium color_grey"><i>Fashion Tips</i></a>
                        </li>
                        <li class="m_right_15 relative d_inline_m">
                            <a href="#" class="color_scheme_hover">
                                <i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">0</i>
                            </a>
                        </li>
                        <ul class="hr_list d_inline_b social_icons">

                            <li class="m_right_8"><a href="#" class="color_light  facebook facebook_static_color    circle icon_wrap_size_1 d_block"><i class="icon-facebook-1"></i></a></li>
                            <li class="m_right_8"><a href="#" class="color_light  twitter twitter_static_color  circle icon_wrap_size_1 d_block"><i class="icon-twitter-1"></i></a></li>
                            <li class="m_right_8"><a href="#" class="color_light  googleplus googleplus_static_color  goo circle icon_wrap_size_1 d_block"><i class="icon-gplus-1"></i></a></li>

                        </ul>
                    </ul>
                    <p class="fw_light m_bottom_12">
                        A well fitted suit is something every man should have in his wardrobe so today I thought I’d share with you my top tips on how to suit up with style.                    </p>
                    <a href="#" class="color_dark d_inline_b color_pink_hover d_block m_right_20 fw_light">
                        <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                            <i class="icon-angle-right"></i>
                        </span>
                        Read More
                    </a>
                </figcaption>
            </figure>
        </article>
        <!--post-->


        <!--post-->
        <article class="clearfix m_bottom_50 m_xs_bottom_30 blog_post">
            <!--date,category,likes-->
            <div class="blog_side_container w_sm_auto f_left f_xs_none m_xs_bottom_5">
                <!--date-->
                <a href="#" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button r_corners bg_dark color_light not_hover t_align_c blog_date m_bottom_5">
                    <span class="d_block day_of_the_month fw_light"><?php echo date('d'); ?></span>
                    <span class="d_block tt_uppercase fs_medium"><?php echo date('M'); ?></span>
                </a>
                <!--category-->
                <a href="#" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c color_dark bg_dark_hover color_light_hover bg_light_3 r_corners m_bottom_5 tr_all">
                    <i class="icon-picture-1 d_inline_m"></i>
                </a>
                <!--likes-->
                <a href="#" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c border_grey r_corners tr_all color_grey color_red_hover">
                    <span class="d_inline_m">
                        <span class="d_block"><i class="icon-heart-empty color_grey_light_2 tr_all d_block m_top_5"></i></span>
                        <i class="fs_medium">176</i>
                    </span>
                </a>
            </div>
            <!--post content-->
            <figure>
                <a href="blog_single_image_post.html" class="d_block wrapper r_corners m_bottom_20">
                    <!--<img src="<?php echo base_url(); ?>assets/demoblog/1.jpg" alt="">-->
                    <div class="product_image_back product_image_back_list" style="background: url(<?php echo base_url(); ?>assets/theme/images/halfcanvas2.jpg);height:250px;"></div>

                </a>
                <figcaption>
                    <h3 class="fw_light"><a href="blog_single_image_post.html" class="color_dark tr_all">All our products are non-fused and with full canvas</a></h3>
                    <ul class="dotted_list m_bottom_5 color_grey_light_2">
                        <li class="m_right_15 relative d_inline_m">
                            <a href="#" class="color_grey fs_small">
                                <i>By admin</i>
                            </a>
                        </li>
                        <li class="m_right_15 relative d_inline_m">
                            <a href="#" class="fs_medium color_grey"><i>Suit Style</i></a>,
                            <a href="#" class="fs_medium color_grey"><i>Fashion Tips</i></a>
                        </li>
                        <li class="m_right_15 relative d_inline_m">
                            <a href="#" class="color_scheme_hover">
                                <i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
                            </a>
                        </li>
                        <ul class="hr_list d_inline_b social_icons">

                            <li class="m_right_8"><a href="#" class="color_light  facebook facebook_static_color    circle icon_wrap_size_1 d_block"><i class="icon-facebook-1"></i></a></li>
                            <li class="m_right_8"><a href="#" class="color_light  twitter twitter_static_color  circle icon_wrap_size_1 d_block"><i class="icon-twitter-1"></i></a></li>
                            <li class="m_right_8"><a href="#" class="color_light  googleplus googleplus_static_color  goo circle icon_wrap_size_1 d_block"><i class="icon-gplus-1"></i></a></li>

                        </ul>
                    </ul>

                    <p class="fw_light m_bottom_12">This is what's happening on a " FUSED " suit jacket, the " GLUED " area starting to detach after a multiple times of laundry washed!...</p>



                    <a href="#" class="color_dark d_inline_b color_pink_hover d_block m_right_20 fw_light">
                        <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                            <i class="icon-angle-right"></i>
                        </span>
                        Read More
                    </a>
                </figcaption>
            </figure>
        </article>


        <!--post-->

        <article class="m_bottom_50 m_xs_bottom_30 blog_post">
            <!--date,category,likes-->
            <div class="f_left blog_side_container w_sm_auto f_xs_none m_xs_bottom_5">
                <!--date-->
                <a href="#" class="d_block d_xs_inline_b m_xs_right_5 r_corners blog_side_button bg_dark color_light not_hover t_align_c blog_date m_bottom_5">
                    <span class="d_block day_of_the_month fw_light"><?php echo date('d'); ?></span>
                    <span class="d_block tt_uppercase fs_medium"><?php echo date('M'); ?></span>
                </a>
                <!--category-->
                <a href="#" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c color_dark bg_dark_hover color_light_hover bg_light_3 r_corners m_bottom_5 tr_all">
                    <i class="icon-video d_inline_m"></i>
                </a>
                <!--likes-->
                <a href="#" class="d_block d_xs_inline_b m_xs_right_5 blog_side_button vc_child t_align_c border_grey r_corners tr_all color_grey color_red_hover">
                    <span class="d_inline_m">
                        <span class="d_block"><i class="icon-heart-empty color_grey_light_2 tr_all d_block m_top_5"></i></span>
                        <i class="fs_medium">982</i>
                    </span>
                </a>
            </div>
            <!--post content-->
            <figure>
                <div class="iframe_video_wrap m_bottom_20">
<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fnewcenturytailor%2Fvideos%2F259525784902848%2F&show_text=0&width=560" width="560" height="311" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>                </div>
                <figcaption>
                    <h3 class="fw_light"><a href="blog_single_video_post.html" class="color_dark tr_all">We exclusively carry "Thomas Mason" 2018 Shirting Collection 
</a></h3>
                    <ul class="dotted_list m_bottom_5 color_grey_light_2">
                        <li class="m_right_15 relative d_inline_m">
                            <a href="#" class="color_grey fs_small">
                                <i>By admin</i>
                            </a>
                        </li>
                        <li class="m_right_15 relative d_inline_m">
                            <a href="#" class="fs_medium color_grey"><i>Suit Style</i></a>,
                            <a href="#" class="fs_medium color_grey"><i>Fashion Tips</i></a>
                        </li>
                        <li class="m_right_15 relative d_inline_m">
                            <a href="#" class="color_scheme_hover">
                                <i class="icon-chat-empty m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">0</i>
                            </a>
                        </li>
                        <ul class="hr_list d_inline_b social_icons">

                            <li class="m_right_8"><a href="#" class="color_light  facebook facebook_static_color    circle icon_wrap_size_1 d_block"><i class="icon-facebook-1"></i></a></li>
                            <li class="m_right_8"><a href="#" class="color_light  twitter twitter_static_color  circle icon_wrap_size_1 d_block"><i class="icon-twitter-1"></i></a></li>
                            <li class="m_right_8"><a href="#" class="color_light  googleplus googleplus_static_color  goo circle icon_wrap_size_1 d_block"><i class="icon-gplus-1"></i></a></li>

                        </ul>
                    </ul>
                    <a href="#" class="color_dark d_inline_b color_pink_hover d_block m_right_20 fw_light">
                        <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                            <i class="icon-angle-right"></i>
                        </span>
                        Read More
                    </a>
                </figcaption>
            </figure>
        </article>
        <!--post-->




        <div class="clearfix">
            <!--            <ul class="hr_list fs_medium paginations t_align_c f_left f_mxs_none m_mxs_bottom_10">
                            <li>
                                <a href="#" class="rc_first_hr color_dark">1</a>
                            </li>
                            <li>
                                <a href="#" class=" color_dark">2</a>
                            </li>
                            <li>
                                <a href="#" class="rc_last_hr color_dark">3</a>
                            </li>
                        </ul>-->
            <div class="f_right clearfix f_mxs_none">
                <!--<a href="#" class="button_type_2 color_dark r_corners transparent bg_dark_hover fs_medium prev_page_button f_left m_right_5">Prev Page</a>-->
                <a href="#" class="button_type_2 color_dark r_corners transparent bg_dark_hover fs_medium next_page_button f_left m_right_5">Next Page</a>
            </div>
        </div>
    </div>
</section>


<?php
$this->load->view('layout/footer');
?>