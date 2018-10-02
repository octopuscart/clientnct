<?php
$this->load->view('layout/header');
?>

<!--youtube video-->
<!--<link href="https://pupunzi.com/mb.components/mb.YTPlayer/demo/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
<script src="https://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>
<script src="https://pupunzi.com/mb.components/mb.YTPlayer/demo/assets/apikey.js"></script>
<div id="myPlayer" style="background: #000; height: 600px; width: 100%; position: relative; " ></div>
<div id="customElement" class="player" data-property="{videoURL:'qvuILbcXlg8',containment:'#myPlayer', showControls:true, autoPlay:true, loop:false, mute:true, startAt:0, opacity:1, addRaster:true, quality:'default'}">
    <div id="testText">
        <h1>jQuery.mb.YTPlayer</h1>
        <h2>An HTML5 Background player <br>for YouTube videos</h2>
    </div>
</div>-->
<script>
    var myPlayer;
    jQuery(function () {

        var options = {
            mobileFallbackImage: "http://www.hdwallpapers.in/walls/pink_cosmos_flowers-wide.jpg",
            playOnlyIfVisible: false
        };

//        myPlayer = jQuery(".player").YTPlayer(options);
    });
</script>
<!--end of youtube video-->


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>






<section class="relative w_full m_bottom_15">
    <div class="r_slider">
        <ul>





            <li data-transition="fade" data-slotamount="100">

                <div class="fb-video" data-href="https://www.facebook.com/facebook/videos/259525784902848/"  data-show-text="false" data-autoplay="true">

                </div>
            </li>
            



            <li data-transition="fade" data-slotamount="10">
                <img src="<?php echo base_url(); ?>assets/theme/slider/1bb.jpg" alt="" data-bgfit="cover" data-bgposition="center center">
                <div class="caption sfl hide_from_mobile str " data-x="left" data-y="108" data-speed="700"><h1 class="color_dark fw_light text_padding_10 " style="font-size: 40px;">Welcome to <br/>New Century Tailor Co. 新世紀洋服公司
                        <br/>custom clothing.</h1></div>
                <div class="caption sfl hide_from_mobile str color_dark" data-x="10" data-x="left" data-y="243" data-speed="700" data-start="1200">Specializing in bespoke and made-to-measure <br/>apparel and alterations for men</div>
                <div class="caption sfl hide_from_mobile str" data-x="10" data-x="left" data-y="300" data-speed="700" data-start="1400">
                    <a href="#" role="button" class="tt_uppercase button_type_3 transparent r_corners fs_medium d_block tr_all">Try Now!</a>
                </div>
            </li>
            
            
            <li data-transition="fade" data-slotamount="10">
                <img src="<?php echo base_url(); ?>assets/theme/slider/2bbbb.jpg" alt="" data-bgfit="cover" data-bgposition="center center">
                <div class="caption lfb ltb" data-x="left" data-y="bottom" data-hoffset="-118" data-speed="600"><img src="<?php echo base_url(); ?>assets/theme/slider/suit_trans1.png" alt=""></div>
                <div class="caption sfl hide_from_mobile str" data-x="600" data-y="109" data-speed="700" data-start="1500"><h1 class="color_light fw_light bg_dark text_padding_10" style="font-size: 34px;">CUSTOM MADE SUITS & SHIRTS.
                        <br>SETTING THE STANDARD.</h1></div>
                <div class="caption sfl hide_from_mobile str color_light" data-x="600" data-y="244" data-speed="700" data-start="1700">Specializing in bespoke and made-to-measure <br/>apparel and alterations for men</div>
                <div class="caption sfl hide_from_mobile str" data-x="600" data-y="339" data-speed="700" data-start="1900">
                    <a href="#" role="button" class="tt_uppercase button_type_5 color_light bg_dark r_corners fs_medium d_block tr_all" >Customize Now!</a>
                </div>
            </li>
            <li data-transition="fade" data-slotamount="10">
                <img src="<?php echo base_url(); ?>assets/theme/slider/2bbb.jpg" alt="" data-bgfit="cover" data-bgposition="center center">
                <div class="caption sfl hide_from_mobile str" data-x="600" data-y="109" data-speed="700" data-start="1500"><h1 class="color_light fw_light bg_dark text_padding_10" style="font-size: 34px;">CUSTOM MADE SUITS & SHIRTS.
                        <br>SETTING THE STANDARD.</h1></div>
                <div class="caption sfl hide_from_mobile str color_light" data-x="600" data-y="244" data-speed="700" data-start="1700">Specializing in bespoke and made-to-measure <br/>apparel and alterations for men</div>
                <div class="caption sfl hide_from_mobile str" data-x="600" data-y="339" data-speed="700" data-start="1900">
                    <a href="#" role="button" class="tt_uppercase button_type_5 color_light bg_dark r_corners fs_medium d_block tr_all" >Customize Now!</a>
                </div>
            </li>


            <li data-transition="fade" data-slotamount="10">
                <img src="<?php echo base_url(); ?>assets/theme/slider/3bb.jpg" alt="" data-bgfit="cover" data-bgposition="center center">
                <div class="caption sfl hide_from_mobile str" data-x="left" data-y="98" data-speed="700"><h1 class="color_light fw_light" style="font-size: 34px;">PREMIER <br/>MADE-TO-MEASURE CLOTHING</h1></div>
                <div class="caption sfl hide_from_mobile str color_light" data-x="left" data-y="200" data-speed="700" data-start="1200"> Best high end tailoring shop in <br/>Hong Kong.</div>
                <div class="caption sfl hide_from_mobile str" data-x="left" data-y="300" data-speed="700" data-start="1400">
                    <a href="#" role="button" class="tt_uppercase button_type_3 transparent color_light r_corners fs_medium d_block tr_all" >Create Your Design</a>
                </div>
            </li>



            <li data-transition="fade" data-slotamount="10">
                <img src="<?php echo base_url(); ?>assets/theme/slider/10.jpg" alt="" data-bgfit="cover" data-bgposition="center center">
                <div class="caption sfl hide_from_mobile str" data-x="10" data-y="109" data-speed="700" data-start="1500"><h1 class="color_black fw_light  text_padding_10" style="font-size: 34px;">CUSTOM MADE SUITS & SHIRTS.
                        <br>SETTING THE STANDARD.</h1></div>
                <div class="caption sfl hide_from_mobile str color_black" data-x="20" data-y="244" data-speed="700" data-start="1700">We provide the highest craftsmanship to <br/>our valuable customers with reasonable price.</div>
                <div class="caption sfl hide_from_mobile str" data-x="20" data-y="339" data-speed="700" data-start="1900">
                    <a href="#" role="button" class="tt_uppercase button_type_3 color_light r_corners fs_medium d_block tr_all" >Customize Now!</a>
                </div>
            </li>
            



        </ul>
    </div>
