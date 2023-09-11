<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../DB/db_con.php';
$group = $_POST["group_product"];
$row=$_POST["row"];
$table_moshabe = "cr_product";
$fields_moshabe = "*";
$where_moshabe = "group_product='$group'";
$order_moshabe = "id_product DESC";
$limit_moshabe = "$row,8";
$produc_moshabe = $dbclass->select($table_moshabe, $fields_moshabe, $where_moshabe, $order_moshabe, $limit_moshabe);
if (is_array($produc_moshabe)) {
    foreach ($produc_moshabe as $row_moshabeh) {
        echo '<a href="product/' . str_replace("#", "-", $row_moshabeh["code_product"]) . '/' . str_replace(" ", "-", $row_moshabeh["name_product_fa"]) . '/' . str_replace(" ", "-", $row_moshabeh["name_product_en"]) . '"><div id="vizhe_1" class="div-vizeh vizhe-pro-one-moshabeh">
                <div class="thumbnail view-third">
                    <img class="pro-one" alt="Bootstrap Thumbnail First" src="upload/240_238/' . $row_moshabeh["photo_product"] . '">
                </div>
                <div class="col-lg-12">jamal</div>
            </div></a>';
    }
}  else {
    echo 'not';
}