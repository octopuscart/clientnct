<?php
$this->load->view('layout/header');
?>

<!-- Login Registration Page Area Start Here -->
<div class="login-registration-page-area" style="background: url(<?php echo base_url(); ?>assets/theme/slider/s1r.jpg);background-size: cover;" >
    <div class="container">
        <div class="row">
            <?php
            if ($msg) {
                ?>
                <div class="col-md-12">
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i> </span></button>
                        <i class="fa fa-exclamation-triangle fa-2x"></i><?php echo $msg; ?>
                    </div>
                </div>
                <?php
            }
            ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="login-registration-field registration_corner">
                    

                    <h2 class="cart-area-title fw_light color_dark m_bottom_15"><i class="icon-lock"></i> Login</h2>
                    <form method="post" action="#">
                        <ul>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Email address *:</label>
                                <input type="email" name="email" id="input_1" placeholder="Email *" class="r_corners w_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Password *:</label>
                                <input type="password" name="password" placeholder="Password *" id="input_1" class="r_corners w_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">    
                                <button name="signIn" type="submit" value="signIn" class="button_type_3 r_corners tt_uppercase fs_medium bg_gradiant tr_all f_left m_right_10 m_md_bottom_10">Login</button>
                            <?php
                    if ($next_link === 'checkoutInit') {
                        ?>
                    
                            <a href="<?php echo site_url("CartGuest/checkoutInit"); ?>" class="button_type_3 f_right  r_corners tt_uppercase fs_medium bg_gradiant tr_all f_left m_right_0 m_md_bottom_10">
                                <i class=" fa fa-user"></i> Checkout As Guest <i class="fa fa-arrow-right"></i>
                            </a>
                       <div style="clear: both"></div>
                     
                        <?php
                    }
                    ?>
                            
                            </li>
                        </ul>
                        <div style="clear: both"></div>

                       
                    </form>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>

            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="login-registration-field registration_corner">
                    <h2 class="cart-area-title fw_light color_dark m_bottom_15"><i class="icon-user-add"></i> Register</h2>
                    <p class="font_size_10">By creating an account with our store, you will be able to move through the checkout process faster</p>
                    <form>
                        <ul>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">First Name *:</label>
                                <input type="text" name="first_name" id="input_1" placeholder="First Name *" class="r_corners w_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Last Name *:</label>
                                <input type="text" name="last_name" placeholder="Last Name *" id="input_1" class="r_corners w_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Email *:</label>
                                <input type="email" name="email" id="input_1" placeholder="Email *" class="r_corners w_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Password *:</label>
                                <input type="password" name="password" placeholder="Password *" id="input_1" class="r_corners w_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5 color_black">Confirm Password *:</label>
                                <input type="password" name="con_password" placeholder="Confirm Password *" id="input_1" class="con_pass r_corners w_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">    
                                <button type="submit" value="Login" class="button_type_3 r_corners tt_uppercase fs_medium bg_gradiant tr_all f_left m_right_10 m_md_bottom_10">Register</button>
                            </li>
                        </ul>
                        <div style="clear: both"></div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Registration Page Area End Here -->

<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>