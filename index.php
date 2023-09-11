<?php
include_once './DB/db_con.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <base href="//localhost/Crenjal/" />
        <meta charset="UTF-8">
        <title>Crenjal</title>

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
                <div class="carousel slide" id="carousel-413833">

                    <div class="carousel-inner" onmouseover="sliders_on()" onmouseout="sliders_off()">
                        <div class="item active">
                            <img alt="Carousel Bootstrap First" src="img/slide04.jpg" height="600px" width="100%">
                            <div class="carousel-caption">
                                <h4>جمال جمال جمال جمال جمال </h4>
                                <p>جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمالجمال جمال جمال جمال 
                                    جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال </p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Carousel Bootstrap Second" src="img/slide04.jpg" height="600px" width="100%">
                            <div class="carousel-caption">
                                <h4>جمال جمال جمال جمال جمال </h4>
                                <p>جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمالجمال جمال جمال جمال 
                                    جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال </p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Carousel Bootstrap Third" src="img/slide04.jpg" height="600px" width="100%">
                            <div class="carousel-caption">
                                <h4>جمال جمال جمال جمال جمال </h4>
                                <p>جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمالجمال جمال جمال جمال 
                                    جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال جمال </p>
                            </div>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#carousel-413833" data-slide="prev" onmouseover="sliders_on()" onmouseout="sliders_off()">
                        <span class="slide-show-left" onmouseover="sliders_on()" onmouseout="sliders_off()"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-413833" data-slide="next" onmouseover="sliders_on()" onmouseout="sliders_off()">
                        <span class="slide-show-right" onmouseover="sliders_on()" onmouseout="sliders_off()"></span>
                    </a>
                </div>	
            </div>
            <br>
            <div class="row">
                <div class="carousel slide" id="carousel-413833">

                    <div class="carousel-inner">

                        <div class="col-lg-12">
                            <div id="vizheha" style="width: 95%;height: 250px;margin:0 auto;overflow: hidden">
                                <?php
                                $table_new = "cr_product";
                                $fields_new = "*";
                                $where_new = "id_product>0";
                                $order_new = "id_product DESC";
                                $limit_new = "5";
                                $select_new = $dbclass->select($table_new, $fields_new, $where_new, $order_new, $limit_new);
                                if(is_array($select_new)){
                                    foreach ($select_new as $row_new) {
                                        echo '<a href="product/'.str_replace("#", "-",$row_new["code_product"]).'/'.str_replace(" ", "-", $row_new["name_product_fa"]).'/'.str_replace(" ", "-", $row_new["name_product_en"]).'"><div id="vizhe_1" class="div-vizeh">
                                                <div class="thumbnail view-third chrome-height-vizhe-index">
                                                    <img alt="Bootstrap Thumbnail First" src="upload/240_238/'.$row_new["photo_product"].'">
                                                </div>
                                            </div></a>';
                                    }
                                }
                                ?>
                                <div id="vizhe_1" class="div-vizeh">
                                    <div class="thumbnail view-third chrome-height-vizhe-index">
                                        <img alt="Bootstrap Thumbnail First" src="img/Capture3.JPG">
                                    </div>
                                </div>
                                <div id="vizhe_2" class="div-vizeh chrome-height-vizhe-index">
                                    <div class="thumbnail view-third">
                                        <img alt="Bootstrap Thumbnail First" src="img/Capture3.JPG">
                                    </div>
                                </div>
                                <div id="vizhe_3" class="div-vizeh chrome-height-vizhe-index">
                                    <div class="thumbnail view-third">
                                        <img alt="Bootstrap Thumbnail First" src="img/Capture3.JPG">
                                    </div>
                                </div>
                                <div id="vizhe_4" class="div-vizeh chrome-height-vizhe-index">
                                    <div class="thumbnail view-third">
                                        <img alt="Bootstrap Thumbnail First" src="img/Capture3.JPG">
                                    </div>
                                </div>
                                <div id="vizhe_5" class="div-vizeh chrome-height-vizhe-index">
                                    <div class="thumbnail view-third">
                                        <img alt="Bootstrap Thumbnail First" src="img/Capture3.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a class="left carousel-control" data-slide="prev" style="background: none">
                        <div class="slide-vizhe-left" onclick="vizeh_left(1)"></div>
                    </a>
                    <a class="right carousel-control" data-slide="next" style="background: none">
                        <div class="slide-vizhe-right" onclick="vizeh_right(1)"></div>
                    </a>
                </div>	
            </div>
            <br>

            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail view-third">
                            <img alt="Bootstrap Thumbnail First" src="img/Capture3.JPG">
                            <div class="mask">  
                                <h2>ویژه آقایان</h2>  
                                <div class="caption">
                                    <p>Your Text</p>
                                    <!--<h3>Thumbnail label</h3>-->
                                    <p>تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست 
                                        تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست 
                                        تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست </p>
                                    <p><a class="btn btn-primary" href="#">دیدن محصولات آقایان</a></p>
                                </div>
                                <h2></h2>  
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail view-third">
                            <img alt="Bootstrap Thumbnail First" src="img/Capture1.JPG">
                            <div class="mask">  
                                <h2>ویژه بانوان</h2>  
                                <div class="caption">
                                    <p>Your Text</p>
                                    <!--<h3>Thumbnail label</h3>-->
                                    <p>تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست 
                                        تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست 
                                        تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست </p>
                                    <p><a class="btn btn-primary" href="#">دیدن محصولات بانوان</a></p>
                                </div>
                                <h2></h2>   
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail view-third">
                            <img alt="Bootstrap Thumbnail First" src="img/Capture2.JPG">
                            <div class="mask">  
                                <h2>محصولات ویژه</h2>  
                                <div class="caption">
                                    <p>Your Text</p>
                                    <!--<h3>Thumbnail label</h3>-->
                                    <p>تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست 
                                        تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست 
                                        تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست </p>
                                    <p><a class="btn btn-primary" href="#">دیدن محصولات ویژه</a></p>
                                </div>
                                <h2></h2>  
                            </div>  
                        </div>
                    </div>
                </div>

            </div>
            <br>

            <div class="row">
                <div class="carousel slide" id="carousel-413833">

                    <div class="carousel-inner">

                        <div class="col-lg-12">
                            <div id="vizheha" style="width: 95%;height: 250px;margin:0 auto;overflow: hidden">
                                <?php
                                $table_sell = "cr_product";
                                $fields_sell = "*";
                                $where_sell = "id_product>0";
                                $order_sell = "sell_num DESC";
                                $limit_sell = "5";
                                $select_sell = $dbclass->select($table_sell, $fields_sell, $where_sell, $order_sell, $limit_sell);
                                if(is_array($select_sell)){
                                    foreach ($select_sell as $row_sell) {
                                        echo '<a href="product/'.str_replace("#", "-",$row_sell["code_product"]).'/'.str_replace(" ", "-", $row_sell["name_product_fa"]).'/'.str_replace(" ", "-", $row_sell["name_product_en"]).'"><div id="vizhe_1" class="div-vizeh">
                                                <div class="thumbnail view-third chrome-height-vizhe-index">
                                                    <img alt="Bootstrap Thumbnail First" src="upload/240_238/'.$row_sell["photo_product"].'">
                                                </div>
                                            </div></a>';
                                    }
                                }
                                ?>
                                <div id="vizhe_1" class="div-vizeh">
                                    <div class="thumbnail view-third chrome-height-vizhe-index">
                                        <img alt="Bootstrap Thumbnail First" src="img/Capture3.JPG">
                                    </div>
                                </div>
                                <div id="vizhe_2" class="div-vizeh">
                                    <div class="thumbnail view-third chrome-height-vizhe-index">
                                        <img alt="Bootstrap Thumbnail First" src="img/Capture3.JPG">
                                    </div>
                                </div>
                                <div id="vizhe_3" class="div-vizeh">
                                    <div class="thumbnail view-third chrome-height-vizhe-index">
                                        <img alt="Bootstrap Thumbnail First" src="img/Capture3.JPG">
                                    </div>
                                </div>
                                <div id="vizhe_4" class="div-vizeh">
                                    <div class="thumbnail view-third chrome-height-vizhe-index">
                                        <img alt="Bootstrap Thumbnail First" src="img/Capture3.JPG">
                                    </div>
                                </div>
                                <div id="vizhe_5" class="div-vizeh">
                                    <div class="thumbnail view-third chrome-height-vizhe-index">
                                        <img alt="Bootstrap Thumbnail First" src="img/Capture3.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a class="left carousel-control" data-slide="prev" style="background: none">
                        <div class="slide-vizhe-left" onclick="vizeh_left(1)"></div>
                    </a>
                    <a class="right carousel-control" data-slide="next" style="background: none">
                        <div class="slide-vizhe-right" onclick="vizeh_right(1)"></div>
                    </a>
                </div>	
            </div>
            <br><div class="row hr-black"></div>
            <div class="row moa-akh">
                <div class="col-md-1 float-992-right"></div>
                <div class="col-md-5 float-992-right text-right">
                    <div class="row">
                        <div class="col-md-12"><h2>معرفی</h2></div>
                        <hr><hr>
                        <a href="#"><div class="col-md-12">
                                acbacj dvsvs sdvsvd dsvsv
                                <img src="img/Capture1.JPG" class="img-circle" height="50" width="50"/>
                            </div></a>
                        <a href="#"><div class="col-md-12">
                                acbacj dvsvs sdvsvd dsvsv
                                <img src="img/Capture.JPG" class="img-circle" height="50" width="50"/>
                            </div></a>
                        <a href="#"><div class="col-md-12">
                                acbacj dvsvs sdvsvd dsvsv
                                <img src="img/Capture2.JPG" class="img-circle" height="50" width="50"/>
                            </div></a>
                        <a href="#"><div class="col-md-12">
                                acbacj dvsvs sdvsvd dsvsv
                                <img src="img/Capture3.JPG" class="img-circle" height="50" width="50"/>
                            </div></a>
                    </div>
                </div>
                <div class="col-md-5 float-992-right text-right">
                    <div class="row">
                        <div class="col-md-12"><h2>اخبار</h2></div>
                        <hr><hr>
                        <a href="#"><div class="col-md-12">
                                acbacj dvsvs sdvsvd dsvsv
                                <img src="img/Capture1.JPG" class="img-circle" height="50" width="50"/>
                            </div></a>
                        <a href="#"><div class="col-md-12">
                                acbacj dvsvs sdvsvd dsvsv
                                <img src="img/Capture.JPG" class="img-circle" height="50" width="50"/>
                            </div></a>
                        <a href="#"><div class="col-md-12">
                                acbacj dvsvs sdvsvd dsvsv
                                <img src="img/Capture2.JPG" class="img-circle" height="50" width="50"/>
                            </div></a>
                        <a href="#"><div class="col-md-12">
                                acbacj dvsvs sdvsvd dsvsv
                                <img src="img/Capture3.JPG" class="img-circle" height="50" width="50"/>
                            </div></a>
                    </div>
                </div>
                <div class="col-md-1 float-992-right"></div>
            </div>
            <div class="row hr-black"></div><br>
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
