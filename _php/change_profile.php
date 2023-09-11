<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../DB/db_con.php';
if ($_COOKIE["email"]) {
    $email = $_COOKIE["email"];
    $table = "cr_register";
    $fields = "*";
    $where = "email='$email'";
    $order = "email";
    $limit = "1";
    $user = $dbclass->select_one($table, $fields, $where, $order, $limit);

    $code_email = $_GET["code_email"];
    if ($user["code_email"] == $code_email) {
        if (isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["tell"]) && isset($_POST["address"]) &&
                isset($_POST["code_posti"]) && isset($_POST["year"]) && isset($_POST["month"]) && isset($_POST["day"]) &&
                isset($_POST["ostan"]) && isset($_POST["city"]) && isset($_POST["sex"])) {
            $fname_user = $dbclass->hacking($_POST["fname"]);
            $lname_user = $dbclass->hacking($_POST["lname"]);
            $tell = $dbclass->hacking($_POST["tell"]);
            $address = $dbclass->hacking($_POST["address"]);
            $code_posti = $dbclass->hacking($_POST["code_posti"]);
            $birth_day = $dbclass->hacking($_POST["day"]) . "/" . $dbclass->hacking($_POST["month"]) . "/" . $dbclass->hacking($_POST["year"]);

            $khabarameh = 0;
            if (isset($_POST["khabarname"])) {
                $khabarameh = 1;
            }
            $ostan = $dbclass->hacking($_POST["ostan"]);
            $city = $dbclass->hacking($_POST["city"]);
            $sex = $dbclass->hacking($_POST["sex"]);

            //$table = "cr_register";
            //$where = "email='$email'";
            $set = "`fname_user` = '$fname_user', `lname_user` = '$lname_user', 
                `tell` = '$tell', `address` = '$address', `code_posti` = '$code_posti', `birth_day` = '$birth_day',
                `khabarameh` = '$khabarameh', `ostan` = '$ostan', `city` = '$city', `sex` = ' $sex'";
            
            $updat = $dbclass->update($table, $set, $where);
            //UPDATE `cr_register` SET `fname_user` = '32', `lname_user` = '31', 
            //`tell` = '093752', `address` = '12', `code_posti` = '01', `birth_day` = '1',
            // `khabarameh` = '1', `code_email` = 'j', `ostan` = 'j', `city` = 'n', `sex` = ' n'
            //  WHERE `cr_register`.`id_user` = 7
            header("location: ../profile?change=success");
        } else {
            header("location: ../profile?change=error1");
        }
    } else {
        header("location: ../profile?change=error2");
    }
} else {
    header("location: ../profile?change=error3");
}
