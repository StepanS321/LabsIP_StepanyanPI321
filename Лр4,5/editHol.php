<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Степан Степанян</title>
</head>
<body>
	<?php
	include ("checkSession.php");
 	include ("connectBD.php");
	 $mysqli->query('SET NAMES UTF-8');
	 $rows=$mysqli->query("SELECT marka, model, type_r, volume, garant FROM holodilnik WHERE
	id_hol=".$_GET['id_hol']);
	 while ($st = mysqli_fetch_array($rows)) {
	 $id=$_GET['id_hol'];
	 $marka = $st['marka'];
	 $model = $st['model'];
	 $type_r = $st['type_r'];
	 $volume = $st['volume'];
	 $garant = $st['garant'];
	 }
	print "<form action='save_editHol.php' metod='get'>";
	print "Марка: <input name='marka' size='50' type='text'
	value='".$marka."'>";
	print "<br>Модель: <input name='model' size='20' type='text'
	value='".$model."'>";
	print "<br>Тип разморозки: <input name='type_r' size='20' type='text'
	value='".$type_r."'>";
	print "<br>Внутренний объем: <input name='volume' size='30' type='text'
	value='".$volume."'>";
	print "<br>Сроки гарантии: <input name='garant' value='".$garant."'>";
	print "<input type='hidden' name='id_hol' value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"index.php\"> Вернуться к списку
	холодильников </a>";
	?>
</body>
</html>