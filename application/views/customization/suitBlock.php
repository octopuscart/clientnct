    <!--                                    <button class="btn btn-default btn-lg custom_rotate_button" ng-click="rotateModel()">
                                            <i class="icon ion-refresh"></i>
                                        </button>
                                        <button class="btn btn-default btn-lg custom_rotate_button show_shirt_button" ng-click="show_shirt('with_shirt')" style="margin-right: 65px;">
                                            <img src="<?php echo base_url(); ?>assets/images/customization_suit/jacket_with_shirt.png" class="show_shirt_image" >
                                        </button>
                                        <button class="btn btn-default btn-lg custom_rotate_button show_shirt_button" ng-click="show_shirt('without_shirt')">
                                            <img src="<?php echo base_url(); ?>assets/images/customization_suit/jacket_without_shirt.png" class="show_shirt_image" >
                                        </button>-->

    <div class="fontview_custom customization_block animated zoom "  ng-if="screencustom.view_type == 'front'" >
        <img src="<?php echo custome_image_server; ?>/jacket/output/1084/shirt0001.png" class="fixpos animated" style="    margin-left: 10px;margin-top: -2px;">
        <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/sleeve_new_olverlay.png" class="fixpos animated" >

        <!--breast pocket-->
        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Breast Pocket'].elements">


        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Sleeve Buttons'].buttonhole" >



        <!--jacket body left-->

                                        <!--<img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].elements" >-->

        <!--buttons-->
        <!--<img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}.png" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].buttons2" >-->
        <!--jacket body left-->
        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in [selecteElements[fab.product_id]['Jacket Style'].left]" >

        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/dart0001.png" class="fixpos animated" >


        <!--buttons-->
        <img src="<?php echo custome_image_server; ?>/jacket/buttons2/buttonlipsell/{{img}}.png" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].buttons2" >

        <!--jacket body right-->
        <img src="<?php echo custome_image_server; ?>/jacket/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].overlayinner" >
        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}//{{img}}" class="fixpos animated" ng-repeat="img in [selecteElements[fab.product_id]['Jacket Style'].right]" >
        <img src="<?php echo custome_image_server; ?>/jacket/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].overlay" >

        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/dart0001.png" class="fixpos animated" >

        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/sleeve_new1v10001.png" class="fixpos animated" style="">

        <!--button sleeve-->
        <img src="<?php echo custome_image_server; ?>/jacket/buttons2/buttonlipsell/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Sleeve Buttons'].elements" >



        <!--breast pocket-->
        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Breast Pocket'].elements" >
        <!--<img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/breast_pocket0001.png" class="fixpos animated" >-->


        <!--button holes-->
        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].button_hole" >




        <!--lower pocket-->
        <img src="<?php echo custome_image_server; ?>/jacket/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lower Pocket'].overlayin">
        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lower Pocket'].elements">
        <img src="<?php echo custome_image_server; ?>/jacket/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lower Pocket'].overlay">



        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lapel Style'].laple_style[selecteElements[fab.product_id]['Jacket Style'].title].elements">
        <img src="<?php echo custome_image_server; ?>/jacket/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lapel Style'].laple_style[selecteElements[fab.product_id]['Jacket Style'].title].overelay">


        <div class="" ng-if="selecteElements[fab.product_id]['Handstitching'].title == 'Yes'">
            <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lapel Style'].laple_style[selecteElements[fab.product_id]['Jacket Style'].title].stitcing">
        </div>

        <div class="" ng-if="selecteElements[fab.product_id]['Lapel Button Hole'].title == 'Yes'">
            <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lapel Style'].laple_style[selecteElements[fab.product_id]['Jacket Style'].title].hole" >
        </div>

        <img src="<?php echo custome_image_server; ?>/jacket/output/1084/shirt00012.png" class="fixpos animated" style="    margin-left: 10px;margin-top: -2px;">
        <!--<img src="<?php echo custome_image_server; ?>/jacket/overlay/laple_notch_v21overlay.png" class="fixpos animated" >-->
        <img src="<?php echo custome_image_server; ?>/jacket/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lapel Style'].laple_style[selecteElements[fab.product_id]['Jacket Style'].title].overlay">

                                        <!--<img src="<?php echo custome_image_server; ?>/jacket/overlay/overlayall.png" class="fixpos animated" >-->







        <!--buttons-->
        <img src="<?php echo custome_image_server; ?>/jacket/buttons2/buttonlipsell/{{img}}.png" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].buttons" >



    </div>


    <div class="backview_custom customization_block zoom animated " ng-if="screencustom.view_type == 'back'">




        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Back Vent'].elements">
        <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Back Vent'].overlay">
        <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/overlayback1.png" class="fixpos animated" >


    </div> 


    <div class="backview_custom customization_block zoom animated " ng-if="screencustom.view_type == 'pant'">
        <!--<img src="<?php echo base_url(); ?>assets/images/pant_elements/base.png" class="fixpos animated">-->
        <!--font-->
        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Number of Pleat'].elements">
        <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Front Pocket Style'].elements">  
        <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/zipper.png" class="fixpos animated" >
        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Waistband'].elements">
        <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Cuff'].elements">

    </div> 


    <div class="backview_custom customization_block zoom animated " ng-if="screencustom.view_type == 'pantback'">
        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/pant_back_pocket0001.png" class="fixpos animated">
        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/pant_back_waistband0001.png" class="fixpos animated">
        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Number of Back Pocket'].elements">
    </div> 

