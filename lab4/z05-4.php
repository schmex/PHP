<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	define("NUM_E", 2.71828);
	print "Число e равно " . NUM_E;
	$num_e1 = NUM_E;
	print "\r\n" . gettype($num_e1);
	settype($num_e1, "string");
	print "\r\n" . gettype($num_e1) . " = $num_e1";
	settype($num_e1, "integer");
	print "\r\n" . gettype($num_e1) . " = $num_e1";
	settype($num_e1, "boolean");
	print "\r\n" . gettype($num_e1) . " = $num_e1";
	?>
</body>
</html>
