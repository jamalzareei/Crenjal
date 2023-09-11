<?php
//تعیین فرمت یا اندازه مجاز و سایر پارامترها
if ($_FILES["user-file"]["type"] == "image/jpeg" && $_FILES["user-file"]["size"] < 1000000) {
    //بررسی سایر خطاهای سرور
    if ($_FILES["user-file"]["error"] > 0){
        echo "<div class='server'>خطا: " . $_FILES["user-file"]["error"] . "</div><br />";
        $check_result = 0;
        }
    //بررسی وجود یا عدم وجود فایل با نام مشابه در سرور    
    else{
        if (file_exists("user-upload/" . $_FILES["user-file"]["name"])){
            echo "<div class='server'>این فایل در حال حاضر وجود دارد! <br /><br />".$_FILES["user-file"]["name"]. "</div><br />";
            $check_result = 0;        
            }
        //انتقال و ذخیره فایل در سرور    
        else{          
            move_uploaded_file($_FILES["user-file"]["tmp_name"],"user-upload/" . $_FILES["user-file"]["name"]);
            echo "فایل: " . $_FILES["user-file"]["name"] . "<br />";
            echo "نوع: " . $_FILES["user-file"]["type"] . "<br />";
            echo "اندازه: " . ($_FILES["user-file"]["size"] / 1024) . " Kb<br />";
            echo "دایرکتوری: " . "user-upload/" . $_FILES["user-file"]["name"]. "<br />";
            $check_result = 1;        
            }
    }
}
//خطای تعیین فرمت یا اندازه مجاز و سایر پارامترها
else{
    if($_FILES["user-file"]["size"] > 1000000){
        echo "<div class='server'>حجم فایل خیلی زیاد است!</div>";
    }
    else{
        echo "<div class='server'>فرمت فایل مجاز نیست!</div>";
    }
    $check_result = 0;
}
?>