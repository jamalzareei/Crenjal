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
        <title>کرنجال | سبد خرید</title>
        <meta NAME="DESCRIPTION" CONTENT="سبد خرید کرنجال "/>
        <meta NAME="KEYWORDS" CONTENT="سبد  خرید کرنجال، کرنجال، محصولات سبد خرید"/>
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
                        <div class="col-lg-12">

                            <div class="row">
                                <div class="col-lg-12">
                                    <section>
                                        <div class="wizard">
                                            <div class="wizard-inner">
                                                <div class="connecting-line"></div>
                                                <ul class="nav nav-tabs" role="tablist">

                                                    <li role="presentation" class="pull-right active">
                                                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="کالاهای در سبد شما">
                                                            <span class="round-tab">
                                                                <i class="glyphicon glyphicon-folder-open"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li role="presentation" class="pull-right disabled">
                                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="ثبت اطلاعات تماس شما">
                                                            <span class="round-tab">
                                                                <i class="glyphicon glyphicon-pencil"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="pull-right disabled">
                                                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="پیش نمایش اطلاعات">
                                                            <span class="round-tab">
                                                                <i class="glyphicon glyphicon-picture"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li role="presentation" class="pull-right disabled">
                                                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="ثبت نهایی">
                                                            <span class="round-tab">
                                                                <i class="glyphicon glyphicon-ok"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="connecting-line-active"></div>
                                            </div>

                                            <form role="form">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                                        <table class="table table-hover table-bordered text-center table-responsive table-striped" dir="rtl">
                                                            <thead class="text-center">
                                                                <tr class="text-center" style="background: #4D7780;color:#fff;">
                                                                    <th class="text-center">عکس محصول</th>
                                                                    <th class="text-center">نام محصول</th>
                                                                    <th class="text-center">رنگ انتخابی شما</th>
                                                                    <th class="text-center">تعداد انتخابی شما</th>
                                                                    <th class="text-center">سایز</th>
                                                                    <th class="text-center">قیمت</th>
                                                                    <th class="text-center">حذف</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                if (isset($_COOKIE["browser"]) && !isset($_COOKIE["email"])) {
                                                                    $browser = $_COOKIE["browser"];
                                                                    $table = "cr_shop";
                                                                    $fields = "*";
                                                                    $where = "cookie='$browser' and ip_user='$ip' and admin_active='0'";
                                                                    $order = "id_shop";
                                                                    $limit = "10";
                                                                    $buy_added = $dbclass->select($table, $fields, $where, $order, $limit);
                                                                    if (is_array($buy_added)) {
                                                                        foreach ($buy_added as $row_buy) {
                                                                            ?>
                                                                            <tr>
                                                                                <td class="text-center">
                                                                                    <img class="img-circle" src="upload/240_238/<?php echo $row_buy["photo_product"]; ?>" height="100" width="100"/>
                                                                                </td>
                                                                                <td class="padding-table">
                                                                                    <?php echo $row_buy["name_product"]; ?>
                                                                                </td>
                                                                                <td class="padding-table">
                                                                                    <select id="select-color-<?php echo $row_buy["id_shop"]; ?>" onchange="change_sabad('<?php echo $row_buy["id_shop"]; ?>')">
                                                                                        <?php
                                                                                        $color = split("،", $row_buy["color_product"]);
                                                                                        foreach ($color as $col) {
                                                                                            echo '<option value=" ' . $col . '">
                                                                                                    ' . $col . '
                                                                                                </option>';
                                                                                        }
                                                                                        ?>
                                                                                    </select>
                                                                                    <span class="label label-inverse" id="label-color-<?php echo $row_buy["id_shop"]; ?>">
                                                                                        <?php echo $row_buy["color_select"]; ?>
                                                                                    </span>
                                                                                </td>
                                                                                <td class="padding-table">
                                                                                    <select id="select-tedad-<?php echo $row_buy["id_shop"]; ?>" onchange="change_sabad('<?php echo $row_buy["id_shop"]; ?>')"><option>1</option><option>2</option><option>3</option></select>
                                                                                    <span class="label label-info" id="label-tedad-<?php echo $row_buy["id_shop"]; ?>">
                                                                                        <?php echo $row_buy["shop_num"]; ?>
                                                                                    </span>
                                                                                </td>
                                                                                <td class="padding-table">
                                                                                    <select id="select-size-<?php echo $row_buy["id_shop"]; ?>" onchange="change_sabad('<?php echo $row_buy["id_shop"]; ?>')"><option></option><option></option><option></option></select>
                                                                                    <span class="label label-default" id="label-size-<?php echo $row_buy["id_shop"]; ?>">
                                                                                        <?php echo $row_buy["size_product"]; ?>
                                                                                    </span>
                                                                                </td>
                                                                                <td class="padding-table">
                                                                                    <?php echo $row_buy["price_product"]; ?>
                                                                                </td>
                                                                                <td class="text-center padding-table">
                                                                                    <label class="label label-danger" onclick="<?php echo $row_buy["id_shop"]; ?>">x</label>
                                                                                </td>
                                                                            </tr>

                                                                            <?php
                                                                        }
                                                                    } else {
                                                                        echo '<tr><td colspan="7"><div class="row one-search empty-buy" id="deleted_buy_div">
                                                                                سبد خرید شما خالی می باشد
                                                                            </div></td></tr>';
                                                                    }
                                                                } elseif (isset($_COOKIE["email"])) {
                                                                    $email_cook_buy = $_COOKIE["email"];
                                                                    $table = "cr_shop";
                                                                    $fields = "*";
                                                                    $where = "email='$email_cook_buy' and admin_active='0'";
                                                                    $order = "id_shop";
                                                                    $limit = "10";
                                                                    $buy_added = $dbclass->select($table, $fields, $where, $order, $limit);
                                                                    if (is_array($buy_added)) {
                                                                        foreach ($buy_added as $row_buy) {
                                                                            ?>
                                                                            <tr id="tr-num-buy-<?php echo $row_buy["id_shop"];?>">
                                                                                <td class="text-center">
                                                                                    <img class="img-circle" src="upload/240_238/<?php echo $row_buy["photo_product"]; ?>" height="100" width="100"/>
                                                                                </td>
                                                                                <td class="padding-table">
                                                                                    <?php echo $row_buy["name_product"]; ?>
                                                                                </td>
                                                                                <td class="padding-table">
                                                                                    <select id="select-color-<?php echo $row_buy["id_shop"]; ?>" onchange="change_sabad('<?php echo $row_buy["id_shop"]; ?>')">
                                                                                        <?php
                                                                                        $color = split("،", $row_buy["color_product"]);
                                                                                        foreach ($color as $col) {
                                                                                            echo '<option value=" ' . $col . '">
                                                                                                    ' . $col . '
                                                                                                </option>';
                                                                                        }
                                                                                        ?>
                                                                                    </select> -> 
                                                                                    <span class="label label-primary" id="label-color-<?php echo $row_buy["id_shop"]; ?>">
                                                                                        <?php echo $row_buy["color_select"]; ?>
                                                                                    </span>
                                                                                </td>
                                                                                <td class="padding-table">
                                                                                    <select id="select-tedad-<?php echo $row_buy["id_shop"]; ?>" onchange="change_sabad('<?php echo $row_buy["id_shop"]; ?>')"><option>1</option><option>2</option><option>3</option></select> -> 
                                                                                    <span class="label label-info" id="label-tedad-<?php echo $row_buy["id_shop"]; ?>">
                                                                                        <?php echo $row_buy["shop_num"]; ?>
                                                                                    </span>
                                                                                </td>
                                                                                <td class="padding-table">
                                                                                    <select id="select-size-<?php echo $row_buy["id_shop"]; ?>" onchange="change_sabad('<?php echo $row_buy["id_shop"]; ?>')"><option></option><option></option><option></option></select> -> 
                                                                                    <span class="label label-default" id="label-size-<?php echo $row_buy["id_shop"]; ?>">
                                                                                        <?php echo $row_buy["size_product"]; ?>
                                                                                    </span>
                                                                                </td>
                                                                                <td class="padding-table">
                                                                                    <?php echo $row_buy["price_product"]; ?>
                                                                                </td>
                                                                                <td class="text-center padding-table">
                                                                                    <label class="label label-danger" onclick="delet_buy_row('num-buy-<?php echo $row_buy["id_shop"]; ?>','<?php echo $row_buy["id_shop"]; ?>')">x</label>
                                                                                </td>
                                                                            </tr>

                                                                            <?php
                                                                        }
                                                                    } else {
                                                                        echo '<tr><td colspan="7"><div class="row one-search empty-buy" id="deleted_buy_div">
                                                                                سبد خرید شما خالی می باشد
                                                                            </div></td></tr>';
                                                                    }
                                                                } else {
                                                                    echo '<tr><td colspan="7"><div class="row one-search empty-buy" id="deleted_buy_div">
                                                                            سبد خرید شما خالی می باشد
                                                                        </div></td></tr>';
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>

                                                        <hr>
                                                        <ul class="list-inline">
                                                            <?php
                                                            $email_cook_buy="";
                                                            if(isset($_COOKIE["email"])){
                                                                
                                                            $email_cook_buy = $_COOKIE["email"];
                                                            }
                                                                    $table_email = "cr_shop";
                                                                    $fields_email = "*";
                                                                    $where_email = "email='$email_cook_buy' and admin_active='0'";
                                                                    $order_email = "id_shop";
                                                                    $limit_email = "10";
                                                                    $buy_added_email = $dbclass->select($table_email, $fields_email, $where_email, $order_email, $limit_email);
                                                                    $browser="";
                                                                    if (isset($_COOKIE["browser"]) && !isset($_COOKIE["email"])) {
                                                                        $browser = $_COOKIE["browser"];
                                                                    }
                                                                    $table = "cr_shop";
                                                                    $fields = "*";
                                                                    $where = "cookie='$browser' and ip_user='$ip' and send='0'";
                                                                    $order = "id_shop";
                                                                    $limit = "10";
                                                                    $buy_added = $dbclass->select($table, $fields, $where, $order, $limit);
                                                            ?>
                                                            <li><button type="button" class="btn btn-add-product next-step" id="jamal" <?php if (!is_array($buy_added_email) && !is_array($buy_added)){ echo 'disabled="true"';}  ?> >ذخیره و ادامه</button></li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane" role="tabpanel" id="step2">

                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8">
                                                                <?php
                                                                if (isset($_COOKIE["email"])) {
                                                                    $email = $_COOKIE["email"];
                                                                    $table = "cr_register";
                                                                    $fields = "*";
                                                                    $where = "email='$email'";
                                                                    $order = "email";
                                                                    $limit = "1";
                                                                    $user = $dbclass->select_one($table, $fields, $where, $order, $limit);
                                                                    ?>
                                                                    <legend class="text-right">تکمیل اطلاعات تماس <a href=""><i class="glyphicon glyphicon-globe"></i></a></legend>
                                                                    <table class="table table-hover table-bordered text-center table-responsive table-striped" dir="rtl">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="question-td">نام</td>
                                                                                <td class="anser-td"><?php echo $user["fname_user"]; ?></td>
                                                                                <td class="question-td">نام خانوادگی</td>
                                                                                <td class="anser-td"><?php echo $user["lname_user"]; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="question-td">ایمیل</td>
                                                                                <td class="anser-td"><?php echo $user["email"]; ?></td>
                                                                                <td class="question-td">تلفن</td>
                                                                                <td class="anser-td"><?php echo $user["tell"]; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="question-td">استان</td>
                                                                                <td class="anser-td"><?php echo $user["ostan"]; ?></td>
                                                                                <td class="question-td">شهر </td>
                                                                                <td class="anser-td"><?php echo $user["city"]; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="question-td">آدرس کال</td>
                                                                                <td colspan="3" class="anser-td"><?php echo $user["address"]; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="question-td">کد پستی</td>
                                                                                <td class="anser-td"><?php if ($user["code_posti"] != 0) echo $user["code_posti"]; ?></td>
                                                                                <td><hr></td>
                                                                                <td>
                                                                                    <a href="profile" target="_blank" class="btn btn-primary"><i title="" data-original-title="" class="glyphicon glyphicon-pencil"></i>  ویرایش اطلاعات</a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                <?php } else { ?>
                                                                    <div class="row one-search empty-buy" id="deleted_buy_div">
                                                                        لطفا وارد حساب کاربری خود شوید
                                                                        <br>
                                                                        <button type="button" class="btn btn-danger">ورود </button>
                                                                        <a href="register" class="btn btn-primary">ثبت نام </a>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="col-md-2"></div>

                                                        </div>



                                                        <hr>
                                                        <ul class="list-inline">
                                                            <?php
                                                            if (!isset($_COOKIE["email"]) || $user["fname_user"] == "" ||
                                                                    $user["lname_user"] == "" || $user["email"] == "" ||
                                                                    $user["tell"] == "" || $user["ostan"] == "" || $user["city"] == "" ||
                                                                    $user["address"] == "" || $user["code_posti"] == "0") {
                                                                ?>
                                                                <li><button type="button" class="btn btn-add-product next-step" disabled="true">لطفا اطلاعات خود را تکمیل نمایید</button></li>
                                                                <?php 
                                                            } else { ?>
                                                                <li><button type="button" class="btn btn-add-product next-step">ذخیره و ادامه</button></li>
<?php } ?>
                                                            <li><button type="button" class="btn btn-default prev-step">مرحله قبل</button></li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane" role="tabpanel" id="step3">

                                                        <div class="row">

                                                            <div title="" data-original-title="" class="col-md-2"></div>
                                                            <div title="" data-original-title="" class="col-md-8">
                                                                <legend title="" data-original-title="" class="text-right">پیش فاکتور  <a title="" data-original-title="" href=""><i title="" data-original-title="" class="glyphicon glyphicon-check"></i></a></legend>
                                                                <table class="table table-hover table-bordered text-center table-responsive table-striped" dir="rtl">
                                                                    <thead class="text-center">
                                                                        <tr class="text-center" style="background: #4D7780;color:#fff;">
                                                                            <th class="text-center">ردیف</th>
                                                                            <th class="text-center">نام محصول</th>
                                                                            <th class="text-center">تعداد</th>
                                                                            <th class="text-center">قیمت هر واحد</th>
                                                                            <th class="text-center">قیمت کل</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $sum_factor = 0;
                                                                        if (isset($_COOKIE["email"])) {
                                                                            $email_factor = $_COOKIE["email"];
                                                                            $table_factor = "cr_shop";
                                                                            $fields_factor = "*";
                                                                            $where_factor = "email='$email_factor' and admin_active='0'";
                                                                            $order_factor = "id_shop";
                                                                            $limit_factor = "10";
                                                                            $buy_added_factor = $dbclass->select($table_factor, $fields_factor, $where_factor, $order_factor, $limit_factor);
                                                                            if (is_array($buy_added_factor)) {
                                                                                $i = 1;
                                                                                foreach ($buy_added_factor as $row_factor) {
                                                                                    echo '
                                                                                        <tr class="text-center">
                                                                                            <td class="text-center">
                                                                                            ' . $i . '
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                            ' . $row_factor["name_product"] . '
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                            ' . $row_factor["shop_num"] . '
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                            ' . $row_factor["price_product"] . '
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                            ' . ($row_factor["price_product"]) * ($row_factor["shop_num"]) . '
                                                                                            </td>
                                                                                        </tr>  ';
                                                                                    $i++;
                                                                                    $sum_factor+=($row_factor["price_product"]) * ($row_factor["shop_num"]);
                                                                                }
                                                                            }
                                                                        }
                                                                        ?>  
                                                                        <tr><td colspan="5"><hr></td></tr>
                                                                        <tr class="text-center">
                                                                            <td class="text-center">هزینه پست</td>
                                                                            <td colspan="3" class="text-center"></td>
                                                                            <td class="text-center"><?php echo $post = 8000; ?> تومان
<?php $sum_factor+=$post; ?>
                                                                            </td>
                                                                        </tr>    
                                                                        <tr><td colspan="5"><hr></td></tr>
                                                                        <tr class="text-center">
                                                                            <td class="text-center">هزینه بسته بندی</td>
                                                                            <td colspan="3" class="text-center"></td>
                                                                            <td class="text-center"><?php echo $baste_bandi = 8000; ?> تومان
<?php $sum_factor+=$baste_bandi; ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr><td colspan="5"><hr></td></tr>
                                                                        <tr class="text-center">
                                                                            <td class="text-center">کد تحفیف شما</td>
                                                                            <td colspan="3" class="text-center">
                                                                                <input type="text" class="form-control" placeholder="کد تخفیف" />
                                                                            </td>
                                                                            <td class="text-center"><?php echo $code_takhfif = 0; ?> تومان
<?php $sum_factor-=$code_takhfif; ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr><td colspan="5"><hr></td></tr>
                                                                        <tr class="text-center">
                                                                            <td class="text-center">جمع کل</td>
                                                                            <td colspan="3" class="text-center"></td>
                                                                            <td class="text-center">
<?php echo $sum_factor; ?>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>



                                                            </div>
                                                            <div title="" data-original-title="" class="col-md-2"></div>


                                                        </div>
                                                        <hr>
                                                        <ul class="list-inline">
                                                            <li><button type="button" class="btn btn-add-product btn-info-full next-step" onclick="taeid_sabad()">تایید نهایی</button></li>
                                                            <li><button type="button" class="btn btn-default next-step">رد کردن</button></li>
                                                            <li><button type="button" class="btn btn-default prev-step">مرحله قبل</button></li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane" role="tabpanel" id="complete">
                                                        <div class="text-center detail-product" dir="rtl" id="complete-sabad-kharid">
                                                            <img src="img/Jumping letters.gif" height="42" width="140" />
                                                            <br>
                                                            لطفا صبر کنید ...
                                                        </div>
                                                        <hr>
                                                        <ul class="list-inline">
                                                            <!--<li><button type="button" class="btn btn-add-product btn-info-full next-step">Save and continue</button></li>-->
                                                            <li><button type="button" class="btn btn-default prev-step">مرحله قبل</button></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </section>
                                </div>
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
        <script>
            function jamal(id) {
                $("#" + id).click();
            }
            $(document).ready(function () {
                //Initialize tooltips
                $('*').tooltip();
                $('.nav-tabs > li a[title]').tooltip();

                //Wizard
                $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

                    var $target = $(e.target);

                    if ($target.parent().hasClass('disabled')) {
                        return false;
                    }
                });

                $(".next-step").click(function (e) {

                    var $active = $('.wizard .nav-tabs li.active');
                    $active.next().removeClass('disabled');
                    nextTab($active);

                });
                $(".prev-step").click(function (e) {

                    var $active = $('.wizard .nav-tabs li.active');
                    prevTab($active);

                });
            });

            function nextTab(elem) {
                $(elem).next().find('a[data-toggle="tab"]').click();
            }
            function prevTab(elem) {
                $(elem).prev().find('a[data-toggle="tab"]').click();
            }
        </script>
    </body>
</html>
