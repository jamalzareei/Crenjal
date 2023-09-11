<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../DB/db_con.php';
if(isset($_COOKIE["browser"]) && isset($_POST["id_product"])){
    $cookie=$_COOKIE["browser"];
    $ip=  clientIP();
    $id_product=$_POST["id_product"];
    $table="cr_shop";
    //$fields="*";
    $where="cookie='$cookie' and id_product='$id_product' and ip_user='$ip'";
    //$order="id_shop";
    //$limit="1";
    /*$select=$dbclass->select($table, $fields, $where, $order, $limit);
    if(is_array($select)){
        foreach ($select as $row){
            echo $row["id_shop"];
        }
    }*/
    $delete=$dbclass->delete($table,$where);
    echo "deleted";
}
function clientIP() {
    static $_list = array('REMOTE_ADDR', 'HTTP_CLIENT_IP', 'CLIENT_IP', 'HTTP_X_REAL_IP', 'HTTP_PROXY_CONNECTION', 'HTTP_FORWARDED', 'HTTP_CF_CONNECTING_IP', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_X_FORWARDED', 'HTTP_X_FORWARDED_HOST', 'HTTP_X_FORWARDED_SERVER', 'FORWARDED_FOR_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED_FOR_IP', 'HTTP_X_FORWARDED_FOR', 'FORWARDED', 'X_FORWARDED_FOR', 'FORWARDED_FOR', 'X_FORWARDED', 'HTTP_VIA', 'VIA');

    foreach ($_list as $_value) {
        if (isset($_SERVER[$_value]))
            return $_SERVER[$_value];
        elseif (getenv($_value))
            return getenv($_value);
        elseif (isset($HTTP_SERVER_VARS[$_value]))
            return $HTTP_SERVER_VARS[$_value];
        elseif (@apache_getenv($_value, TRUE))
            return apache_getenv($_value, TRUE);
        elseif (isset($_ENV[$_value]))
            return $_ENV[$_value];
        else
            continue;
    }

    return FALSE;
}