<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../DB/db_con.php';

if (isset($_POST["id_shop"]) && isset($_POST["color"]) && isset($_POST["tedad"]) && isset($_POST["size"])) {
    $id_shop = $_POST["id_shop"];
    $color = $_POST["color"];
    $tedad = $_POST["tedad"];
    $size = $_POST["size"];
    
    $table="cr_shop";
    $where="id_shop='$id_shop'";
    $set = "shop_num='$tedad' , size_product='$size' , color_select='$color'";
    $updat = $dbclass->update($table, $set, $where);
    echo $id_shop;
}