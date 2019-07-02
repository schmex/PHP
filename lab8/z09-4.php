<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	function updateDbVals() {
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
		extract($_POST);
		// echo $id." ".$field_name." ".$field_value;
		$result = mysqli_query(
			$conn, 
			"UPDATE $table SET $field_name='$field_value' WHERE id='$id'"
		);
		// $num_rows = mysqli_num_rows($result);
		mysqli_close($conn);
	}

	function writeSelectForm() {
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
		echo "<form action='" . $_SERVER["PHP_SELF"] . "' method='POST'>";
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
		echo "<th>Исправить</th>";
		echo "</tr>";
		while($a_row = mysqli_fetch_row($result)) {
			echo "<tr>";
			foreach($a_row as $field) {
				echo "<td>$field</td>";
			}
			echo "<td><input type='radio' name='id' value='$a_row[0]'></td>";
			echo "</tr>";
		}
		echo "</tr>";
		echo "</table><br>";
		echo "<input type='submit' value='Выбрать'>";
		echo "</form>";	
		mysqli_close($conn);
	}

	function writeChangeForm() {
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
		$id = $_POST["id"];
		// echo $id;
		$result = mysqli_query($conn, "SELECT * FROM $table WHERE id=$id");
		$res_fields = mysqli_fetch_object($result);
		// $res_fields = mysqli_fetch_row($result);
		// var_dump($res_fields);die();
		echo "<form action='" . $_SERVER["PHP_SELF"] . "' method='POST'>";
		echo "<input type='hidden' name='id' value='$id'>";
		echo "<select name='field_name'>";
		foreach($res_fields as $key => $field) {
			if($key == 'id') {
				continue;
			}
			echo "<option value='$key'>";
			echo $field;
			echo "</option>";
		}
		echo "</select> ";
		echo "Введите новове значение: <input type='text' name='field_value'><br>";
		echo "<input type='submit' value='Изменить'>";
		echo "</form>";
		mysqli_close($conn);
	}

	if(isset($_POST["id"]) && !isset($_POST["field_name"])) {
		writeChangeForm();
	} else {
		if(isset($_POST["field_name"]) && isset($_POST["field_value"])) {
			updateDbVals();
		}
		writeSelectForm();
	}
	?>	
</body>
</html>