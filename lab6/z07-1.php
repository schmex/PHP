<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$treug = array();
	$kvd = array();
	for($i = 1; $i <= 10; $i++) {
		$treug[] = $i * ($i + 1) / 2;
		$kvd[] = $i * $i;
	}
	print "treug: ";
	foreach($treug as $val) {
		print "$val  ";
	}
	print "<br>";
	print "kvd: ";
	foreach($kvd as $val) {
		print "$val  ";
	}
	print "<br>";

	$rez = array_merge($treug, $kvd);
	print "merge: ";
	foreach($rez as $val) {
		print "$val  ";
	}
	print "<br>";

	sort($rez);
	print "sort: ";
	foreach($rez as $val) {
		print "$val  ";
	}
	print "<br>";

	array_shift($rez);
	print "shift: ";
	foreach($rez as $val) {
		print "$val  ";
	}
	print "<br>";

	$rez1 = array_unique($rez);
	print "unique: ";
	foreach($rez1 as $val) {
		print "$val  ";
	}
	print "<br>";
	?>
</body>
</html>
