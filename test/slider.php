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
            .carousel-inner .active.left { left: -16.7%; }
.carousel-inner .next        { left:  16.7%; }
.carousel-inner .prev        { left: -16.7%; }
.carousel-control.left,.carousel-control.right {background-image:none;}
.item:not(.prev) {visibility: visible;}
.item.right:not(.prev) {visibility: hidden;}
.rightest{ visibility: visible;}

        </style>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="container">
    <div class="col-md-12">
        <div class="carousel slide" id="myCarousel">
          <div class="carousel-inner">
                <div class="item active">
                  <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
                  <a href="#"><img src="http://lorempixel.com/200/100/sports" class="img-responsive">1</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
                  <a href="#"><img src="http://lorempixel.com/200/100/cats" class="img-responsive">2</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
                  <a href="#"><img src="http://lorempixel.com/200/100/food" class="img-responsive">3</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
                  <a href="#"><img src="http://lorempixel.com/200/100/city" class="img-responsive">4</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
                  <a href="#"><img src="http://lorempixel.com/200/100/sports" class="img-responsive">5</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
                  <a href="#"><img src="http://lorempixel.com/200/100/cats" class="img-responsive">6</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
                  <a href="#"><img src="http://lorempixel.com/200/100/food" class="img-responsive">7</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
                  <a href="#"><img src="http://lorempixel.com/200/100/city" class="img-responsive">8</a></div>
                </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
    </div>
</div>

        
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script>
            $('#myCarousel').carousel({
  interval: 5000
  , pause: 'hover'
  , wrap: true
});

$('.carousel .item').each(function(){
    var next = $(this);
    var last;
    for (var i=0;i<5;i++) {
        next=next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        
        last=next.children(':first-child').clone().appendTo($(this));
    }
    last.addClass('rightest');
 
});
            </script>
    </body>
</html>
