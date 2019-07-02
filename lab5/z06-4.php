<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	function weekDay($day, $color) {
		global $size;
		print "<p style='color:$color'><font size=$size>$day</font></p>";
	}
	$size = 7;
	weekDay("Понедельник", "black");
	$size = 6;
	weekDay("Втоорник", "grey");
	$size = 5;
	weekDay("Среда", "blue");
	$size = 4;
	weekDay("Четверг", "green");
	$size = 3;
	weekDay("Пятница", "green");
	$size = 2;
	weekDay("Суббота", "purple");
	$size = 1;
	weekDay("Воскресенье", "red");
	?>
</body>
</html>

