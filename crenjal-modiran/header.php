<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<header class="header white-bg">
    <div class="sidebar-toggle-box">
        <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
    </div>
    <!--logo start-->
    <a href="#" class="logo">کرن<span>جال</span></a>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
            <!-- settings start -->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="icon-tasks"></i>
                    <span class="badge bg-success">3</span>
                </a>
                <ul class="dropdown-menu extended tasks-bar">
                    <div class="notify-arrow notify-arrow-green"></div>
                    <li>
                        <p class="green">ایمیل های خوانده نشده</p>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info">
                                <div class="desc">info@crenjal.com</div>
                                <div class="percent">مهم</div>
                            </div>
                            <div class="progress progress-striped">خرید گروهی
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info">
                                <div class="desc">info@crenjal.ir</div>
                                <div class="percent">60%</div>
                            </div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info">
                                <div class="desc">برنامه نویسی  IPhone</div>
                                <div class="percent">87%</div>
                            </div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                    <span class="sr-only">87% Complete</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="external">
                        <a href="#">ادامه ایمیلها</a>
                    </li>
                </ul>
            </li>
            <!-- settings end -->
            <!-- inbox dropdown start-->
            <li id="header_inbox_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="icon-envelope-alt"></i>
                    <span class="badge bg-important">3</span>
                </a>
                <ul class="dropdown-menu extended inbox">
                    <div class="notify-arrow notify-arrow-red"></div>
                    <li>
                        <p class="red">کامنت های مشاهده نشده</p>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="img/avatar-mini.jpg"></span>
                            <span class="subject">
                                <span class="from">سجاد باقرزاده</span>
                                <span class="time">26/7/70</span>
                            </span>
                            <span class="message">
                                سلام،متن پیام نمایشی جهت تست
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="img/avatar-mini2.jpg"></span>
                            <span class="subject">
                                <span class="from">ایمان مدائنی</span>
                                <span class="time">1/1/95</span>
                            </span>
                            <span class="message">
                                سلام، چطوری شما؟
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="img/avatar-mini3.jpg"></span>
                            <span class="subject">
                                <span class="from">صبا ذاکر</span>
                                <span class="time">2/1/95 ساعت 1:30</span>
                            </span>
                            <span class="message">
                                چه پنل مدیریتی فوق العاده ایی
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">نمایش تمامی کامنت ها</a>
                    </li>
                </ul>
            </li>
            <!-- inbox dropdown end -->
            <!-- notification dropdown start-->
            <li id="header_notification_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                    <i class="icon-bell-alt"></i>
                    <span class="badge bg-warning">7</span>
                </a>
                <ul class="dropdown-menu extended notification">
                    <div class="notify-arrow notify-arrow-yellow"></div>
                    <li>
                        <p class="yellow">خریدهای تایید شده کاربران</p>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-danger"><i class="icon-bolt"></i></span>
                            مانتو سنتی
                            <span class="small italic pull-left">2/2/95</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-warning"><i class="icon-bell"></i></span>
                            ......
                            <span class="small italic pull-left">1 ساعت قبل</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-danger"><i class="icon-bolt"></i></span>
                            کفش
                            <span class="small italic pull-left">4 ساعت قبل</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-success"><i class="icon-plus"></i></span>
                            کیف
                            <span class="small italic pull-left">همین حالا</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-info"><i class="icon-bullhorn"></i></span>
                            کاشی 1
                            <span class="small italic pull-left">10 دقیقه قبل</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">نمایش تمامی سلدخرید</a>
                    </li>
                </ul>
            </li>
            <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
    </div>
    <div class="top-nav ">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input class="form-control search" placeholder="Search" type="text">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="img/avatar-mini.jpg">
                    <span class="username">جمال زارعی</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li><a href="#"><i class=" icon-suitcase"></i>پروفایل</a></li>
                    <li><a href="#"><i class="icon-cog"></i> تنظیمات</a></li>
                    <li><a href="#"><i class="icon-bell-alt"></i> اعلام ها</a></li>
                    <li><a href="login.php"><i class="icon-key"></i> خروج</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
</header>