<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$fn = 'dcount.txt';
$file = fopen($fn, "r+");   
fputs($file,file_get_contents($fn) . "\n".$_SERVER["REMOTE_ADDR"]." downloaded at ".date("F j, Y, g:i a"));   
fclose($file);   

header("location:myLeader - Election Software v1.1 e.zip");
?>
<meta http-equiv="refresh" content="0; url=http://example.com/" />
The software downloading