<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../../DB/db_con.php';
if (isset($_POST["code_product"]) && isset($_POST["img_product"])) {
    $code_product = $_POST["code_product"];
    $img_product = $_POST["img_product"];
    echo $code_product+" - "+$img_product;
    $table="`cr_gallery_intro_news`";
    $fields="`code_intro_news`, `photo_gallery`";
    $params="'$code_product', '$img_product'";
    $insert=$dbclass->insert($table,$fields,$params);
    echo '- ok';
}  else {
    echo 'not';
}
/*INSERT INTO `cr_gallery` (`id_gallery`, `id_product`, `code_product`, `name_product`, `photo_gallery`)
 *  VALUES (NULL, '', '', '', '')*/