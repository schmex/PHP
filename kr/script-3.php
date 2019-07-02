<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	// var_dump($_POST);
	$mysqlUser = "p51";
	$mysqlPass = "p51";
	$database = "db_kr";
	$table = "T1";
	$conn = mysqli_connect("localhost", $mysqlUser, $mysqlPass);
	if(!$conn) {
		die("Нет соединения с MySQL");
	}
	mysqli_select_db($conn, $database) or die("Нельзя открыть $database" . mysqli_error($conn));

	$fieldName = $_POST["field_name"];
	// $str = "";
	// foreach ($fieldName as $key => $value) {
	// 	$str .= "$value, ";
	// }
	// echo $str;

	$result = mysqli_query($conn, "SELECT $fieldName[0] FROM $table");
	// $num_rows = mysqli_num_rows($result);
	// echo "В таблице $table содержится $num_rows строк";
	// $num_fields = mysqli_num_fields($result);
	echo "Поле $fieldName[0] содержит следующие значения:";
	$res_fields = mysqli_fetch_fields($result);
	// echo "<pre>";
	// var_dump($res_fields);die();
	echo "<table border=1>";
	echo "<tr>";
	for($i = 0; $i < count($res_fields); $i++) {
		$name = $res_fields[$i]->name;
		echo "<th>$name</th>";
	}
	while($a_row = mysqli_fetch_row($result)) {
		echo "<tr>";
		foreach($a_row as $field) {
			echo "<td>$field</td>";
		}
		echo "</tr>";
	}
	echo "</tr>";
	echo "</table>";	
	// echo "<pre>";
	// var_dump($res);

	mysqli_close($conn);
	?>
</body>
</html>