</section>


<!--canvas constraustion-->
<section class="section_offset">
    <div class="container t_align_c">
        <h3 class="color_dark fw_light m_bottom_15 heading_1" data-appear-animation="bounceInLeft">CANVASSED CONSTRUCTION</h3>
        <p class="m_bottom_35 heading_2" data-appear-animation="bounceInLeft" data-appear-animation-delay="150">Canvassed Jackets Improves Drape and Durability </p>
        <div class="tabs">

            <!--tabs content-->
            <article id="tab-1" data-appear-animation="fadeInUp" data-appear-animation-delay="450">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_20">
                        <img src="<?php echo base_url(); ?>assets/theme/images/halfcanvas2.jpg" class="r_corners" alt="" style="    width: 100%;">
                    </div>
                    <div class="col-lg-6 col-md-6 t_align_l fw_light">
                        <p class="m_bottom_15">The canvas is cut to the jacket's shape, then the wool is stitched to the canvas. Over time, as you wear the jacket, the canvas conforms to your body's shape, creating an excellent fit.  </p>
                        <p class="m_bottom_15">The canvas lining allows the suit fabric to drape naturally, allowing a clean, well put-together look. It takes years of training and additional hours of handwork for a tailor to be able to craft this the correct way.

                        </p>
                        <p class="m_bottom_15">Half-canvassed jackets have several benefits. First, they generally have a lower price than a similar fully canvassed jacket. Less handcraft means a lower overall cost to you. And because the top half of the jacket is not fused you’ll not run into any bubbling problems as you might in a fused jacket. This adds to the lifespan of the garment. Finally, the canvassing provides the proper base for the jacket to drape naturally across your chest, rather than appearing stiff and lifeless as many fused jackets do.</p>
                    </div>
                </div>
            </article>

        </div>
    </div>
