<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Степан Степанян</title>
</head>
<body>
	<?php
	 // Подключение к базе данных:
	include ("checkSession.php");
	include ("connectBD.php");
	 $mysqli->query('SET NAMES UTF-8'); // Тип кодировки
	 // Строка запроса на добавление записи в таблицу:
	 $sql_add = "INSERT INTO service SET name_service='" . $_GET['name_service']
	."', adress='" . $_GET['adress'] . "'";
	 $mysqli->query($sql_add); // Выполнение запроса
	 if (mysqli_affected_rows($mysqli)>0) // если нет ошибок при выполнении запроса
	 { print "<p>Сервис зарегестрирован в базе данных.";
	 print "<p><a href=\"index.php\"> Вернуться к списку сервисов </a>"; }
	 else { print "Ошибка сохранения. <a href=\"index.php\"> Вернуться к списку сервисов </a>"; }
	?>
</body>
</html>