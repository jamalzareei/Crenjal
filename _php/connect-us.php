<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../DB/db_con.php';
if (isset($_POST["email"]) && isset($_POST["tell"]) && isset($_POST["name"]) && isset($_POST["title"]) && isset($_POST["message"])) {

    $email=$_POST["email"];
    $tell=$_POST["tell"];
    $name=$_POST["name"];
    $title=$_POST["title"];
    $message=$_POST["message"];
    $reply=0;
    $message_reply="";
    
    $table = "`cr_connect`";
    $fields = "`email`, `tell`, `name`, `title`, `message`, `reply`, `message_reply`";
    $params = "'$email', '$tell', '$name', '$title', '$message', '$reply', '$message_reply'";
    $insert = $dbclass->insert($table, $fields, $params);
    
    header("location: ../connect-us?action=success");
} else {
    header("location: ../connect-us?action=error");
}
