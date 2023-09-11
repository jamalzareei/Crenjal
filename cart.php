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
        <title>کرنجال | سبد خرید</title>

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
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="row choices">
                                        <div class="col-lg-1 pull-right text-center"></div>
                                        <div class="col-lg-2 pull-right text-center active-choice">
                                            <div class="choose choose-avtive show">سبد خرید</div>
                                        </div>
                                        <div class="col-lg-2 pull-right text-center">
                                            <div class="color-choice color-choice-active"></div>
                                            <div class="choose choose-avtive addres">اطلاعات شما</div>
                                        </div>
                                        <div class="col-lg-2 pull-right text-center">
                                            <div class="color-choice"></div>
                                            <div class="choose data">نمایش کلی</div>
                                        </div>
                                        <div class="col-lg-2 pull-right text-center">
                                            <div class="color-choice"></div>
                                            <div class="choose taeid">ثبت اطلاعات</div>
                                        </div>
                                        <div class="col-lg-2 pull-right text-center">
                                            <div class="color-choice"></div>
                                            <div class="choose sends">ارسال شده ها</div>
                                        </div>


                                    </div>
                                    <div class="col-xs-2"></div>
                                    <div class="col-xs-8">
                                        <div class="progress progress-striped color-chose">
                                            <div class="progress-bar progress-success pull-right" style="width: 25%;"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2"></div>
                                </div>
                            </div>
                            <hr>
                            <table class="table table-hover table-bordered text-right table-responsive table-striped" dir="rtl">
                                <thead class="text-center">
                                    <tr class="text-center">
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
                                        $where = "cookie='$browser' and ip_user='$ip'";
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
                                                        <select>
                                                            <?php
                                                            $color = split("،", $row_buy["color_product"]);
                                                            foreach ($color as $col) {
                                                                echo '<option value=" ' . $col . '">
                                                                ' . $col . '
                                                            </option>';
                                                            }
                                                            ?>
                                                        </select>
                                                        <?php echo $row_buy["color_select"]; ?>
                                                    </td>
                                                    <td class="padding-table">
                                                        <select><option>1</option><option>2</option><option>3</option></select>
                                                        <?php echo $row_buy["shop_num"]; ?>
                                                    </td>
                                                    <td class="padding-table">
                                                        <select><option></option><option></option><option></option></select>
                                                        <?php echo $row_buy["size_product"]; ?>
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
                                        $where = "email='$email_cook_buy'";
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
                                                        <select>
                                                            <?php
                                                            $color = split("،", $row_buy["color_product"]);
                                                            foreach ($color as $col) {
                                                                echo '<option value=" ' . $col . '">
                                                                ' . $col . '
                                                            </option>';
                                                            }
                                                            ?>
                                                        </select> -> 
                                                        <?php echo $row_buy["color_select"]; ?>
                                                    </td>
                                                    <td class="padding-table">
                                                        <select><option>1</option><option>2</option><option>3</option></select> -> 
                                                        <?php echo $row_buy["shop_num"]; ?>
                                                    </td>
                                                    <td class="padding-table">
                                                        <select><option></option><option></option><option></option></select> -> 
                                                        <?php echo $row_buy["size_product"]; ?>
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
                                    } else {
                                        echo '<tr><td colspan="7"><div class="row one-search empty-buy" id="deleted_buy_div">
                                                    سبد خرید شما خالی می باشد
                                                </div></td></tr>';
                                    }
                                    ?>
                                    <tr>
                                        <td class="text-center">
                                            <img class="img-circle" src="upload/crenjal_com-20-12-1394-23-48-49-double_dis_slide.jpg" height="100" width="100"/>
                                        </td>
                                        <td class="padding-table">
                                            کیف و کفش و بند و بساط
                                        </td>
                                        <td class="padding-table">
                                            <select><option>jjjj</option><option>aaaa</option><option>ssss</option></select>
                                            aaaa
                                        </td>
                                        <td class="padding-table">
                                            <select><option>1</option><option>2</option><option>3</option></select>
                                            1
                                        </td>
                                        <td class="padding-table">
                                            <select><option>jjjj</option><option>aaaa</option><option>ssss</option></select>
                                            aaaa
                                        </td>
                                        <td class="padding-table">
                                            200000 تومان
                                        </td>
                                        <td class="text-center padding-table"><label class="label label-danger">x</label></td>
                                    </tr>
                                </tbody>
                            </table>

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
