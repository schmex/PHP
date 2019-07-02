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
	$database = "db_kr";
	$table = "T1";
	$conn = mysqli_connect("localhost", $mysqlUser, $mysqlPass);
	if(!$conn) {
		die("Нет соединения с MySQL");
	}
	mysqli_select_db($conn, $database) or die("Нельзя открыть $database" . mysqli_error($conn));

	$result = mysqli_query($conn, "DESCRIBE $table");
	$tableDesc = mysqli_fetch_all($result);
// echo "<pre>";
// var_dump($tableDesc);
// echo "</pre>";
	echo "<p>Выберите имя столбца таблицы, содержимое которого, Вы хотите вывести</p>";
	echo "<form action='script-3.php' method='POST'>";
	echo "<table>";
	foreach($tableDesc as $field) {
		echo "<tr>";
		echo "<td>$field[0]</td>";
		echo "<td><input type='checkbox' name='field_name[]' value='$field[0]'></td>";
		echo "</tr>";
	}

	echo "</table><br>";
	echo "<input type='submit' value='Показать'>";
	echo "</form>";
	// echo "<pre>";
	// var_dump($res);

	mysqli_close($conn);
	?>
</body>
</html>