</section>


<section class="section_offset image_bg_1">
    <div class="container">
        <h3 class="color_light fw_light m_bottom_15 t_align_c heading_3 appear-animation bounceInLeft appear-animation-visible" data-appear-animation="bounceInLeft">What We Do</h3>
        <p class="m_bottom_40 t_align_c heading_4 appear-animation bounceInLeft appear-animation-visible color_light" data-appear-animation="bounceInLeft" data-appear-animation-delay="150" style="animation-delay: 150ms;">Four Simple Steps To A 

            Custom Dress </p>
        <div data-appear-animation="fadeInUp" data-appear-animation-delay="800" class="appear-animation color_light fadeInUp appear-animation-visible" style="animation-delay: 800ms;">
            <!--first four services-->
            <div class="row m_bottom_30">
                <!--service-->
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <figure class="item_services">
                        <h6 class="m_bottom_5 relative">
                            <a href="#" class="color_light d_block n_sc_hover">Create Own Style</a>
                            <span class="d_block icon_wrap_size_3 circle color_light wrapper animation_fill">
                                <i class="icon-tools tr_all"></i>
                            </span>
                        </h6>
                        <p class="fs_medium m_bottom_10">Choose any fabric and create own style.</p>

                    </figure>
                </div>
                <!--service-->
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <figure class="item_services">
                        <h6 class="m_bottom_5 relative">
                            <a href="#" class="color_light d_block n_sc_hover">Get Size</a>
                            <span class="d_block icon_wrap_size_3 circle color_light wrapper animation_fill">
                                <i class="icon-tape tr_all"></i>
                            </span>
                        </h6>
                        <p class="fs_medium m_bottom_10">Let Size and calculate your measurement.</p>

                    </figure>
                </div>
                <!--service-->
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <figure class="item_services">
                        <h6 class="m_bottom_5 relative">
                            <a href="#" class="color_light d_block n_sc_hover">Cut to Create</a>
                            <span class="d_block icon_wrap_size_3 circle color_light wrapper animation_fill">
                                <i class="icon-crop tr_all"></i>
                            </span>
                        </h6>
                        <p class="fs_medium m_bottom_10">Our experienced shanghainese tailor cut and make your new dress.</p>

                    </figure>
                </div>
                <!--service-->
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <figure class="item_services">
                        <h6 class="m_bottom_5 relative">
                            <a href="#" class="color_light d_block n_sc_hover">Delivery </a>
                            <span class="d_block icon_wrap_size_3 circle color_light wrapper animation_fill">
                                <i class="icon-truck tr_all"></i>
                            </span>
                        </h6>
                        <p class="fs_medium m_bottom_10">Delivery with guaranteed best fit.</p>

                    </figure>
                </div>
            </div>

        </div>
    </div>
</section>

<!--<section class="section_offset bg_light_2">
    <div class="container t_align_c">
        <h3 class="color_dark fw_light m_bottom_15 appear-animation bounceInLeft appear-animation-visible" data-appear-animation="bounceInLeft">CUSTOM TAILORED</h3>
        <p class="m_bottom_35 appear-animation bounceInLeft appear-animation-visible" data-appear-animation="bounceInLeft" data-appear-animation-delay="150" style="animation-delay: 150ms;">Order online & get your men's suit straight from the production line - made-to-measure with canvassed construction </p>

        <section class="portfolio_isotope_container home three_columns without_text m_bottom_15" data-isotope-options="{&quot;itemSelector&quot; : &quot;.portfolio_item&quot;,&quot;layoutMode&quot; : &quot;fitRows&quot;,&quot;transitionDuration&quot;:&quot;0.7s&quot;}" style="position: relative; ">

<?php
$customarray = [
    array("title" => "Suits", "id" => "2", "image" => "suitb.jpg", "price" => "1700.00"),
    array("title" => "Shirts", "id" => "2", "image" => "shirts.jpg", "price" => "220.00"),
    array("title" => "Jackets", "id" => "3", "image" => "suita.jpg", "price" => "1200.00"),
    array("title" => "Pants", "id" => "4", "image" => "pant.jpg", "price" => "500.00")
];
foreach ($product_home_slider_bottom['home_slider'] as $key => $value) {
    ?>
                                                                             
    <?php
}
?>


        </section>

    </div>
