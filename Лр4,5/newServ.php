<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Степан Степанян</title>
</head>
<body>
	<?php include ("checkSession.php"); ?>
	<H2>новый сервис:</H2>
	<form action="save_newServ.php" metod="get">
	 Название сервиса: <input name="name_service" size="50" type="text">
	<br>адрес: <input name="adress" size="20" type="text">
	<p><input name="add" type="submit" value="Добавить">
	<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p>
	<a href="index.php"> Вернуться к списку сервисов </a>
</body>
</html>