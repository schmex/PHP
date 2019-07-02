<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$cust = array("cnum" => 2001, "cname" => "Hoffman", "city" => "London", "snum" => 1001, "rating" => 100);
	foreach($cust as $key => $val) {
		print "$key: $val<br>";
	}
	print "<br>";

	asort($cust);
	foreach($cust as $key => $val) {
		print "$key: $val<br>";
	}
	print "<br>";

	ksort($cust);
	foreach($cust as $key => $val) {
		print "$key: $val<br>";
	}
	print "<br>";

	sort($cust);
	foreach($cust as $key => $val) {
		print "$key: $val<br>";
	}
	print "<br>";
	?>
</body>
</html>
