<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$fn = 'dcount.txt';
$file = fopen($fn, "r+");   
fputs($file,file_get_contents($fn) . "\n".$_SERVER["REMOTE_ADDR"]." downloaded at ".date("F j, Y, g:i a"));   
fclose($file);   



$filename = "myLeader_election_software_v1.1.zip";
	
	$yourfile = $filename ;

    $file_name = basename($yourfile);

    header("Content-Type: application/zip");
    header("Content-Disposition: attachment; filename=$file_name");
    header("Content-Length: " . filesize($yourfile));

    readfile($yourfile);
    exit;
?>