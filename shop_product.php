<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$table_new = "cr_product";
$fields_new = "*";
$where_new = "id_product>0";
$order_new = "sell_num DESC";
$limit_new = "10";
$select_new = $dbclass->select($table_new, $fields_new, $where_new, $order_new, $limit_new);
?>
<style>
    #margin-shop img{margin-bottom: 20px;}
    #scrolling-shop{height: 195px;}
    .scrolling-shop{width: 95%;margin: auto}
</style>
<div class="row blue-info">
    پرفروش ترین محصولات 
</div><br>
    <div class="row">
        <div class="col-md-12">
                <div id="myCarousel" class="carousel fdi-Carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                        <div class="carousel-inner onebyone-carosel scrolling-shop" id="scrolling-shop">
                            <?php
                            $one = 1;
                            if (is_array($select_new)) {
                                foreach ($select_new as $row_new) {
                                    if ($one == 1) {
                                        echo '
                            <div class="item active" id="margin-shop">
                                <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
                                    <a href="product/' . str_replace("#", "-", $row_new["code_product"]) . "/" . str_replace(" ", "-", $row_new["name_product_fa"]) . "/" . str_replace(" ", "-", $row_new["name_product_en"]) . '">
                                        <img src="upload/240_238/' . $row_new["photo_product"] . '" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                ';
                                    } else {
                                        echo '
                            <div class="item" id="margin-shop">
                                <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
                                    <a href="product/' . str_replace("#", "-", $row_new["code_product"]) . "/" . str_replace(" ", "-", $row_new["name_product_fa"]) . "/" . str_replace(" ", "-", $row_new["name_product_en"]) . '">
                                        <img src="upload/240_238/' . $row_new["photo_product"] . '" class="img-responsive">
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
                        <a class="left carousel-control" href="#eventCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="right carousel-control" href="#eventCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                    </div>
                    <!--/carousel-inner-->
                </div><!--/myCarousel-->
        </div>
    </div>
