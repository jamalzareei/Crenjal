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
        <title>کرنجال | مقایسه</title>
        <meta NAME="DESCRIPTION" CONTENT="کرنجال ، مقایسه محصولات کرنجال"/>
        <meta NAME="KEYWORDS" CONTENT="مقایسه محصولات صنایع دستی کرنجال"/>
        <style>
            body{overflow: auto;}
            .background-white{background: #fff;margin-top: 20px;}
            .rotate{transform: rotate(90deg);height: 1300px;margin-top: 200px;margin-bottom: 200px;}
            .rotate-2 div{transform: rotate(270deg);height: 200px;width: auto;line-break: auto}
            .rotate-2:nth-child(even){background: #ccc}

            /*////////////////////////////////*/
            .product{padding: 30px}
            th,td{width: 15%;text-align: center;float: right}
        </style>
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

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <?php
                                    if (isset($_SESSION["compare"])) {
                                        $split = split("or", $_SESSION["compare"]);
                                        $table = "cr_product";
                                        $fields = "photo_product";
                                        $order = "code_product";
                                        $limit = "100";
                                    }
                                    ?>
                                    <th>
                                    <?php
                                    if (isset($split[0])) {
                                        $where0 = $split[0];
                                        $produc0 = $dbclass->select_one($table, $fields, $where0, $order, $limit);
                                        echo '<img class="img-circle" src="upload/240_238/'.$produc0["photo_product"].'" width="100%" />';
                                    }
                                    ?>
                                    </th>
                                    <th>
                                    <?php
                                    if (isset($split[1])) {
                                        $where1 = $split[1];
                                        $produc1 = $dbclass->select_one($table, $fields, $where1, $order, $limit);
                                        echo '<img class="img-circle" src="upload/240_238/'.$produc1["photo_product"].'" width="100%" />';
                                    }
                                    ?>
                                    </th>
                                    <th>
                                    <?php
                                    if (isset($split[2])) {
                                        $where2 = $split[2];
                                        $produc2 = $dbclass->select_one($table, $fields, $where2, $order, $limit);
                                        echo '<img class="img-circle" src="upload/240_238/'.$produc2["photo_product"].'" width="100%" />';
                                    }
                                    ?>
                                    </th>
                                    <th>
                                    <?php
                                    if (isset($split[3])) {
                                        $where3 = $split[3];
                                        $produc3 = $dbclass->select_one($table, $fields, $where3, $order, $limit);
                                        echo '<img class="img-circle" src="upload/240_238/'.$produc3["photo_product"].'" width="100%" />';
                                    }
                                    ?>
                                    </th>
                                    <th>
                                    <?php
                                    if (isset($split[4])) {
                                        $where4 = $split[4];
                                        $produc4 = $dbclass->select_one($table, $fields, $where4, $order, $limit);
                                        echo '<img class="img-circle" src="upload/240_238/'.$produc4["photo_product"].'" width="100%" />';
                                    }
                                    ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_SESSION["compare"])) {
                                    $split = split("or", $_SESSION["compare"]);
                                    $table = "cr_detail_product";
                                    $fields = "*";
                                    $order = "code_product";
                                    $limit = "100";

                                    if (isset($split[0])) {
                                        $where0 = $split[0];
                                        $produc0 = $dbclass->select($table, $fields, $where0, $order, $limit);
                                    }
                                    if (isset($split[1])) {
                                        $where1 = $split[1];
                                        $produc1 = $dbclass->select($table, $fields, $where1, $order, $limit);
                                    }
                                    if (isset($split[2])) {
                                        $where2 = $split[2];
                                        $produc2 = $dbclass->select($table, $fields, $where2, $order, $limit);
                                    }
                                    if (isset($split[3])) {
                                        $where3 = $split[3];
                                        $produc3 = $dbclass->select($table, $fields, $where3, $order, $limit);
                                    }
                                    if (isset($split[4])) {
                                        $where4 = $split[4];
                                        $produc4 = $dbclass->select($table, $fields, $where4, $order, $limit);
                                    }
                                    //$maximun=max(count($produc0),count($produc1),count($produc2),count($produc3),count($produc4));
                                    ?>
                                    <?php for ($i = 0; $i < count($produc0); $i++) { ?>
                                        <tr>
                                            <td><?php if (isset($produc0)) { echo $produc0[$i][2];} ?></td>
                                            <td><?php if (isset($produc0)) { echo $produc0[$i][3]; } ?></td>
                                            <td><?php if (isset($produc1)) { echo $produc1[$i][3]; } ?></td>
                                            <td><?php if (isset($produc2)) { echo $produc2[$i][3]; } ?></td>
                                            <td><?php if (isset($produc3)) { echo $produc3[$i][3]; } ?></td>
                                            <td><?php if (isset($produc4)) { echo $produc4[$i][3]; } ?></td>
                                        </tr>
                                <?php 
                                    } 
                                
                                } else {
                                      ?>
                                        <tr>
                                            <td colspan="5" style="width: 100%">
                                                <div title="" data-original-title="" class="row one-search empty-buy">
                                                        هیچ محصولی به مقایسه اضافه نکرده اید
                                                    </div>
                                            </td>
                                        </tr>
                                 <?php   }?>
                                </tbody>
                            </table>

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