</section>-->


<!--content-->
<section class="section_offset bg_light_2">
    <div class="container">
        <h3 class="fw_light color_dark m_bottom_35 t_align_c" data-appear-animation="bounceInLeft">Featured Products</h3>
        <div class="relative ">
            <div class="row">
                <div class="owl-carousel t_xs_align_c featured_products" data-nav="fproducts_nav_" data-plugin-options='{"singleItem":false,"itemsCustom":[[992,4],[768,3],[600,2],[10,1]]}'>
                    <?php
                    foreach ($product_home_slider_bottom['home_bottom'] as $key => $value) {
                        ?>


                        <!--product-->
                        <figure class="fp_item t_align_c d_xs_inline_b col-lg-12 col-md-12 col-sm-12" data-appear-animation="bounceIn" data-appear-animation-delay="400">
                            <div class="relative r_corners d_xs_inline_b d_mxs_block wrapper m_bottom_23">
                                <!--images container-->
                                <div class="fp_images relative">
                                    <img class="lazyload tr_all" src="<?php echo imageserver . $value['file_name1']; ?>" alt=""  style="background: white;">
                                    <img class="lazyload tr_all" src="<?php echo imageserver . $value['file_name']; ?>" alt="" >
                                </div>
                                <!--labels-->

                            </div>
                            <figcaption>
                                <h6 class="m_bottom_5"><a href="#" class="color_dark"><?php $value['title']; ?></a></h6>
                                <a href="#" class="fs_medium color_grey d_inline_b m_bottom_3"><i><?php $value['short_description']; ?></i></a>
                                <div class="im_half_container m_bottom_10">
                                    <p class="color_dark fw_ex_bold half_column d_inline_m t_align_c tr_all animate_fctl fp_price with_ie">{{<?php echo $suitcustome->price; ?>|currency:"<?php echo globle_currency; ?> "}}</p>	
                                    <p class="color_dark fw_ex_bold half_column d_inline_m t_align_c tr_all animate_fctl fp_price with_ie hide_from_mobile"></p>	

                                </div>
                                <div class="clearfix">
                                    <div class="half_column w_md_full m_md_bottom_10 animate_fctl tr_all f_left with_ie f_md_none">
                                        <a href="<?php echo site_url("Product/customizationRedirect/" . $suitcustome->id) ?>/<?php echo $value['id']; ?>" class="button_type_6 d_inline_b color_pink transparent r_corners vc_child tr_all add_to_cart_button"><span class="d_inline_m clerarfix"><i class="icon-basket f_left m_right_10 fs_small"></i><span class="fs_small">Customize</span></span></a>
                                    </div>
                                    <div class="half_column w_md_full animate_fctr tr_all f_left f_md_none clearfix with_ie">
                                        <a href="#" class="button_type_6 relative tooltip_container f_right f_md_none d_md_inline_b d_block color_dark r_corners vc_child tr_all color_purple_hover tr_all t_align_c m_right_5 m_md_right_0"><i class="icon-heart d_inline_m fs_large"></i><span class="d_block r_corners color_default tooltip fs_small fw_normal tr_all">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <!--product-->


                    <?php } ?>
                </div>
            </div>
            <!--carousel nav-->
            <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fproducts_nav_prev d_md_none" data-appear-animation="fadeIn">
                <i class="icon-left-open-big"></i>
            </button>
            <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fproducts_nav_next d_md_none" data-appear-animation="fadeIn">
                <i class="icon-right-open-big"></i>
            </button>
        </div>
        <!--banners-->
<!--        <section class="row t_xs_align_c">
            <div class="col-lg-4 col-md-4 col-sm-4 m_bottom_12 m_xs_bottom_30" data-appear-animation="fadeInUp">
                <a href="#" class="d_block d_xs_inline_b d_mxs_block"><img src="images/banner_1.jpg" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 m_bottom_12 m_xs_bottom_30" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
                <a href="#" class="d_block d_xs_inline_b d_mxs_block"><img src="images/banner_2.jpg" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 m_bottom_12 m_xs_bottom_0" data-appear-animation="fadeInUp" data-appear-animation-delay="400">
                <a href="#" class="d_block d_xs_inline_b d_mxs_block"><img src="images/banner_3.jpg" alt=""></a>
            </div>
        </section>-->
    </div>
