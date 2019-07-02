<?php
function vid_structure($conn) {
	foreach($_GET['structure'] as $table) {
		$result = mysqli_query(
			$conn, 
			"DESCRIBE $table"
		);
		echo "<h4>Структура таблицы $table:</h4><br>";
		while($field = mysqli_fetch_object($result)) {
			$props = "";
			foreach($field as $key => $prop) {
				if($key == "Null") {
					$props .= ($prop == "NO") ? "not null " : "";
				} elseif($key == "Key") {
					if($prop == "PRI") {
						$props .= "primary key ";
						// $str = "primary key";
					} elseif($prop == "MUL") {
						// $str = "foreign key";
						$props .= "foreign key ";
					}
				} else {
					$props .= "$prop ";
				}
			}
			echo $props."<br>";
		}
		echo "<pre>";
	}	
}

function vid_content($conn) {
	$rus_name = [];
	foreach($_GET["content"] as $table) {
		echo "<h4>Содержимое таблицы $table:</h4><br>";
		$result = mysqli_query($conn, "SELECT * FROM $table");
		$num_rows = mysqli_num_rows($result);
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
	}	
}

if(isset($_GET['structure'])) {
	vid_structure($conn);
}

if(isset($_GET["content"])) {
	vid_content($conn);
}

?>
<p><a href="z10-1.htm">Возврат к выбору таблицы</a></p>