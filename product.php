<?php
include_once './DB/db_con.php';
$code_product = "";
if (isset($_GET["code"])) {
    $code_product = $_GET["code"];
} else {
    $code_product = "";
}
$code_product = str_replace("-", "#", $code_product); //str_replace("#", "-",$row_products["code_product"])

$table = "cr_product";
$fields = "*";
$where = "code_product='$code_product'";
$order = "id_product";
$limit = "1";
$produc = $dbclass->select_one($table, $fields, $where, $order, $limit);
?>
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
        <title>کرنجال | <?php echo $produc["name_product_fa"]; ?></title>

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
                        <div class="col-md-5 col-sm-12 col-xs-12 pull-right">
                            <div class="img-product col-lg-10 col-sm-10 col-md-10 col-xs-10">
                                <img src="upload/389_389/<?php echo $produc["photo_product"]; ?>" width="100%" id="photo-product"/>
                            </div>
                            <div class="sidebar-slide col-lg-2 col-sm-2 col-md-2 col-xs-2">
                                <div class="row">
                                    <div class="col-lg-12 scrolltop text-center">
                                        <img src="img/19.png" width="50%"/> 
                                    </div>
                                    <div class="col-lg-12 img-small-product">
                                        <?php
                                        $table_gallery = "cr_gallery";
                                        $fields_gallery = "photo_gallery";
                                        $where_gallery = "code_product='$code_product'";
                                        $order_gallery = "id_gallery";
                                        $limit_gallery = "15";
                                        $produc_gallery = $dbclass->select($table_gallery, $fields_gallery, $where_gallery, $order_gallery, $limit_gallery);
                                        if (is_array($produc_gallery)) {
                                            foreach ($produc_gallery as $row_gallery) {
                                                echo '<img src="upload/74_74/' . $row_gallery["photo_gallery"] . '" width="100%"/>';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="col-lg-12 scrollbottom text-center">
                                        <img src="img/19.png" width="50%"/> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 pull-right">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <h2><?php echo $produc["name_product_fa"]; ?></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12 text-right pull-right detail-product"><?php echo $produc["code_product"]; ?></div>
                                <div class="col-md-6 col-xs-12 text-left pull-right">
                                    <div class="row">
                                        <div class="col-lg-8 col-xs-8 pull-right detail-product">
                                            <?php
                                            
                                            $table_rate = "cr_rate";
                                            $fields_rate = "*";
                                            $where_rate = "code_product='$code_product'";
                                            $order_rate = "id_rate";
                                            $limit_rate = "0,1000000";
                                            $produc_rate = $dbclass->select($table_rate, $fields_rate, $where_rate, $order_rate, $limit_rate);
                                            $sum=0;
                                            if(is_array($produc_rate)){
                                                foreach ($produc_rate as $row_rate){
                                                    $sum+=$row_rate["rate"];
                                                }
                                            }
                                            $rate_pro=($sum/count($produc_rate));
                                            ?>
                                            <div class="rate_product" id="rate-product1" name="<?php echo $produc["code_product"]; ?>">
                                                <div class="rate_star_on" id="rate-product1-on" style="width: <?php echo $rate_pro * 20; ?>%;background-size: <?php if ($rate_pro > 0) echo 100 / $rate_pro . "%"; ?>"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4 text-right detail-product pull-right" style="padding: 0">
                                            <?php
                                            $view=$produc["view_num"]+1;
                                            $table_buy="cr_product";
                                            $set="rate_product='$rate_pro',view_num='$view'";
                                            $where_buy="code_product='$code_product'";
                                            $updat = $dbclass->update($table_buy, $set, $where_buy);
                                            
                                            echo "امتیاز ".$sum/count($produc_rate).", از ".count($produc_rate)." رای";
                                            
                                            ?>
                                            
                                            <?php echo $produc["rate_product"]; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="hr-black"></div>
                            <div class="row">
                                <br>
                                <?php
                                $pgoto_color = split(",", $produc["photo_color"]);
                                foreach ($pgoto_color as $col_photo) {
                                    echo '<div class="col-xs-2 pull-right">
                                            <div class="thumbnail view-third">
                                                <img src="upload/74_74/'.$col_photo.'" width="100%"/>
                                            </div>
                                        </div>';
                                }
                                ?>
                            </div>
                            <br>
                            <div class="hr-black"></div>
                            <br>
                            <div class="row">
                                <div class="col-xs-2 pull-right detail-product text-right">
                                    رنگ *
                                </div>
                                <div class="col-xs-10 pull-right">
                                    <div class="styleds">
                                        <select>
                                            <?php
                                            $color = split("،", $produc["color_product"]);
                                            foreach ($color as $col) {
                                                echo '<option value=" ' . $col . '">
                                                ' . $col . '
                                            </option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="hr-black"></div>
                            <br>
                            <div class="row">
                                <div class="col-xs-4 pull-right detail-product text-right">
                                    <div class="pull-right">
                                        &nbsp;&nbsp;&nbsp;  تعداد * 
                                    </div>
                                    <div class="styleds">
                                        <select>
                                            <option value="1">
                                                1
                                            </option>
                                            <option value="2">
                                                2
                                            </option>
                                            <option value="3">
                                                3
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-4 pull-right detail-product text-right"></div>
                                <div class="col-xs-4 pull-right detail-product text-right">
                                    <button class="btn btn-add-product" onclick="<?php echo $produc["code_product"]; ?>">+ افزودن به سبد خرید </button>
                                </div>
                            </div>
                            <br>
                            <div class="hr-black"></div>
                            <br>
                            <div class="row">
                                <div class="col-xs-4 pull-right detail-product text-right">
                                    <div class="price">
                                        <h3 style="direction: rtl">

                                            <div class="ghimat-ghabl help-block">
                                                <?php echo $produc["main_price"] ?>
                                                تومان
                                            </div>
                                            <?php echo $produc["dis_price"] ?>
                                            تومان 
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xs-8 pull-right detail-product text-right">
                                    <!--<div class="row">
                                        <div class="col-xs-6 pull-right detail-product text-right"></div>
                                        <div class="col-xs-6 pull-right detail-product text-right">
                                            <button class="btn btn-add-product" onclick="<?php //echo $produc["code_product"]; ?>">مقایسه</button>
                                        </div>
                                        <br><hr>
                                        <div class="col-xs-12 pull-right detail-product text-right">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-10 text-right detail-product" id="ratinging">
                                                            <div class="pull-right star star-off" id="star-5" onclick="rate_product('<?php //echo $produc["code_product"]; ?>','5')" onmousemove="hover_rate(5)"></div>
                                                            <div class="pull-right star star-on" id="star-4" onclick="rate_product('<?php //echo $produc["code_product"]; ?>','4')" onmousemove="hover_rate(4)"></div>
                                                            <div class="pull-right star star-on" id="star-3" onclick="rate_product('<?php //echo $produc["code_product"]; ?>','3')" onmousemove="hover_rate(3)"></div>
                                                            <div class="pull-right star star-on" id="star-2" onclick="rate_product('<?php //echo $produc["code_product"]; ?>','2')" onmousemove="hover_rate(2)"></div>
                                                            <div class="pull-right star star-on" id="star-1" onclick="rate_product('<?php //echo $produc["code_product"]; ?>','1')" onmousemove="hover_rate(1)"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 detail-product">
                                                    امتیاز دادن به این محصول
                                                </div>
                                            </div>
                                        </div>

                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-12 text-right detail-product" style="padding: 50px">
                                <?php echo $produc["detail_product"]; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row blue-info">
                        محصولات مشابه
                    </div>
                    <div class="row">
                        <div class="carousel slide" id="carousel-413833">

                            <div class="carousel-inner">

                                <div class="col-lg-12">
                                    <div id="moshabeh" class="moshabeh">
                                        <div class="mahsolat-moshabeh">
                                            <?php
                                            $group = $produc["group_product"];
                                            $table_moshabe = "cr_product";
                                            $fields_moshabe = "photo_product";
                                            $where_moshabe = "group_product='$group'";
                                            $order_moshabe = "id_product";
                                            $limit_moshabe = "8";
                                            $produc_moshabe = $dbclass->select($table_moshabe, $fields_moshabe, $where_moshabe, $order_moshabe, $limit_moshabe);
                                            if (is_array($produc_moshabe)) {
                                                foreach ($produc_moshabe as $row_moshabeh) {
                                                    echo '<div id="vizhe_1" class="div-vizeh vizhe-pro-one-moshabeh">
                                                            <div class="thumbnail view-third">
                                                                <img class="pro-one" alt="Bootstrap Thumbnail First" src="upload/240_238/' . $row_moshabeh["photo_product"] . '">
                                                            </div>
                                                            <div class="col-lg-12">jamal</div>
                                                        </div>';
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <a class="left carousel-control control-moshabeh" data-slide="prev">
                                <div class="slide-vizhe-left" onclick="moshabe_left('9','')"></div>
                            </a>
                            <a class="right carousel-control control-moshabeh" data-slide="next">
                                <div class="slide-vizhe-right" onclick="moshabe_right('9','')"></div>
                            </a>
                        </div>	
                    </div>
                    <div class="row bg-white">
                        <div class="col-md-12">
                            <div class="accordion" id="accordion2">
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <div class="pull-left arow-bottom"></div>
                                                    <div class="pull-right"> توضیحات محصول «</div>
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="accordion-body collapse in">
                                        <div class="panel-body text-right">  
                                            <?php echo $produc["detail_product"]; ?>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">                                                    
                                                    <div class="pull-left arow-bottom"></div>
                                                    <div class="pull-right"> مشخصات کامل محصول «</div>
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="accordion-body collapse in">
                                        <div class="panel-body">

                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <div class="pull-left arow-bottom"></div>
                                                    <div class="pull-right"> نظرات کاربران «</div>                                                    
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="accordion-body collapse in">
                                        <div class="panel-body">
                                            <div class="row insert-comment">
                                                <?php
                                                if(isset($_COOKIE["email"])){
                                                ?>
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                        <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-default" onclick="<?php echo $produc["code_product"]; ?>">ثبت نظر</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php }?>
                                            </div>
                                            <div class="row comments">
                                                <div class="col-xs-2 pull-right text-center">
                                                    <img src="img/logo.jpg" width="70%"/>
                                                    <p>
                                                    <div class="text-center btn user-comment">
                                                        ریتدبیتردیبتنر 
                                                    </div>
                                                    </p>
                                                </div>
                                                <div class="col-xs-8 coment pull-right">
                                                    <div class="row">
                                                        <div class="col-xs-12 pull-right">
                                                            <div class="row">
                                                                <div class="col-xs-6 pull-left text-left">

                                                                </div>
                                                                <div class="col-xs-6 pull-right text-right date-comment">
                                                                    1370/07/26
                                                                </div>
                                                            </div>
                                                            <p dir="rtl">
                                                                jamal jajam; ahbs cac dsc sddc sdcsd sdc sdc sd csd csd c sdc sc sdc sdc sd csd c d sc sdc sd cs cs c sdc sdc sd cd
                                                                jamal jajam; ahbs cac dsc sddc sdcsd sdc sdc sd csd csd c sdc sc sdc sdc sd csd c d sc sdc sd cs cs c sdc sdc sd cd
                                                                jamal jajam; ahbs cac dsc sddc sdcsd sdc sdc sd csd csd c sdc sc sdc sdc sd csd c d sc sdc sd cs cs c sdc sdc sd cd
                                                                jamal jajam; ahbs cac dsc sddc sdcsd sdc sdc sd csd csd c sdc sc sdc sdc sd csd c d sc sdc sd cs cs c sdc sdc sd cd
                                                            </p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-4 pull-left text-left">
                                                                <button type="button" class="btn btn-add-product">پاسخ به این پرسش</button>
                                                            </div>
                                                            <div class="col-xs-8 pull-right text-right date-comment">

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-1 pull-right"></div>
                                                            <div class="col-xs-1 pull-right text-center btn">lndv</div>
                                                            <div class="col-xs-8 pull-right text-right">
                                                                <div class="row">
                                                                    <div class="col-xs-6 pull-left text-left">

                                                                    </div>
                                                                    <div class="col-xs-6 pull-right text-right date-comment">
                                                                        1370/07/26
                                                                    </div>
                                                                </div>
                                                                <p dir="rtl">
                                                                    jamal jajam; ahbs cac dsc sddc sdcsd sdc sdc sd csd csd c sdc sc sdc sdc sd csd c d sc sdc sd cs cs c sdc sdc sd cd
                                                                    jamal jajam; ahbs cac dsc sddc sdcsd sdc sdc sd csd csd c sdc sc sdc sdc sd csd c d sc sdc sd cs cs c sdc sdc sd cd
                                                                    jamal jajam; ahbs cac dsc sddc sdcsd sdc sdc sd csd csd c sdc sc sdc sdc sd csd c d sc sdc sd cs cs c sdc sdc sd cd
                                                                    jamal jajam; ahbs cac dsc sddc sdcsd sdc sdc sd csd csd c sdc sc sdc sdc sd csd c d sc sdc sd cs cs c sdc sdc sd cd
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-2 pull-right"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
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
