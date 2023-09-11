<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../DB/db_con.php';

//
//                   جمال زارعیcrn#215jzcs89@gmail.com0
                

$table_ins = "`cr_comment`";
$fields_ins = "`code_product`, `email`, `name_user`, `date_comment`, `comment`, `ans_id_comment`, `active`";
$params_ins = "'crn#215', 'jzcs89@gmail.com', 'جمال زارعی', '<p dir=\"rtl\">21 / اسفند / 1394</p>',' ay babab ', '0','0'";
$insert = $dbclass->insert($table_ins, $fields_ins, $params_ins);
