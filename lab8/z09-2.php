<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	function addToDatabase($name, $mail, &$dberror, $city="", $address="", $birthday="") {
		$user = "p51";
		$pass = "p51";
		$database = "sample";
		$table = "notebook";
		$conn = mysqli_connect("localhost", $user, $pass);
		if(!$conn) {
			$dberror = "Нет соединения с MySQL сервером";
			return false;
		}
		if(!mysqli_select_db($conn, $database)) {
			$dberror = mysqli_error();
			return false;
		}
		$query = "INSERT INTO $table(name, city, address, birthday, mail) VALUES ('$name', '$city', '$address', '$birthday', '$mail')";
		if(!mysqli_query($conn, $query)) {
			$dberror = mysqli_error();
			return false;
		}
		mysqli_close($conn);
		return true;
	}

	function writeForm() {?>
		<p><b>Записная книжка</b></p>
		<form action="<?=$_SERVER["PHP_SELF"]?>" method="POST">
			<p>
				Введите фамилию и имя 
				<input type="text" name="name">
			</p>
			<p>
				Введите город 
				<input type="text" name="city">
			</p>
			<p>
				Введите адрес 
				<input type="text" name="address">
			</p>
			<p>
				Введите дату рождения в формате ГГГГ-ММ-ДД
				<input type="date" name="birthday">
			</p>
			<p>
				Введите e-mail
				<input type="email" name="mail">
			</p>
			<input type="submit" value="Записать!">
		</form>
	<?}
	// foreach($_POST as $key => $value) {
	// 	$$key = $value;
	// }

	extract($_POST);

	if(isset($name) && !empty($name) && isset($mail) && !empty($mail)) {
		$dberror = "";
		$res = addToDatabase($name, $mail, $dberror, $city, $address, $birthday);
		if(!$res) {
			echo "Ошибка: $dberror";
		}else{
			echo "Спасибо";
		}
	}else{
		writeForm();
	}
/*
	$mysqlUser = "p51";
	$mysqlPass = "p51";
	$database = "sample";
	$conn = mysqli_connect("localhost", $mysqlUser, $mysqlPass);
	if(!$conn) {
		die("Нет соединения с MySQL");
	}
	mysqli_select_db($conn, $database) or die("Нельзя открыть $database");
	$query = "DROP TABLE IF EXISTS notebook";
	$result = mysqli_query($conn, $query) or die("Нельзя удалить таблицу notebook");
	$query = "create table notebook(id int NOT NULL AUTO_INCREMENT, PRIMARY KEY(id), name VARCHAR(50), city VARCHAR(50), address VARCHAR(50), birthday date, mail VARCHAR(20))";
	$result = mysqli_query($conn, $query) or die("Нельзя создать таблицу notebook");
	mysqli_close($conn);
	echo "Таблица создана";
*/
	?>
</body>
</html>