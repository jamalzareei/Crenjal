<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../../DB/db_con.php';

if(isset($_POST["code_product"]) && isset($_POST["question"]) && isset($_POST["answer"])){
    $code_product=$_POST["code_product"];
    $question=$_POST["question"];
    $answer=$_POST["answer"];
    
    $table = "`cr_detail_product`";
        $fields ="`code_product`, `question`, `answer`";
                
                /*"`name_product_fa`, `name_product_en`, `code_product`,"
                . " `rate_product`, `date_product`, `detail_product`, `comment_num`, `view_num`,"
                . " `photo_product`, `sell_num`, `main_price`, `dis_price`, `gender_product`, `group_product`,"
                . " `sex_product`, `color_num`, `available`, `vizhe`, `active_product`, `color_product`";*/
        $params = "'$code_product', '$question', '$answer'";


        $insert = $dbclass->insert($table, $fields, $params);
        echo 'success';
}  else {
    echo 'not';
}