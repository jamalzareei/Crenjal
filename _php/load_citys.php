<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../DB/db_con.php';
if (isset($_POST["id_ostan"]) && isset($_POST["city"])) {
    $id_ostan = $_POST["id_ostan"];
    $city = $_POST["city"];
    $table_ostan = "locate";
    $fields_ostan = "*";
    $where_ostan = "parent='$id_ostan'";
    $order_ostan = "idLocate";
    $limit_ostan = "1000";
    $select_ostan = $dbclass->select($table_ostan, $fields_ostan, $where_ostan, $order_ostan, $limit_ostan);

    $citys = "<option>
                ----------------
            </option>";
    if (is_array($select_ostan)) {
        foreach ($select_ostan as $row_ostan) {
            if (trim($row_ostan["name"]) == trim($city)) {
                $citys.='
                    <option value="' . $row_ostan["name"] . '" selected>
                    ' . $row_ostan["name"] . '
                    </option>';
            } else {
                $citys.='
                    <option value="' . $row_ostan["name"] . '">
                    ' . $row_ostan["name"] . '
                    </option>';
            }
        }
    }
    echo $citys;
}