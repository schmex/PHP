<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$color = "blue";
	$plusColor = "red";
	print "<table border=1>";
	for($i = 1; $i <= 10; $i++) {
		print "<tr>";
		for($j = 1; $j <= 10; $j++) {
			if($i == 1 && $j == 1) {
				print "<td style='color:$plusColor; padding:5px;'>";
				print "+";
				print "</td>";
				continue;
			}elseif($i == 1) {
				print "<td style='color:$color; padding:5px;'>";
				print $j;
				print "</td>";
				continue;
			}elseif($j == 1) {
				print "<td style='color:$color; padding:5px;'>";
				print $i;
				print "</td>";
				continue;
			}else {
				print "<td style='padding:5px;'>";
			}
			print $i + $j;
			print "</td>";
		}
		print "</tr>";
	}
	print "</table>";
	?>
</body>
</html>
