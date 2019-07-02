<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$userName = $_POST["userName"];
	$ans = $_POST["ans"];
	$otv = ["6","9","4","1","3","2","5","8","7"];
	$cnt = 0;
	for($i = 0; $i < count($otv); $i++) {
		if($ans[$i] == $otv[$i]) {
			$cnt++;
		}
	}

	echo "<p>Имя тестируемого: $userName</p>";
	echo "Оценка: ";
	switch($cnt) {
		case 9:
		echo "великолепно знаете географию";
		break;
		case 8:
		echo "отлично знаете географию";
		break;
		case 7:
		echo "очень хорошо знаете географию";
		break;
		case 6:
		echo "хорошо знаете географию";
		break;
		case 5:
		echo "удовлетворительно знаете географию";
		break;
		case 4:
		echo "терпимо знаете географию";
		break;
		case 3:
		echo "плохо знаете географию";
		break;
		case 2:
		echo "очень плохо знаете географию";
		break;
		default:
		echo "вообще не знаете географию";
	}
	?>
</body>
</html>