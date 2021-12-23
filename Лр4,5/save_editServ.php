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
	 $zapros="UPDATE service SET name_service='".$_GET['name_service'].
	"', adress='".$_GET['adress']."' WHERE id_service="
	.$_GET['id_service'];
	 $mysqli->query($zapros);
	 if (mysqli_affected_rows($mysqli)>0) {
	 echo 'Все сохранено. <a href="index.php"> Вернуться к списку сервисов </a>'; }
	 else { echo 'Ошибка сохранения. <a href="index.php"> Вернуться к списку севрисов</a> '; }
	?>

</body>
</html>