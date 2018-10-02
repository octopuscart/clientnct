<?php
$this->load->view('layout/header');
?>
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-area">
                    <h1>My Account</h1>
                    <ul>
                        <li><a href="#">Home</a> /</li>
                        <li>Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Login Registration Page Area Start Here -->
<div class="login-registration-page-area">
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
                <div class="login-registration-field">
                    <h2 class="cart-area-title">Login</h2>
                    <form method="post" action="#">
                        <ul>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5">Email address *:</label>
                                <input type="email" name="email" id="input_1" placeholder="Email *" class="r_corners d_inline_m w_sm_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5">Password *:</label>
                                <input type="password" name="password" placeholder="Password *" id="input_1" class="r_corners d_inline_m w_sm_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">    
                                <button name="signIn" type="submit" value="signIn" class="button_type_3 r_corners tt_uppercase fs_medium color_green tr_all f_left m_right_10 m_md_bottom_10">Login</button>
                            </li>
                        </ul>

                        <!--                        <label>Email address *</label>
                                                <input type="text" name="" id="input_1" class="r_corners d_inline_m w_sm_full">
                                                <label>Password *</label>
                                                <input type="password"  class="r_corners d_inline_m w_sm_full" name="password" placeholder="Password *" required=""/>
                                                <label class="check">Lost your password?</label>
                                                <button class="btn-send-message disabled" name="signIn" type="submit" value="signIn">Login</button>-->
                                                <!--<span><input type="checkbox" name="remember"/>Remember Me</span>-->
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="login-registration-field">
                    <h2 class="cart-area-title">Register</h2>
                    <form>
                        <ul>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5">First Name *:</label>
                                <input type="text" name="first_name" id="input_1" placeholder="First Name *" class="r_corners d_inline_m w_sm_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5">Last Name *:</label>
                                <input type="text" name="last_name" placeholder="Last Name *" id="input_1" class="r_corners d_inline_m w_sm_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5">Email *:</label>
                                <input type="email" name="email" id="input_1" placeholder="Email *" class="r_corners d_inline_m w_sm_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5">Password *:</label>
                                <input type="password" name="password" placeholder="Password *" id="input_1" class="r_corners d_inline_m w_sm_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">
                                <label for="input_1" class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5">Confirm Password *:</label>
                                <input type="password" name="con_password" placeholder="Confirm Password *" id="input_1" class="con_pass r_corners d_inline_m w_sm_full">
                            </li>
                            <li class="m_bottom_15 m_xs_bottom_15">    
                                <button type="submit" value="Login" class="button_type_3 r_corners tt_uppercase fs_medium color_green tr_all f_left m_right_10 m_md_bottom_10">Register</button>
                            </li>
                        </ul>
                        <!--                        <label>First Name *</label>
                                                <input type="text" name="first_name" placeholder="First Name *">
                                                <label>Last Name *</label>
                                                <input type="text" name="last_name" placeholder="Last Name *">
                                                <label>Email address *</label>
                                                <input type="email" name="email" placeholder="Email *">
                                                <label>Password *</label>
                                                <input type="password" class="pass" name="password" placeholder="Password">
                                                <label>Confirm Password *</label>
                                                <input type="password" class="con_pass" name="con_password" placeholder="Confirm Password">-->



<!--                        <button class="btn-send-message disabled" type="submit" value="Login">Register</button>-->
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