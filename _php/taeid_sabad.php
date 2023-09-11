<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../DB/db_con.php';

if (isset($_COOKIE["email"])) {
    $email = $_COOKIE["email"];
    
    $table="cr_shop";
    $where="email='$email'";
    $set = "user_active='1'";
    $updat = $dbclass->update($table, $set, $where);
    //echo $id_shop;
}