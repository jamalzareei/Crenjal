<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$path = 'uploads/';
if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['name'] != '') {
    $file = $_FILES['fileToUpload'];
    $file_name = $file['name'];
    move_uploaded_file($file['tmp_name'], $path . "cr-".$file_name);
    die('فایل اپلود وابی');
}