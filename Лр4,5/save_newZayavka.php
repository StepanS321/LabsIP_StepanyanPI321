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
	 $sql_add = "INSERT INTO zayavka SET data_begin='".$_GET['data_begin'].
	"',data_end='".$_GET['data_end']. "', id_hol='" .$_GET['id_hol']."', id_service='".$_GET['id_service'].
	"', FIO='".$_GET['FIO']."', cost='".$_GET['cost']."'";
	 $mysqli->query($sql_add); // Выполнение запроса
	 if (mysqli_affected_rows($mysqli)>0) // если нет ошибок при выполнении запроса
	 { print "<p>Заявка зарегестрирована в базе данных.";
	 print "<p><a href=\"index.php\"> Вернуться к списку заявок </a>"; }
	 else { print "Ошибка сохранения. <a href=\"index.php\"> Вернуться к списку заявок </a>"; }
	?>
</body>
</html>