<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$lang = "ru";
	switch ($lang) {
		case "ru":
		print "русский";
		break;
		case "en":
		print "русский";
		break;
		case "fr":
		print "французский";
		break;
		case "de":
		print "немецкий";
		break;
		default:
		print "язык неизвестен";
	}
	?>
</body>
</html>
