
    <button class="btn btn-default btn-lg custom_rotate_button" ng-click="rotateModel()">
        <i class="icon ion-refresh"></i>
    </button>
    <div class="fontview_custom customization_block animated zoom" ng-if="screencustom.view_type == 'front'">
        <div ng-if="selecteElements[screencustom.fabric]['Monogram Initial']">
            <div class="monogramtext_posistion
                 {{selecteElements[fab.product_id]['Cuff & Sleeve'].monogram_change_css?selecteElements[fab.product_id]['Cuff & Sleeve'].monogram_change_css :selecteElements[fab.product_id]['Monogram'].css_class}} 
                 {{selecteElements[fab.product_id]['Pocket'].monogram_change_css?selecteElements[fab.product_id]['Pocket'].monogram_change_css :selecteElements[fab.product_id]['Monogram'].css_class}} 
                 monogramcss_main"
                 style="
                 color: {{selecteElements[fab.product_id]['Monogram Background']}};

                 {{selecteElements[fab.product_id]['Monogram'].title=='Collar'?selecteElements[fab.product_id]['Collar'].monogram_style:''}} ;
                 margin-left: {{(-1) * (2 * (selecteElements[screencustom.fabric]['Monogram Initial'].length - 3))}}px;z-index:2000;
                 
                 " 
                 ng-if="selecteElements[fab.product_id]['Monogram'].title != 'No'">
                {{selecteElements[screencustom.fabric]['Monogram Initial']}}
            </div>
        </div>
        <!--cuff section-->
        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Cuff & Sleeve'].sleeve1">
        <img src="<?php echo custome_image_server; ?>/shirt/overlay/sleeveoverlay.png" class="fixpos animated" ng-if="selecteElements[fab.product_id]['Cuff & Sleeve'].sleeve1[0] == 'shirt_sleeve0001.png'">




        <!--buttom-->
        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Bottom'].elements">

        <!--cuff-->
        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated"  ng-repeat="img in selecteElements[fab.product_id]['Cuff & Sleeve'].elements" >
        <img src="<?php echo custome_image_server; ?>/shirt/overlay/{{selecteElements[fab.product_id]['Cuff & Sleeve'].buttons}}" class="fixpos animated" ng-if="selecteElements[fab.product_id]['Cuff & Sleeve'].buttons"  >

        <!--collar-->
        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Collar'].elements">
        <img src="<?php echo custome_image_server; ?>/shirt/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Collar'].overlay">

        <!--front fly-->
        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Front'].elements">


        <!--pocket-->
        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Pocket'].elements">

        <!--front button-->
        <!--<img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/front_button.png" class="fixpos animated" ng-if="selecteElements[fab.product_id]['Front'].show_buttons == 'true'">-->

        <img src="<?php echo custome_image_server; ?>/shirt/overlay/button_front0001.png" class="fixpos animated" ng-if="selecteElements[fab.product_id]['Front'].show_buttons == 'true'">



    </div>   
    <div class="backview_custom customization_block  animated " ng-if="screencustom.view_type == 'back'" >
        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/b_collar0001.png" class="fixpos animated" >
        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" ng-repeat="img in selecteElements[fab.product_id]['Cuff & Sleeve'].sleeve" class="fixpos animated" >
        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Back'].elements" >
    </div> 
