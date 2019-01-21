<?php
$this->load->view('layout/header');
?>



<section class="page_title_1 bg_light_2 t_align_c relative wrapper" style="margin-top: 0px;">
    <div class="container">
        <h3 class="color_dark fw_light m_bottom_5">Shop Stored</h3>



    </div>
</section>





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

<div class="section_offset counter" ng-controller="ShopStoredController">
    <div class="container" >

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="r_corners wrapper border_grey m_bottom_10 m_xs_bottom_10">
                    <table class="table_type_2 responsive_table w_full t_align_l">
                        <thead>
                            <tr class="bg_light_2 color_dark">

                                <th colspan="2">Product Description</th>

                                <th style='    width: 140px;'>Quantity</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="tr_delay" ng-repeat="product in globleCartDatanc.products" ng-if="product.item_id == '<?php echo $citem_id; ?>'">

                                <td data-title="Product Image" style='    width: 100px;'>
                                    <a href="#" class="r_corners d_inline_b wrapper">
                                        <img src="{{product.file_name}}" alt="" style='height: 80px'>
                                    </a>
                                </td>
                                <td data-title="Description">
                                    <h6 class="m_bottom_5"><a href="#" class="color_dark tr_all">{{product.title}} <br/> {{product.item_name}}</a></h6>
                                    <div ng-if="designSelection.desing_status == 'Shop Stored No'" >
                                        Please give comments in the box.
                                        <div class="btn-group pull-right" role="group" aria-label="..." style="    margin-top: -6px;
                                             float: right;
                                             margin-right: -46px;">
                                        </div>

                                        <form action="#" method="post">
                                            <textarea class="form-control" name="comment" required=""></textarea>
                                          <div class="btn-group" style="    margin-top: 5px;">
                                            <button type="submit" name="submitcomment" value="submitcomment" class="btn btn-primary">Submit</button>
                                            <button type="button" class="btn btn-default" ng-click="changeDesingStyle('Shop Stored Yes')"><i class="fa fa-times d_inline_m fs_large"></i></button>
                                          </div>
                                        </form>
                                    </div>
                                </td>
                                <td data-title="Quantity" >
                                    {{product.quantity}}
                                </td>
                            </tr>
                        </tbody>

                        <tfoot style="border-top:1px solid #000;">
                            <tr class="bg_light_2 color_dark">

                                <th colspan="3">
                        <div ng-switch="designSelection.desing_status">

                            <div class="alert_box info r_corners relative fs_medium" ng-switch-when="Shop Stored Yes">
                                <form action="#" method="post">
                                    Do you like the latest batch of your order for all products?
                                    <div class="btn-group pull-right" role="group" aria-label="..." style="    margin-top: -6px;
                                         float: right;
                                         margin-right: -46px;">

                                        <button type="submit" value="submitonly" name="submitonly" class="btn btn-default" >Yes</button>
                                        <button type="button" class="btn btn-default" ng-click="changeDesingStyle('Shop Stored No')">No</button>
                                    </div>
                                </form>
                            </div>

                            <div ng-switch-when="Shop Stored No">
                                <div class="alert_box info r_corners relative fs_medium" >
                                    Please give comments in the box.
                                    <div class="btn-group pull-right" role="group" aria-label="..." style="    margin-top: -6px;
                                         float: right;
                                         margin-right: -46px;">

                                        <button type="button" class="btn btn-default" ng-click="changeDesingStyle('Shop Stored Yes')"><i class="fa fa-times d_inline_m fs_large"></i></button>
                                    </div>
                                    <br/>
                                    <br/>
                                    <form action="#" method="post">
                                        <textarea class="form-control" name="comment" required=""></textarea>
                                        <br/>
                                        <button type="submit" name="submitcomment" value="submitcomment" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>


                            </div>
                            <div class="alert_box info r_corners relative fs_medium" ng-switch-when="Customize Now">
                                Create New Design
                                <div class="btn-group pull-right" role="group" aria-label="..." style="    margin-top: -6px;
                                     float: right;
                                     margin-right: -46px;">
                                    <a href="<?php echo $item_array['link']; ?>" class="btn btn-default ">Customize Now <i class="fa fa-arrow-right d_inline_m fs_large"></i></a> 
                                    <button type="button" class="btn btn-default" ng-click="changeDesingStyle('New Design')"><i class="fa fa-times d_inline_m fs_large"></i></button>

                                </div>
                            </div>

                        </div>


                        </th>



                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
            <div class="col-md-2"></div>
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

<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>

<?php
$this->load->view('layout/footer');
?>
