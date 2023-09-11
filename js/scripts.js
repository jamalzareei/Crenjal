// Empty JS for your own code to be here
$(window).scroll(function () {
    /*if ($(this).scrollTop() > 1) {
     $("#search-form").css({"margin-top": "-1000px"});//.remove();
     $("#sosial").css({"margin-top": "-1000px","position":"absolute"});//.remove();
     //labels delete
     $("#lbl-login").css({"font-size": "0"});
     $("#lbl-register").css({"font-size": "0"});
     $("#lbl-sabad").css({"font-size": "0"});
     ///////////////
     $("#reg-log-buy").removeClass("col-md-5");
     $("#reg-log-buy").addClass("col-md-12");
     $("#sosial-search-reg").removeClass("col-md-12");
     $("#sosial-search-reg").addClass("col-md-3");
     $("#menu-list").removeClass("col-md-12");
     $("#menu-list").addClass("col-md-9");
     $(".ahref").animate({"padding": "10px 20px"}, 10);
     //$(".responsive-menu ul li a").animate({"padding-right": "10px"});
     $("#menus").removeClass("col-md-9");
     $("#menus").addClass("col-md-10");
     $("#logo").removeClass("col-md-3");
     $("#logo").addClass("col-md-2");
     $("#logo").empty();
     $("#logo").append('<img src="img/logo.jpg" class="img-circle" width="50%" height="40"/>');
     //$("#logo").animate({});
     $("#menu-full").css({"padding-top": "0", "position": "fixed", "z-index": "20", "width": "100%"});
     //$("#").animate({});
     $(".menu-navbar").css({"right": "-250px", "width": "155%"});
     } else {
     $("#search-form").css({"margin-top": "0"});//.remove();
     $("#sosial").css({"margin-top": "0","position":"static"});//.remove();
     //labels delete
     $("#lbl-login").css({"font-size": "12px"});
     $("#lbl-register").css({"font-size": "12px"});
     $("#lbl-sabad").css({"font-size": "12px"});
     ///////////////
     $("#reg-log-buy").removeClass("col-md-12");
     $("#reg-log-buy").addClass("col-md-5");
     $("#sosial-search-reg").removeClass("col-md-3");
     $("#sosial-search-reg").addClass("col-md-12");
     $("#menu-list").removeClass("col-md-9");
     $("#menu-list").addClass("col-md-12");
     $(".ahref").css({"padding": "10px 35px"});
     //$(".responsive-menu ul li a").animate({"padding-right": "10px"});
     $("#menus").removeClass("col-md-10");
     $("#menus").addClass("col-md-9");
     $("#logo").removeClass("col-md-2");
     $("#logo").addClass("col-md-3");
     
     $("#logo").empty();
     $("#logo").append('<img src="img/logo.jpg" class="img-circle" width="100%" height="80"/>');
     //$("#logo").animate({});
     $("#menu-full").css({"padding-top": "10px", "position": "static", "z-index": "20", "width": "103%"});
     //$("#").animate({});
     $(".menu-navbar").css({"right": "20px", "width": "130%"});
     }*/
});
function load_div_searcher() {
    $(".load-search").css({"margin-top": "0", "top": "40px"});
    $(".container-fluid").append("<div class='with-full' onclick='unload_div_searcher()'></div>");
}
function unload_div_searcher() {
    $(".load-search").animate({"margin-top": "100px", "top": "-600px"}, 1000);
    $(".with-full").css({"width": "0"});
}
function sliders_on() {
    $(".slide-show-left").css({"opacity": "1", "width": "100%"});
    $(".slide-show-right").css({"opacity": "1", "width": "100%"});
}
function sliders_off() {
    $(".slide-show-left").css({"opacity": "0.1", "width": "50%"});
    $(".slide-show-right").css({"opacity": "0.1", "width": "50%"});
}
function vizeh_left(id) {
    if (id >= 1) {
        var w = id + 5;
        $("#vizheha").append('<div id="vizhe_' + w + '" class="div-vizeh">' +
                '<div class="thumbnail view-third">' +
                '<img alt="Bootstrap Thumbnail First" src="img/Capture3.JPG"/>' +
                '</div>' +
                '</div>');
        //var s = id - 1;
        var z = id + 1;
        //$("#vizhe_" + s).animate({"margin-left": "-250px"});
        $("#vizhe_" + id).animate({"margin-left": "-250px"});
        $(".slide-vizhe-left").attr("onclick", "vizeh_left(" + z + ")");
        $(".slide-vizhe-right").attr("onclick", "vizeh_right(" + z + ")");
    }
}
function vizeh_right(id) {
    if (id >= 2) {
        var w = id + 4;
        //var s = id + 1;
        var z = id - 1;
        $("#vizhe_" + w).remove();
        $("#vizhe_" + z).animate({"margin-left": "0"});
        $(".slide-vizhe-left").attr("onclick", "vizeh_left(" + z + ")");
        $(".slide-vizhe-right").attr("onclick", "vizeh_right(" + z + ")");
    }
}
$(document).ready(function () {
    $("#hadeaghal_ghimat").text(format1(0) + " " + "تومان");
    $("#hadaksar_ghimat").text(format1(1000000) + " " + "تومان");
});
$(".noUi-connect").mousemove(function () {
    var left = $(".noUi-origin:first-child").attr("style");
    left = left.replace("left: ", "");
    left = left.replace("%;", "");
    left = Math.floor(left * 100) * 100;
    $("#hadeaghal_ghimat").text(format1(left) + " " + "تومان");
});
$(".noUi-background").mousemove(function () {
    var right = $(".noUi-origin:last-child").attr("style");
    right = right.replace("left: ", "");
    right = right.replace("%;", "");
    right = Math.floor(right * 100) * 100;
    $("#hadaksar_ghimat").text(format1(right) + " " + "تومان");
});
function format1(n) {
    return n.toFixed(0).replace(/./g, function (c, i, a) {
        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
    });
}
//////////////////////
$(".noUi-connect").mouseup(function () {
    var left = $(".noUi-origin:first-child").attr("style");
    left = left.replace("left: ", "");
    left = left.replace("%;", "");
    left = Math.floor(left * 100) * 100;
    var str = "از " + left + " تومان";
    if (left > 0) {
//if($('#ser_ghimat_min').length)
        $("#ser_ghimat_min").remove();
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_ghimat_min">' +
                '<span class="label label-search"><i class="close-searches" onclick="delete_serch_price_min()">x</i>' +
                str + '</span></div>');
    } else {
        $("#ser_ghimat_min").remove();
    }
    load_products();
});
$(".noUi-background").mouseup(function () {
    var right = $(".noUi-origin:last-child").attr("style");
    right = right.replace("left: ", "");
    right = right.replace("%;", "");
    right = Math.floor(right * 100) * 100;
    var str = "از " + right + " تومان";
    if (right < 1000000) {
        $("#ser_ghimat_max").remove();
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_ghimat_max">' +
                '<span class="label label-search"><i class="close-searches" onclick="delete_serch_price_max()">x</i>' +
                str + '</span></div>');
    } else {
        $("#ser_ghimat_max").remove();
    }
    load_products();
});
////////// load product //////////////
function pager(page) {
    var row = $("#txt-non-pager").val();
    var tedad = $("#tedad-namayesh option:selected").text().trim();
    $.ajax({
        url: '_php/pager.php',
        data: {
            page: page,
            tedad: tedad,
            row: row
        },
        type: 'post',
        success: function (data, textStatus, jqXHR) {
            //load_products();

            $("#load-pager").empty();
            $("#load-pager").append(data);
            $("#load-pager1").empty();
            $("#load-pager1").append(data);
            $(".txt-paging").val(page);
            //alert(row);
        }
    });
    //load_products();
}
function pager_action(page) {
    var row = $("#txt-non-pager").val();
    var tedad = $("#tedad-namayesh option:selected").text().trim();
    $.ajax({
        url: '_php/pager.php',
        data: {
            page: page,
            tedad: tedad,
            row: row
        },
        type: 'post',
        success: function (data, textStatus, jqXHR) {

            $("#load-pager").empty();
            $("#load-pager").append(data);
            $("#load-pager1").empty();
            $("#load-pager1").append(data);
            $(".txt-paging").val(page);
            //alert(row);
            load_products(page);
        }
    });
}
function add_searcher(id, title) {
    var varing = $('#' + id).prop('checked');
    if (varing) {
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_' + id + '">' +
                '<a class="a-search"><span class="label label-search"><i class="close-searches" onclick="delete_search(\'' + id + '\')">x</i>    ' +
                title + '</span></a></div>');
    } else {
        $("#ser_" + id).remove();
    }

    load_products();

    //pager(1);
}

