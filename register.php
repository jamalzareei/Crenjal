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
        <title>کرنجال | ثبت نام</title>

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
                        <div class="col-xs-12 text-center">
                            <h1>ثبت نام در کرن<span style="color:#A60EAE">جال</span></h1>
                        </div>
                        <br><hr><br>
                        <div class="col-md-6 pull-right" style="padding-right: 7%">
                            <?php if(isset($_GET["register"])){ ?>
                            <div class="alert alert-dismissable alert-success text-right" contenteditable="true">
                                <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4>ثبت نام موفقیت آمیز</h4>
                                <div>لطفا ایمیل خود را بررسی کنید،مراحل ثبت نام را دنبال فرمایید</div><a href="#" class="alert-link"></a>
                            </div>
                            <?php } ?>
                            <form class="form-horizontal well" role="form" action="_php/register.php" method="post">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control text-right" id="txt-fname" name="fname" placeholder="نام" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control text-right" id="txt-lname" name="lname" placeholder="نام خانوادگی" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="txt-email" name="email" placeholder="ایمیل (info@crenjal.com)" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="txt-password" name="password" placeholder="رمز عبور (*******)" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="txt-re-password" name="re_password" placeholder="تکرار رمز عبور  (*******)" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="checkbox">

                                            <label for="checkbox-save-password" class="check-fulling checkbox-forget-password">
                                                <input id="checkbox-save-password" class="regular-checkbox" onchange="" type="checkbox">
                                                <label id="all-product-true" class="pull-right" for="checkbox-save-password" style="margin-top: 6px;min-height: 10px"></label>
                                                <div class="pull-right">با ثبت نام در سایت شما با قوانین سایت موافقت کرده اید</div>
                                            </label>
                                            <p class="help-block"> </p>

                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>
                                <div class="form-group">
                                    <div class=" col-sm-6">
                                        <button type="submit" class="btn btn-add-product">ثبت نام در سایت</button>
                                    </div>
                                    <div class="col-sm-6"></div>
                                </div>
                            </form>

                        </div>
                        <div class="col-md-6 pull-right text-right" style="padding: 0 40px">

                            <h2 style="margin-top: 0;">مزایای ثبت نام در  <span class="text-crenjal">کرنجال</span></h2>
                            <ul class="list-unstyled">
                                <li><span class="fa fa-check text-crenjal"></span> سریع و راحت خرید کنید</li>
                                <li><span class="fa fa-check text-crenjal"></span> نظر خود را با دیگران به اشتراک بگذارید</li>
                                <li><span class="fa fa-check text-crenjal"></span> تخفیف ها و فروش ویژه ما را دریافت کنید</li>
                                <li><span class="fa fa-check text-crenjal"></span> خریدهای خود را مدیریت کنید</li>
                                <li><span class="fa fa-check text-crenjal"></span> از ما هدیه دریافت کنید<small>(برای مناسبت های مختلف)</small></li>
                                <!--<li><a href="/read-more/"><u>اطلاعات بیشتر</u></a></li>-->
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
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
