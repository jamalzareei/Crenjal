<?php
include_once './DB/db_con.php';

function clientIP() {
    static $_list = array('REMOTE_ADDR', 'HTTP_CLIENT_IP', 'CLIENT_IP', 'HTTP_X_REAL_IP', 'HTTP_PROXY_CONNECTION', 'HTTP_FORWARDED', 'HTTP_CF_CONNECTING_IP', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_X_FORWARDED', 'HTTP_X_FORWARDED_HOST', 'HTTP_X_FORWARDED_SERVER', 'FORWARDED_FOR_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED_FOR_IP', 'HTTP_X_FORWARDED_FOR', 'FORWARDED', 'X_FORWARDED_FOR', 'FORWARDED_FOR', 'X_FORWARDED', 'HTTP_VIA', 'VIA');

    foreach ($_list as $_value) {
        if (isset($_SERVER[$_value]))
            return $_SERVER[$_value];
        elseif (getenv($_value))
            return getenv($_value);
        elseif (isset($HTTP_SERVER_VARS[$_value]))
            return $HTTP_SERVER_VARS[$_value];
        elseif (@apache_getenv($_value, TRUE))
            return apache_getenv($_value, TRUE);
        elseif (isset($_ENV[$_value]))
            return $_ENV[$_value];
        else
            continue;
    }

    return FALSE;
}
?>
<div class="row color-white" id="menu-full">
    <div class="col-md-3 visible-lg visible-md" id="logo">
        <img src="img/logo.jpg" class="img-circle" width="100%" height="80"/>
    </div>
    <div class="col-md-9" id="menus">

        <div class="row">
            <div class="col-md-12 pull-right" id="sosial-search-reg">
                <nav class="navbar navbar-default navbar-static-top" role="navigation">
                    <div class="row">
                        <!-- login register saban kharid -->
                        <div class="col-md-4 float-992-right" id="reg-log-buy">
                            <div class="row">
                                <?php
                                if (isset($_COOKIE["email"])) {
                                    ?>
                                    <div class="col-xs-4 div-loader-buy pull-right text-center">
                                        <a href="" class="loader-buy btn-sosi">
                                            <div class="col-xs-12 pull-right text-center menu-bar menu-bar-buy">
                                                <span class="menu-buy"></span>
                                                <label id="lbl-sabad" class="visible-lg lbls-menu">مقایسه</label>
                                            </div>
                                        </a>
                                        <div class="load-buy">
                                            <div class="row one-search empty-buy">
                                                سبد خرید شما خالی می باشد
                                            </div>
                                            <div class="row one-search">
                                                <div class="col-xs-3 pull-right text-center">
                                                    <img src="img/Capture1.JPG" class="img-circle img-searcher" width="50" height="50"/>
                                                </div>
                                                <div class="col-xs-6 pull-right text-right">
                                                    <h4>jamal</h4>
                                                    tozihat mahsol
                                                </div>
                                                <div class="col-xs-3 pull-right text-center price-search">
                                                    ghimat<br>
                                                    x
                                                </div>
                                            </div>
                                            <div class="row one-search">
                                                <div class="col-xs-3 pull-right text-center">
                                                    <img src="img/Capture1.JPG" class="img-circle img-searcher" width="50" height="50"/>
                                                </div>
                                                <div class="col-xs-6 pull-right text-right">
                                                    <h4>jamal</h4>
                                                    tozihat mahsol
                                                </div>
                                                <div class="col-xs-3 pull-right text-center price-search">
                                                    ghimat<br>
                                                    x
                                                </div>
                                            </div>
                                            <div class="row one-search">
                                                <div class="col-xs-3 pull-right text-center">
                                                    <img src="img/Capture1.JPG" class="img-circle img-searcher" width="50" height="50"/>
                                                </div>
                                                <div class="col-xs-6 pull-right text-right">
                                                    <h4>jamal</h4>
                                                    tozihat mahsol
                                                </div>
                                                <div class="col-xs-3 pull-right text-center price-search">
                                                    ghimat<br>
                                                    x
                                                </div>
                                            </div>
                                            <div class="row one-search">
                                                <div class="col-xs-3 pull-right text-center">
                                                    <img src="img/Capture1.JPG" class="img-circle img-searcher" width="50" height="50"/>
                                                </div>
                                                <div class="col-xs-6 pull-right text-right">
                                                    <h4>jamal</h4>
                                                    tozihat mahsol
                                                </div>
                                                <div class="col-xs-3 pull-right text-center price-search">
                                                    ghimat<br>
                                                    x
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                <div class="col-xs-4 div-loader-buy pull-right text-center">
                                    <a href="" class="loader-buy btn-sosi">
                                        <div class="col-xs-12 pull-right text-center menu-bar menu-bar-buy">
                                            <span class="menu-buy"></span>
                                            <label id="lbl-sabad" class="visible-lg lbls-menu">سبد خرید</label>
                                            <label class="num-buys"><?php
                                                $ip = clientIP();
                                                if (isset($_COOKIE["browser"])) {
                                                    $browser = $_COOKIE["browser"];
                                                    $table = "cr_shop";
                                                    $fields = "*";
                                                    $where = "cookie='$browser' and ip_user='$ip'";
                                                    $order = "id_shop";
                                                    $limit = "10";
                                                    //echo $_COOKIE["browser"];
                                                    $buy_added = $dbclass->select($table, $fields, $where, $order, $limit);
                                                    if (is_array($buy_added)) {
                                                        echo count($buy_added);
                                                    } else {
                                                        echo '0';
                                                    }
                                                } else {
                                                    echo '0';
                                                }
                                                ?></label>
                                        </div>
                                    </a>
                                    <div class="load-buy" id="load-body-added">
                                        <?php
                                        if (isset($_COOKIE["browser"])) {
                                            $browser = $_COOKIE["browser"];
                                            $table = "cr_shop";
                                            $fields = "*";
                                            $where = "cookie='$browser' and ip_user='$ip'";
                                            $order = "id_shop";
                                            $limit = "10";
                                            $buy_added = $dbclass->select($table, $fields, $where, $order, $limit);
                                            if (is_array($buy_added)) {
                                                foreach ($buy_added as $row_buy) {
                                                    echo '<div class="row one-search" id="num-buy-' . $row_buy["id_product"] . '">
                                                        <div class="col-xs-3 pull-right text-center">
                                                            <img src="upload/50_50/' . $row_buy["photo_product"] . '" class="img-circle img-searcher" width="50" height="50"/>
                                                        </div>
                                                        <div class="col-xs-6 pull-right text-right">
                                                            <h4>' . $row_buy["name_product"] . '</h4>
                                                            ' . $row_buy["detail"] . '
                                                        </div>
                                                        <div class="col-xs-3 pull-right text-center price-search" onclick=(\'num-buy-' . $row_buy["id_product"] . '\')>
                                                            ' . $row_buy["price_product"] . '<br>
                                                            <label class="label label-danger" onclick="delet_buy_row(\'num-buy-' . $row_buy["id_product"] . '\',\'' . $row_buy["id_product"] . '\')">x<label>
                                                        </div>
                                                    </div>';
                                                }
                                            } else {
                                                echo '<div class="row one-search empty-buy" id="deleted_buy_div">
                                                    سبد خرید شما خالی می باشد
                                                </div>';
                                            }
                                        } else {
                                            echo '<div class="row one-search empty-buy" id="deleted_buy_div">
                                                    سبد خرید شما خالی می باشد
                                                </div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php
                                if (!isset($_COOKIE["email"])) {
                                    ?>
                                    <div class="col-xs-4 pull-right text-center menu-bar menu-bar-login">
                                        <a id="modal-435492" href="#modal-container-435492" role="button" class="btn btn-sosi" data-toggle="modal">
                                            <span class="menu-login"></span>
                                            <label id="lbl-login" class="visible-lg lbls-menu">
                                                ورود
                                            </label>
                                        </a>
                                    </div>
                                    <div class="col-xs-4 pull-right text-center menu-bar menu-bar-register">
                                        <a href="register" class="btn btn-sosi">
                                            <span class="menu-register"></span>
                                            <label id="lbl-register" class="visible-lg lbls-menu">ثبت نام</label>
                                        </a>
                                    </div>
                                    <?php
                                } else {
                                    ?>
                                    <div class="col-xs-4 pull-right text-center menu-bar menu-bar-register logined">

                                        <a aria-expanded="true" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            خوش امدید
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">سبد خرید</a></li>
                                            <li><a href="#">سفارشات</a></li>
                                            <li><a href="#">ارسال شده ها</a></li>
                                            <li class="divider"></li>
                                            <li><a href="_php/logout.php">خروج</a></li>
                                        </ul>

                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>

                        <!-- serach -->
                        <div class="col-md-6 float-992-right" id="search-form">
                            <form class="" id="search">
                                <div class="form-group form-searcher">
                                    <input type="search" class="form-control search-auto glyphicon-search" onfocus="load_div_searcher()" placeholder="... محصول مورد نظرتان را جستجو نمایید" />
                                    <div class="load-search">
                                        <div class="row one-search empty-buy">
                                            هیچ محصولی با مشخصات شما یافت نشد
                                        </div>
                                        <div class="row one-search">
                                            <div class="col-xs-3 pull-right text-center">
                                                <img src="img/Capture1.JPG" class="img-circle img-searcher" width="50" height="50"/>
                                            </div>
                                            <div class="col-xs-6 pull-right text-right">
                                                <h4>jamal</h4>
                                                tozihat mahsol
                                            </div>
                                            <div class="col-xs-3 pull-right text-center price-search">
                                                ghimat<br>
                                                x
                                            </div>
                                        </div>
                                        <div class="row one-search">
                                            <div class="col-xs-3 pull-right text-center">
                                                <img src="img/Capture1.JPG" class="img-circle img-searcher" width="50" height="50"/>
                                            </div>
                                            <div class="col-xs-6 pull-right text-right">
                                                <h4>jamal</h4>
                                                tozihat mahsol
                                            </div>
                                            <div class="col-xs-3 pull-right text-center price-search">
                                                ghimat<br>
                                                x
                                            </div>
                                        </div>
                                        <div class="row one-search">
                                            <div class="col-xs-3 pull-right text-center">
                                                <img src="img/Capture1.JPG" class="img-circle img-searcher" width="50" height="50"/>
                                            </div>
                                            <div class="col-xs-6 pull-right text-right">
                                                <h4>jamal</h4>
                                                tozihat mahsol
                                            </div>
                                            <div class="col-xs-3 pull-right text-center price-search">
                                                ghimat<br>
                                                x
                                            </div>
                                        </div>
                                        <div class="row one-search">
                                            <div class="col-xs-3 pull-right text-center">
                                                <img src="img/Capture1.JPG" class="img-circle img-searcher" width="50" height="50"/>
                                            </div>
                                            <div class="col-xs-6 pull-right text-right">
                                                <h4>jamal</h4>
                                                tozihat mahsol
                                            </div>
                                            <div class="col-xs-3 pull-right text-center price-search">
                                                ghimat<br>
                                                x
                                            </div>
                                        </div>
                                        <div class="row one-search">
                                            <div class="col-xs-3 pull-right text-center">
                                                <img src="img/Capture1.JPG" class="img-circle img-searcher" width="50" height="50"/>
                                            </div>
                                            <div class="col-xs-6 pull-right text-right">
                                                <h4>jamal</h4>
                                                tozihat mahsol
                                            </div>
                                            <div class="col-xs-3 pull-right text-center price-search">
                                                ghimat<br>
                                                x
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </form>
                        </div>

                        <!-- shabake haye ejtemaei -->
                        <div class="col-md-2 float-992-right div-sosial" id="sosial">
                            <div class="row">
                                <div class="col-sm-3 pull-right text-center menu-bar-sosial menu-bar-facebook">
                                    <a href=""><span class="menu-facebook"></span></a>
                                </div>
                                <div class="col-sm-3 pull-right text-center menu-bar-sosial menu-bar-instagram">
                                    <a href=""><span class="menu-instagram"></span></a>
                                </div>
                                <div class="col-sm-3 pull-right text-center menu-bar-sosial menu-bar-telegram">
                                    <a href=""><span class="menu-telegram"></span></a>
                                </div>
                                <div class="col-sm-3 pull-right text-center menu-bar-sosial menu-bar-google+">
                                    <a href=""><span class="menu-google"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-md-12 pull-right" id="menu-list">
                <nav class="navbar navbar-default navbar-static-top zindex-search" role="navigation">
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button> <a class="navbar-brand" href="#">Crenjal</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="responsive-menu">
                            <ul class="">
                                <li>
                                    <a href="products/#/group1_1-poshak" class="ahref">پوشاک</a>
                                    <ul class="menu-navbar">
                                        jamal<br>
                                        پوشاک
                                    </ul>
                                    <div class="arrow-menu-bar"></div>
                                </li>
                                <li>
                                    <a href="products/#/group4_1-kif-kamarband" class="ahref">کیف و کمر بند</a>
                                    <ul class="menu-navbar">
                                        jamal<br>
                                        محصولات برنز و مس
                                    </ul>
                                    <div class="arrow-menu-bar"></div>
                                </li>
                                <li>
                                    <a href="products/#/group2_1-dekorative" class="ahref">دکوراتیو</a>
                                    <ul class="menu-navbar">
                                        jamal<br>
                                        محصولات چوب
                                    </ul>
                                    <div class="arrow-menu-bar"></div>
                                </li>
                                <li>
                                    <a href="products/#//group3_1-zivaralat" class="ahref">زیورآلات</a>
                                    <ul class="menu-navbar">
                                        jamal<br>
                                        محصولات کاشی سنتی
                                    </ul>
                                    <div class="arrow-menu-bar"></div>
                                </li>
                            </ul>
                        </div>
                        <!--/////////////////////////////////-->

                        <!--
                                            <div class="moblie-menu">
                                            <ul class="nav navbar-nav navbar-right">
                                                <li class="dropdown">
                                                    <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">محصولات چرم </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">محصولات چرم</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">One more separated link</a></li>
                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                            <ul class="nav navbar-nav navbar-right">
                                                <li class="dropdown">
                                                    <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">محصولات برنز و مس </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">محصولات برنز و مس</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">One more separated link</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="nav navbar-nav navbar-right">
                                                
                                                <li class="dropdown">
                                                    <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">پوشاک </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">پوشاک</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">One more separated link</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="nav navbar-nav navbar-right">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">محصولات کاشی سنتی </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">محصولات کاشی سنتی</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="nav navbar-nav navbar-right">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">محصولات چوب </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">محصولات چوب</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                        
                        </div>-->
                        <!--/////////////////////////////-->
                    </div>

                </nav>
            </div>
        </div>
    </div>
</div>
<?php if (!isset($_COOKIE["email"])) { ?>
<div style="display: none;<?php if(isset($_GET["login"])){ echo 'display: block';} ?>" class="modal fade <?php if(isset($_GET["login"])){ echo 'in';} ?>" id="modal-container-435492" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div id="login-overlay" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title pull-right" id="myModalLabel">ورود به کرنجال</h4>
                    <button type="button" class="close pull-left" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                </div><hr>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 pull-right">
                            <div class="col-md-12">
                                <form id="loginForm" method="POST" action="_php/login.php" novalidate="novalidate">
                                    <div class="form-group" style="padding-bottom: 51px;">
                                        <label for="username" class="col-sm-3 control-label pull-right">ایمیل</label>
                                        <div class="col-sm-9">
                                            <input class="form-control col-xs-8" id="username" name="email_login" value="" required="" title="لطفا ایمیل خود را وارد نمایید" placeholder="info@crenjal.com" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-3 control-label pull-right">رمز عبور</label>
                                        <div class="col-sm-9">
                                            <input class="form-control col-xs-8" id="password" name="password_login" value="" required="" title="لطفا پسور خود را وارد نمایید" placeholder="*******" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="checkbox">
                                                <label for="checkbox-forget-password" class="check-fulling checkbox-forget-password">
                                                    <input type="checkbox" id="checkbox-forget-password" name="forget_password" class="regular-checkbox" onchange="" />
                                                    <label id="all-product-true" class="pull-right" for="checkbox-forget-password" style="margin-top: 6px;min-height: 10px"></label>
                                                    <div class="pull-right">ذخیره رمز عبور</div>
                                                </label>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="col-lg-5">
                                        <button type="submit" class="btn btn-success btn-block">ورود</button>
                                    </div>
                                    <div class="col-lg-7"></div>
                                    <div class="col-lg-5">
                                        <a href="/forgot/" class="btn btn-default">رمز عبور خود را فراموش کرده ام!</a>
                                    </div>
                                    <div class="col-lg-7"></div>
                                    <br><hr>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="col-md-offset-2 label <?php if(isset($_GET["login"])){ echo 'label-warning';} ?>">
                                <?php if(isset($_GET["login"])){ echo 'رمز عبور اشتباه است';} ?>
                            </label>
                        </div>
                        <div class="col-md-12 pull-right">
                            <a href="register" class="btn">ثبت نام نکرده ام! <label class="label label-primary">ثبت نام در کرنجال</label></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>