<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../DB/db_con.php';

foreach ($_POST as $key => $value) {/////////////switch ()
    if ($value == "صعودی") {
        $_POST[$key] = "";
    } else if ($value == "نزولی") {
        $_POST[$key] = " DESC";
    } else if ($value == "محبوب ترین") {
        $_POST[$key] = "rate_product";
    } else if ($value == "جدید ترین") {
        $_POST[$key] = "id_product";
    } else if ($value == "پرفروش ترین") {
        $_POST[$key] = "sell_num";
    } else if ($value == "قیمت") {
        $_POST[$key] = "dis_price";
    } else if ($value == "") {
        $_POST[$key] = "12";
    }
}

$min_price = $_POST["min_price"];
$max_price = $_POST["max_price"];
//$sex_mr = $_POST["sex_mr"];
if ($_POST["sex_mr"] == "true") {
    $sex_mr = "آقا";
} else if ($_POST["sex_mr"] == "false") {
    $sex_mr = "";
}
//$sex_mis = $_POST["sex_mis"];
if ($_POST["sex_mis"] == "true") {
    $sex_mis = "خانم";
} else if ($_POST["sex_mis"] == "false") {
    $sex_mis = "";
}

if ($_POST["sex_mr"] == "false" && $_POST["sex_mis"] == "false") {
    $sex_mr = "آقا";
    $sex_mis = "خانم";
}
//$group_poshak = $_POST["group_poshak"];
if ($_POST["group_poshak"] == "true") {
    $group_poshak = "پوشاک";
} else if ($_POST["group_poshak"] == "false") {
    $group_poshak = "";
}
//$group_dekorative = $_POST["group_dekorative"];
if ($_POST["group_dekorative"] == "true") {
    $group_dekorative = "دکوراتیو";
} else if ($_POST["group_dekorative"] == "false") {
    $group_dekorative = "";
}
//$group_zivaralat = $_POST["group_zivaralat"];
if ($_POST["group_zivaralat"] == "true") {
    $group_zivaralat = "زیورآلات";
} else if ($_POST["group_zivaralat"] == "false") {
    $group_zivaralat = "";
}
//$group_kif_kamarband = $_POST["group_kif_kamarband"];
if ($_POST["group_kif_kamarband"] == "true") {
    $group_kif_kamarband = "کیف و کمر بند";
} else if ($_POST["group_kif_kamarband"] == "false") {
    $group_kif_kamarband = "";
}

if ($_POST["group_poshak"] == "false" && $_POST["group_dekorative"] == "false" && $_POST["group_zivaralat"] == "false" && $_POST["group_kif_kamarband"] == "false") {
    $group_poshak = "پوشاک";
    $group_dekorative = "دکوراتیو";
    $group_zivaralat = "زیورآلات";
    $group_kif_kamarband = "کیف و کمر بند";
}
//$gender_parche = $_POST["gender_parche"];
if ($_POST["gender_parche"] == "true") {
    $gender_parche = "پارچه";
} else if ($_POST["gender_parche"] == "false") {
    $gender_parche = "";
}
//$gender_charm = $_POST["gender_charm"];
if ($_POST["gender_charm"] == "true") {
    $gender_charm = "چرم";
} else if ($_POST["gender_charm"] == "false") {
    $gender_charm = "";
}
//$gender_mes_bronz = $_POST["gender_mes_bronz"];
if ($_POST["gender_mes_bronz"] == "true") {
    $gender_mes_bronz = "مس و برنز";
} else if ($_POST["gender_mes_bronz"] == "false") {
    $gender_mes_bronz = "";
}
//$gender_kashi_seramic = $_POST["gender_kashi_seramic"];
if ($_POST["gender_kashi_seramic"] == "true") {
    $gender_kashi_seramic = "کاشی و سرامیک";
} else if ($_POST["gender_kashi_seramic"] == "false") {
    $gender_kashi_seramic = "";
}
//$gender_chob = $_POST["gender_chob"];
if ($_POST["gender_chob"] == "true") {
    $gender_chob = "چوب";
} else if ($_POST["gender_chob"] == "false") {
    $gender_chob = "";
}
if ($_POST["gender_parche"] == "false" && $_POST["gender_charm"] == "false" && $_POST["gender_mes_bronz"] == "false" &&
        $_POST["gender_kashi_seramic"] == "false" && $_POST["gender_chob"] == "false") {
    $gender_chob = "چوب";
    $gender_kashi_seramic = "کاشی و سرامیک";
    $gender_mes_bronz = "مس و برنز";
    $gender_charm = "چرم";
    $gender_parche = "پارچه";
}

