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
if (isset($_FILES['fileToUpload_gallery']) && $_FILES['fileToUpload_gallery']['name'] != '') {
    $file = $_FILES['fileToUpload_gallery'];
    $file_name = "crenjal_com-" . $day . "-" . $month . "-" . $year . "-" . $hour . "-" . $min . "-" . $sec . "-" . $file['name']; //."-".$file['name'];

    move_uploaded_file($file['tmp_name'], $path . $file_name);
    $resizeObj = new resize_img($path . $file_name);//1349_790//50_50//240_238//419_416//287_287//389_389//74_74
    $resizeObj->resizeImage(1349, 790, 'crop');
    $resizeObj->saveImage($path . "1349_790/" . $file_name, 100);
    $resizeObj->resizeImage(50, 50,'exact');
    $resizeObj->saveImage($path . "50_50/" . $file_name, 100);
    /*$resizeObj->resizeImage(50, 50);
    $resizeObj->saveImage($path . "50_50/" . $file_name, 100);
    $resizeObj->resizeImage(50, 50, 'crop');
    $resizeObj->saveImage($path . "50_50/crop" . $file_name, 100);*/
    $resizeObj->resizeImage(240, 238, 'exact');
    $resizeObj->saveImage($path . "240_238/" . $file_name, 100);
    $resizeObj->resizeImage(419, 416, 'exact');
    $resizeObj->saveImage($path . "419_416/" . $file_name, 100);
    $resizeObj->resizeImage(287, 287, 'exact');
    $resizeObj->saveImage($path . "287_287/" . $file_name, 100);
    $resizeObj->resizeImage(389, 389, 'exact');
    $resizeObj->saveImage($path . "389_389/" . $file_name, 100);
    $resizeObj->resizeImage(74, 74, 'exact');
    $resizeObj->saveImage($path . "74_74/" . $file_name, 100);

    die($file_name); //.".".$_FILES['fileToUpload']['type']
}