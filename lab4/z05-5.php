<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	//$lang = "en";
	if($lang == "ru") {
		print "русский";
	}elseif($lang == "en") {
		print "английский";
	}elseif($lang == "fr") {
		print "французский";
	}elseif($lang == "de") {
		print "немецкий";
	}else {
		print "язык неизвестен";
	}
	?>
</body>
</html>
