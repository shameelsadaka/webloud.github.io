<?php
$error_code = 404;
if(isset($_GET['code'])){$error_code = $_GET['code'];}
?>

<html>
<title>Error <?=$error_code?></title>
<body>
	<center>
		<br/><br/>
		<h1>ERROR <?=$error_code?></h1>
		<?php if($error_code == "404") echo "The page requested is not found"; ?><br/>
		<a href="www.webloud.in">Go to Webloud</a>
	</center>
</body>
</html>