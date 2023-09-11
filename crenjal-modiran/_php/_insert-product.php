<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../../DB/db_con.php';
include '../../DB/jdf.php';
if (isset($_POST["code_product"]) &&
        isset($_POST["name_product_fa"]) &&
        isset($_POST["name_product_en"]) &&
        isset($_POST["color_product"]) &&
        isset($_POST["num_product"]) &&
        isset($_POST["vizhe_product"]) &&
        isset($_POST["sex_product"]) &&
        isset($_POST["group_product"]) &&
        isset($_POST["gender_product"]) &&
        isset($_POST["price_main_product"]) &&
        isset($_POST["price_takhfif_product"]) &&
        isset($_POST["img_product"]) &&
        isset($_POST["detail_product"])) {


    $code_product = $_POST["code_product"];
    $name_product_fa = $_POST["name_product_fa"];
    $name_product_en = $_POST["name_product_en"];
    $color_product = $_POST["color_product"];
    $num_product = $_POST["num_product"];
    $vizhe_product = $_POST["vizhe_product"];
    $vizhe = 0;
    if ($vizhe_product == "true") {
        $vizhe = 1;
    }
    $sex_product = $_POST["sex_product"];
    $group_product = $_POST["group_product"];
    $gender_product = $_POST["gender_product"];
    $price_main_product = $_POST["price_main_product"];
    $price_takhfif_product = $_POST["price_takhfif_product"];
    $img_product = $_POST["img_product"];
    $detail_product = $_POST["detail_product"];

    $day_number = jdate('d');
    $month_number = jdate('m');
    $year_number = jdate('Y');
    $hour = jdate('H');
    $min = jdate('i');
    $sec = jdate('s');
    $day_name = jdate('l');
    $date_product = $year_number . "/" . $month_number . "/" . $day_number . " - " . $day_name . " - " . $hour . ":" . $min . ":" . $sec;


    $table_select = "cr_product";
    $fields_select = "id_product,code_product";
    $where_select = "code_product='" . $code_product . "'";
    $order_select = "id_product";
    $limit_select = "10";
    $select = $dbclass->select($table_select, $fields_select, $where_select, $order_select, $limit_select);
    if (!is_array($select)) {

        $table = "`cr_product`";
        $fields = "`name_product_fa`, `name_produt_en`, `code_product`,"
                . " `rate_product`, `date_product`, `detail_product`, `comment_num`, `gallery_num`, `view_num`,"
                . " `photo_product`, `sell_num`, `main_price`, `dis_price`, `gender_product`, `group_product`,"
                . " `sex_product`, `color_num`, `available`, `vizhe`, `active_product`, `color_product`";
        $params = "'$name_product_fa', '$name_product_en', '$code_product', '0', '$date_product', '$detail_product',"
                . " '0', '0', '0', '$img_product', '0', '$price_main_product', '$price_takhfif_product', '$gender_product',"
                . " '$group_product', '$sex_product', '0', '0', '$vizhe', '0', '$color_product'";


        $insert = $dbclass->insert($table, $fields, $params);

        echo $code_product;
    } else {
        echo "not"; //$_POST["code_product"];
    }
} else {
    echo 'not';
}