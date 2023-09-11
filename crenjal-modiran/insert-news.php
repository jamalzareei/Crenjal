<?php
if (!isset($_COOKIE["email_amdin"]) || !isset($_COOKIE["email_amdin"]) || $_COOKIE["email_amdin"]!="info@crenjal.com") {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="img/favicon.html">

        <title>صفحه اصلی</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">

        <script src="../ckeditor/ckeditor.js" type="text/javascript"></script>

        <script src="../ckeditor/adapters/jquery.js" type="text/javascript"></script>
        <link href="ckeditor/contents.css" rel="stylesheet" type="text/css" />
        <script>
            $(document).ready(function () {

                $("#detail_product").ckeditor();
            });
        </script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}</style></head>

    <body>

        <section id="container" class="">
            <!--header start-->
            <?php include './header.php'; ?>
            <!--header end-->
            <!--sidebar start-->
            <?php include './aside.php'; ?>
            <!--sidebar end-->
            <style>
                .stepy-titles li div,.stepy-titles li.current-step div{
                    line-height: 20px;
                    font-size: 12px;
                    padding: 33% 0;
                }
            </style>
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <!--state overview start-->

                    <!-- page start-->
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <section class="panel">
                                            <header class="panel-heading">
                                                ثبت کالا

                                            </header>
                                            <div class="panel-body">
                                                <div class="stepy-tab">
                                                    <ul id="default-titles" class="stepy-titles clearfix">
                                                        <li id="default-title-0" class="current-step">
                                                            <div>اضافه کردن محصول</div>
                                                        </li>
                                                        <li id="default-title-1" class="">
                                                            <div>افزودن عکس به گالری</div>
                                                        </li>
                                                        <li id="default-title-2" class="">
                                                            <div>توضیحات کامل محصول</div>
                                                        </li>
                                                        <li id="default-title-3" class="">
                                                            <div>نمایش کلی و ثبت نهایی</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="form-horizontal" id="default">
                                                    <fieldset title=" اضافه کردن محصول جدید" class="step" id="default-step-0">
                                                        <legend></legend>

                                                        <div class="row">
                                                            <div class="col-md-4"><input placeholder="کد خبر" class="form-control text-right" type="text" id="code_news"></div>
                                                            <div class="col-md-8"><input placeholder="عنوان" class="form-control text-right" type="text" id="title"></div>
                                                            <hr><br>
                                                            <div class="col-md-12"><input placeholder="خلاصه ای از خبر" class="form-control text-right" type="text" id="summery"></div>
                                                            
                                                            <hr><br>
                                                            <div class="col-md-4">
                                                                <select id="news_intro" style="width: 100%">
                                                                    <option value="خبر">خبر</option>
                                                                    <option value="معرفی">معرفی</option>
                                                                </select>
                                                            </div>
                                                            <hr><br>
                                                            <script>
                                                                function fileSelected() {
                                                                    var file = document.getElementById('fileToUpload').files[0];
                                                                    if (file) {
                                                                        //var fileSize = 0;
                                                                        //if (file.size > 1024 * 1024)
                                                                        //    fileSize = (Math.round(file.size * 100 / (1024 * 1024)) / 100).toString() + 'MB';
                                                                        //else
                                                                        //    fileSize = (Math.round(file.size * 100 / 1024) / 100).toString() + 'KB';
                                                                        //document.getElementById('fileName').innerHTML = 'Name: ' + file.name;
                                                                        //document.getElementById('fileSize').innerHTML = 'Size: ' + fileSize;
                                                                        //document.getElementById('fileType').innerHTML = 'Type: ' + file.type;
                                                                        if (file.type === 'image/jpeg' || file.type === 'image/png' || file.type === 'image/gif') {
                                                                            var fd = new FormData();
                                                                            fd.append("fileToUpload", document.getElementById('fileToUpload').files[0]);
                                                                            var xhr = new XMLHttpRequest();
                                                                            xhr.upload.addEventListener("progress", uploadProgress, false);
                                                                            xhr.addEventListener("load", uploadComplete, false);
                                                                            xhr.addEventListener("error", uploadFailed, false);
                                                                            xhr.addEventListener("abort", uploadCanceled, false);
                                                                            xhr.open("POST", "_php/upload-image-one.php");
                                                                            xhr.send(fd);
                                                                        } else {
                                                                            alert("یه عکسی انتخاب کو");
                                                                        }
                                                                    }
                                                                }
                                                                /*function uploadFile() {
                                                                 var fd = new FormData();
                                                                 fd.append("fileToUpload", document.getElementById('fileToUpload').files[0]);
                                                                 var xhr = new XMLHttpRequest();
                                                                 xhr.upload.addEventListener("progress", uploadProgress, false);
                                                                 xhr.addEventListener("load", uploadComplete, false);
                                                                 xhr.addEventListener("error", uploadFailed, false);
                                                                 xhr.addEventListener("abort", uploadCanceled, false);
                                                                 xhr.open("POST", "_php/upload-image-one.php");
                                                                 xhr.send(fd);
                                                                 }*/
                                                                function uploadProgress(evt) {
                                                                    if (evt.lengthComputable) {
                                                                        var percentComplete = Math.round(evt.loaded * 100 / evt.total);
                                                                        document.getElementById('progressNumber').innerHTML = percentComplete.toString() + '%';
                                                                        document.getElementById('prog').value = percentComplete;
                                                                    } else {
                                                                        document.getElementById('progressNumber').innerHTML = 'unable to compute';
                                                                    }
                                                                }
                                                                function uploadComplete(evt) {
                                                                    //alert(evt.target.responseText);
                                                                    $("#img-uploded").attr("src", "../upload/" + evt.target.responseText);
                                                                    document.getElementById('name-file-uploaded').innerHTML = evt.target.responseText;
                                                                }
                                                                function uploadFailed(evt) {
                                                                    alert("There was an error attempting to upload the file.");
                                                                }
                                                                function uploadCanceled(evt) {
                                                                    alert("The upload has been canceled by the user or the browser dropped the connection.");
                                                                }
                                                            </script>
                                                            <form method="post" enctype="multipart/form-data">
                                                                <div class="col-md-4"><input type="file" name="fileToUpload" id="fileToUpload" multiple="multiple"
                                                                                             onchange="fileSelected();"/></div>
                                                                <div class="col-md-2"><input type="button" class="btn btn-shadow" disabled="true" onclick="uploadFile()" value="آپلود" /></div>
                                                                <div class="col-md-6">
                                                                    <div class="pull-left" id="progressNumber"></div>
                                                                    <progress class="pull-left progress active" id="prog" min="0" max="100" ></progress>
                                                                    <div class="pull-left" id="name-file-uploaded"></div>
                                                                    <img src="../img/logo.jpg" id="img-uploded" height="50" width="50"/>
                                                                </div>
                                                            </form>
                                                            <br><hr><br>
                                                            <div class="col-md-12"><textarea class="form-control ckeditor" id="detail_product" name="comment" rows="5"></textarea></div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-4 pull-left">
                                                                <button type="button" class="btn btn-primary pull-left" id="insert-data" onclick="insert_intro_news()">ثبت اولیه کالا برای دریافت ای دی کلیک کنید</button>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12" id="appended">

                                                            </div>
                                                        </div>
                                                        <br>

                                                    </fieldset>
                                                    <fieldset title="افزودنه گالری به محصول" class="step" id="default-step-1">
                                                        <legend></legend>
                                                        <div class="row">
                                                            <div class="col-md-12" id="upload-gallery">
                                                                <form method="post" enctype="multipart/form-data">
                                                                    <div class="col-md-4"><input type="file" name="fileToUpload_gallery" id="fileToUpload_gallery" multiple="multiple"
                                                                                                 onchange="fileSelected_gallery_intro();" /></div>
                                                                    <div class="col-md-2"></div>
                                                                    <div class="col-md-6">
                                                                        <div class="pull-left" id="progressNumber_gallery"></div>
                                                                        <progress class="pull-left" id="prog_gallery" min="0" max="100" ></progress>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <br><hr><br>
                                                        <div id="result-gallery">
                                                            <!--<div class="row" style="height: 100px;border-top:2px solid #A60EAE;border-bottom:2px solid #A60EAE">
                                                                <div class="col-md-4">
                                                                    <img src="../img/logo.jpg" id="mg-upload-gallery" height="80" width="80" style="border-radius: 50%" />
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="label label-info" id="name-file-upload-gallery"></label>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <input type="button" onclick="insert_gallery_uploded('','')" id="btn-upload-gallery" value="ذخیره عکس" class="btn btn-danger" style="margin-top: 30px;" />
                                                                </div>
                                                            </div>-->
                                                        </div>
                                                    </fieldset>
                                                    <fieldset title="توضیحات کامل محصول" class="step" id="default-step-2">
                                                        <legend></legend>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <input type="text" class="form-control" id="detail-question"/>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="text" class="form-control" id="detail-answer"/>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <input type="button" style="height: 35px;padding: 0" class="btn btn-compose" onclick="" value="اضافه کردن" />
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label class="label label-primary">question 1</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <label class="label label-info">ansewer 1</label>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    </fieldset>
                                                    <fieldset title="نمایش کلی و ثبت نهایی" class="step" id="default-step-3">
                                                        <legend></legend>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Full Name</label>
                                                            <div class="col-lg-10">
                                                                <p class="form-control-static">Tawseef Ahmed</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Email Address</label>
                                                            <div class="col-lg-10">
                                                                <p class="form-control-static">tawseef@vectorlab.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">User Name</label>
                                                            <div class="col-lg-10">
                                                                <p class="form-control-static">tawseef</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Phone</label>
                                                            <div class="col-lg-10">
                                                                <p class="form-control-static">01234567</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Mobile</label>
                                                            <div class="col-lg-10">
                                                                <p class="form-control-static">01234567</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Address</label>
                                                            <div class="col-lg-10">
                                                                <p class="form-control-static">
                                                                    Dreamland Ave, Suite 73
                                                                    AU, PC 1361
                                                                    P: (123) 456-7891
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <input type="submit" class="finish btn btn-danger" value="Finish" />
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>

                            </section>
                        </div>
                    </div>
                    <!-- page end-->
                </section>
            </section>
            <!--main content end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>



        <!--common script for all pages-->
        <script src="js/common-scripts.js"></script>

        <!--script for this page-->
        <script src="js/jquery.stepy.js"></script>


        <script>
                                                                                                     $(function () {
                                                                                                         $('#default').stepy({
                                                                                                             backLabel: 'Previous',
                                                                                                             block: true,
                                                                                                             nextLabel: 'Next',
                                                                                                             titleClick: true,
                                                                                                             titleTarget: '.stepy-tab'
                                                                                                         });
                                                                                                     });
                                                                                                     $(document).ready(function () {
                                                                                                         //var data = CKEDITOR.instances.detail_product.getData();
                                                                                                         //alert(data);
                                                                                                     });
        </script>
        <script src="_php/js.js" type="text/javascript"></script>
    </body>
</html>
