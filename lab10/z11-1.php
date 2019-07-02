<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$fileName = "notebook.txt";
	if(!file_exists($fileName)) {
		touch($fileName);
	}

	$fd = fopen($fileName, "a");

	$user = "p51";
	$pass = "p51";
	$database = "sample";
	$table = "notebook";
	$conn = mysqli_connect("localhost", $user, $pass);	
	if(!$conn) {
		$dberror = "Нет соединения с MySQL сервером";
	}	
	if(!mysqli_select_db($conn, $database)) {
		$dberror = mysqli_error();
	}

	$result = mysqli_query($conn, "SELECT * FROM $table");
	while($a_row = mysqli_fetch_row($result)) {
		$str = "";
		foreach($a_row as $field) {
			$str .= preg_replace("/([0-9]{4})-([0-9]{2})-([0-9]{2})/", "$3-$2-$1", $field) . " | ";
			// echo $str . " | ";
		}
		fwrite($fd, $str . "\n");
		echo $str . "<br>";
	}
	mysqli_close($conn);
	fclose($fd);
	?>
</body>
</html>