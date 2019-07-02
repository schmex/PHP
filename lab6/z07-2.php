<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$treug =array();
	$kvd = array();
	for($i = 1; $i <= 30; $i++) {
		$treug[] = $i * ($i + 1) / 2;
		$kvd[] = $i * $i;
	}

	$bgColor = "white";
	print "<table border=1>";
	for($i = 1; $i <= 30; $i++) {
		print "<tr>";
		for($j = 1; $j <= 30; $j++) {
			$bgColor = "white";
			$res = $i * $j;
			if(in_array($res, $treug) && in_array($res, $kvd)) {
				$bgColor = "red";
			}elseif(in_array($res, $treug)) {
				$bgColor = "green";
			}elseif(in_array($res, $kvd)) {
				$bgColor = "blue";
			}
			print "<td style='background-color: $bgColor;'>";
			print $res;
			print "</td>";
		}
		print "</tr>";
	}
	print "</table>";

	foreach($treug as $val) {
		print "$val  ";
	}
	print "<br>";
	foreach($kvd as $val) {
		print "$val  ";
	}
	print "<br>";
	?>
</body>
</html>
