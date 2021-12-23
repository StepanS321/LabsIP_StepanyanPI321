<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Степан Степанян</title>
</head>
<body>
	<?php include ("checkSession.php"); ?>
	<H2>Добавление Заявки:</H2>
	<form action="save_newZayavka.php" metod="get">
	 Дата начала работ: <input name="data_begin" size="50" type="date">
	 Дата конца: <input name="data_end" size="50" type="date">
	<br>
	Холодильник:
	<?php 
 	include ("connectBD.php");
	 $mysqli->query('SET NAMES UTF-8');
	 $rows=$mysqli->query("SELECT id_hol, marka FROM holodilnik");
	echo "<select name='id_hol'>";
		while ($row = mysqli_fetch_array($rows)) {
			echo "<option value='" . $row['id_hol'] ."'>" . $row['marka'] ."</option>";
		}
		echo "</select>";
		 ?>
	<br>Сервис: 
	<?php 
	 $rows=$mysqli->query("SELECT id_service, name_service FROM service");
	echo "<select name='id_service'>";
		while ($row = mysqli_fetch_array($rows)) {
		    echo "<option value='" . $row['id_service'] ."'>" . $row['name_service'] ."</option>";
		}
		echo "</select>";
		 ?>
	<br>ФИО клиента : <input name="FIO" type="text">
	<br>Стоимость : <input name="cost" type="text">
	<p><input name="add" type="submit" value="Добавить">
	<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p>
	<a href="index.php"> Вернуться к списку заявок </a>
</body>
</html>