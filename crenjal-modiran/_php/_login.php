<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$username=htmlspecialchars($_POST[""]);
$username=mysql_real_escape_string($username);
$password=htmlspecialchars($_POST[""]);
$password=mysql_real_escape_string($password);

header("location: ../main.php");