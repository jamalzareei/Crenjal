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
        <title>کرنجال| تماس با کرنجال</title>
        <meta NAME="DESCRIPTION" CONTENT="تماس با کرنجال تماس با ما"/>
        <meta NAME="KEYWORDS" CONTENT="کرنجال،تماس با کرنجال،تماس با ما، ارتباط با کرنجال"/>
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
                            <h1>تماس با کرنجال</h1>
                            <hr>
                            <?php if(isset($_GET["action"]) && $_GET["action"]=="success"){ ?>
                            <div class="alert alert-dismissable alert-success text-right">
                                <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                                <div>پیام شما با موفقیت ارسال گردید</div>
                            </div>
                            <?php } ?>
                            <form class="" role="form" action="_php/connect-us.php" method="post">
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
                                    <input class="form-control text-right" id="exampleInputPassword1" name="title" placeholder="عنوان" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" class="form-control" name="message" placeholder="شرح موضوع" required=""></textarea>
                                </div>
                                <?php if(isset($_GET["action"]) && $_GET["action"]=="success"){ ?>
                                    <button type="submit" id="load-send" class="btn btn-add-product">ارسال شد</button>
                                <?php }  else { ?>
                                    <button type="submit" id="load-send" class="btn btn-add-product">ارسال</button>
                                <?php } ?>
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
    <script>
        $("#load-send").click(function (){
            $(this).text("در حال ارسال اطلاعات");
        });
    </script>
</body>
</html>
