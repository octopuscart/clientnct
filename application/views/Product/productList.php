<?php
$this->load->view('layout/header');
?>
<?php
$linklist = [];
foreach ($categorie_parent as $key => $value) {
    $cattitle = $value['category_name'];
    $catid = $value['id'];
    $liobj = "<li class='m_right_8 f_xs_none'><a class='color_default d_inline_m m_right_10 11' href='" . site_url("Product/ProductList/" . $custom_id . "/" . $catid) . "'> $cattitle</a> <i class='icon-angle-right d_inline_m color_default fs_small'></i></li>";
    array_push($linklist, $liobj);
}



$image1 = "";
$image2 = "";
?>

<div ng-controller="ProductController">
    <section class="page_title_1 bg_light_2 t_align_c relative wrapper" style="margin-top: 0px;">
        <div class="container m_bottom_15 m_top_15">

            <!--breadcrumbs-->
            <ul class="hr_list d_inline_m breadcrumbs">
                <li class="m_right_8 f_xs_none"><a href="<?php echo site_url("/"); ?>" class="color_default d_inline_m m_right_10">Home</a><i class="icon-angle-right d_inline_m color_default fs_small"></i></li>
                <?php
                echo $custom_item;
                ?>
            </ul>

            <button class="btn btn-danger btn-small pull-right color_dark"  ng-click="changeDesingStyle('Shop Stored')" 
                    style="  right: 100px;top: 11px;position: absolute; background: black;color: white; " data-toggle="modal" data-target="#productcustome">
                Order Now  <i class="icon-right d_inline_m fs_large"></i>
            </button>

        </div>
    </section>


    <!-- Shop Page Area Start Here --> 
    <div class="shop-page-area" >
        <div class="container">
            <div class="row"  ng-if="productResults.products.length">
                <aside class="col-lg-2 col-md-2 col-sm-2 m_bottom_70 m_xs_bottom_30" style="    padding: 0;">
                    <!--categories-->
                    <?php
                    if (count($categories)) {
                        ?>
                        <div class="m_bottom_40 m_xs_bottom_30">
                            <h5 class="color_dark fw_light m_bottom_10 m_top_10">Categories</h5>
                            <ul class="categories_list">
                                <?php
                                foreach ($categories as $key => $value) {
                                    $subcategories = $value['sub_category'];
                                    ?>  
                                    <a href="<?php echo site_url("Product/ProductList/" . $custom_id . "/" . $value['id']); ?>" class="color_dark tr_all d_block">
                                        <span class="icon_wrap_size_0 circle d_inline_m m_right_8 color_grey_light_5 tr_inherit">
                                            <i class="icon-angle-right"></i>
                                        </span>
                                        <?php echo $value['category_name']; ?>
                                    </a>
                                    <?php
                                    if (count($subcategories)) {
                                        ?>
                                        <ul class="fw_light d_none">
                                            <?php
                                            foreach ($subcategories as $key1 => $value1) {
                                                ?>
                                                <li>
                                                    <a href="<?php echo site_url("Product/ProductList/" . $custom_id . "/" . $value1['id']); ?>" class="d_block color_dark"><i class="icon-angle-right d_inline_m m_right_8 color_grey_light_5 fs_small tr_inherit"></i><span class="d_inline_m"><?php echo $value1['category_name']; ?></span></a>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                }
                                ?>  
                            </ul>
                        </div>



                        <?php
                    }
                    ?>





                    <div class="product_attr" ng-repeat="(attrk, attrv) in productResults.attributes" ng-if="attrv.length > 1">
                        <div class="m_bottom_45 m_xs_bottom_30">
                            <!--manufacturers-->
                            <div class="m_bottom_25">
                                <h5 class="color_dark fw_light m_bottom_10 m_bottom_10">{{attrk}}</h5>
                                <ul>
                                    <li class="m_bottom_10"  ng-repeat="atv in attrv">
                                        <input type="checkbox" checked id="checkbox_{{atv.id}}" name="" class="d_none" ng-model="atv.checked" ng-click="attributeProductGet(atv)">
                                        <label for="checkbox_{{atv.id}}" class="d_inline_m m_right_10  color_dark">{{atv.attribute_value}}  <span class="color_grey">({{atv.product_count}})</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </aside>



                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 m_top_10">
                    <div class="shop_isotope_container t_xs_align_c three_columns m_bottom_15" data-isotope-options='{"itemSelector" : ".shop_isotope_item","layoutMode" : "fitRows","transitionDuration":"0.7s"}'>
                        <!--product-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"  ng-repeat="(k, product) in productResults.products" style="padding:10px; ">

                            <figure class="fp_item t_align_c d_xs_inline_b" >
                                <div class="relative r_corners d_xs_inline_b d_mxs_block wrapper m_bottom_23">
                                    <!--images container-->
                                    <div class="fp_images relative">

                                        <?php
                                        switch ($custom_id) {
                                            case "1":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/shirt/output/{{product.folder}}/shirt_model10001.png" alt="product" style="background: white;">
                                                <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/styleblank.png" style="background: url(<?php echo custome_image_server; ?>/shirt/output/{{product.folder}}/fabricx0001.png);    background-size: 145%;
                                                     background-color: white;
                                                     background-repeat: no-repeat;" alt="product">

                                                <?php
                                                break;
                                            case "2":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/suitsfabrics/{{product.folder}}.jpg" alt="product" style="background: white;">
                                                <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/styleblank.png" style="background: url(<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/s1_master_style60001.png);    background-size: 145%;
                                                     background-color: white;
                                                     background-repeat: no-repeat;" alt="product">

                                                <?php
                                                break;
                                            case "3":
                                                ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/pant_style10001.png" alt="product" style="background: white;">

                                                <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/styleblank.png" style="background: url(<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/fabricx0001.png);    background-size: 145%;
                                                     background-color: white;
                                                     background-repeat: no-repeat;" alt="product">
                                                     <?php
                                                     break;
                                                 case "4":
                                                     ?>
                                                <img class="img-responsive" src="<?php echo custome_image_server; ?>/coman/output/{{product.folder}}/cutting20001.png" alt="product" style="background: white;">
                                                <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/styleblank.png" style="background: url(<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/style_buttons.png);    background-size: 145%;
                                                     background-color: white;
                                                     background-repeat: no-repeat;" alt="product">
                                                     <?php
                                                     break;
                                                 default:
                                                     echo $custom_item;
                                             }
                                             ?>


                                    </div>

                                </div>
                                <figcaption>
                                    <h6 class="m_bottom_8"><a href="#" class="color_dark">{{product.title}} </a></h6>

                                    <div class="product_description">
                                        <p class="color_grey fs_medium m_bottom_8">
                                            <span style="font-size: 12px">{{product.short_description}} </span>        
                                        </p>
                                    </div>

                                    <div class="clearfix fp_buttons">
                                        <div class="half_column w_md_full animate_fctl tr_all f_left with_ie f_md_none m_md_bottom_10">
                                            <button type="button" ng-click="addToCart(product.product_id, 1, <?php echo $custom_id; ?>)" class="button_type_6 d_inline_b    r_corners vc_child tr_all  {{globleCartDatac.products[product.product_id]?'selectedbutton color_green ':'color_red'}} ">
                                                <span class="d_inline_m clerarfix">


                                                    <span ng-if="addToCartState.state == 1">
                                                        <span ng-if="addToCartState.product_id == product.product_id">
                                                            <i class="fa fa-refresh fa-spin fa-1x fa-fw"></i>
                                                        </span>
                                                    </span>

                                                    <span ng-if="addToCartState.product_id == product.product_id">
                                                        <span ng-if="addToCartState.state == 0">
                                                            <i class="icon-basket f_left m_right_5 fs_small"></i>
                                                        </span>
                                                    </span>

                                                    <span ng-if="addToCartState.product_id != product.product_id">
                                                        <i class="icon-basket f_left m_right_5 fs_small"></i>
                                                    </span>

                                                    Take


                                                    {{globleCartDatac.products[product.product_id]?"-"+globleCartDatac.products[product.product_id].quantity:""}}

                                                </span>
                                            </button>

                                        </div>
                                        <div class="half_column w_md_full animate_fctr tr_all f_left clearfix with_ie f_md_none">
                                            <button type="button" class="button_type_6 m_left_5 relative tooltip_container f_right f_md_none d_md_inline_b d_block color_dark r_corners vc_child tr_all color_purple_hover t_align_c m_right_5 m_md_right_0" ng-click="askPriceSelection(product.product_id)">Ask Price

                                            </button>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <!--product-->


                        </div>
                    </div>

                </div>
            </div>


            <div id="content"  ng-if="!productResults.products.length"> 
                <section class="section_offset">
                    <main class="container t_align_c">
                        <h3 class="color_dark fw_light m_bottom_15 heading_1">No Product Found</h3>
                        <p class="m_bottom_35 heading_2">Please add product to cart<br>
                            You can go back to</p>
                        <div class="row">
                            <hr class="dotted">
                            <a href="<?php echo site_url(); ?>" class="btn-send-message button_type_3 color_pink r_corners tt_uppercase fs_medium tr_all  m_right_10 m_md_bottom_10 ">BACK TO HOME</a>
                        </div>
                    </main>
                </section>
            </div>

        </div>
        <!-- Modal -->
        <div class="modal  fade" id="productcustome" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    z-index: 20000000;">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="font-size: 15px">
                            <?php
                            echo $custom_item;
                            ?>
                        </h4>
                    </div>

                    <?php
                    $citem_id = $custom_id;
                    switch ($citem_id) {
                        case '1':
                            $item_array = array("title" => "Shirt(s)", "link" => site_url("Customization/customizationShirt"));
                            break;
                        case '2':
                            $item_array = array("title" => "Suit(s)", "link" => site_url("Customization/customizationSuitV2/2"));
                            break;
                        case '5':
                            $item_array = array("title" => "Tuxedo Suit(s)", "link" => site_url("Customization/customizationSuitV2/5"));
                            break;
                        case '6':
                            $item_array = array("title" => "Tuxedo Jackets(s)", "link" => site_url("Customization/customizationSuitV2/6"));
                            break;
                        case '7':
                            $item_array = array("title" => "Tuxedo Pants(s)", "link" => site_url("Customization/customizationSuitV2/7"));
                            break;
                        case '3':
                            $item_array = array("title" => "Pant(s)", "link" => site_url("Customization/customizationSuitV2/3"));
                            break;
                        case '4':
                            $item_array = array("title" => "Jacket(s)", "link" => site_url("Customization/customizationSuitV2/4"));
                            break;
                        default:
                            $item_array = array("title" => "Shirt(s)", "link" => site_url("Customization/customizationSuitV2"));
                    }
                    ?>

                    <!-- Cart Details -->
                    <div class="modal-body checkout-form">
                        <div class="custom_block_item">


                            <div class="row cart-details" >
                                <div class="col-sm-12 col-md-3" ng-repeat="product in globleCartDatanc.products" ng-if="product.item_id == '<?php echo $citem_id; ?>'">
                                    <div class="thumbnail">
                                        <img src="{{product.file_name}}" alt="" style="width: auto;" alt="...">
                                        <div class="caption">
                                            <h5 style="font-size:15px;">{{product.title}}</h5>
                                            <p><span class="price">Qnty.: {{product.quantity}}</span> <a href="#."  ng-click="removeCart(product.product_id)" class="pull-right"><i class="fa fa-remove"></i></a> </p>
                                        </div>

                                    </div>
                                </div>



                            </div>

                        </div>
                        <?php
                        if (isset($session_last_custom[$citem_id])) {
                            $customdict = $session_last_custom[$citem_id];
                        } else {
                            $customdict = array();
                        }
                        ?>

                        <div ng-switch="designSelection.desing_status">

                            <div class="alert_box info r_corners relative fs_medium" ng-switch-when="Shop Stored">
                                Are you preferred the same design as used to be?
                                <div class="btn-group pull-right" role="group" aria-label="..." style="    margin-top: -6px;
                                     float: right;
                                     margin-right: -46px;">
                                    <a href="<?php echo site_url("Customization/applyShopStored/" . $citem_id); ?>" class="btn btn-success   r_corners tt_uppercase fs_medium tr_all f_left " ng-click="changeDesingStyle('Shop Stored')" >Yes</a>
                                    <button type="button" class="btn btn-danger   r_corners tt_uppercase fs_medium tr_all f_left " ng-click="changeDesingStyle('New Design')">No</button>
                                </div>
                            </div>

                            <div ng-switch-when="New Design">
                                <div class="alert_box info r_corners relative fs_medium" >
                                    Are you expecting the same design on your now recently picked?

                                </div>
                                <?php
                                if (isset($session_last_custom[$citem_id])) {
                                    $custompredict = $session_last_custom[$citem_id];
                                    ?>
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <table class="table">
                                                <tr>
                                                    <td colspan="2">
                                                <center>
                                                    <div class="btn-group " role="group" aria-label="..." style="  ">
                                                        <a href="<?php echo site_url("Customization/applyLastCustom/" . $citem_id); ?>" class="btn btn-success" ng-click="changeDesingStyle('Shop Stored')">Yes</a>
                                                        <button type="button" class="btn btn-danger" ng-click="changeDesingStyle('Customize Now')">No</button>
                                                        <button type="button" class="btn btn-default" ng-click="changeDesingStyle('Shop Stored')"><i class="fa fa-times d_inline_m fs_large"></i></button>
                                                    </div>
                                                </center>
                                                </td>
                                                </tr>
                                                <?php
                                                foreach ($custompredict as $key => $value) {
                                                    ?>
                                                    <tr>
                                                        <th>
                                                            <?php
                                                            echo $key;
                                                            ?>
                                                        </th>
                                                        <td>
                                                            <?php
                                                            echo $value;
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>

                                            </table>
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-12">



                                        </div>
                                    </div>

                                    <?php
                                } else {
                                    ?>
                                    <center>
                                        <br/>
                                        <p style="    font-size: 12px;">No recent design found, click below to create design</p>
                                        <a href="<?php echo $item_array['link']; ?>" class="btn btn-default ">Customize Now <i class="fa fa-arrow-right d_inline_m fs_large"></i></a> 

                                    </center>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="alert_box info r_corners relative fs_medium" ng-switch-when="Customize Now">
                                Create New Design
                                <div class="btn-group pull-right" role="group" aria-label="..." style="    margin-top: -6px;
                                     float: right;
                                     margin-right: -46px;">
                                    <a href="<?php echo $item_array['link']; ?>" class="btn btn-success ">Customize Now <i class="fa fa-arrow-right d_inline_m fs_large"></i></a> 
                                    <button type="button" class="btn btn-danger" ng-click="changeDesingStyle('New Design')"><i class="fa fa-times d_inline_m fs_large"></i></button>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer" ng-repeat="product in globleCartDatanc.products" ng-if="(product.item_id == '<?php echo $citem_id; ?>') && $index == 0">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Add More</button>
                        <!--<a href="<?php echo $item_array['link']; ?>" class="btn btn-default pull-right">Customize Now <i class="fa fa-arrow-right"></i></a>--> 
                    </div>







                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal  fade" id="productprice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    z-index: 20000000;">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="font-size: 15px">
                            Price Enquiry For 
                            <?php
                            echo $custom_item;
                            ?>
                        </h4>
                    </div>



                    <!-- Cart Details -->
                    <div class="modal-body checkout-form">
                        <div class="custom_block_item">


                            <div class="row cart-details" >
                                <div class="col-sm-12 col-md-3" ng-repeat="product in askpricedata" ng-if="product.item_id == '<?php echo $citem_id; ?>'">
                                    <div class="thumbnail">
                                        <img src="<?php echo custome_image_server; ?>/coman/output/{{product.folder}}/cutting20001.png" alt="" style="width: auto;" alt="...">
                                        <div class="caption">
                                            <h5 style="font-size:15px;" class="text-center m_bottom_10">{{product.title}}</h5>
                                            <p><a href="#."  ng-click="removePriceData(product.id)" class="btn btn-danger btn-xs btn-block"><i class="fa fa-remove d_inline_m fs_large"></i> Remove</a> </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <form method="post" action="#">
                                        <ul>
                                            <input type="hidden" name="item" value="<?php echo $custom_item; ?>" />
                                            <input type="hidden" name="item_id" value="<?php echo $citem_id; ?>" />

                                            <span ng-repeat="product in askpricedata">
                                                <input type="hidden" name="productid[]" value="{{product.id}}" />
                                            </span>
                                            <li class="row m_bottom_10">
                                                <div class="col-lg-6 col-md-6 col-sm-6 w_xs_full m_xs_bottom_10">
                                                    <input type="text" name="last_name" placeholder="Last Name*" class="w_full r_corners fw_light" required="">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 w_xs_full m_xs_bottom_10" >
                                                    <input type="text" name="first_name" placeholder="First Name*" class="w_full r_corners fw_light" required="">
                                                </div>

                                            </li>  
                                            <li class="m_bottom_10">
                                                <input type="email" name="email" placeholder="Email*" class="w_full r_corners fw_light" required="">
                                            </li>
                                            <li class="m_bottom_10">
                                                <input type="tel" name="contact" placeholder="Contact No." class="w_full r_corners fw_light">
                                            </li>

                                            <li class="m_bottom_10">
                                                <button type="submit" name="priceenquiry" class="button_type_2  color_red  r_corners fs_medium tr_all m_right_10 m_sm_bottom_10">Submit</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Add More</button>

                                            </li>
                                        </ul>
                                    </form>
                                </div>


                            </div>

                        </div>

                    </div>







                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page Area End Here -->

</div>

<script>
    var category_id = <?php echo $category; ?>;
    var custom_id = <?php echo $custom_id; ?>;
</script>
<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>