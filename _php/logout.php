<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

setcookie("email", "", time()-3600,"/");
header("location: ".$_SERVER['HTTP_REFERER']);