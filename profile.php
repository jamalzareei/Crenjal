<?php session_start();
include_once './DB/db_con.php';
$email = "";
if (!isset($_COOKIE["email"])) {
    header("location: products");
} else {
    $email = $_COOKIE["email"];
}
$table = "cr_register";
$fields = "*";
$where = "email='$email'";
$order = "email";
$limit = "1";
$user = $dbclass->select_one($table, $fields, $where, $order, $limit);

$table_shop = "cr_shop";
$fields_shop = "*";
$order_shop = "email";
$limit_shop = "1000";

$where_shop_all = "email='$email'";
$user_shop_all = $dbclass->select($table_shop, $fields_shop, $where_shop_all, $order_shop, $limit_shop);

$where_shop_no_you = "email='$email' and user_active='0'";
$user_shop_no_you = $dbclass->select($table_shop, $fields_shop, $where_shop_no_you, $order_shop, $limit_shop);

$where_shop_yes_you = "email='$email' and user_active='1'";
$user_shop_yes_you = $dbclass->select($table_shop, $fields_shop, $where_shop_yes_you, $order_shop, $limit_shop);

$where_shop_yes_admin = "email='$email' and admin_active='1'";
$user_shop_yes_admin = $dbclass->select($table_shop, $fields_shop, $where_shop_yes_admin, $order_shop, $limit_shop);

$where_shop_send = "email='$email' and send='1'";
$user_shop_send = $dbclass->select($table_shop, $fields_shop, $where_shop_send, $order_shop, $limit_shop);


