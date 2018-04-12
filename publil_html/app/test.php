<?php
var_dump($_POST);
$today = date("F j, Y, g:i a");
$ufname = $_POST['Fname'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$ProjectID = $_POST['ProjectID'];
$Password = $_POST['Password'];
$file = 'sample3.csv';
$tofile = "$ufname;$Phone;$Email;$ProjectID;$Password;$today\n";
$bom = "\xEF\xBB\xBF";
@file_put_contents($file, $bom . $tofile . file_get_contents($file));