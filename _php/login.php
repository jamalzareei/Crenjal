<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../DB/db_con.php';
if (isset($_POST["email_login"]) && isset($_POST["password_login"])) {
    $email = $dbclass->hacking($_POST["email_login"]);
    $password = $dbclass->hacking(md5($_POST["password_login"]));
    $table = "cr_register";
    $fields = "email,password";
    $where = "email='$email' and password='$password'";
    $order = "email";
    $limit = "1";
    $url=$_SERVER["HTTP_REFERRER"];
    $user = $dbclass->select($table, $fields, $where, $order, $limit);
    if(is_array($user)){
        setcookie("email",$email,time()+30*3600*30,"/");
        //header("location: ".$url);
        header("location: ".$_SERVER['HTTP_REFERER']);
    }  else {
        //header("location: ?login=error");
        header("location: ".$_SERVER['HTTP_REFERER']."?login=error");
    }
}