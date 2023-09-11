<!DOCTYPE html>
<html>
    <head>
        <title>Magnifying Effect</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <style>
            .zoom-image{height: 100%;width: 100%;text-align: center;position: relative}
            .zoom-image img{width: 400px;height: 400px;}
            .zooming_image_move_mouse{height: 200px;width: 200px;border-radius: 100%;border:4px solid #fff;position: absolute;
                                      top: 0px;left: 0px;display: none;
            background:url("../../upload/1349_790/crenjal_com-05-01-1395-05-09-53-Capture1.JPG") no-repeat}
            </style>
        </head>
        <body>
            <div class="zoom-image">
            <img id="zoom_image_mouse_move" src="../../upload/1349_790/crenjal_com-05-01-1395-05-09-53-Capture1.JPG" onmousemove="mouse_move_zoom()" />
            <div class="zooming_image_move_mouse"></div>
        </div>
        <script src="../../js/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script>
                $(document).ready(function () {

                    $(".zooming_image_move_mouse,#zoom_image_mouse_move").mousemove(function (e) {

                        var offset = $("#zoom_image_mouse_move").offset();
                        var relativeX_1 = (e.pageX - offset.left);
                        var relativeY_1 = (e.pageY - offset.top);

                        var relativeX = (e.pageX - 100);
                        var relativeY = (e.pageY - 100);
                        if (relativeY_1 < 0 || relativeX_1 < 0 || relativeX_1 > 400 || relativeY_1 > 400) {
                            $(".zooming_image_move_mouse").css({"display": "none"});
                        } else {
                            $(".zooming_image_move_mouse").text(relativeX_1 + " - " + relativeY_1);
                            $(".zooming_image_move_mouse").css({display: "block", "top": relativeY + "px", "left": relativeX + "px",
                            "background":"transparent url('../../upload/1349_790/crenjal_com-05-01-1395-05-09-53-Capture1.JPG') scroll "+(relativeX+100)+"px "+(relativeY+100)+"px"});
                        }
                    });
                    $("#zoom_image_mouse_move").mouseleave(function (e) {
                        //$(".zooming_image_move_mouse").css({"display":"none"});
                    });
                });
        </script>
    </body>
</html>
