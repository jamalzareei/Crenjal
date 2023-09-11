<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
if(isset($_POST["code_product"])){
    $code=$_POST["code_product"];
    if(isset($_SESSION["compare"])){
        
        $_SESSION["compare"]=  str_replace("or code_product='".$code."' or", "or", $_SESSION["compare"]);
        $_SESSION["compare"]=  str_replace("code_product='".$code."' or", "", $_SESSION["compare"]);
        $_SESSION["compare"]=  str_replace("or code_product='".$code."'", "", $_SESSION["compare"]);
        $_SESSION["compare"]=  str_replace("code_product='".$code."'", "", $_SESSION["compare"]);
        $_SESSION["compare"]=  str_replace("not", "", $_SESSION["compare"]);
        if($_SESSION["compare"]==" "){
            session_destroy();
            session_destroy();
        }
        echo $_SESSION["compare"];
    }  else {
        echo 'not';
    }
}  else {
    echo 'not';
}
echo $_SESSION["compare"];