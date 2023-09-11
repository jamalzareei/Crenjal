<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './DB/db_con.php';
$table_new = "cr_product";
$fields_new = "*";
$where_new = "id_product>0";
$order_new = "id_product DESC";
$limit_new = "10";
$select_new = $dbclass->select($table_new, $fields_new, $where_new, $order_new, $limit_new);
?>
<style>
    .carousel-inner .active.left { left: -16.7%; }
    .carousel-inner .next        { left:  16.7%; }
    .carousel-inner .prev        { left: -16.7%; }
    .carousel-control.left,.carousel-control.right {background-image:none;}
    .item:not(.prev) {visibility: visible;}
    .item.right:not(.prev) {visibility: hidden;}
    .rightest{ visibility: visible;}
/*.carousel-inner{left: 8%;}*/
</style>
<div class="row blue-info">
    جدیدترن محصولات 
</div><br>
<div class="row">
    <div class="col-md-12">
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner scrolling-shop">
                
                <?php
                $one=1;
                if(is_array($select_new)){
                    foreach ($select_new as $row_new) {
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
