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
	 $zapros="UPDATE holodilnik SET marka='".$_GET['marka'].
	"', model='".$_GET['model']."', type_r='"
	.$_GET['type_r']."', volume='".$_GET['volume'].
	"', garant='".$_GET['garant']."' WHERE id_hol="
	.$_GET['id_hol'];
	 $mysqli->query($zapros);
	 if (mysqli_affected_rows($mysqli)>0) {
	 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
	холодильников </a>'; }
	 else { echo 'Ошибка сохранения. <a href="index.php">
	Вернуться к списку холодильников</a> '; }
	?>

</body>
</html>