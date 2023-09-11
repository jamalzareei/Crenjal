<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="img/favicon.html">

        <title>صفحه اصلی</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}</style></head>

    <body>

        <section id="container" class="">
            <!--header start-->
            <?php include './header.php'; ?>
            <!--header end-->
            <!--sidebar start-->
            <?php include './aside.php'; ?>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <!--state overview start-->



                    تذی یسزذس یزستز سیزسیا زستیز




                </section>
            </section>
            <!--main content end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="js/jquery.sparkline.js" type="text/javascript"></script>
        <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.customSelect.min.js"></script>

        <!--common script for all pages-->
        <script src="js/common-scripts.js"></script><div style="width: 3px; z-index: auto; background: rgb(64, 64, 64) none repeat scroll 0% 0%; cursor: default; position: fixed; top: 0px; left: 1363px; height: 248px; opacity: 0;" class="nicescroll-rails" id="ascrail2000"><div style="position: relative; top: 0px; float: right; width: 3px; height: 119px; background-color: rgb(232, 64, 63); background-clip: padding-box; border-radius: 10px;"></div></div><div style="height: 3px; z-index: auto; background: rgb(64, 64, 64) none repeat scroll 0% 0%; top: 245px; left: 1186px; position: fixed; cursor: default; display: none; width: 177px; opacity: 0;" class="nicescroll-rails" id="ascrail2000-hr"><div style="position: relative; top: 0px; height: 3px; width: 180px; background-color: rgb(232, 64, 63); background-clip: padding-box; border-radius: 10px;"></div></div><div style="width: 6px; z-index: 1000; background: rgb(64, 64, 64) none repeat scroll 0% 0%; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;" class="nicescroll-rails" id="ascrail2001"><div style="position: relative; top: 0px; float: right; width: 6px; height: 32px; background-color: rgb(232, 64, 63); background-clip: padding-box; border-radius: 10px;"></div></div><div style="height: 6px; z-index: 1000; background: rgb(64, 64, 64) none repeat scroll 0% 0%; position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none; opacity: 0;" class="nicescroll-rails" id="ascrail2001-hr"><div style="position: relative; top: 0px; height: 6px; width: 1366px; background-color: rgb(232, 64, 63); background-clip: padding-box; border-radius: 10px;"></div></div>

        <!--script for this page-->
        <script src="js/sparkline-chart.js"></script>
        <script src="js/easy-pie-chart.js"></script>

        <script>

            //owl carousel

            $(document).ready(function () {
                $("#owl-demo").owlCarousel({
                    navigation: true,
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true

                });
            });

            //custom select box

            $(function () {
                $('select.styled').customSelect();
            });

        </script>



    </body>
</html>
