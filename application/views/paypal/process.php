<?php
$this->load->view('layout/header');
?>

<!-- Inner Page Banner Area Start Here -->
<?php
$this->load->view('Cart/checkoutheader');
?>
<!-- Inner Page Banner Area End Here -->
<!-- Cart Page Area Start Here -->
<div class="cart-page-area">


    <!-- Content -->
    <div id="content"  > 
        <!-- Tesm Text -->
        <section class="error-page text-center pad-t-b-130">
            <div class="container color_black "> 

                <!-- Heading -->
                <h1 style="font-size: 40px">Payment Processing... </h1>
            </div>
        </section>
    </div>
    <!-- End Content --> 


</div>
<!-- Cart Page Area End Here -->
<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>