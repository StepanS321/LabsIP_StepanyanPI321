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
	 $sql_add = "INSERT INTO holodilnik SET  marka='".$_GET['marka'].
	"', model='".$_GET['model']."', type_r='"
	.$_GET['type_r']."', volume='".$_GET['volume'].
	"', garant='".$_GET['garant']."'";
	 $mysqli->query($sql_add); // Выполнение запроса
	 if (mysqli_affected_rows($mysqli)>0) // если нет ошибок при выполнении запроса
	 { print "<p>Новый холодильник зарегестрирован в базе данных.";
	 print "<p><a href=\"index.php\"> Вернуться к списку
	холодильник </a>"; }
	 else { print "Ошибка сохранения. <a href=\"index.php\">
	Вернуться к списку холодильник </a>"; }
	?>
</body>
</html>