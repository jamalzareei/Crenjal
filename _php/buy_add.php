<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../DB/db_con.php';
if (isset($_POST["code_product"])) {
    $code_product = trim($_POST["code_product"]);
    $table = "cr_product";
    $fields = "*";
    $where = "code_product='$code_product'";
    $order = "code_product";
    $limit = "0,1";
    $select = $dbclass->select($table, $fields, $where, $order, $limit);

    if (is_array($select)) {
        foreach ($select as $row) {
            //echo ""; //clientIP();//getRealIpAddr();//$_SERVER['REMOTE_ADDR'];
            $id_product = $row["id_product"];
            $code_product = $row["code_product"];
            $name_product_fa = $row["name_product_fa"];
            $ip = getRealIpAddr(); //clientIP();
            $browser = $_SERVER["HTTP_USER_AGENT"];
            $emial = "info@crenjal.com"; //$_SERVER[‘HTTP_REFERRER’] از چه سایتی کاربر وارد شده  واسه سئو جدول بساز
            $dis_price = $row["dis_price"];
            $group_product = $row["group_product"];
            $shop_num = 1;
            $photo_product = $row["photo_product"];
            //اگر کاربر لاگین نباشد بدین شکل وارد کن
            //{
            $table_buy = "cr_shop";
            $fields_buy = "*";
            $where_buy = "code_product='$code_product' and cookie='$browser' and ip_user='$ip'";
            $order_buy = "code_product";
            $limit_buy = "10";
            $select_buy = $dbclass->select($table_buy, $fields_buy, $where_buy, $order_buy, $limit_buy);

            $expire = time() + 10 * 24 * 3600;
            if (is_array($select_buy)) {
                foreach ($select_buy as $row_up) {
                    $shop_num_up = $row_up["shop_num"] + 1;
                    $set = "shop_num='$shop_num_up'";
                    $updat = $dbclass->update($table_buy, $set, $where_buy);
                    setcookie("browser", $browser, $expire, "/");
                    echo $shop_num_up;
                }
            } else {
                $table_ins = "`cr_shop`";
                $fields_ins = "`id_product`, `code_product`, `name_product`, `ip_user`,`cookie`,"
                        . " `email`, `price_product`, `detail`,`shop_num`,`photo_product`";
                $params_ins = "'$id_product', '$code_product', '$name_product_fa', '$ip','$browser'"
                        . ", '$emial', '$dis_price', '$group_product','$shop_num','$photo_product'";
                $insert = $dbclass->insert($table_ins, $fields_ins, $params_ins);
                setcookie("browser", $browser, $expire, "/");
                //}
                echo '<div class="row one-search" id="num-buy-' . $row["id_product"] . '">
                    <div class="col-xs-3 pull-right text-center">
                        <img src="upload/50_50/' . $row["photo_product"] . '" class="img-circle img-searcher" width="50" height="50"/>
                    </div>
                    <div class="col-xs-6 pull-right text-right">
                        <h4>' . $row["name_product_fa"] . '</h4>
                        ' . $row["group_product"] .'
                    </div>
                    <div class="col-xs-3 pull-right text-center price-search" >
                        ' . $row["dis_price"] . '<br>
                        <label class="label label-danger" onclick="delet_buy_row(\'num-buy-' . $row["id_product"] . '\',\'' . $row["id_product"] . '\')">x<label>
                    </div>
                </div>';
            }
        }
    } else {
        echo 'not';
    }
} else {
    echo 'not';
}

function getRealIpAddr() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { //check ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        //to check ip is pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
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
