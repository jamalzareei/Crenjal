<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../DB/db_con.php';
if (isset($_POST["password-forget"]) && isset($_POST["re-password-forget"])) {
    $password = md5($_POST["password-forget"]);
    $re_password = md5($_POST["re-password-forget"]);
//email=<?php echo $email_change; code-email'
    $email = $_GET["email"];
    $code_email = $_GET["code-email"];

    if ($password == $re_password) {
        $table_backup = "cr_register";
        $where_backup = "email='$email' and code_email='$code_email'";
        $set_backup = "password='$password'";
        $updat_backup = $dbclass->update($table_backup, $set_backup, $where_backup);
        if(isset($_COOKIE["email"])){
            setcookie("email","",  time()-10*3600,"/");
        }
        header("location: ../result?email=$email&code-change-password=$code_email&result=ok");
    } else {
        header("location: ../result?email=$email&code-change-password=$code_email&result=error");
    }
} else {
    header("location: ../result?email=$email&code-change-password=$code_email&result=error");
}