<?php
include_once './DB/db_con.php';
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
        <script>
            function ChangeUrl(page, url) {
                /*if (typeof (history.pushState) != "undefined") {
                 var obj = {Page: page, Url: url};
                 history.pushState(obj, obj.Page, obj.Url);
                 } else {
                 alert("Browser does not support HTML5.");
                 }*/
                var str = "http://crenjal.com/products/value_jamal_value/val2_zareie_val2/";
                var string = str.slice(str.indexOf("value_"), str.lastIndexOf("_value"));
                var jamal = string.split("_")
                var string1 = str.slice(str.indexOf("val2_"), str.lastIndexOf("_val2"));
                var jamal1 = string1.split("_")
                alert(jamal[1] + " - " + jamal1[1]);
                alert(str.substring(str.lastIndexOf("value_") + 6, str.lastIndexOf("_value")));
                var str2 = "Abc: Lorem :ipsum sit amet";
                alert(str2.substring(str2.indexOf(":") + 1, str2.lastIndexOf(":")));
                var myStr = "The quick brown fox jumps over the lazy dog.";
                var subStr = str.match("/value_(.*)_value/");
                alert(subStr[1]);
                var jma = " jamz ";
                jma.concat("jamal");
                alert(window.location + jma.concat(" jamal"));

                history.pushState({id: 'SOME ID'}, 'jjjjj', 'products/myurl');
                document.title = "jamal";

                //window.history.pushState("object or string", "Title", "/new-url");
                //window.history.replaceState("object or string", "Title", "\another-new-url/");
            }
        </script>
    </head>
    <body onload="load_body_rpoduct()">
        <div class="container-fluid">
            <?php
            // put your code here
            include './header.php';
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-right bg-white">
                            <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    <div class="accordion" id="accordion2">
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <div class="pull-left arow-bottom"></div>
                                                            <div class="pull-right">قیمت</div>
                                                        </h3>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapseOne" class="accordion-body collapse in">
                                                <div class="panel-body">  
                                                    <link href="slider-range/nouislider.min.css" rel="stylesheet" type="text/css"/>
                                                    <script src="slider-range/nouislider.min.js" type="text/javascript"></script>
                                                    <br>
                                                    <div class="noUi-target noUi-ltr noUi-horizontal noUi-background" id="slider">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div id="hadeaghal_ghimat"></div>
                                                        <div id="hadaksar_ghimat"></div>
                                                    </div>
                                                    <script>
        var slider = document.getElementById('slider');
        noUiSlider.create(slider, {
            start: [0, 1000000],
            connect: true,
            range: {
                'min': 0,
                'max': 1000000
            }
        });
                                                    </script>
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
                                                            <div class="pull-right">جنسیت</div>
                                                        </h3>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapseTwo" class="accordion-body collapse in">
                                                <div class="panel-body">
                                                    <div class="col-sm-12 text-right margin-checkbox-search">
                                                        <label for="checkbox-mr" class="check-fulling">
                                                            <input type="checkbox" id="checkbox-mr" class="regular-checkbox chk_mr" onchange="add_searcher('checkbox-mr','آقایان')" />
                                                            <label id="all-product-true" for="checkbox-mr"></label>
                                                            آقایان</label>
                                                    </div>
                                                    <div class="col-sm-12 text-right">
                                                        <label for="checkbox-ms" class="check-fulling">
                                                            <input type="checkbox" id="checkbox-ms" class="regular-checkbox" onchange="add_searcher('checkbox-ms','بانوان')" />
                                                            <label id="all-product-true" for="checkbox-ms"></label>
                                                            بانوان
                                                        </label>
                                                    </div>
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
                                                            <div class="pull-right">دسته بندی</div>                                                    
                                                        </h3>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapseThree" class="accordion-body collapse in">
                                                <div class="panel-body">
                                                    <div class="col-sm-12 text-right margin-checkbox-search">
                                                        <label for="checkbox-poshak" class="check-fulling">
                                                            <input type="checkbox" id="checkbox-poshak" class="regular-checkbox" onchange="add_searcher('checkbox-poshak','پوشاک')" />
                                                            <label id="all-product-true" for="checkbox-poshak"></label>
                                                            پوشاک</label>
                                                    </div>
                                                    <div class="col-sm-12 text-right">
                                                        <label for="checkbox-zivar" class="check-fulling">
                                                            <input type="checkbox" id="checkbox-zivar" class="regular-checkbox" onchange="add_searcher('checkbox-zivar','زیورآلات')" />
                                                            <label id="all-product-true" for="checkbox-zivar"></label>
                                                            زیورآلات</label>
                                                    </div>
                                                    <div class="col-sm-12 text-right">
                                                        <label for="checkbox-deko" class="check-fulling">
                                                            <input type="checkbox" id="checkbox-deko" class="regular-checkbox" onchange="add_searcher('checkbox-deko','دکوراتیو')" />
                                                            <label id="all-product-true" for="checkbox-deko"></label>
                                                            دکوراتیو</label>
                                                    </div>
                                                    <div class="col-sm-12 text-right">
                                                        <label for="checkbox-kif_kmrband" class="check-fulling">
                                                            <input type="checkbox" id="checkbox-kif_kmrband" class="regular-checkbox" onchange="add_searcher('checkbox-kif_kmrband','کیف و کمر بند')" />
                                                            <label id="all-product-true" for="checkbox-kif_kmrband"></label>
                                                            کیف و کمر بند</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <div class="pull-left arow-bottom"></div>
                                                            <div class="pull-right">جنس</div>                                                    
                                                        </h3>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapseFour" class="accordion-body collapse in">
                                                <div class="panel-body">
                                                    <div class="col-sm-12 text-right margin-checkbox-search">
                                                        <label for="checkbox-parche" class="check-fulling">
                                                            <input type="checkbox" id="checkbox-parche" class="regular-checkbox" onchange="add_searcher('checkbox-parche','پارچه')" />
                                                            <label id="all-product-true" for="checkbox-parche"></label>
                                                            پارچه</label>
                                                    </div>
                                                    <div class="col-sm-12 text-right">
                                                        <label for="checkbox-charm" class="check-fulling">
                                                            <input type="checkbox" id="checkbox-charm" class="regular-checkbox" onchange="add_searcher('checkbox-charm','چرم')" />
                                                            <label id="all-product-true" for="checkbox-charm"></label>
                                                            چرم</label>
                                                    </div>
                                                    <div class="col-sm-12 text-right">
                                                        <label for="checkbox-ms_brnz" class="check-fulling">
                                                            <input type="checkbox" id="checkbox-ms_brnz" class="regular-checkbox" onchange="add_searcher('checkbox-ms_brnz','مس و برنز')" />
                                                            <label id="all-product-true" for="checkbox-ms_brnz"></label>
                                                            مس و برنز</label>
                                                    </div>
                                                    <div class="col-sm-12 text-right">
                                                        <label for="checkbox-kshi_srmk" class="check-fulling">
                                                            <input type="checkbox" id="checkbox-kshi_srmk" class="regular-checkbox" onchange="add_searcher('checkbox-kshi_srmk','کاشی و سرامیک')" />
                                                            <label id="all-product-true" for="checkbox-kshi_srmk"></label>
                                                            کاشی و سرامیک</label>
                                                    </div>
                                                    <div class="col-sm-12 text-right">
                                                        <label for="checkbox-chob" class="check-fulling">
                                                            <input type="checkbox" id="checkbox-chob" class="regular-checkbox" onchange="add_searcher('checkbox-chob','چوب')" />
                                                            <label id="all-product-true" for="checkbox-chob"></label>
                                                            چوب</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-9 col-lg-9 col-sm-6 col-xs-12 pull-right bg-white">
                            <div class="row"><br>
                                <div class="col-md-12 text-right">
                                    <div class="btn-group">
                                        <label>
                                            کرنجال
                                            » محصولات
                                            » کیف و کفش
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right" id="searchers">
                                    
                                </div>
                                <hr><br>
                                <div class="col-md-12 text-right">
                                    <div class="row">
                                        <div class="col-md-5 pull-right col-xs-12">

                                            <label class="width-search">
                                                جستجو بر اساس 
                                            </label>
                                            <div class="styleds">
                                                <select id="serch-tarin" onchange="load_products()">
                                                    <option value="جدید ترین">
                                                        جدید ترین 
                                                    </option>
                                                    <option value="پرفروش ترین">
                                                        پرفروش ترین 
                                                    </option>
                                                    <option value="محبوب ترین">
                                                        محبوب ترین 
                                                    </option>
                                                    <option value="قیمت">
                                                        قیمت
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="styleds">
                                                <select id="noz-seo" onchange="load_products()">
                                                    <option value="نزولی">
                                                        نزولی
                                                    </option>
                                                    <option value="صعودی">
                                                        صعودی
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 pull-right text-right col-xs-8">
                                            <label for="checkbox-full-product" style="float: left">
                                                <input type="checkbox" id="checkbox-full-product" class="regular-checkbox" onchange="load_products()" />
                                                <label id="all-product-true" for="checkbox-full-product"></label>
                                                فقط کالاهای موجود</label>
                                        </div>
                                        <div class="col-md-4 col-xs-12 pull-right">
                                            <label class="width-search">
                                                نمایش  
                                            </label>
                                            <div class="styleds">
                                                <select id="tedad-namayesh" onchange="load_products()">
                                                    <option value="12" selected="selected">
                                                        12
                                                    </option>
                                                    <option value="24">
                                                        24
                                                    </option>
                                                </select>
                                            </div>
                                            <label class="width-search">

                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-12 text-right">
                                    <div class="row">
                                        <div class="col-md-3 pull-right">
                                        </div>
                                        <div class="col-md-4 pull-right">
                                            <form class="form-horizontal" role="form">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-xs-6 control-label pull-right text-left" id="go-page">برو به صفحه</label>
                                                    <div class="col-xs-3 pull-right">
                                                        <input class="form-control text-center paging txt-paging" id="txt-page" placeholder="" type="text" value="1">
                                                    </div>
                                                    <div class="col-xs-2 go-page pull-right" onclick="go_pages()"></div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-5 pull-right text-center" id="load-pager">


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="loadin-product-ajax">
                                <?php
                                $table = "cr_product";
                                $fields = "*";
                                $where = "id_product>'0'";
                                $order = "id_product";
                                $limit = "0,12";
                                $products = $dbclass->select($table, $fields, $where, $order, $limit);
                                $limitpage="0,1000000";
                                $products_page = $dbclass->select($table, $fields, $where, $order, $limitpage);
                                echo '<input type="text" id="txt-non-pager" style="display:none" value="'.  count($products_page).'" />';
                                if (is_array($products)) {
                                    foreach ($products as $row_products) {
                                        ?>
                                        <div class="col-md-6 col-lg-4 col-xs-12 pull-right">
                                            <div class="thumbnail view-third">
                                                <img src="upload/419_416/<?php echo $row_products["photo_product"]; ?>" alt="<?php echo $row_products["name_product_fa"] . "-" . $row_products["name_product_en"]; ?>" />
                                                <div class="mask"> 
                                                    <div class="caption caption-mahsol">
                                                        <p></p>
                                                        <h2 class="h2-mahsol">
                                                            <button type="button" class="btn btn-primary btn-mahsol" name="" id="<?php echo $row_products["id_product"]; ?>" class=""> مقایسه</button>
                                                        </h2>
                                                        <p class="p-mahsol">
                                                            <button type="button" class="btn btn-success btn-mahsol" name="" id="<?php echo $row_products["id_product"]; ?>" class="">اضافه به سبد خرید&nbsp;+</button>
                                                        </p>
                                                        <div class="div-mahsol">
                                                            <button type="button" class="btn btn-danger btn-mahsol" name="" id="<?php echo $row_products["id_product"]; ?>" class=""> جزئیات محصول</button>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                            <hr>
                                            <div class="col-md-12">
                                                <div class="text-right row">
                                                    <div class="col-lg-12">
                                                        <div class="pull-right star <?php
                                                        if ($row_products["rate_product"] >= 5) {
                                                            echo "star-on";
                                                        } else {
                                                            echo 'star-off';
                                                        }
                                                        ?>" id="star-5"></div>
                                                        <div class="pull-right star <?php
                                                        if ($row_products["rate_product"] >= 4) {
                                                            echo "star-on";
                                                        } else {
                                                            echo 'star-off';
                                                        }
                                                        ?>" id="star-4"></div>
                                                        <div class="pull-right star <?php
                                                        if ($row_products["rate_product"] >= 3) {
                                                            echo "star-on";
                                                        } else {
                                                            echo 'star-off';
                                                        }
                                                        ?>" id="star-3"></div>
                                                        <div class="pull-right star <?php
                                                        if ($row_products["rate_product"] >= 2) {
                                                            echo "star-on";
                                                        } else {
                                                            echo 'star-off';
                                                        }
                                                        ?>" id="star-2"></div>
                                                        <div class="pull-right star <?php
                                                        if ($row_products["rate_product"] >= 1) {
                                                            echo "star-on";
                                                        } else {
                                                            echo 'star-off';
                                                        }
                                                        ?>" id="star-1"></div>
                                                    </div>
                                                </div>
                                                <div class="text-right row">
                                                    <div class="col-lg-12 name-product"><?php echo $row_products["name_product_fa"]; ?></div>
                                                </div>
                                                <div class="text-right row">
                                                    <div class="col-xs-12 ghimat-ghabl help-block"><?php echo number_format($row_products["main_price"]); ?>  تومان</div>
                                                    <div class="col-xs-12 name-product"><?php echo number_format($row_products["dis_price"]); ?> تومان</div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="hr-black"></div>
                            <br>
                            <div class="row">
                                <div class="col-md-3 pull-right">
                                </div>
                                <div class="col-md-4 pull-right">
                                    <!--<form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-xs-6 control-label pull-right text-left" id="go-page">برو به صفحه</label>
                                            <div class="col-xs-3 pull-right">
                                                <input class="form-control text-center paging txt-paging" id="txt-page" placeholder="" type="text" value="1">
                                            </div>
                                            <div class="col-xs-2 go-page pull-right" onclick="go_pages()"></div>
                                        </div>
                                    </form>-->
                                </div>
                                <div class="col-md-5 pull-right text-center" id="load-pager1">


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
    </body>
</html>
