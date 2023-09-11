<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../DB/db_con.php';

$code_product=$_POST["like"];
$table = "cr_product";
$fields = "*";
$where = "name_product_fa like '%$code_product%' or name_product_en like '%$code_product%'";
$order = "id_product";
$limit = "10";
$produc = $dbclass->select($table, $fields, $where, $order, $limit);

if(is_array($produc)){
    foreach ($produc as $row){
        echo '<div class="row one-search">
            <a href="product/'. str_replace("#", "-",$row["code_product"])."/".str_replace(" ", "-", $row["name_product_fa"])."/".str_replace(" ", "-", $row["name_product_en"]).'"">
                <div class="col-xs-3 pull-right text-center">
                    <img src="upload/50_50/'.$row["photo_product"].'" class="img-circle img-searcher" width="50" height="50"/>
                </div>
                <div class="col-xs-6 pull-right text-right">
                    <h4>'.$row["name_product_fa"].'</h4>
                    '.$row["gender_product"].' - '.$row["group_product"].'
                </div>
                <div class="col-xs-3 pull-right text-center price-search">
                    
                </div>
                </a>
            </div>';
    }
}  else {
    echo '<div class="row one-search empty-buy">
            هیچ محصولی با مشخصات شما یافت نشد
        </div>';
}