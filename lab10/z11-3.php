<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$url = "http://www.ngs.ru";
	$www_url = preg_match("/^(http:\/\/www)\.(\w+)\.(\w+)/", $url, $regs);
	if($www_url) {
		foreach($regs as $val) {
			echo $val . "<br>";
		}
	}
	?>
</body>
</html>