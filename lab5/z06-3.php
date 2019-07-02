<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	function ru($color) {
		print "<p style='color:$color;'>Здравствуйте!</p>";
	}
	function en($color) {
		print "<p style='color:$color;'>Hello!</p>";
	}
	function fr($color) {
		print "<p style='color:$color;'>Bonjour!</p>";
	}
	function de($color) {
		print "<p style='color:$color;'>Guten Tag!</p>";
	}
	function lang($language, $color) {
		$language($color);
	}
	lang("en", "green");
	?>
</body>
</html>
