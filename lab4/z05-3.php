<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$breakfast = "gamburger";
	$breakfast2 = &$breakfast;
	print $breakfast2;
	$breakfast = "tea";
	print $breakfast2;
	?>
</body>
</html>