function load_products(id) {

    var left = $(".noUi-origin:first-child").attr("style");
    left = left.replace("left: ", "");
    left = left.replace("%;", "");
    left = Math.floor(left * 100) * 100;
    var url_min_price = "";
    if (left > 0) {
        url_min_price = "/min_" + left + "-price1";
    }
    var right = $(".noUi-origin:last-child").attr("style");
    right = right.replace("left: ", "");
    right = right.replace("%;", "");
    right = Math.floor(right * 100) * 100;

    var url_max_price = "";
    if (right < 1000000) {
        url_max_price = "/max_" + right + "-price2";
    }
    var page = $(".active").attr("name");
    var min_price = left; //"";
    var max_price = right; //"";
    var sex_mr = $('#checkbox-mr').prop('checked');
    var url_sex_mr = "";
    if (sex_mr) {
        url_sex_mr = "/sex1_1-mr";
    } else {
        url_sex_mr = "";
    }
    var sex_mis = $('#checkbox-ms').prop('checked'); //"";
    var url_sex_mis = "";
    if (sex_mis) {
        url_sex_mis = "/sex2_1-mis";
    } else {
        url_sex_mis = "";
    }
    var group_poshak = $('#checkbox-poshak').prop('checked');
    var url_group_poshak = "";
    if (group_poshak) {
        url_group_poshak = "/group1_1-poshak";
    } else {
        url_group_poshak = "";
    }
    var group_dekorative = $('#checkbox-deko').prop('checked');
    var url_group_dekorative = "";
    if (group_dekorative) {
        url_group_dekorative = "/group2_1-dekorative";
    } else {
        url_group_dekorative = "";
    }
    var group_zivaralat = $('#checkbox-zivar').prop('checked');
    var url_group_zivaralat = "";
    if (group_zivaralat) {
        url_group_zivaralat = "/group3_1-zivaralat";
    } else {
        url_group_zivaralat = "";
    }
    var group_kif_kamarband = $('#checkbox-kif_kmrband').prop('checked');
    var url_group_kif_kamarband = "";
    if (group_kif_kamarband) {
        url_group_kif_kamarband = "/group4_1-kif-kamarband";
    } else {
        url_group_kif_kamarband = "";
    }
    var gender_parche = $('#checkbox-parche').prop('checked');
    var url_gender_parche = "";
    if (gender_parche) {
        url_gender_parche = "/gender1_1-parche";
    } else {
        url_gender_parche = "";
    }
    var gender_charm = $('#checkbox-charm').prop('checked');
    var url_gender_charm = "";
    if (gender_charm) {
        url_gender_charm = "/gender2_1-charm";
    } else {
        url_gender_charm = "";
    }
    var gender_mes_bronz = $('#checkbox-ms_brnz').prop('checked');
    var url_gender_mes_bronz = "";
    if (gender_mes_bronz) {
        url_gender_mes_bronz = "/gender3_1-mes-boronz";
    } else {
        url_gender_mes_bronz = "";
    }
    var gender_kashi_seramic = $('#checkbox-kshi_srmk').prop('checked');
    var url_gender_kashi_seramic = "";
    if (gender_kashi_seramic) {
        url_gender_kashi_seramic = "/gender4_1-kashi-seramic";
    } else {
        url_gender_kashi_seramic = "";
    }
    var gender_chob = $('#checkbox-chob').prop('checked');
    var url_gender_chob = "";
    if (gender_chob) {
        url_gender_chob = "/gender5_1-chop";
    } else {
        url_gender_chob = "";
    }
    var noz_seo = $("#noz-seo option:selected").text().trim();
    var search_tarin = $("#serch-tarin option:selected").text().trim();
    var mojod = $('#checkbox-full-product').prop('checked');
    var tedad = $("#tedad-namayesh option:selected").text().trim();
    $.ajax({
        url: "_php/load_product.php",
        type: "post",
        data: {
            page: page,
            min_price: min_price,
            max_price: max_price,
            sex_mr: sex_mr,
            sex_mis: sex_mis,
            group_poshak: group_poshak,
            group_dekorative: group_dekorative,
            group_zivaralat: group_zivaralat,
            group_kif_kamarband: group_kif_kamarband,
            gender_parche: gender_parche,
            gender_charm: gender_charm,
            gender_mes_bronz: gender_mes_bronz,
            gender_kashi_seramic: gender_kashi_seramic,
            gender_chob: gender_chob,
            noz_seo: noz_seo,
            search_tarin: search_tarin,
            mojod: mojod,
            tedad: tedad
        },
        success: function (data, textStatus, jqXHR) {
            $("#loadin-product-ajax").empty();
            $("#loadin-product-ajax").append(data);

            $(".txt-paging").val(id);
            pager(id);
        }
    });
    var url = '\products/#' + url_gender_charm + url_gender_chob + url_gender_kashi_seramic + url_gender_mes_bronz +
            url_gender_parche + url_group_dekorative + url_group_kif_kamarband + url_group_kif_kamarband +
            url_group_poshak + url_group_zivaralat + url_max_price + url_min_price + url_sex_mis + url_sex_mr;
    history.pushState({id: 'SOME ID'}, '', url);

}
function delete_search(id) {
    $('#' + id).removeAttr('checked');
    $("#ser_" + id).remove();
    load_products(1);
}
function delete_serch_price_max() {
    $("#hadaksar_ghimat").text(format1(1000000) + " " + "تومان");
    $("#ser_ghimat_max").remove();
    $(".noUi-origin:last-child").attr("style", "100%");
    load_products(1);
}
function delete_serch_price_min() {
    $("#hadeaghal_ghimat").text(format1(0) + " " + "تومان");
    $("#ser_ghimat_min").remove();
    $(".noUi-origin:first-child").attr("style", "0%");
    load_products(1);
}
function compare_add(code) {
    $.ajax({
        url: "_php/compare.php",
        type: 'POST',
        data: {
            code_product: code
        },
        success: function (data, textStatus, jqXHR) {

            alert(data);
        }
    });
}
function buy_add(code) {
    $.ajax({
        url: "_php/buy_add.php",
        type: 'POST',
        data: {
            code_product: code
        },
        success: function (data, textStatus, jqXHR) {
            if (data == "not") {

            } else if (data > 0) {
                alert("این کالا در سبد شما بود هم اکنون یک کالای دیگر با همین مشخصات اضافه گردید");
            } else {
                var number = $(".num-buys").text();
                number *= 1;
                $(".num-buys").text(number + 1);
                $("#load-body-added").append(data);
                $("#deleted_buy_div").remove();
                alert("این کالا به سبد خرید شما اضافه گردید");
            }
            //alert(data);
        }
    });
}
function load_body_rpoduct() {
    var url = window.location.href;

    if (url.indexOf("min_") > 0) {
        var left = url.match("min_(.*)-price1")[1];
        var str = "از " + left + " تومان";
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_ghimat_max">' +
                '<span class="label label-search"><i class="close-searches" onclick="delete_serch_price_min()">x</i>' +
                str + '</span></div>');
        left /= 10000;
        $(".noUi-origin:last-child").attr("style", left + "%;");
        //alert(left);
    } else {
        //alert("min");
    }

    if (url.indexOf("max_") > 0) {
        var right = url.match("max_(.*)-price2")[1];
        var str = "از " + right + " تومان";
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_ghimat_max">' +
                '<span class="label label-search"><i class="close-searches" onclick="delete_serch_price_max()">x</i>' +
                str + '</span></div>');
        right /= 10000;
        $(".noUi-origin:last-child").attr("style", right + "%;");
    } else {

    }


    if (url.indexOf("sex1_1") > 0) {
        $('#checkbox-mr').prop('checked', 'true');
        //add_searcher("ser_checkbox-mr", "آقایان");
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_checkbox-mr"><a class="a-search"><span class="label label-search"><i class="close-searches" onclick="delete_search(\'checkbox-mr\')">x</i>    آقایان</span></a></div>');
    } else {
        $('#checkbox-mr').removeAttr('checked');
    }
    if (url.indexOf("sex2_1") > 0) {
        $('#checkbox-ms').prop('checked', 'true');
        //add_searcher("ser_checkbox-ms", "بانوان");
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_checkbox-ms"><a class="a-search"><span class="label label-search"><i class="close-searches" onclick="delete_search(\'checkbox-ms\')">x</i>    بانوان</span></a></div>');
    } else {
        $('#checkbox-ms').removeAttr('checked');
    }

    if (url.indexOf("group1_1") > 0) {
        $('#checkbox-poshak').prop('checked', 'true');
        //add_searcher("ser_checkbox-poshak", "پوشاک");
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_checkbox-poshak"><a class="a-search"><span class="label label-search"><i class="close-searches" onclick="delete_search(\'checkbox-poshak\')">x</i>    پوشاک</span></a></div>');
    } else {
        $('#checkbox-poshak').removeAttr('checked');
    }

    if (url.indexOf("group2_1") > 0) {
        $('#checkbox-deko').prop('checked', 'true');
        //add_searcher("ser_checkbox-deko", "دکوراتیو");
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_checkbox-deko"><a class="a-search"><span class="label label-search"><i class="close-searches" onclick="delete_search(\'checkbox-deko\')">x</i>    دکوراتیو</span></a></div>');
    } else {
        $('#checkbox-deko').removeAttr('checked');
    }

    if (url.indexOf("group3_1") > 0) {
        $('#checkbox-zivar').prop('checked', 'true');
        //add_searcher("ser_checkbox-zivar", "زیورآلات");
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_checkbox-zivar"><a class="a-search"><span class="label label-search"><i class="close-searches" onclick="delete_search(\'checkbox-zivar\')">x</i>    زیورآلات</span></a></div>');
    } else {
        $('#checkbox-zivar').removeAttr('checked');
    }

    if (url.indexOf("group4_1") > 0) {
        $('#checkbox-kif_kmrband').prop('checked', 'true');
        //add_searcher("ser_checkbox-kif_kmrband", "کیف و کمربند");
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_checkbox-kif_kmrband"><a class="a-search"><span class="label label-search"><i class="close-searches" onclick="delete_search(\'checkbox-kif_kmrband\')">x</i>    کیف و کمر بند</span></a></div>');
    } else {
        $('#checkbox-kif_kmrband').removeAttr('checked');
    }

    if (url.indexOf("gender1_1") > 0) {
        $('#checkbox-parche').prop('checked', 'true');
        //add_searcher("ser_checkbox-parche", "پارچه");
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_checkbox-parche"><a class="a-search"><span class="label label-search"><i class="close-searches" onclick="delete_search(\'checkbox-parche\')">x</i>    پارچه</span></a></div>');
    } else {
        $('#checkbox-parche').removeAttr('checked');
    }

    if (url.indexOf("gender2_1") > 0) {
        $('#checkbox-charm').prop('checked', 'true');
        //add_searcher("ser_checkbox-charm", "چرم");
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_checkbox-charm"><a class="a-search"><span class="label label-search"><i class="close-searches" onclick="delete_search(\'checkbox-charm\')">x</i>    چرم</span></a></div>');
    } else {
        $('#checkbox-charm').removeAttr('checked');
    }

    if (url.indexOf("gender3_1") > 0) {
        $('#checkbox-ms_brnz').prop('checked', 'true');
        //add_searcher("ser_checkbox-ms_brnz", "مس و برنز");
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_checkbox-ms_brnz"><a class="a-search"><span class="label label-search"><i class="close-searches" onclick="delete_search(\'checkbox-ms_brnz\')">x</i>    مس و برنز</span></a></div>');
    } else {
        $('#checkbox-ms_brnz').removeAttr('checked');
    }
    if (url.indexOf("gender4_1") > 0) {
        $('#checkbox-kshi_srmk').prop('checked', 'true');
        //add_searcher("ser_checkbox-kshi_srmk", "کاشی و سرامیک");
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_checkbox-kshi_srmk"><a class="a-search"><span class="label label-search"><i class="close-searches" onclick="delete_search(\'checkbox-kshi_srmk\')">x</i>    کاشی و سرامیک</span></a></div>');
    } else {
        $('#checkbox-kshi_srmk').removeAttr('checked');
    }
    if (url.indexOf("gender5_1") > 0) {
        $('#checkbox-chob').prop('checked', 'true');
        //add_searcher("ser_checkbox-chob", "چوب");
        $("#searchers").append('<div class="pull-right div-search-auto" id="ser_checkbox-chob"><a class="a-search"><span class="label label-search"><i class="close-searches" onclick="delete_search(\'checkbox-chob\')">x</i>    چوب</span></a></div>');
    } else {
        $('#checkbox-chob').removeAttr('checked');
    }

    pager_action(1);
}
function go_pages() {
    var page = $(".txt-paging").val();
    //alert(page);
    pager_action(page);
}
function delet_buy_row(id_div, id_product) {
    //alert(id_product);
    $.ajax({
        url: "_php/delete_buy.php",
        data: {
            id_product: id_product
        },
        type: 'POST',
        success: function (data, textStatus, jqXHR) {
            alert(data);
            $("#" + id_div).delay(100).fadeOut('slow');
            var number = $(".num-buys").text();
            number *= 1;
            $(".num-buys").text(number - 1);
        }
    });
}
$("#ratinging").click(function (e) {

    var offset = $(this).offset();
    var relativeX = (e.pageX - offset.left);
    var relativeY = (e.pageY - offset.top);

    alert("X: " + relativeX + "  Y: " + relativeY);

});
function hover_rate(id) {
    //$(document).sc

    for (var i = id; i < 6; i++) {
        $("#star-" + i).removeClass("star-on");
        $("#star-" + i).addClass("star-off");
    }
    for (var i = id; i > 0; i--) {
        $("#star-" + i).removeClass("star-off");
        $("#star-" + i).addClass("star-on");
    }

}
function rate_product(code, rate) {
    alert(code + rate);
}
$("#rate-product1").click(function (e) {
    var width=$("#rate-product1").width();
    var code=$("#rate-product1").attr("name");
    var offset = $(this).offset();
    var relativeX = (e.pageX - offset.left);
    var one=width/5;
    var rate=Math.ceil(relativeX/one);
    //var rate=Math.ceil(on);
    //alert(Math.ceil(on)+"- "+code);
    //var relativeY = (e.pageY - offset.top);
    //alert(width +" X: " + relativeX + "  Y: " + relativeY);
    $.ajax({
        url: "_php/rate.php",
        type: 'POST',
        data: {
            code_product:code,
            rate:rate
        },
        success: function (data, textStatus, jqXHR) {
            alert(data);
        }
    });
});
$("#rate-product1").mousemove(function (e){
    var width=$("#rate-product1").width();
    var offset = $(this).offset();
    var relativeX = (e.pageX - offset.left);
    var one=width/5;
    var on=(relativeX/one)*20;
    var size=100/(relativeX/one);
    $("#rate-product1-on").css({"width":on+"%","background-size":size+"%"});
});
function moshabe_left(number,load){
    var appending='<div id="vizhe_1" class="div-vizeh vizhe-pro-one-moshabeh">'+
                    '<div class="thumbnail view-third">'+
                        '<img class="pro-one" alt="Bootstrap Thumbnail First" src="upload/74_74/crenjal_com-11-12-1394-03-42-19-slide04.jpg">'+
                    '</div>'+
                '</div>';
    $(".mahsolat-moshabeh").append(appending);
    $(".mahsolat-moshabeh").animate({"margin-left":"+=-160px"},"1000");
}
function moshabe_right(number,load){
    $(".mahsolat-moshabeh").animate({"margin-left":"+=160px"},"1000");    
}