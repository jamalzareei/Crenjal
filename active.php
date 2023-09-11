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
                    <div class="row product page-active">
                        <?php //if(session email   noe darkhast-sabtenam movafagh link faeal sazi - taghir ramz obor - faramoshi ramz obor -) ?>
                        <div class="alert alert-dismissable alert-success" contenteditable="true">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4>Alert!</h4>
                            <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
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
