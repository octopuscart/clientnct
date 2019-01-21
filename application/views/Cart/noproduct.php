<div class="cart-page-area cart-items">
   <div id="content"  ng-if="gcheckcart.status == 1"> 
    <!-- Tesm Text -->
    <section class="error-page text-center pad-t-b-130">
        <div class="container "> 

            <!-- Heading -->
            <h1 style="font-size: 40px;padding: 50px 0 100px">Loading...</h1>
           
        </div>
    </section>
</div>


<div id="content"  ng-if="gcheckcart.status == 0"> 
    <!-- Tesm Text -->
    <section class="section_offset">
            <main class="container t_align_c">
                <h3 class="color_dark fw_light m_bottom_15 heading_1">No Product Found</h3>
                <p class="m_bottom_35 heading_2">Please add product to cart<br>
                    You can go back to</p>
                <div class="row">
                    <a href="<?php echo site_url(); ?>" class="btn-send-message button_type_3 color_pink r_corners tt_uppercase fs_medium tr_all  m_right_10 m_md_bottom_10 "><i class="icon-left-1"></i> BACK TO HOME</a>
                </div>
            </main>
        </section>
</div>
<!-- End Content --> 
</div>

