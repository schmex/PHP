<?php
$user = "p51";
$pass = "p51";
$database = "db_course";
$conn = mysqli_connect("localhost", $user, $pass);	
if(!$conn) {
	$dberror = "Нет соединения с MySQL сервером";
}	
if(!mysqli_select_db($conn, $database)) {
	$dberror = mysqli_error();
}
?>