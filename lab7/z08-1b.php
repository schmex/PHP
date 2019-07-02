<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$align = $_POST["align"];
	$valign = $_POST["valign"];
	echo $align . "<br>";
	var_dump($valign);
	print "<table border=1>";
	print "<tr>";
	print "<td width=100px height=100px align=$align valign=$valign[0]>";
	print "text";
	print "</td>";
	print "</tr>";
	print "</table>";
	print "<a href='z08-1a.htm'>Назад</a>";
	?>
</body>
</html>