$noz_seo = $_POST["noz_seo"];
$search_tarin = $_POST["search_tarin"];
//$mojod = $_POST["mojod"];
if ($_POST["search_tarin"] == "true") {
    $mojod = "1";
} else if ($_POST["search_tarin"] == "false") {
    $mojod = "0";
}
$tedad = $_POST["tedad"];

if (isset($_POST["page"])) {
    $page = ($_POST["page"] - 1) * $tedad;
} else {
    $page = 1;
}
/* foreach ($_POST as $key => $value)
  echo $key . '=' . $value . '<br />'; */

$table = "cr_product";
$fields = "*";
$where = "id_product>'0' and dis_price>'$min_price' and dis_price<'$max_price' and"
        . " (gender_product='$gender_charm' or gender_product='$gender_chob' or"
        . " gender_product='$gender_kashi_seramic' or gender_product='$gender_mes_bronz' or"
        . " gender_product='$gender_parche') and (group_product='$group_dekorative' or"
        . " group_product='$group_kif_kamarband' or group_product='$group_poshak' or"
        . " group_product='$group_zivaralat') and (sex_product='$sex_mis' or"
        . " sex_product='$sex_mr')";
$order = $search_tarin . $noz_seo;
$limit = $page . "," . $tedad;
//echo 'select ' . $fields . ' FROM ' . $table . ' WHERE ' . $where . ' ORDER BY ' . $order . ' limit ' . $limit . '<br>';

$products = $dbclass->select($table, $fields, $where, $order, $limit);
$limitpage = "0,1000000";
$products_page = $dbclass->select($table, $fields, $where, $order, $limitpage);
echo '<input type="text" id="txt-non-pager" style="display:none" value="' . count($products_page) . '" />';

//echo count($products);
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
                            <button type="button" class="btn btn-primary btn-mahsol" name="" id="<?php echo $row_products["id_product"]; ?>" class="" onclick="compare_add('<?php echo $row_products["code_product"]; ?>')"> مقایسه</button>
                        </h2>
                        <p class="p-mahsol">
                            <button type="button" class="btn btn-success btn-mahsol" name="" id="<?php echo $row_products["id_product"]; ?>" class="" onclick="buy_add('<?php echo $row_products["code_product"]; ?>')">+ اضافه به سبد خرید</button>
                        </p>
                        <div class="div-mahsol">
                            <a href="product/<?php echo str_replace("#", "-",$row_products["code_product"])."/".str_replace(" ", "-", $row_products["name_product_fa"])."/".str_replace(" ", "-", $row_products["name_product_en"]); ?>" type="button" class="btn btn-danger btn-mahsol" name="" id="<?php echo $row_products["id_product"]; ?>" class=""> جزئیات محصول</a>
                        </div>
                    </div>
                </div>  
            </div>
            <hr>
            <div class="col-md-12">
                <div class="text-right row">
                    <div class="col-xs-3"></div>
                    <div class="col-xs-9">
                        <div class="rate_product pull-right">
                            <div class="rate_star_on" style="width: <?php echo $row_products["rate_product"]*20; ?>%;background-size: <?php if($row_products["rate_product"]>0) echo 100/$row_products["rate_product"]."%"; ?>"></div>
                        </div>
                    </div>
                </div>
                <div class="text-right row">
                    <div class="col-lg-12 name-product"><?php echo $row_products["name_product_fa"] . "-" . $row_products["gender_product"]; ?></div>
                </div>
                <div class="text-right row">
                    <div class="col-xs-12 ghimat-ghabl help-block"><?php echo number_format($row_products["main_price"]); ?>  تومان</div>
                    <div class="col-xs-12 name-product"><?php echo number_format($row_products["dis_price"]); ?> تومان</div>
                </div>
            </div>
        </div>
        <?php
        //echo 'select ' . $fields . ' FROM ' . $table . ' WHERE ' . $where . ' ORDER BY ' . $order . ' limit ' . $limit . '<br>';
    }
}