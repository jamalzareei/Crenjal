<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../DB/db_con.php';
$limit= $_POST['limit'];
$table_slide = "cr_product";
$fields_slide = "*";
$where_slide = "id_product>'0'";
$order_slide = "id_product DESC";
$limit_slide = "$limit,1";
$limit_new=$limit+1;
$products_slide = $dbclass->select($table_slide, $fields_slide, $where_slide, $order_slide, $limit_slide);
if (is_array($products_slide)) {
    foreach ($products_slide as $row_slide) {
        echo '
            <div class="item">
                <img id="id_slider" class="' . $row_slide["id_product"] . '" alt="Carousel Bootstrap First" src="upload/' . $row_slide["photo_product"] . '" height="555px" width="100%">
                <div class="carousel-caption">
                    <h4>' . $row_slide["name_product_fa"] . '</h4>
                    <h4>' . $row_slide["name_product_en"] . '</h4>
                </div>
            </div>
            ';
    }
}  else {
    //echo $limit_slide;
}