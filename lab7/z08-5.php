<?php
if($_POST["site"] != "") {
	$site = $_POST["site"];
	// echo $site;die();
	header("Location: $site");
	exit;
}else{?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$list_sites = [
		"www.yandex.ru", 
		"www.rambler.ru",
		"www.google.ru", 
		"www.yahoo.ru", 
		"www.altavista.ru"
	];
	?>
	<form action="<?=$_SERVER["PHP_SELF"]?>" method="POST">
		<select name="site" id="">
			<option value="" disabled selected>Поисковые системы</option>
			<?
			$i = 0;
			while($i < count($list_sites)) {
			?>
			<option value="http://<?=$list_sites[$i]?>"><?=$list_sites[$i]?></option>
			<?
			$i++;
			}
			?>
		</select>
		<input type="submit" value="Перейти">
	</form>
</body>
</html>
<?}?>