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
        <script src="jquery.min.js" type="text/javascript"></script>
        <script src="multiupload.js" type="text/javascript"></script>
        <script type="text/javascript">
            var config = {
// Valid file formats
                support: "image/jpg,image/png,image/bmp,image/jpeg,image/gif",
                form: "demoFiler", // Form ID
                dragArea: "dragAndDropFiles", // Upload Area ID
                uploadUrl: "upload.php" // Server side file url
            };
//Initiate file uploader.
            $(document).ready(function ()
            {
                initMultiUploader(config);
            });
        </script>
        <style>
            .uploadArea{
                border: 1px #843534 dashed;
                min-height:200px;
                text-align: center;
                padding: 0 40px;
                background: #F3F3F3;
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id="dragAndDropFiles" class="uploadArea" placeholder="jamal">
            <h1>Drop Images Here</h1>
        </div>
        <form name="demoFiler" id="demoFiler" enctype="multipart/form-data">
            <input type="file" name="multiUpload" id="multiUpload" multiple />
            <input type="submit" name="submitHandler" id="submitHandler" value="Upload" />
        </form>
        <div class="progressBar">
            <div class="status"></div>
        </div>
    </body>
</html>
