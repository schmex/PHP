<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
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
	$num_rows = mysqli_num_rows($result);
	echo "В таблице $table содержится $num_rows строк";
	// $num_fields = mysqli_num_fields($result);
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
	mysqli_close($conn);
	?>
</body>
</html>