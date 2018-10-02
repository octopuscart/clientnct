<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php
        meta_tags();
        ?>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">

        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>"/>
        <link rel="apple-touch-icon image_src" href="<?php echo base_url() . 'assets/images/logof.png'; ?>"/>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->


        <!--web fonts-->
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
        <!--libs css-->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/plugins/owl-carousel/owl.transitions.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/plugins/jackbox/css/jackbox.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>assets/theme/plugins/rs-plugin/css/settings.css">

        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/css/bootstrap.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


        <!--theme css-->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/css/theme-animate.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/css/style.css">
        <!--head libs-->
        <script src="<?php echo base_url(); ?>assets/theme/js/jquery-2.1.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/theme/plugins/jquery.queryloader2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/theme/plugins/modernizr.js"></script>


        <link href="<?php echo base_url(); ?>assets/theme/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/theme/css/customstyle.css" rel="stylesheet" type="text/css" media="all" />

        <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-beta.2/lazyload.js"></script>



        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.css">


        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/noslider/nouislider.min.css">
        <script src="<?php echo base_url(); ?>assets/theme/noslider/nouislider.min.js" type="text/javascript"></script>



        <!--angular js-->
        <script src="<?php echo base_url(); ?>assets/theme/angular/angular.min.js"></script>


        <script>
            $('html').addClass('d_none');
            $(document).ready(function () {
                $('html').show();
                $("body").queryLoader2({
                    backgroundColor: '#fff',
                    barColor: '#35eef6',
                    barHeight: 4,
                    percentage: true,
                    deepSearch: true,
                    minimumTime: 1000
                });
            });
        </script>



    </head>  
    <?php
    $menuitems = [
        array(
            "title" => "Home",
            "submenu" => "yes",
            "link" => '#',
            "submenuitems" => [
                array(
                    "title" => "About Us",
                    "link" => '#',),
                array(
                    "title" => "FAQ's",
                    "link" => '#',),
                
            ]),
        array(
            "title" => "Customize Now",
            "submenu" => "yes",
            "link" => '#',
            "submenuitems" => [
                array(
                    "title" => "Suits",
                    "link" => '#',),
                array(
                    "title" => "Jackets",
                    "link" => '#',),
                array(
                    "title" => "Shirts",
                    "link" => '#',),
                array(
                    "title" => "Pants",
                    "link" => '#',)
            ]
        ),
        array(
            "title" => "Our Clients",
            "submenu" => "no",
            "link" => '#',
        ),
        array(
            "title" => "Blog",
            "submenu" => "no",
            "link" => '#',
        ),
        array(
            "title" => "Look Book",
            "submenu" => "no",
            "link" => '#',
        ),
        array(
            "title" => "Contact Us",
            "submenu" => "no",
            "link" => site_url('Pages/contactus'),
        ),
    ];
    ?>
    <body ng-app="App">
        <div ng-controller="ShopController">
            <script>
                var App = angular.module('App', []).config(function ($interpolateProvider, $httpProvider) {
                //$interpolateProvider.startSymbol('{$');
                //$interpolateProvider.endSymbol('$}');
                $httpProvider.defaults.headers.common = {};
                        $httpProvider.defaults.headers.post = {};
                });
                        var baseurl = "<?php echo base_url(); ?>index.php/";
                        var imageurlg = "<?php echo imageserver; ?>";
                        var globlecurrency = "<?php echo globle_currency; ?>";
                        var avaiblecredits = 0;</script>
            <!--header-->




            <!--start headers-->
            <!--side menu-->
            <button id="open_side_menu" class="icon_wrap_size_2 circle color_light bg_dark">
                <i class="icon-menu"></i>
            </button>
            <div id="side_menu" class='bg_dark'>
                <header class="m_bottom_30 d_table w_full" >
                    <!--logo-->
                    <div class="d_table_cell half_column v_align_m" style="">
                        <a href="/">
                            <img src="<?php echo base_url(); ?>assets/images/logo21.png" alt="" style="height: 100px">
                        </a>
                    </div>
                    <!--close sidemenu button-->
                    <div class="d_table_cell half_column v_align_m t_align_r">
                        <button class="icon_wrap_size_2 circle color_light _2 d_inline_m" id="close_side_menu">
                            <i class="icon-cancel"></i>
                        </button>
                    </div>
                </header>
                <hr class="divider_type_2 m_bottom_20">

                <!--main menu-->
                <nav>
                    <ul class="side_main_menu fw_light">

                        <?php
                        foreach ($menuitems as $key => $value) {
                            $submenu = $value['submenu'] == 'yes' ? 'has_sub_menu' : '';
                            ?>
                            <li class="<?php echo $submenu; ?>  m_bottom_10">
                                <a href="<?php echo $value['link']; ?>" class="d_block relative fs_large color_light_2 color_blue_hover"><?php echo $value['title']; ?></a>
                                <!--sub menu(second level)-->
                                <?php
                                if ($submenu) {
                                    echo ' <ul class="d_none m_top_10">';
                                    foreach ($value['submenuitems'] as $key => $value2) {
                                        ?>       
                                    <li class="m_bottom_10"><a href="<?php echo $value2['link']; ?>" class="d_block relative color_light_2 color_blue_hover"><?php echo $value2['title']; ?></a></li>

                                    <?php
                                }
                                echo '</ul>';
                            }
                            echo " </li>";
                        }
                        ?>






                    </ul>
                </nav>
            </div>

            <!--end of header-->

            <!--layout-->
            <div class="wide_layout bg_light">

                <!--header markup-->
                <header role="banner" class="relative">
                    <!--top part-->
                    <section class="header_top_part  bg_dark" style="padding: 0px 0 3px;    margin-top: -3px;">
                        <div class="container">
                            <div class="row">
                                <!--contact info-->
                                <div class="col-lg-5 col-md-4 col-sm-5 t_xs_align_c">
                                    <ul class="hr_list fs_small color_light  contact_info_list" style="padding-top: 0px;">
                                        <li class="m_right_20 color_light f_xs_none m_xs_right_0 m_xs_bottom_5">
                                            <a href="#" class="color_light hovertext"><span class="circle icon_wrap_size_1 d_inline_m m_right_8 "><i class="icon-phone-1"></i></span>+(852) 2868 3768 </a>
                                        </li>
                                        <li class="m_right_20 color_light f_xs_none m_xs_right_0 m_xs_bottom_5">
                                            <a href="mailto:#" class=" color_light d_inline_b hovertext"><span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-mail-alt"></i></span>newcenturytailor@yahoo.com.hk</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-7 col-md-8 col-sm-7 t_align_r t_xs_align_c m_top_0">
                                    <!--mini nav-->
                                    <nav class="d_inline_m m_right_10 m_xs_right_0">
                                        <ul class="hr_list stripe_list fs_small">
                                            <li><a href="#" class="color_light hovertext">About</a></li>
                                            <li><a href="<?php echo site_url('Pages/contactus'); ?>" class="color_light hovertext">Contact</a></li>
                                            <li><a href="#" class="color_light hovertext">FAQ</a></li>
                                            <!--                                            <li><a href="#" class="color_light ">My Account</a></li>
                                                                                        <li><a href="#" class="color_light ">My Wishlist</a></li>-->
                                        </ul>
                                    </nav>
                                    <br class="d_none d_xs_block">
                                    <ul class="hr_list d_inline_b social_icons">
                                        <li class="m_right_8"><a href="#" class="color_light  facebook   circle icon_wrap_size_1 d_block"><i class="icon-facebook-1"></i></a></li>
                                        <li class="m_right_8"><a href="#" class="color_light  twitter  circle icon_wrap_size_1 d_block"><i class="icon-twitter-1"></i></a></li>
                                        <li class="m_right_8"><a href="#" class="color_light  googleplus  goo circle icon_wrap_size_1 d_block"><i class="icon-gplus-1"></i></a></li>
                                        <li class="m_right_8"><a href="#" class="color_light  instagram  circle icon_wrap_size_1 d_block"><i class="icon-instagramm"></i></a></li>
                                        <li class="m_right_8"><a href="#" class="color_light  youtube  circle icon_wrap_size_1 d_block"><i class="icon-youtube"></i></a></li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                    </section>

                    <!--header bottom part-->
                    <section class="header_bottom_part bg_light">
                        <div class="container">
                            <div class="d_table w_full d_xs_block">
                                <!--logo-->
                                <div class="col-lg-2 col-md-2 col-sm-2 d_table_cell d_xs_block f_none v_align_m logo t_xs_align_c">
                                    <a href="<?php echo site_url();?>" class="d_inline_m m_xs_top_20 m_xs_bottom_20">
                                        <img src="<?php echo base_url(); ?>assets/images/logo21.png" alt="" style="    height: 90px;">

                                    </a>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 t_align_r d_table_cell d_xs_block f_none">
                                    <div class="relative clearfix t_align_r">
                                        <button id="menu_button" class="r_corners tr_all color_blue db_centered m_bottom_20 d_none d_xs_block">
                                            <i class="icon-menu"></i>
                                        </button>
                                        <!--main navigation-->
                                        <nav role="navigation" class="d_inline_m d_xs_none m_xs_right_0 m_right_15 m_sm_right_5 t_align_l m_xs_bottom_15">
                                            <ul class="hr_list main_menu fw_medium">
                                                <?php
                                                foreach ($menuitems as $key => $value) {
                                                    $submenu = $value['submenu'] == 'yes' ? 'has_sub_menu' : '';
                                                    ?>
                                                    <li class=" container3d relative f_xs_none m_xs_bottom_5">
                                                        <a class="color_dark fs_large relative r_xs_corners hovertext" href="<?php echo $value['link']; ?>"><?php echo $value['title']; ?>
                                                            <?php if ($submenu) { ?>
                                                                <i class="icon-angle-down d_inline_m"></i>
                                                            <?php } ?>
                                                        </a>
                                                        <?php if ($submenu) { ?>
                                                            <!--sub menu-->
                                                            <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                <?php
                                                                foreach ($value['submenuitems'] as $key => $value2) {
                                                                    ?>
                                                                    <li class="container3d relative ">
                                                                        <a href="<?php echo $value2['link']; ?>" class="menu-link d_block hovertext color_dark relative main-menu-link"> <?php echo $value2['title']; ?> </a>
                                                                    </li>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </ul>
                                                        <?php } ?>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </nav>
                                        <!--searchform button-->
                                        <div class="relative d_inline_m  d_xs_none dropdown_2_container login">
                                            <button class="icon_wrap_size_2 color_dark  circle tr_all">
                                                <i class="icon-lock color_dark _2 tr_inherit"></i>
                                            </button>
                                            <div class="dropdown_2 bg_light shadow_1 tr_all" style="text-align: left;">

                                                <?php
                                                $session_data = $this->session->userdata('logged_in');
                                                if (isset($session_data['login_id'])) {
                                                    ?>
                                                    <h5 class="fw_light color_dark m_bottom_23">
                                                        <button class="icon_wrap_size_2 color_dark  circle tr_all">
                                                            <i class="icon-user color_dark _2 tr_inherit"></i>
                                                        </button>
                                                        <?php
                                                        echo $session_data['first_name'];
                                                        ?><br/>
                                                        <small style="margin-left: 45px">( <?php
                                                            echo $session_data['username'];
                                                            ?>)</small>

                                                    </h5>
                                                    <div class="clearfix border_none p_top_0 sc_footer">
                                                        <a href="<?php echo site_url("Account/logout"); ?>" class="button_type_1 d_block d_block color_pink  color_pink_hover f_right r_corners tr_all fs_medium m_left_5 hide_from_mobile"><i class="icon-logout d_inline_b m_right_5"></i> Logout</a>
                                                        <a href="<?php echo site_url("Account/profile"); ?>" class="button_type_1 d_block d_block color_pink  color_pink_hover f_left r_corners  tr_all fs_medium "><i class="icon-list-alt d_inline_b m_right_5"></i> View Profile</a>
                                                    </div>



                                                    <?php
                                                } else {
                                                    ?>
                                                    <h5 class="fw_light color_dark m_bottom_23"><i class='icon-user'></i> Login</h5>
                                                    <form class="login_form m_bottom_20" action="<?php echo site_url("Account/login") ?>" method="post">
                                                        <ul>
                                                            <li class="m_bottom_10 relative">
                                                                <i class="icon-user login_icon fs_medium color_dark _2"></i>
                                                                <input type="text" placeholder="Email"  name="email" class="r_corners color_grey w_full fw_light">
                                                            </li>
                                                            <li class="m_bottom_10 relative">
                                                                <i class="icon-lock login_icon fs_medium color_dark _2"></i>
                                                                <input type="password" placeholder="Password"  name="password" class="r_corners color_grey w_full fw_light">
                                                            </li>

                                                            <li class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                                                    <button class="button_type_1 d_block d_block color_pink  color_pink_hover  r_corners tr_all fs_medium" name="signIn" type="submit" value="signIn"><i class="icon-login d_inline_b m_right_5"></i> Login</button>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8 t_align_r lh_medium">
                                                                    <a href="#" class="color_scheme color_purple_hover fs_small">Forgot your password?</a><br>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </form>
                                                    <div class="bg_light_2 im_half_container sc_footer">
                                                        <h5 class="fw_light color_dark d_inline_m half_column">New Customer?</h5>
                                                        <div class="half_column t_align_r d_inline_m">
                                                            <a href="#" class="button_type_1 d_block d_block color_pink hovertext color_pink_hover f_right r_corners tr_all fs_medium"><i class="icon-edit d_inline_b m_right_5"></i>  Registration</a>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>




                                            </div>

                                            <!--shopping cart-->

                                        </div>
                                        
                                        <div class="relative  dropdown_2_container shoppingcart">
                                            <span class="cart_top_upper animated bounceIn">{{globleCartData.total_quantity}}</span>
                                            <button class="icon_wrap_size_2 color_dark  circle tr_all">
                                                <i class="icon-basket color_dark _2 tr_inherit"></i>
                                            </button>
                                            <div class="dropdown_2 bg_light shadow_1 tr_all p_top_0" ng-if="globleCartData.total_quantity">
                                                <div class="sc_header bg_light_2 fs_small color_grey">
                                                    Recently added item(s)
                                                </div>
                                                <ul class="added_items_list" >
                                                    <li class="clearfix lh_large m_bottom_20 relative"  ng-repeat="product in globleCartData.products">
                                                        <a href="#" class="d_block f_left m_right_10"><img src="{{product.file_name}}" alt="" style="height: 60px;width: 60px;"></a>
                                                        <div class="f_left item_description lh_ex_small">
                                                            <a href="#" class="color_dark fs_medium d_inline_b m_bottom_3">{{product.title}} - {{product.item_name}}</a>
                                                            <p class="color_dark  fs_small">{{product.price|currency:" "}} X {{product.quantity}} </p>
                                                        </div>
                                                        <div class="f_right fs_small lh_medium d_xs_none">
                                                            <span class="color_dark">{{product.total_price|currency:" "}}</span>
                                                        </div>
                                                        <i class="icon-cancel-circled-1 color_dark _2 fs_large color_dark_hover tr_all" ng-click="removeCart(product.product_id)"></i>
                                                    </li>

                                                </ul>
                                                <div class="total_price bg_light_2 t_align_r fs_medium m_bottom_15">
                                                    <ul>
                                                        <li class="color_dark"><span class="fw_ex_bold">Total:</span> <span class="fw_ex_bold d_inline_b m_left_15 price t_align_l color_pink">{{globleCartData.total_price|currency:"<?php echo globle_currency; ?> "}}</span></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix border_none p_top_0 sc_footer">
                                                    <a href="<?php echo site_url("Cart/checkoutInit"); ?>" class="button_type_1 d_block color_pink  color_pink_hover f_right r_corners tr_all fs_medium m_left_5 hide_from_mobile"><i class="icon-check-1 d_inline_b m_right_5"></i> Checkout</a>
                                                    <a href="<?php echo site_url("Cart/details"); ?>" class="button_type_1 d_block color_pink f_left r_corners color_pink_hover tr_all fs_medium"><i class="icon-basket d_inline_b m_right_5"></i> View Cart</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </header>






                <!--header-->
