<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$bgColor = "white";
	print "<table border=1>";
	for($i = 1; $i <= 30; $i++) {
		print "<tr>";
		for($j = 1; $j <= 30; $j++) {
			$res = ($i * $j) % 7;
			switch($res) {
				case 0:
				$bgColor = "white";
				break;
				case 1:
				$bgColor = "aqua";
				break;
				case 2:
				$bgColor = "blue";
				break;
				case 3:
				$bgColor = "yellow";
				break;
				case 4:
				$bgColor = "purple";
				break;
				case 5:
				$bgColor = "red";
				break;
				case 6:
				$bgColor = "lime";
				break;
			}
			print "<td style='background-color: $bgColor; width:15px; height:14px;'>";
			print "&nbsp";
			print "</td>";
		}
		print "</tr>";
	}
	print "</table>";
	?>
</body>
</html>
