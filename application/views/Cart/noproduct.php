<div class="cart-page-area cart-items">
    <!-- Content -->
    <div id="content"  ng-if="!globleCartData.total_quantity"> 
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