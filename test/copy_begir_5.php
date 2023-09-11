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
            /*
Credits:
https://github.com/marcaube/bootstrap-magnify
            */

            /* for validator */
            a:link {
                text-decoration:none;
            }

            .green, .green a {
                color: #339900;
            }


            body{
                background-color:#111;
                color:white;
            }


            .col-md-12{
                padding: 120px;    
            }

            .mag {
                width:450px;
                margin: 0 auto;
                float: none;
            }

            .mag img {
                max-width: 100%;
            }


            .mag1 {
                width:120px;
                margin: 0 auto;
                float: none;
            }

            .mag1 img {
                max-width: 100%;
            }

            .mag2 {
                width:900px;
                margin: 0 auto;
                float: none;
            }

            .mag2 img {
                max-width: 100%;
            } 

            .magnify {
                position: relative;
                cursor: none
            }

            .magnify-large {
                position: absolute;
                display: none;
                width: 500px;
                height: 500px;

                -webkit-box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.55), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
                -moz-box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.55), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
                box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.55), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);

                -webkit-border-radius: 100%;
                -moz-border-radius: 100%;
                border-radius: 100%
            }
        </style>
    </head>
    <body>
        
        <div class="container">
            

            <div class="row">
                <div class="col-md-12">
                    <div class="mag1">
                        <img data-toggle="magnify" src="../upload/crenjal_com-05-01-1395-05-09-53-Capture1.JPG" class="img-responsive img-rounded center-block" alt="">
                    </div>
                </div> <!--/.cool-md-12-->

                <div class="col-md-12">
                    <div class="mag1">
                        <img data-toggle="magnify" src="../upload/crenjal_com-05-01-1395-05-09-53-Capture1.JPG" class="img-responsive img-rounded center-block" alt="">
                    </div>
                </div> <!--/.cool-md-12-->

                <div class="col-md-12">
                    <div class="mag">
                        <img data-toggle="magnify" src="../img/slide04.jpg" class="img-responsive center-block" alt="">
                    </div>
                </div> <!--/.cool-md-12-->

                <div class="col-md-12">
                    <div class="mag2">
                        <img data-toggle="magnify" src="../upload/crenjal_com-05-01-1395-05-09-53-Capture1.JPG" class="img-responsive center-block" alt="">
                    </div> <!-- /mag -->

                </div> <!--/.cool-md-12-->

            </div><!--/.row-->

        </div> <!-- / .container -->





        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script>
            /*
             Credits:
             https://github.com/marcaube/bootstrap-magnify
             */


            !function ($) {

                "use strict"; // jshint ;_;


                /* MAGNIFY PUBLIC CLASS DEFINITION
                 * =============================== */

                var Magnify = function (element, options) {
                    this.init('magnify', element, options)
                }

                Magnify.prototype = {
                    constructor: Magnify

                    , init: function (type, element, options) {
                        var event = 'mousemove'
                                , eventOut = 'mouseleave';

                        this.type = type
                        this.$element = $(element)
                        this.options = this.getOptions(options)
                        this.nativeWidth = 0
                        this.nativeHeight = 0

                        this.$element.wrap('<div class="magnify" \>');
                        this.$element.parent('.magnify').append('<div class="magnify-large" \>');
                        this.$element.siblings(".magnify-large").css("background", "url('" + this.$element.attr("src") + "') no-repeat");

                        this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
                        this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
                    }

                    , getOptions: function (options) {
                        options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

                        if (options.delay && typeof options.delay == 'number') {
                            options.delay = {
                                show: options.delay
                                , hide: options.delay
                            }
                        }

                        return options
                    }

                    , check: function (e) {
                        var container = $(e.currentTarget);
                        var self = container.children('img');
                        var mag = container.children(".magnify-large");

                        // Get the native dimensions of the image
                        if (!this.nativeWidth && !this.nativeHeight) {
                            var image = new Image();
                            image.src = self.attr("src");

                            this.nativeWidth = image.width;
                            this.nativeHeight = image.height;

                        } else {

                            var magnifyOffset = container.offset();
                            var mx = e.pageX - magnifyOffset.left;
                            var my = e.pageY - magnifyOffset.top;

                            if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
                                mag.fadeIn(100);
                            } else {
                                mag.fadeOut(100);
                            }

                            if (mag.is(":visible"))
                            {
                                var rx = Math.round(mx / container.width() * this.nativeWidth - mag.width() / 2) * -1;
                                var ry = Math.round(my / container.height() * this.nativeHeight - mag.height() / 2) * -1;
                                var bgp = rx + "px " + ry + "px";

                                var px = mx - mag.width() / 2;
                                var py = my - mag.height() / 2;

                                mag.css({left: px, top: py, backgroundPosition: bgp});
                            }
                        }

                    }
                }


                /* MAGNIFY PLUGIN DEFINITION
                 * ========================= */

                $.fn.magnify = function (option) {
                    return this.each(function () {
                        var $this = $(this)
                                , data = $this.data('magnify')
                                , options = typeof option == 'object' && option
                        if (!data)
                            $this.data('tooltip', (data = new Magnify(this, options)))
                        if (typeof option == 'string')
                            data[option]()
                    })
                }

                $.fn.magnify.Constructor = Magnify

                $.fn.magnify.defaults = {
                    delay: 0
                }


                /* MAGNIFY DATA-API
                 * ================ */

                $(window).on('load', function () {
                    $('[data-toggle="magnify"]').each(function () {
                        var $mag = $(this);
                        $mag.magnify()
                    })
                })

            }(window.jQuery);
        </script>
    </body>
</html>
