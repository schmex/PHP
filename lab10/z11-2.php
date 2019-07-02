<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$fileName = "notebook.txt";
	if(file_exists($fileName)) {
		$fd = fopen($fileName, "r");

		$file_array = file($fileName);
		echo "<table border=1>";
		foreach($file_array as $str) {
			echo "<tr>";
			echo "<td style='padding:10px;'>";			
			$str = rtrim($str, "| \n");
			$str = preg_replace("/\|/", "</td><td>", $str);
			$str = preg_replace("/[^\s]+@[^\s]+/", "<a href='mailto:$0'>$0</a>", $str);
			echo $str;
			echo "</td>";
			echo "</tr>";			
		}
		echo "</table><br>";
		fclose($fd);
		$mtime = filemtime($fileName);
		$mtime = date("D d m Y G:i.s", $mtime);
		echo "Дата последней записи: $mtime";
	}
	?>
</body>
</html>