<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$mysqlUser = "p51";
	$mysqlPass = "p51";
	$database = "sample";
	$conn = mysqli_connect("localhost", $mysqlUser, $mysqlPass);
	if(!$conn) {
		die("Нет соединения с MySQL");
	}
	mysqli_select_db($conn, $database) or die("Нельзя открыть $database" . mysqli_error($conn));
	$query = "DROP TABLE IF EXISTS notebook";
	$result = mysqli_query($conn, $query) or die("Нельзя удалить таблицу notebook" . mysqli_error($conn));
	$query = "create table notebook(id int NOT NULL AUTO_INCREMENT, PRIMARY KEY(id), name VARCHAR(50), city VARCHAR(50), address VARCHAR(50), birthday date, mail VARCHAR(50))";
	$result = mysqli_query($conn, $query) or die("Нельзя создать таблицу notebook" . mysqli_error($conn));
	mysqli_close($conn);
	echo "Таблица создана";
	?>
</body>
</html>