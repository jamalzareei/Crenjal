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
            body { padding-top:30px; }
            .form-control { margin-bottom: 10px; }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
                    <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Sign up!</legend>
                    <form action="#" method="post" class="form" role="form">
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <input class="form-control" name="firstname" placeholder="First Name" type="text"
                                       required autofocus />
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                            </div>
                        </div>
                        <input class="form-control" name="youremail" placeholder="Your Email" type="email" />
                        <input class="form-control" name="reenteremail" placeholder="Re-enter Email" type="email" />
                        <input class="form-control" name="password" placeholder="New Password" type="password" />
                        <label for="">
                            Birth Date</label>
                        <div class="row">
                            <div class="col-xs-4 col-md-4">
                                <select class="form-control">
                                    <option value="Month">Month</option>
                                </select>
                            </div>
                            <div class="col-xs-4 col-md-4">
                                <select class="form-control">
                                    <option value="Day">Day</option>
                                </select>
                            </div>
                            <div class="col-xs-4 col-md-4">
                                <select class="form-control">
                                    <option value="Year">Year</option>
                                </select>
                            </div>
                        </div>
                        <label class="radio-inline">
                            <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                            Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
                            Female
                        </label>
                        <br />
                        <br />
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign up</button>
                    </form>
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

            $('.carousel .item').each(function () {
                var next = $(this);
                var last;
                for (var i = 0; i < 5; i++) {
                    next = next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }

                    last = next.children(':first-child').clone().appendTo($(this));
                }
                last.addClass('rightest');

            });
        </script>
    </body>
</html>
