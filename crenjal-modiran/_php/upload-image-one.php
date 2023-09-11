<?php

include_once '../../DB/jdf.php';
include '../../DB/resize_img.php';
$day = jdate('d');
$month = jdate('m');
$year = jdate('Y');
$hour = jdate('H');
$min = jdate('i');
$sec = jdate('s');
$path = '../../upload/';
if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['name'] != '') {
    $file = $_FILES['fileToUpload'];
    $file_name = "crenjal_com-" . $day . "-" . $month . "-" . $year . "-" . $hour . "-" . $min . "-" . $sec . "-" . $file['name']; //."-".$file['name'];

    move_uploaded_file($file['tmp_name'], $path . $file_name);
    $resizeObj = new resize_img($path . $file_name);//1349_790//50_50//240_238//419_416//287_287//389_389//74_74
    
    
    if (!file_exists('../../upload/1349_790/')) {
        mkdir('../../upload/1349_790/', 0777, true);
    }
    $resizeObj->resizeImage(1349, 790, 'exact');
    $resizeObj->saveImage($path . "1349_790/" . $file_name, 100);
    
    if (!file_exists('../../upload/240_238/')) {
        mkdir('../../upload/240_238/', 0777, true);
    }
    $resizeObj->resizeImage(240, 238, 'exact');
    $resizeObj->saveImage($path . "240_238/" . $file_name, 100);
    
    if (!file_exists('../../upload/287_287/')) {
        mkdir('../../upload/287_287/', 0777, true);
    }
    $resizeObj->resizeImage(287, 287, 'exact');
    $resizeObj->saveImage($path . "287_287/" . $file_name, 100);
    
    if (!file_exists('../../upload/389_389/')) {
        mkdir('../../upload/389_389/', 0777, true);
    }
    $resizeObj->resizeImage(389, 389, 'exact');
    $resizeObj->saveImage($path . "389_389/" . $file_name, 100);
    
    if (!file_exists('../../upload/419_416/')) {
        mkdir('../../upload/419_416/', 0777, true);
    }
    $resizeObj->resizeImage(419, 416, 'exact');
    $resizeObj->saveImage($path . "419_416/" . $file_name, 100);
    
    if (!file_exists('../../upload/50_50/')) {
        mkdir('../../upload/50_50/', 0777, true);
    }
    $resizeObj->resizeImage(50, 50,'exact');
    $resizeObj->saveImage($path . "50_50/" . $file_name, 100);
    
    if (!file_exists('../../upload/74_74/')) {
        mkdir('../../upload/74_74/', 0777, true);
    }
    $resizeObj->resizeImage(74, 74, 'exact');
    $resizeObj->saveImage($path . "74_74/" . $file_name, 100);

    die($file_name); //.".".$_FILES['fileToUpload']['type']
}