</section>


<!--<section class="section_offset_2 image_bg_3" id="pricing_tables_container">
    <div class="container">
        <h3 class="color_light fw_light m_bottom_15 t_align_c appear-animation bounceInUp appear-animation-visible" data-appear-animation="bounceInUp">ORIGINAL ITALIAN FABRICS</h3>
        <p class="m_bottom_35 t_align_c color_light appear-animation bounceInUp appear-animation-visible" data-appear-animation="bounceInUp" data-appear-animation-delay="200" style="animation-delay: 200ms;    font-size: 26px;
           line-height: 38px;
           font-weight: 300;">
            Our fabrics are sourced from only a handful of the finest mills across the globe.
            <br/> Every detail is carefully constructed using precision technology and state-of-the-art machinery.   
            <br/>The best men's suits are tailored from the best cloth - this means pure merino wool fabric, <br/>woven in the traditional mills of Italy and England.     </p>

    </div>
</section>-->



<section class="section_offset relative wrapper" style="height: 500px">
    <div class="video_wrap">
        <video autoplay="" muted="" loop="">
            <source src="<?php echo base_url(); ?>assets/theme/bigvideo/nct.mp4" type="video/mp4">

        </video>
    </div>
    <div class="container" style="margin-top: 100px;background: #00000096;">
        <h3 class="color_light fw_light m_bottom_15 t_align_c appear-animation bounceInUp appear-animation-visible" data-appear-animation="bounceInUp">ORIGINAL ITALIAN FABRICS</h3>
        <p class="m_bottom_35 t_align_c color_light appear-animation bounceInUp appear-animation-visible" data-appear-animation="bounceInUp" data-appear-animation-delay="200" style="animation-delay: 200ms;    font-size: 26px;
           line-height: 38px;
           font-weight: 300;">
            Our fabrics are sourced from only a handful of the finest mills across the globe.
            <br/> Every detail is carefully constructed using precision technology and state-of-the-art machinery.   
            <br/>The best men's suits are tailored from the best cloth - this means pure merino wool fabric, <br/>woven in the traditional mills of Italy and England.     </p>

    </div>
</section>


