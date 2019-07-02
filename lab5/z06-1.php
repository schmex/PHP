<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$bgColor = "green";
	$i = 1;
	print "<table border=1>";
	while($i <= 10) {
		$j = 1;
		print "<tr>";
		while($j <= 10) {
			print "<td style='padding: 5px; "; if($i == $j){print "background-color: $bgColor;";} print "'>";
			print $i * $j;
			print "</td>";
			$j++;
		}
		print "</tr>";
		$i++;
	}
	print "</table>";
	?>
</body>
</html>