?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include_once './head.php'; ?>
        <title>کرنجال | پروفایل <?php echo $user["fname_user"] . " " . $user["lname_user"]; ?></title>
        <meta NAME="DESCRIPTION" CONTENT="پروفایل کاربری "/>
        <meta NAME="KEYWORDS" CONTENT="کرنجال،پروفایل،سبد خرید،محصولات سبد خرید"/>
        <link href="css/profile.css" rel="stylesheet" type="text/css"/>
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
                        <div class="container">
                            <div class="page-header text-center">
                                <h1 id="timeline">پروفایل شما</h1>
                            </div>
                            <ul class="timeline">
                                <li class="timeline-inverted">
                                    <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
                                    <div class="timeline-panel">

                                        <div class="panel-group" id="panel-426319">
                                            <div class="panel panel-default">
                                                <div class="panel-heading timeline-heading">
                                                    <a aria-expanded="true" class="panel-title pull-right" data-toggle="collapse" data-parent="#panel-426319" href="#panel-element-941215">

                                                        اطلاعات شما<a href=""><i class="glyphicon glyphicon-globe"></i></a>

                                                    </a>
                                                </div>
                                                <div style="" aria-expanded="true" id="panel-element-941215" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <div class="row">

                                                            <div class=" col-md-12 col-lg-12"> 
                                                                <table class="table table-user-information text-right" dir="rtl">
                                                                    <tbody class="profiles">
                                                                        <tr>
                                                                            <td>نام:</td>
                                                                            <td><?php echo $user["fname_user"]; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>نام خانوادگی:</td>
                                                                            <td><?php echo $user["lname_user"]; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>تولد:</td>
                                                                            <td><?php echo $user["birth_day"]; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>جنسیت</td>
                                                                            <td><?php echo $user["sex"]; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>ایمیل:</td>
                                                                            <td><?php echo $user["email"]; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>تلفن:</td>
                                                                            <td><?php echo $user["tell"]; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>استان:</td>
                                                                            <td><?php echo $user["ostan"]; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>شهر:</td>
                                                                            <td><?php echo $user["city"]; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>آدرس</td>
                                                                            <td><?php echo $user["address"]; ?>
                                                                            </td>
                                                                        </tr>   
                                                                        <tr>
                                                                            <td>کد پستی:</td>
                                                                            <td><?php echo $user["code_posti"]; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>دریافت خبرنامه:</td>
                                                                            <td><?php if ($user["khabarameh"] == 1) {
                                                                                echo "بلی";
                                                                            } else {
                                                                                echo 'خیر';
                                                                            } ?></td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline-footer">
                                            <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                                            <a><i class="glyphicon glyphicon-share"></i></a>
                                            <a class="pull-right">Continuar Lendo</a>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
                                    <div class="timeline-panel">
                                        <div class="panel-group" id="panel-4263191">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <a aria-expanded="true" class="panel-title pull-right" data-toggle="collapse" data-parent="#panel-4263191" href="#panel-element-9425825">
                                                        تکمیل اطلاعات تماس <a href=""><i class="glyphicon glyphicon-globe"></i></a>
                                                    </a>
                                                </div>
                                                <div style="" aria-expanded="true" id="panel-element-9425825" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-1"></div>
                                                            <div class="col-md-10">
                                                                <?php if(isset($_GET["change"]) && $_GET["change"]=="success"){ ?>
                                                                <div class="alert alert-dismissable alert-success text-right">
                                                                    <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                                                                    <h4> موفقیت آمیز</h4>
                                                                    <div>اطلاعات شما با موفقیت ثبت گردید</div>
                                                                </div>
                                                                <?php } if(isset($_GET["change"]) && $_GET["change"]=="error"){ ?>
                                                                <div class="alert alert-dismissable alert-warning text-right">
                                                                    <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                                                                    <h4>خطا</h4>
                                                                    <div>لطفا مجددا تلاش کنید</div>
                                                                </div>
                                                                <?php } ?>
                                                                <br>
                                                                <form action="_php/change_profile.php?code_email=<?php echo $user["code_email"]; ?>" method="post" class="form" role="form">
                                                                    <div class="row form-group">
                                                                        <div class="col-xs-4 col-md-4 pull-right">
                                                                            <label for="fname" class="pull-right">نام</label>
                                                                            <input id="" class="form-control text-right pull-right" name="fname" placeholder="نام" required="" autofocus="" type="text" value="<?php echo $user["fname_user"]; ?>" >
                                                                        </div>
                                                                        <div class="col-xs-5 col-md-5 pull-right">
                                                                            <label for="fname" class="pull-right">نام خانوادگی</label>
                                                                            <input class="form-control text-right pull-right" name="lname" placeholder="نام خانوادگی" required="" type="text" value="<?php echo $user["lname_user"]; ?>" >
                                                                        </div>
                                                                        <div class="col-xs-3 col-md-3 pull-right">
                                                                            <label for="fname" class="pull-right">جنسیت</label>
                                                                            <select name="sex" class="form-control">
                                                                                <option>مونث</option>
                                                                                <option>مذکر</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row form-group">
                                                                        <div class="col-xs-6 col-md-6 pull-right">
                                                                            <label for="fname" class="pull-right">ایمیل</label>
                                                                            <input class="form-control text-right pull-right" name="email" placeholder="ایمیل" title="قابل تغییر نیست" autofocus="" type="text" disabled="true" value="<?php echo $user["email"]; ?>"  >
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-6 pull-right">
                                                                            <label for="fname" class="pull-right">تلفن</label>
                                                                            <input class="form-control text-right pull-right" name="tell" placeholder="تلفن" title="جهت تماس با شما" required="" type="text" value="<?php echo $user["tell"]; ?>" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="row form-group">
                                                                        <div class="col-xs-2 col-md-2 pull-right text-center detail-product">
                                                                            <br>
                                                                            <label for="fname" class="pull-right">تولد</label>                                                                            
                                                                        </div>
                                                                        <div class="col-xs-3 col-md-3 pull-right">
                                                                            <label for="fname" class="pull-right">روز</label>
                                                                            <select class="form-control" name="day">
                                                                                <?php
                                                                                $split=split("/",$user["birth_day"]);
                                                                                for($i=1;$i<=31;$i++){ 
                                                                                    if($i==$split[0]){
                                                                                        echo '<option selected>'.$i.'</option>';
                                                                                    }  else {
                                                                                        echo '<option>'.$i.'</option>';
                                                                                    }
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-xs-4 col-md-4 pull-right">
                                                                            <label for="fname" class="pull-right">ماه</label>
                                                                            
                                                                            <select class="form-control" name="month">
                                                                                <option <?php if(isset($split[1]) && "فروردین"==$split[1]){ echo 'selected';}else{echo '';} ?>>فروردین</option>
                                                                                <option <?php if(isset($split[1]) && "اردیبهشت"==$split[1]){ echo 'selected';}else{echo '';} ?>>اردیبهشت</option>
                                                                                <option <?php if(isset($split[1]) && "خرداد"==$split[1]){ echo 'selected';}else{echo '';} ?>>خرداد</option>
                                                                                <option <?php if(isset($split[1]) && "تیر"==$split[1]){ echo 'selected';}else{echo '';} ?>>تیر</option>
                                                                                <option <?php if(isset($split[1]) && "مرداد"==$split[1]){ echo 'selected';}else{echo '';} ?>>مرداد</option>
                                                                                <option <?php if(isset($split[1]) && "شهریور"==$split[1]){ echo 'selected';}else{echo '';} ?>>شهریور</option>
                                                                                <option <?php if(isset($split[1]) && "مهر"==$split[1]){ echo 'selected';}else{echo '';} ?>>مهر</option>
                                                                                <option <?php if(isset($split[1]) && "آبان"==$split[1]){ echo 'selected';}else{echo '';} ?>>آبان</option>
                                                                                <option <?php if(isset($split[1]) && "آذر"==$split[1]){ echo 'selected';}else{echo '';} ?>>آذر</option>
                                                                                <option <?php if(isset($split[1]) && "دی"==$split[1]){ echo 'selected';}else{echo '';} ?>>دی</option>  
                                                                                <option <?php if(isset($split[1]) && "بهمن"==$split[1]){ echo 'selected';}else{echo '';} ?>>بهمن</option>  
                                                                                <option <?php if(isset($split[1]) && "اسفند"==$split[1]){ echo 'selected';}else{echo '';} ?>>اسفند</option>                                                                               <option>دی</option>

                                                                            </select>
                                                                        </div>
                                                                        <div class="col-xs-3 col-md-3 pull-right">
                                                                            <label for="fname" class="pull-right">سال</label>
                                                                            <select class="form-control" name="year">
                                                                                <?php for($i=1300;$i<=1395;$i++){                                                                                    
                                                                                    if($i==$split[2]){
                                                                                        echo '<option selected>'.$i.'</option>';
                                                                                    }  else {
                                                                                        echo '<option>'.$i.'</option>';
                                                                                    }
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row form-group">
                                                                        <div class="col-xs-6 col-md-6 pull-right">
                                                                            <label for="fname" class="pull-right">استان</label>
                                                                            <select class="form-control text-right" name="ostan" id="load_ostans" onchange="change_ostan('<?php echo $user["city"]; ?>')">
                                                                                <option>
                                                                                    ----------------
                                                                                </option>
                                                                                <?php
                                                                                $table_ostan = "locate";
                                                                                $fields_ostan = "*";
                                                                                $where_ostan = "parent='1'";
                                                                                $order_ostan = "idLocate";
                                                                                $limit_ostan = "1000";
                                                                                $select_ostan = $dbclass->select($table_ostan, $fields_ostan, $where_ostan, $order_ostan, $limit_ostan);
                                                                                if (is_array($select_ostan)) {
                                                                                    foreach ($select_ostan as $row_ostan) {
                                                                                        $ostan=$user["ostan"];
                                                                                        if(trim($row_ostan["name"])==trim($ostan)){
                                                                                            echo '
                                                                                                <option name="' . $row_ostan["idLocate"] . '" value="' . $row_ostan["name"] . '" selected>
                                                                                                ' . $row_ostan["name"] . '
                                                                                                </option>';
                                                                                        }  else {
                                                                                            echo '
                                                                                                <option name="' . $row_ostan["idLocate"] . '" value="' . $row_ostan["name"] . '">
                                                                                                ' . $row_ostan["name"] . '
                                                                                                </option>';
                                                                                        }
                                                                                    }
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                            <!--<input class="form-control text-right pull-right" name="firstname" placeholder="استان" required="" autofocus="" type="text" value="<?php //echo $user["ostan"];           ?>" >-->
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-6 pull-right">   
                                                                            <label for="fname" class="pull-right">شهر</label>                       
                                                                            <select class="form-control text-right" id="load-citys" name="city">
                                                                                <option>
                                                                                    ----------------
                                                                                </option>
                                                                                <?php
                                                                                $ostan_select=trim($user["ostan"]);
                                                                                $table_os = "locate";
                                                                                $fields_os = "*";
                                                                                $where_os = "parent='1' and name='$ostan_select'";
                                                                                $order_os = "idLocate";
                                                                                $limit_os = "1000";
                                                                                $select_os = $dbclass->select_one($table_os, $fields_os, $where_os, $order_os, $limit_os);
                                                                                $id_select=$select_os["idLocate"];
                                                                                /////////////////////
                                                                                $table_city = "locate";
                                                                                $fields_city = "*";
                                                                                $where_city = "parent='$id_select'";
                                                                                $order_city = "idLocate";
                                                                                $limit_city = "1000";
                                                                                $select_city = $dbclass->select($table_city, $fields_city, $where_city, $order_city, $limit_city);
                                                                                if (is_array($select_city)) {
                                                                                    foreach ($select_city as $row_city) {
                                                                                        $city=$user["city"];
                                                                                        if(trim($row_city["name"])==trim($city)){
                                                                                            echo '
                                                                                                <option value="' . $row_city["name"] . '" selected>
                                                                                                ' . $row_city["name"] .'
                                                                                                </option>';
                                                                                        }  else {
                                                                                            echo '
                                                                                                <option value="' . $row_city["name"] . '">
                                                                                                ' . $row_city["name"]. '
                                                                                                </option>';
                                                                                        }
                                                                                    }
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row form-group">
                                                                        <div class="col-xs-12 col-md-12 text-right">
                                                                            <label for="fname" class="pull-right">آدرس کامل</label>
                                                                            <input class="form-control text-right pull-right" name="address" placeholder="آدرس کامل" required="" type="text" value="<?php echo $user["address"]; ?>" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="row form-group">
                                                                        <div class="col-xs-12 col-md-12 text-right">
                                                                            <label for="fname" class="pull-right">کدپستی</label>
                                                                            <input class="form-control text-right pull-right" name="code_posti" placeholder="کد پستی" required="" type="text" value="<?php if ($user["code_posti"] != 0) echo $user["code_posti"]; ?>" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="row form-group">
                                                                        <div class="col-xs-12 col-md-12 text-right">
                                                                            <label for="checkbox-khabarname" class="check-fulling checkbox-forget-password" data-original-title="" title="">
                                                                                <input type="checkbox" id="checkbox-khabarname" checked name="khabarname" class="regular-checkbox" onchange="" data-original-title="" title="" value="1">
                                                                                <label id="all-product-true" class="pull-right" for="checkbox-khabarname" style="margin-top: 6px;min-height: 10px" data-original-title="" title=""></label>
                                                                                <div class="pull-right" data-original-title="" title="">دریافت خبرنامه</div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row form-group">
                                                                        <div class="col-xs-12 col-md-12 text-right">
                                                                            <input type="submit" class="btn btn-add-product" value="ذخیره تغییرات"/>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <!--<div class="row one-search empty-buy" id="deleted_buy_div">
                                                                    لطفا وارد حساب کاربری خود شوید
                                                                    <br>
                                                                    <button type="button" class="btn btn-danger">ورود </button>
                                                                    <a href="register" class="btn btn-primary">ثبت نام </a>
                                                                </div>-->
                                                            </div>
                                                            <div class="col-md-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline-footer">
                                            <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                                            <a><i class="glyphicon glyphicon-share"></i></a>
                                            <a class="pull-right">Continuar Lendo</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-inverted">
                                    <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
                                    <div class="timeline-panel">


                                        <div class="panel-group" id="panel-159987721533211">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <a aria-expanded="true" class="panel-title pull-right" data-toggle="collapse" data-parent="#panel-159987721533211" href="#panel-element-15911163456">
                                                        تغییر کلمه عبور
                                                    </a>
                                                </div>
                                                <div style="" aria-expanded="true" id="panel-element-15911163456" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <form id="loginForm" method="POST" action="_php/change_pass.php?email=<?php echo $user["email"]; ?>&code-email=<?php echo $user["code_email"]; ?>" novalidate="novalidate">
                                                                    <div class="form-group" style="padding-bottom: 51px;">
                                                                        <label for="password-forget" class="col-sm-3 control-label pull-right">رمز عبور</label>
                                                                        <div class="col-sm-9">
                                                                            <input class="form-control col-xs-8" id="password-forget" name="password-forget" value="" required="" title="لطفا پسورد خود را وارد نمایید" placeholder="*********" type="password">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="re-password-forget" class="col-sm-3 control-label pull-right">تکرار رمز عبور</label>
                                                                        <div class="col-sm-9">
                                                                            <input class="form-control col-xs-8" id="re-password-forget" name="re-password-forget" value="" required="" title="لطفا تکرار پسورد خود را وارد نمایید" placeholder="*********" type="password">
                                                                        </div>
                                                                    </div>
                                                                    <br><hr>
                                                                    <div class="form-group">
                                                                        <div class="col-lg-4">
                                                                            <button type="submit" class="btn btn-success btn-block">تغییر رمز عبور</button>
                                                                        </div>
                                                                        <div class="col-lg-8" style="margin-top: 8px;">

                                                                        </div>
                                                                    </div>
                                                                    <hr><br>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="timeline-footer">
                                            <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                                            <a><i class="glyphicon glyphicon-share"></i></a>
                                            <a class="pull-right">Continuar Lendo</a>
                                        </div>


                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
                                    <div class="timeline-panel">
                                        <div class="panel-group" id="panel-154885222">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <a aria-expanded="true" class="panel-title pull-right" data-toggle="collapse" data-parent="#panel-154885222" href="#panel-element-1111111">
                                                        کاربری شما
                                                    </a>
                                                </div>
                                                <div style="" aria-expanded="true" id="panel-element-1111111" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-1 detail-product"></div>
                                                            <!--<div class="col-md-5 detail-product text-right">
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-1">
                                                                        <label class="label label-danger">10</label>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        تعداد کامنت های شما
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-1">
                                                                        <label class="label label-danger">10</label>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        سوال های شما
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-1">
                                                                        <label class="label label-danger">10</label>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        تعداد امتیازات شما
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>-->
                                                            <div class="col-md-12 text-right detail-product">
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-1">
                                                                        <label class="label label-danger">
                                                                        <?php if(is_array($user_shop_all)){ echo count($user_shop_all);}else{ echo '0';} ?>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        کل سبد خرید شما 
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-1">
                                                                        <label class="label label-warning">
                                                                        <?php if(is_array($user_shop_no_you)){ echo count($user_shop_no_you);}else{ echo '0';} ?>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        کل سفارشات تایید نشده شما 
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-1">
                                                                        <label class="label label-primary">
                                                                        <?php if(is_array($user_shop_yes_you)){ echo count($user_shop_yes_you);}else{ echo '0';} ?>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        کل سفارشات تایید شده شما 
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-1">
                                                                        <label class="label label-info">
                                                                        <?php if(is_array($user_shop_yes_admin)){ echo count($user_shop_yes_admin);}else{ echo '0';} ?>    
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        کل سفارشات تایید شده مدیریت 
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xs-1">
                                                                        <label class="label label-success">
                                                                        <?php if(is_array($user_shop_send)){ echo count($user_shop_send);}else{ echo '0';} ?>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        کل سفارشات تایید شده و ارسال شده 

                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline-footer">
                                            <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                                            <a><i class="glyphicon glyphicon-share"></i></a>
                                            <a class="pull-right">Continuar Lendo</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
                                    <div class="timeline-panel">


                                        <div class="panel-group" id="panel-159987753321">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <a aria-expanded="true" class="panel-title pull-right" data-toggle="collapse" data-parent="#panel-159987753321" href="#panel-element-15963456">
                                                        سفارشات منتظر تایید مدیریت
                                                    </a>
                                                </div>
                                                <div style="" aria-expanded="true" id="panel-element-15963456" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <table class="table table-hover table-bordered text-center table-responsive table-striped" dir="rtl">
                                                            <thead>
                                                                <tr style="background: #4D7780;color:#fff;">
                                                                    <th class="text-center">
                                                                        کد کالا
                                                                    </th>
                                                                    <th class="text-center">
                                                                        نام کالا
                                                                    </th>
                                                                    <th class="text-center">
                                                                        قیمت
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                if(is_array($user_shop_yes_you)){
                                                                    foreach ($user_shop_yes_you as $value) {
                                                                        echo '
                                                                            <tr>
                                                                                <td>
                                                                                    '.$value["code_product"].'
                                                                                </td>
                                                                                <td>
                                                                                    '.$value["name_product"].'
                                                                                </td>
                                                                                <td>
                                                                                    '.$value["price_product"].' تومان
                                                                                </td>
                                                                            </tr>
                                                                        ';
                                                                    }
                                                                } else {
                                                                        echo '<tr><td colspan="3"><div class="row one-search empty-buy" id="deleted_buy_div">
                                                                                شما هیچ سفارش تایید شده ندارید.
                                                                            </div></td></tr>';
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="timeline-footer">
                                            <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                                            <a><i class="glyphicon glyphicon-share"></i></a>
                                            <a class="pull-right">Continuar Lendo</a>
                                        </div>


                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
                                    <div class="timeline-panel">
                                        <div class="panel-group" id="panel-159987753321">

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <a aria-expanded="false" class="panel-title collapsed pull-right" data-toggle="collapse" data-parent="#panel-159987753321" href="#panel-element-458525">
                                                        سفارشات در صف ارسال
                                                    </a>
                                                </div>
                                                <div style="height: 0px;" aria-expanded="false" id="panel-element-458525" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <table class="table table-hover table-bordered text-center table-responsive table-striped" dir="rtl">
                                                            <thead>
                                                                <tr style="background: #4D7780;color:#fff;">
                                                                    <th class="text-center">
                                                                        کد کالا
                                                                    </th>
                                                                    <th class="text-center">
                                                                        نام کالا
                                                                    </th>
                                                                    <th class="text-center">
                                                                        قیمت
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                if(is_array($user_shop_yes_admin)){
                                                                    foreach ($user_shop_yes_admin as $value_admin) {
                                                                        echo '
                                                                            <tr>
                                                                                <td>
                                                                                    '.$value_admin["code_product"].'
                                                                                </td>
                                                                                <td>
                                                                                    '.$value_admin["name_product"].'
                                                                                </td>
                                                                                <td>
                                                                                    '.$value_admin["price_product"].' تومان
                                                                                </td>
                                                                            </tr>
                                                                        ';
                                                                    }
                                                                } else {
                                                                        echo '<tr><td colspan="3"><div class="row one-search empty-buy" id="deleted_buy_div">
                                                                                هیچ سفارشی در صف ارسال نمیباشد.
                                                                            </div></td></tr>';
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
                                    <div class="timeline-panel">
                                        <div class="panel-group" id="panel-159987753321">

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <a aria-expanded="false" class="panel-title collapsed pull-right" data-toggle="collapse" data-parent="#panel-159987753321" href="#panel-element-15487">
                                                        سفارشات ارسال شده
                                                    </a>
                                                </div>
                                                <div style="height: 0px;" aria-expanded="false" id="panel-element-15487" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <table class="table table-hover table-bordered text-center table-responsive table-striped" dir="rtl">
                                                            <thead>
                                                                <tr style="background: #4D7780;color:#fff;">
                                                                    <th class="text-center">
                                                                        کد کالا
                                                                    </th>
                                                                    <th class="text-center">
                                                                        نام کالا
                                                                    </th>
                                                                    <th class="text-center">
                                                                        قیمت
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                if(is_array($user_shop_send)){
                                                                    foreach ($user_shop_send as $value_send) {
                                                                        echo '
                                                                            <tr>
                                                                                <td>
                                                                                    '.$value_send["code_product"].'
                                                                                </td>
                                                                                <td>
                                                                                    '.$value_send["name_product"].'
                                                                                </td>
                                                                                <td>
                                                                                    '.$value_send["price_product"].' تومان
                                                                                </td>
                                                                            </tr>
                                                                        ';
                                                                    }
                                                                } else {
                                                                        echo '<tr><td colspan="3"><div class="row one-search empty-buy" id="deleted_buy_div">
                                                                                هیچ سفارشی برای شما ارسال نگردیده است
                                                                            </div></td></tr>';
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <li class="clearfix" style="float: none;"></li>
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
