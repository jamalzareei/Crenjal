<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$group = $_GET["group"];// $produc["group_product"];
$table_moshabe = "cr_product";
$fields_moshabe = "*";
$where_moshabe = "group_product='$group'";
$order_moshabe = "id_product DESC";
$limit_moshabe = "8";
$produc_moshabe = $dbclass->select($table_moshabe, $fields_moshabe, $where_moshabe, $order_moshabe, $limit_moshabe);

?>
<style>
    .carousel-inner .active.left { left: -16.7%; }
    .carousel-inner .next        { left:  16.7%; }
    .carousel-inner .prev        { left: -16.7%; }
    .carousel-control.left,.carousel-control.right {background-image:none;}
    .item:not(.prev) {visibility: visible;}
    .item.right:not(.prev) {visibility: hidden;}
    .rightest{ visibility: visible;}
    .scrolling-shop{width: 95%;margin: auto}
/*.carousel-inner{left: 8%;}*/
</style>
<div class="row blue-info">
     محصولات مشابه
</div><br>
<div class="row">
    <div class="col-md-12">
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner scrolling-shop">
                
                <?php
                $one=1;
                if(is_array($produc_moshabe)){
                    foreach ($produc_moshabe as $row_new) {
                        if($one==1){
                            echo '
                            <div class="item active">
                                <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
                                    <a href="product/'.str_replace("#", "-",$row_new["code_product"])."/".str_replace(" ", "-", $row_new["name_product_fa"])."/".str_replace(" ", "-", $row_new["name_product_en"]).'">
                                        <img src="upload/240_238/'.$row_new["photo_product"].'" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                ';
                        }  else {
                            echo '
                            <div class="item">
                                <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
                                    <a href="product/'.str_replace("#", "-",$row_new["code_product"])."/".str_replace(" ", "-", $row_new["name_product_fa"])."/".str_replace(" ", "-", $row_new["name_product_en"]).'">
                                        <img src="upload/240_238/'.$row_new["photo_product"].'" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                ';
                        }
                        
                        
                        $one++;
                    }
                }
                ?>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
    </div>
</div>
