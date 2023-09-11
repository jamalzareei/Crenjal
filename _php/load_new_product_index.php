<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../DB/db_con.php';
$table_new = "cr_product";
$fields_new = "*";
$where_new = "id_product>0";
$order_new = "id_product DESC";
$limit_new = "10";
$select_new = $dbclass->select($table_new, $fields_new, $where_new, $order_new, $limit_new);
?>
<div class="row-pull">
    <ul class="new-product-scroll" name="0" id="new-product-scroll">
        <?php
        if (is_array($select_new)) {
            foreach ($select_new as $row_new) {
                echo '<a href="product/'.str_replace("#", "-",$row_new["code_product"])."/".str_replace(" ", "-", $row_new["name_product_fa"])."/".str_replace(" ", "-", $row_new["name_product_en"]).'">
                        <div class="col-xs-2">
                            <img src="upload/240_238/'.$row_new["photo_product"].'" width="100%" />
                        </div>
                    </a>';
            }
        }
        ?>
        
    </ul>
</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev" onclick="left_new_product()"><i class="glyphicon glyphicon-chevron-left"></i></a>
<a class="right carousel-control" href="#myCarousel" data-slide="next" onclick="right_new_product()"><i class="glyphicon glyphicon-chevron-right"></i></a>