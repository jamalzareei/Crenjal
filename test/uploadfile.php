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
    </head>
    <style type="text/css">
        body{
            font-family:Tahoma, Geneva, sans-serif;
            font-size:12px;
            direction:rtl;
        }
        a{
            text-decoration:none;
            color:#06C;
        }
        a:hover{
            color:#666;
        }
        .ok {
            display:block;
            padding:4px;
            border:0px #666 solid;
            color:#090;
            width:300px;
        }
        .error {
            display:block;
            padding:4px;
            border:0px #666 solid;
            color:#C00;
            width:300px;    
        }
        #upload-process{
            z-index:1000;
            visibility:hidden;
        }
        .frame{
            width:300px;
            height:100px;
            border:0px;    
        }
    </style>
    <script type="text/javascript">
    //<![CDATA[
        function upload_start() {
            document.getElementById('upload-process').style.visibility = 'visible';
            return true;
        }

        function upload_end(check_upload) {
            var server_response = '';
            if (check_upload == 1) {
                server_response = '<span class="ok">فایل با موفقیت آپلود شد!</span>';
            } else {
                server_response = '<span class="error">انتقال فایل به سرور انجام نشد!</span>';
            }
            document.getElementById('upload-process').style.visibility = 'hidden';
            document.getElementById('upload-form').innerHTML = server_response;
            return true;
        }
    //]]>
    </script>
    <body>
        <?php
        // put your code here
        ?>
        <form action="php-ajax-upload.php" method="post" enctype="multipart/form-data" 
              target="upload-target" onsubmit="upload_start();">
            <label for="user-file"></label>
            <input type="file" id="user-file" name="user-file" />
            <input type="submit" value="آپلود فایل" />
        </form>
        <div id="upload-process"><img src="loading.gif" height="16" width="16" alt="loading" /> در حال پردازش...</div>
        <div id="upload-form"></div>
        <iframe id="upload-target" name="upload-target" class="frame"></iframe>
    </body>
</html>
