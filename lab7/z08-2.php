<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$align = isset($_GET["align"]) ? $_GET["align"] : "left";
	$valign = isset($_GET["valign"]) ? $_GET["valign"][0] : "top";
	print "<table border=1>";
	print "<tr>";
	print "<td width=100px height=100px align=$align valign=$valign>";
	print "text";
	print "</td>";
	print "</tr>";
	print "</table>";
	print "<a href='z08-1a.htm'>Назад</a>";
	?>
	<form action="<?=$_SERVER["PHP_SELF"]?>" method="GET">
		<p>Выберите горизонтальное расположение</p>
		<p><input type="radio" name="align" value="left">слева</p>
		<p><input type="radio" name="align" value="center">по центру</p>
		<p><input type="radio" name="align" value="right">справа</p>
		<p>Выберите вертикальное расположение</p>
		<p><input type="checkbox" name="valign[]" value="top">сверху</p>
		<p><input type="checkbox" name="valign[]" value="middle">посередине</p>
		<p><input type="checkbox" name="valign[]" value="bottom">внизу</p>
		<input type="submit" value="Выполнить">
	</form>
</body>
</html>