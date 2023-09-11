<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if($_SERVER['REQUEST_METHOD'] == "POST")
{
if(move_uploaded_file($_FILES['file']['tmp_name'], "upload/".$_FILES['file']['name']))
{
echo($_POST['index']); // to validate
}
exit;
}