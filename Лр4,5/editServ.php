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
	 $rows=$mysqli->query("SELECT name_service, adress FROM service WHERE
	id_service=".$_GET['id_service']);
	 while ($st = mysqli_fetch_array($rows)) {
	 $id_service=$_GET['id_service'];
	 $name_service = $st['name_service'];
	 $adress = $st['adress'];
	 }
	print "<form action='save_editServ.php' metod='get'>";
	print "Название сервиса: <input name='name_service' size='50' type='text'
	value='".$name_service."'>";
	print "<br>Адресс: <input name='adress' size='20' type='text'
	value='".$adress."'>";
	print "<input type='hidden' name='id_service' value='".$id_service."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"index.php\"> Вернуться к списку сервисов </a>";
	?>
</body>
</html>