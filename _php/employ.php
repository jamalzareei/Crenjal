<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../DB/db_con.php';
if (isset($_POST["email"]) && isset($_POST["tell"]) && isset($_POST["name"]) && isset($_POST["job"])
        && isset($_POST["ostan"]) && isset($_POST["shahr"]) && isset($_POST["address"])) {

    $email=$_POST["email"];
    $tell=$_POST["tell"];
    $name=$_POST["name"];
    $job=$_POST["job"];
    $ostan=$_POST["ostan"];
    $shahr=$_POST["shahr"];
    $address=$_POST["address"];
    
    $table = "`cr_employ`";
    $fields = "`name`, `tell`, `email`, `job`, `ostan`, `shahr`, `address`";
    $params = "'$name', '$tell', '$email', '$job', '$ostan', '$shahr', '$address'";
    $insert = $dbclass->insert($table, $fields, $params);
    
    header("location: ../employ?action=success");
} else {
    header("location: ../employ?action=error");
    echo $_POST["email"].$_POST["tell"].$_POST["name"].$_POST["job"].$_POST["ostan"].$_POST["shahr"].$_POST["address"];
}
