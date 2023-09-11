<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../DB/db_con.php';
if (isset($_POST["code_product"])) {
    $code_product =  trim($_POST["code_product"]);
    $table = "cr_product";
    $fields = "*";
    $where = "code_product='$code_product'";
    $order = "code_product";
    $limit = "0,1";
    $select = $dbclass->select($table, $fields, $where, $order, $limit);

    if (is_array($select)) {
        foreach ($select as $row) {
            echo $row["id_product"];
        }
    }  else {
        echo 'not';
    }
} else {
    echo 'not';
}