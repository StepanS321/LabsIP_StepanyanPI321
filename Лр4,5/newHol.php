<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Степан Степанян</title>
</head>
<body>
	<?php include ("checkSession.php"); ?>
	<H2>Новый холодильник:</H2>
	<form action="save_newHol.php" metod="get">
	 Марка: <input name="marka" size="50" type="text">
	<br>Модель: <input name="model" size="20" type="text">
	<br>Тип разморозки: <input name="type_r" size="20" type="text">
	<br>Внутренний объем: <input name="volume" size="30" type="text">
	<br>Сроки гарантии: <input type="text" name="garant">
	<p><input name="add" type="submit" value="Добавить">
	<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p>
	<a href="index.php"> Вернуться к списку холодильников </a>
</body>
</html>