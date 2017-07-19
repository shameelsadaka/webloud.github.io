<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$fn = 'count.txt';

if (!isset($_SESSION['page_visited_already']))
{
	$file = fopen($fn, "r+");   
	fputs($file,file_get_contents($fn) . "\n".$_SERVER["REMOTE_ADDR"]." connected at ".date("F j, Y, g:i a"));   
	fclose($file);   
    $_SESSION['page_visited_already'] = "y";
}
?>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>myLeader - Election Application by Webloud</title>
<link href="http://webloud.in/styles/font/meera.css" type="text/css" rel="stylesheet">
<link href="http://www.webloud.in/styles/font/meera.css" type="text/css" rel="stylesheet">
	<style type="text/css">
		body{
			margin:0;
 			font:15px/0.9 "Meera";
		}

	</style>
<script type="text/javascript">
function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            obj.innerHTML = current+"+";
            clearInterval(timer);
        }
    }, stepTime);
}

</script>
</head>
<body onload="animateValue('downCount', 3999, parseInt(document.getElementById('downCount').innerHTML), 5000);">
<div class="hdr" style="width:100%;height:500px;background:url(header.png);">
	<a href="download.php" target="_blank">
	<span style="position:absolute;top:140px;left:270px;background:#53C506;display:inline-block;text-align:center;padding:20px 50px;border-radius:2px;cursor:pointer;">
		<span style="font:bold 28px/1 'Meera';color:#FFF;">Download Now</span><br/>
		<span style="font:bold 15px/0.5 'Meera';color:#FFF;opacity:0.6;">VERSION 1 .1</span>
	</span>
	</a>
	<a href="info.html" target="_blank">
		<span style="position:absolute;top:225px;left:235px;background:#EE0000;display:inline-block;text-align:center;padding:8px 50px 4px;border-radius:2px;cursor:pointer;">
			<span style="font:bold 24px/30px 'Meera';color:#FFF;">എങ്ങനെ ഉപയോഗിക്കാം</span><br/>
		</span>
	</a>
</div>
<div style=" width: 100%;background-color: #0098B1;text-align: center;padding: 60px 0 40px;color: white;font: bold 60px/1 'Meera';">
  <span id="downCount" style="display:inline-block;min-width:100px;">4500+</span> Persons Downloaded 
</div>
<div style="width: 100%;background-color: #003942;text-align: center;padding: 20px 0 10px;color: white;font: bold 20px/1 'Meera';">
  Contact Details : myleader@webloud.in or getwebloud@gmail.com
</div>
<center>
       <img src="photoBox2.jpg" style="margin-top:10px;max-width:94%;"  alt="Webloud myleader election photos in different schools"><br>
       
	<img src="photoBoxbw.png"  style="margin-top:-10px;max-width:94%;"><br/><b style="font-size:18px">കേരളത്തിലെ വിവിധ സ്കൂളുകളില്‍ മൈലീഡര്‍ ഉപയോഗിച്ച് തിരഞ്ഞെടുപ്പ് നടത്തുന്നു</b><br/><br/>
	<br/><br/><b>Designed & Developed By <a href="http://www.webloud.in/" target="_blank" style="color:#0095FF;text-decoration:none;">Webloud</a></b><br/><br/>

								<!-- <img src="news.jpg" style="margin-top:10px;" style="max-width:94%;"  alt="Mathrubhumi News"><br><b style="font-size:18px">മാതൃഭൂമിയില്‍ നിന്നും</b><br/><br/> -->
</center>
<!-- Dont Delete Codes After This-- This is Added By Shameel For Analytics -->  	
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68271899-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>