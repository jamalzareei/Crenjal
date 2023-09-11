<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <base href="//localhost/Crenjal/" />
        <meta charset="UTF-8">
        <title>محصولات کرنجال</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <meta HTTP-EQUIV="CONTENT-LANGUAGE" CONTENT="fa-ir"/>
        <meta NAME="DESCRIPTION" CONTENT=""/>
        <meta NAME="KEYWORDS" CONTENT=""/>
        <meta NAME="AUTHOR" CONTENT="jamal zareie جمال زارعی"/>

        <meta NAME="COPYRIGHT" CONTENT="2016 www.crenjal.com"/>
        <meta NAME="ROBOTS" CONTENT="ALL"/>
        <!--<link href="../img/module_table_top.png" rel="shortcut icon" type="image/x-icon">-->

    </head>
    <body>
        <div class="container-fluid">
            <?php
            // put your code here
            include './header.php';
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row product">
                        <?php
                        for ($i = 1; $i < 10; $i++) {
                            ?>
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-lg-2 pull-right">
                                        <img src="img/Capture2.JPG" width="100" height="100" class="img-circle" />
                                    </div>
                                    <div class="col-lg-10 pull-right">
                                        <div class="row">
                                            <div class="col-xs-12 text-right">
                                                <h2>
                                                    ارمنی که جانش برای ایران میرود
                                                </h2>
                                            </div>
                                            <div class="col-xs-12 text-right pull-right">
                                                <span class="label label-info">24/12/1394</span>
                                                <span class="label label-success">اشتراک گذاری</span>
                                                <span class="label label-danger">تعداد بازدید 221</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-2 pull-right text-center"></div>
                                    <div class="col-xs-10 text-right" style="border-bottom: 1px solid;margin:0 20px 20px">                            
                                        <blockquote class="pull-right" contenteditable="true">
                                            <p>ارمنی که جانش برای ایران میرود ارمنی که جانش برای ایران میرود
                                                ارمنی که جانش برای ایران میرود 
                                                ارمنی که جانش برای ایران میرود</p>
                                            <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                                        </blockquote>

                                    </div>
                                </div>
                            </div>

                            <hr>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <hr>
            <?php
            // put your code here
            include './footer.php';
            ?>

        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
