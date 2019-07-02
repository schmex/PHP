<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$colors = array("white", "aqua", "blue", "yellow", "purple", "red", "lime");
	for($k = 4; $k <= 7; $k++) {
		print "k = $k<br>";
		print "<table border=1>";
		for($i = 1; $i <= 30; $i++) {
			print "<tr>";
			for($j = 1; $j <= 30; $j++) {
				$res = ($i * $j) % $k;
				$bgColor = $colors[$res];
				print "<td style='background-color: $bgColor; width:15px; height:14px;'>";
				print "&nbsp";
				print "</td>";
			}
			print "</tr>";
		}
		print "</table>";
	}
	?>
</body>
</html>
