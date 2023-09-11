<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../../DB/db_con.php';
include '../../DB/jdf.php';
if (isset($_POST["code_news"]) &&
        isset($_POST["title"]) &&
        isset($_POST["summery"]) &&
        isset($_POST["news_intro"]) &&
        isset($_POST["img_intro"]) &&
        isset($_POST["message"])) {


    $code_news = $_POST["code_news"];
    $title = $_POST["title"];
    $summery = $_POST["summery"];
    $news_intro = $_POST["news_intro"];
    $img_intro = $_POST["img_intro"];
    $message = $_POST["message"];

    $day_number = jdate('d');
    $month_number = jdate('F');
    $year_number = jdate('Y');
    $day_name = jdate('l');
    $date_intro =   $day_name . " - " . $day_number . "/" . $month_number . "/" .$year_number;


    $table_select = "cr_intro_news";
    $fields_select = "id,code_intro_news";
    $where_select = "code_intro_news='" . $code_news . "'";
    $order_select = "id";
    $limit_select = "10";
    $select = $dbclass->select($table_select, $fields_select, $where_select, $order_select, $limit_select);
    if (!is_array($select)) {

        $table = "`cr_intro_news`";
        $fields ="`title`, `message`, `photo`, `date`, `viewer`, `news_intro`, `summery`, `code_intro_news`";
                
        $params = "'$title', '$message', '$img_intro', '$date_intro', '0', '$news_intro', '$summery', '$code_news'";


        $insert = $dbclass->insert($table, $fields, $params);

        echo $code_news;
    } else {
        echo "not"; //$_POST["code_product"];
    }
} else {
    echo 'not';
}