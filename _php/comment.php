<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../DB/db_con.php';
include_once '../DB/jdf.php';
if (isset($_POST["code_product"]) && isset($_POST["comment"]) && isset($_POST["id_comment"]) && isset($_COOKIE["email"])) {
    $email = $_COOKIE["email"];
    $code_product = $_POST["code_product"];
    $comment = $_POST["comment"];
    $ans_id_comment = $_POST["id_comment"];

    $table = "cr_register";
    $fields = "fname_user,lname_user";
    $where = "email='$email'";
    $order = "id_user";
    $limit = "1";
    $produc = $dbclass->select($table, $fields, $where, $order, $limit);
    if (is_array($produc)) {
        foreach ($produc as $row) {


            $name = $row["fname_user"] . " " . $row["lname_user"];
            $date = "<p dir=\"rtl\">" . jdate('j / F / Y') . "</p>"; // jdate("d")."/".jdate("F")."/".jdate("Y");

            $table_ins = "`cr_comment`";
            $fields_ins = "`code_product`, `email`, `name_user`, `date_comment`, `comment`, `ans_id_comment`, `active`";
            $params_ins = "'$code_product', '$email', '$name', '$date','$comment', '$ans_id_comment','0'";
            $insert = $dbclass->insert($table_ins, $fields_ins, $params_ins);
            
            echo '<div class="row comments">
            <div class="col-xs-2 pull-right text-center">
                <img src="img/logo.jpg" width="70%">
                <p>
                </p><div class="text-center btn user-comment">
                   ' . $name. '
                </div>
                <p></p>
            </div>
            <div class="col-xs-8 coment pull-right">
                <div class="row">
                    <div class="col-xs-12 pull-right">
                        <div class="row">
                            <div class="col-xs-6 pull-left text-left">

                            </div>
                            <div class="col-xs-6 pull-right text-right date-comment">
                               ' . $date . '
                            </div>
                        </div>
                        <p dir="rtl">
                        ' . $comment . '
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-2 pull-right"></div>
            </div><hr><br>';
        }
    }  else {
        echo 'not';
    }
} else {
    echo 'not';
}