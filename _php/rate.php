<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../DB/db_con.php';
if (isset($_COOKIE["email"])) {
    if (isset($_POST["code_product"]) && isset($_POST["rate"])) {

        $ip = $dbclass->clientIP();
        $code_product = $_POST["code_product"];
        $email = $_COOKIE["email"];
        $rate = $_POST["rate"];
        
        $table_login = "cr_rate";
        $fields_login = "*";
        $where_login = "code_product='$code_product' and email='$email'";
        $order_login = "email";
        $limit_login = "1";
        $produc_login = $dbclass->select($table_login, $fields_login, $where_login, $order_login, $limit_login);
        
        if (!is_array($produc_login)) {
            $table_ins = "`cr_rate`";
            $fields_ins = "`code_product`, `ip_user`, `email`, `rate`";
            $params_ins = "'$code_product', '$ip', '$email', '$rate'";
            $insert = $dbclass->insert($table_ins, $fields_ins, $params_ins);
        } else {
            echo 'امتیاز شما قبلا ثبت شده است';
        }
    } else {
        echo 'not';
    }
} else {
    echo 'شما لاگین نکرده اید!';
}