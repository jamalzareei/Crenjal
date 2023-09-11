<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../DB/db_con.php';
include_once '../DB/jdf.php';
if (isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["email"]) &&
        isset($_POST["password"]) && isset($_POST["re_password"])) {
    $fname = hacking($_POST["fname"]);
    $lname = hacking($_POST["lname"]);
    $email = hacking($_POST["email"]);
    $password = hacking(md5($_POST["password"]));
    $re_password = hacking(md5($_POST["re_password"]));
    $ip = clientIP();
    $day_number = jdate('d');
    $month_number = jdate('m');
    $year_number = jdate('Y');
    $date = $year_number . "/" . $month_number . "/" . $day_number;

    if ($password == $re_password) {
        $table_tek = "cr_register";
        $fields_tek = "*";
        $where_tek = "email='$email'";
        $order_tek = "email";
        $limit_tek = "1";
        $produc_tek = $dbclass->select($table_tek, $fields_tek, $where_tek, $order_tek, $limit_tek);
        if (!is_array($produc_tek)) {
            $table = "`cr_register`";
            $fields = "`fname_user`, `lname_user`, `email`, `password`,"
                    . " `date_register`, `active_user`, `buy_num`, `ip`";
            $params = "'$fname', '$lname', '$email', '$password', '$date',"
                    . " '0', '0', '$ip'";
            $insert = $dbclass->insert($table, $fields, $params);
            //////////////////////
            $api=  md5($email);
            $subject = "لینک فعال سازی-ثبت نام در کرنجال";
            $text = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>'
                    . '<a href="http://localhost/Crenjal/active?register?active&api='.$api.'">crenjal</a>';
            $headers = 'From: ' . $email . '' . "\r\n" .
                    'MIME-Version: 1.0' . "\r\n" .
                    'Content-type: text/html; charset=utf-8' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
            mail($email, $subject, $text, $headers);
            header("location: ../register?register=done&email=$email");
        } else {
            echo 'با این ایمیل قبلا یوزر دیگری ثبت نام کرده است';
        }
    } else {
        echo 'پسورد و تکرار آن با هم یکی نیستند';
    }
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

function hacking($str) {
    $str = htmlspecialchars($str);
    $str = mysql_real_escape_string($str);
    return $str;
}
