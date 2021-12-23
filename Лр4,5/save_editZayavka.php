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
	 $zapros="UPDATE zayavka SET data_begin='".$_GET['data_begin'].
	"',data_end='".$_GET['data_end']. "', id_hol='" .$_GET['id_hol']."', id_service='".$_GET['id_service'].
	"', FIO='".$_GET['FIO']."', cost='".$_GET['cost']."' WHERE id_zayavka=" .$_GET['id_zayavka'];
	 $mysqli->query($zapros);
	 if (mysqli_affected_rows($mysqli)>0) {
	 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
	заявок </a>'; }
	 else { echo 'Ошибка сохранения. <a href="idnex.php">
	Вернуться к списку заявок</a> '; }
	?>

</body>
</html>