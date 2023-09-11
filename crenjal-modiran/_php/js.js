/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function insert_product() {
    var code_product = document.getElementById("code_product").value;
    var name_product_fa = document.getElementById("name_product_fa").value;
    var name_product_en = document.getElementById("name_product_en").value;
    var color_product = document.getElementById("color_product").value;
    //var col = color_product.split(",");
    var num_product = document.getElementById("num_product").value;
    var vizhe_product = document.getElementById("vizhe_product").checked;

    var sex_product = document.getElementById("sex_product").value;
    var group_product = document.getElementById("group_product").value;
    var gender_product = document.getElementById("gender_product").value;
    var price_main_product = document.getElementById("price_main_product").value;
    var price_takhfif_product = document.getElementById("price_takhfif_product").value;
    var img_product = document.getElementById('name-file-uploaded').innerHTML;//document.getElementById("img_product").value;
    var detail_product = CKEDITOR.instances.detail_product.getData();//$("#detail_product").val();

    $.ajax({
        url: "_php/_insert-product.php",
        type: 'POST',
        data: {
            code_product: code_product,
            name_product_fa: name_product_fa,
            name_product_en: name_product_en,
            color_product: color_product,
            num_product: num_product,
            vizhe_product: vizhe_product,
            sex_product: sex_product,
            group_product: group_product,
            gender_product: gender_product,
            price_main_product: price_main_product,
            price_takhfif_product: price_takhfif_product,
            img_product: img_product,
            detail_product: detail_product
        },
        success: function (data) {
            if (data != "not") {
                //alert(data);
                $("#appended").empty();
                $("#appended").append(data);
            } else {
                alert("یه خطی اتفاق اوفتایه دباره تلاش کو"+" - "+"کد کالا تکراریه");
            }
        }

    });

}

//////////////////////////
function fileSelected_gallery() {
    var file = document.getElementById('fileToUpload_gallery').files[0];
    if (file) {
        if (file.type === 'image/jpeg' || file.type === 'image/png' || file.type === 'image/gif') {
            var fd = new FormData();
            fd.append("fileToUpload", document.getElementById('fileToUpload_gallery').files[0]);
            var xhr = new XMLHttpRequest();
            xhr.upload.addEventListener("progress", uploadProgress_gallery, false);
            xhr.addEventListener("load", uploadComplete_gallery, false);
            xhr.addEventListener("error", uploadFailed_gallery, false);
            xhr.addEventListener("abort", uploadCanceled_gallery, false);
            xhr.open("POST", "_php/upload-image-one.php");
            xhr.send(fd);
        } else {
            alert("یه عکسی انتخاب کو");
        }
    }
}
function uploadProgress_gallery(evt) {
    if (evt.lengthComputable) {
        var percentComplete = Math.round(evt.loaded * 100 / evt.total);
        document.getElementById('progressNumber_gallery').innerHTML = percentComplete.toString() + '%';
        document.getElementById('prog_gallery').value = percentComplete;
    } else {
        document.getElementById('progressNumber_gallery').innerHTML = 'unable to compute';
    }
}
function uploadComplete_gallery(evt) {
    //alert(evt.target.responseText);
    var code_product=$("#appended").text();
    $("#result-gallery").append('<div class="row" style="height: 100px;border-top:2px solid #A60EAE;border-bottom:2px solid #A60EAE">'+
                                                                '<div class="col-md-4">'+
                                                                 '   <img src="../upload/'+evt.target.responseText+'" id="mg-upload-gallery" height="80" width="80" style="border-radius: 50%" />'+
                                                                '</div>'+
                                                                '<div class="col-md-6">'+
                                                                '    <label class="label label-info" id="name-file-upload-gallery" style="margin-top: 30px;">'+evt.target.responseText+'</label>'+
                                                                '</div>'+
                                                               ' <div class="col-md-2">'+
                                                              '      <input type="button" onclick="insert_gallery_uploded(\''+code_product+'\',\''+evt.target.responseText+'\')" name="'+code_product+'" id="btn-upload-gallery" value="ذخیره عکس" class="btn btn-danger '+code_product+'" style="margin-top: 30px;" />'+
                                                             '   </div>'+
                                                            '</div>');
    /*$("#img-uploded").attr("src", "../upload/" + evt.target.responseText);
    document.getElementById('name-file-uploaded').innerHTML = evt.target.responseText;*/
}
function uploadFailed_gallery(evt) {
    alert("There was an error attempting to upload the file.");
}
function uploadCanceled_gallery(evt) {
    alert("The upload has been canceled by the user or the browser dropped the connection.");
}
function insert_gallery_uploded(code,img){
    $.ajax({
        url: "_php/_insert_gallery.php",
        type: 'POST',
        data: {
            code_product: code,
            img_product: img
        },
        success: function (data) {
            if (data != "not") {
                alert("عکس به گالری اضافه شد"+data);
                //var name=document.getElementsByName(code);
                $("."+code).attr("value","به گالری اضافه گردید");
                $("."+code).attr("disable","true");
                $("."+code).attr("onclick","");
            } else {
                alert("یه خطی اتفاق اوفتایه دباره تلاش کو");
            }
        }

    });
}