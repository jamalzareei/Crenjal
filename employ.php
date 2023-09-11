<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include_once './head.php'; ?>
        <title>همکاری با کرنجال</title>
        <meta NAME="DESCRIPTION" CONTENT="همکاری با کرنجال"/>
        <meta NAME="KEYWORDS" CONTENT="کرنجال، همکاری، همکاری با کرنجال،استخدام در کرنجال"/>
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
                        <div class="col-md-4"></div>
                        <div class="col-md-4 text-right">
                            <h1>همکاری با کرنجال</h1>
                            <hr>
                            <?php if(isset($_GET["action"]) && $_GET["action"]=="success"){ ?>
                                <div class="alert alert-dismissable alert-success text-right">
                                    <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                                    <div>اطلاعات شما با موفقیت ارسال گردید، پس از بررسی توسط همکاران ما در صورت لزوم با شما تماس گرفته خواهد شد</div>
                                </div>
                            <?php } ?>
                            <form class="" role="form" action="_php/employ.php" method="post">
                                <div class="form-group">
                                    <input class="form-control text-right" id="exampleInputEmail1" name="name" placeholder="نام و نام خانوادگی" required="" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control text-left" id="exampleInputPassword1" name="email" dir="rtl" placeholder="ایمیل (info@crenjal.com)" type="email" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control text-left" id="exampleInputEmail1" name="tell" dir="rtl" placeholder="تلفن (09121234567)" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control text-right" id="exampleInputPassword1" name="job" placeholder="شغل انتخابی" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control text-right" id="exampleInputPassword1" name="ostan" placeholder="استان" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control text-right" id="exampleInputPassword1" name="shahr" placeholder="شهر" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" class="form-control" placeholder="آدرس کامل" name="address" required=""></textarea>
                                </div>
                                <button type="submit" class="btn btn-add-product">ارسال</button>
                            </form>
                        </div>
                        <div class="col-md-4"></div>
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
