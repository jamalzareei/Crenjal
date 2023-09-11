<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <style>
            @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
            body {
                font-family: 'Open Sans', 'sans-serif';
            }
            .mega-dropdown {
                position: static !important;
            }
            .mega-dropdown-menu {
                padding: 20px 0px;
                width: 100%;
                box-shadow: none;
                -webkit-box-shadow: none;
            }
            .mega-dropdown-menu > li > ul {
                padding: 0;
                margin: 0;
            }
            .mega-dropdown-menu > li > ul > li {
                list-style: none;
            }
            .mega-dropdown-menu > li > ul > li > a {
                display: block;
                color: #222;
                padding: 3px 5px;
            }
            .mega-dropdown-menu > li ul > li > a:hover,
            .mega-dropdown-menu > li ul > li > a:focus {
                text-decoration: none;
            }
            .mega-dropdown-menu .dropdown-header {
                font-size: 18px;
                color: #ff3546;
                padding: 5px 60px 5px 5px;
                line-height: 30px;
            }

            .carousel-control {
                width: 30px;
                height: 30px;
                top: -35px;

            }
            .left.carousel-control {
                right: 30px;
                left: inherit;
            }
            .carousel-control .glyphicon-chevron-left, 
            .carousel-control .glyphicon-chevron-right {
                font-size: 12px;
                background-color: #fff;
                line-height: 30px;
                text-shadow: none;
                color: #333;
                border: 1px solid #ddd;
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <nav title="" data-original-title="" class="navbar navbar-default navbar-static-top zindex-search" role="navigation">
                    <div title="" data-original-title="" class="navbar-header">

                        <button title="" data-original-title="" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span title="" data-original-title="" class="sr-only">Toggle navigation</span><span title="" data-original-title="" class="icon-bar"></span><span title="" data-original-title="" class="icon-bar"></span><span title="" data-original-title="" class="icon-bar"></span>
                        </button> <a title="" data-original-title="" class="navbar-brand" href="#">Crenjal</a>
                    </div>
                    <div title="" data-original-title="" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div title="" data-original-title="" class="responsive-menu">
                            <ul title="" data-original-title="" class="">
                                <li title="" data-original-title="">
                                    <a title="" data-original-title="" href="products/#/group1_1-poshak" class="ahref">پوشاک</a>
                                    <ul title="" data-original-title="" class="menu-navbar">
                                        jamal<br title="" data-original-title="">
                                        پوشاک
                                    </ul>
                                    <div title="" data-original-title="" class="arrow-menu-bar"></div>
                                </li>
                                <li title="" data-original-title="">
                                    <a title="" data-original-title="" href="products/#/group4_1-kif-kamarband" class="ahref">کیف و کمر بند</a>
                                    <ul title="" data-original-title="" class="menu-navbar">
                                        jamal<br title="" data-original-title="">
                                        محصولات برنز و مس
                                    </ul>
                                    <div title="" data-original-title="" class="arrow-menu-bar"></div>
                                </li>
                                <li title="" data-original-title="">
                                    <a title="" data-original-title="" href="products/#/group2_1-dekorative" class="ahref">دکوراتیو</a>
                                    <ul title="" data-original-title="" class="menu-navbar">
                                        jamal<br title="" data-original-title="">
                                        محصولات چوب
                                    </ul>
                                    <div title="" data-original-title="" class="arrow-menu-bar"></div>
                                </li>
                                <li title="" data-original-title="">
                                    <a title="" data-original-title="" href="products/#//group3_1-zivaralat" class="ahref">زیورآلات</a>
                                    <div title="" data-original-title="" class="menu-navbar">

                                        <div title="" data-original-title="" class="row">
                                            <div title="" data-original-title="" class="col-md-4">
                                                <div title="" data-original-title="" class="row">
                                                    <div title="" data-original-title="" class="col-md-12 text-right">
                                                        <a title="" data-original-title="" href="#" style="display: block">jamal</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div title="" data-original-title="" class="col-md-4">
                                                <div title="" data-original-title="" class="row">jamal</div>
                                            </div>
                                            <div title="" data-original-title="" class="col-md-4">

                                            </div>

                                        </div>

                                    </div>
                                    <div title="" data-original-title="" class="arrow-menu-bar"></div>
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
        
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                            $(this).toggleClass('open');
                        }
                );
            });
        </script>
    </body>
</html>