<section class="section_offset bg_light_2">
    <div class="container">
        <h3 class="color_dark fw_light m_bottom_15 t_align_c" data-appear-animation="bounceInLeft">Latest Blog</h3>
        <p class="m_bottom_35 t_align_c" data-appear-animation="bounceInLeft" data-appear-animation-delay="200">Read latest fashions and styling tips on our blog.</p>
        <div class="relative">
            <div class="row">
                <div class="owl-carousel" data-plugin-options='{"singleItem":false,"itemsCustom":[[992,4],[768,3],[450,2],[10,1]]}' data-nav="ln_nav_">

                    <?php
                    for ($i = 0; $i < 7; $i++) {
                        ?>
                        <figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp">
                            <!--image-->
                            <div class="popup_wrap relative r_corners wrapper m_bottom_20 db_xs_centered">
                                <img src="<?php echo base_url(); ?>assets/demoblog/1.jpg" alt="">

                            </div>
                            <!--description-->
                            <figcaption>
                                <h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">All our products are non-fused and with full canvas</a></h6>
                                <!--project's info-->
                                <ul class="dotted_list m_bottom_8 color_grey_light_2 lh_ex_small">
                                    <li class="m_right_15 relative d_inline_m">
                                        <a href="#" class="color_grey_light_2 fs_small">
                                            <i class="icon-doc-text-inv"></i>
                                        </a>
                                    </li>
                                    <li class="m_right_15 relative d_inline_m">
                                        <a href="#" class="color_grey fs_small">
                                            <i><?php echo date('y-M'); ?></i>
                                        </a>
                                    </li>
                                    <li class="m_right_15 relative d_inline_m">
                                        <a href="#" class="fs_medium color_grey"><i>Suit Style</i></a>,
                                        <a href="#" class="fs_medium color_grey"><i>Fashion Tips</i></a>
                                    </li>


                                </ul>
                                <p class="m_bottom_12">This is what's happening on a " FUSED " suit jacket, the " GLUED " area starting to detach after a multiple times of laundry washed!...</p>
                                <div class="clearfix">
                                    <a href="#" class="color_black  f_left d_block m_right_20 fw_light">
                                        <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                            <i class="icon-angle-right"></i>
                                        </span>
                                        Read More
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <!--carousel nav-->
            <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover ln_nav_prev d_md_none" data-appear-animation="fadeIn">
                <i class="icon-left-open-big"></i>
            </button>
            <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover ln_nav_next d_md_none" data-appear-animation="fadeIn">
                <i class="icon-right-open-big"></i>
            </button>
        </div>
    </div>
</section>



<section class="section_offset image_bg_7" id="how_it_works">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 m_sm_bottom_30" data-appear-animation="fadeInUp" data-appear-animation-delay="400">
                <div class="iframe_video_wrap">
                    <iframe width="642" height="361" src="https://www.youtube.com/embed/qbh6AHh12Oo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-5 col-lg-offset-1 col-md-6" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
                <h3 class="color_light fw_light m_bottom_40 m_xs_top_0">How It Works</h3>
                <p class="fs_large fw_light color_light m_bottom_25">
                    Before the measurements begin we will want to start with a few guidelines in order to obtain the most accurate measurements.  It is ideal for the subject to be in a pair of trousers and shirt that fits well.                </p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_15">
                        <ul class="color_light">
                            <li class="m_bottom_8"><i class="icon-right m_right_15 fs_large"></i>Measure the Chest</li>
                            <li class="m_bottom_8"><i class="icon-right m_right_15 fs_large"></i>Measure the Stomach</li>
                            <li class="m_bottom_8"><i class="icon-right m_right_15 fs_large"></i>Measure the Hips</li>

                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_15">
                        <ul class="color_light">
                            <li class="m_bottom_8"><i class="icon-right m_right_15 fs_large"></i>Measure the Shoulder </li>
                            <li class="m_bottom_8"><i class="icon-right m_right_15 fs_large"></i>Measure the Sleeve Length</li>
                            <li class="m_bottom_8"><i class="icon-right m_right_15 fs_large"></i>Measure the Back Length </li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="color_green fs_medium button_type_3 tr_all r_corners tt_uppercase d_inline_b">Learn More</a>
            </div>
        </div>
    </div>
</section>



<section class="section_offset">
    <div class="container">
        <h3 class="color_dark fw_light m_bottom_15 t_align_c appear-animation bounceInLeft appear-animation-visible" data-appear-animation="bounceInLeft">Our Brands</h3>
        <p class="m_bottom_35 t_align_c appear-animation bounceInLeft appear-animation-visible" data-appear-animation="bounceInLeft" data-appear-animation-delay="200" style="animation-delay: 200ms;"></p>
        <div class="relative appear-animation bounceInLeft appear-animation-visible" data-appear-animation="bounceInLeft" data-appear-animation-delay="400" style="animation-delay: 400ms;">
            <div class="t_xs_align_c">
                <div class="owl-carousel clients brands t_align_c owl-theme owl-carousel-init" data-plugin-options='{"singleItem":false,"itemsCustom":[[992,4],[768,3],[450,2],[10,1]]}' data-nav="c_nav_" style="display: block; opacity: 1;">
                    <!--item-->


                    <?php
                    for ($i = 1; $i < 7; $i++) {
                        ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-14 m_bottom_20 f_mxs_none w_mxs_full m_mxs_bottom_10">
                            <div class="clients_item db_xs_centered wrapper relative r_corners d_xs_block d_mxs_inline_b">
                                <a href="#" class="d_block  tr_all wrapper r_corners">
                                    <img src="<?php echo base_url(); ?>assets/brand/<?php echo $i; ?>.jpg" alt="">
                                </a>
                            </div>
                        </div>

                        <?php
                    }
                    ?>



                    <!--item-->

                </div>
                <!--carousel nav-->
                <button class="icon_wrap_size_5 circle color_grey_light tr_all color_blue_hover c_nav_prev nav_type_2 d_md_none">
                    <i class="icon-left-open-big"></i>
                </button>
                <button class="icon_wrap_size_5 circle color_grey_light tr_all color_blue_hover c_nav_next nav_type_2 d_md_none">
                    <i class="icon-right-open-big"></i>
                </button>
            </div>
        </div>
</section>



<?php
$this->load->view('layout/footer');
?>