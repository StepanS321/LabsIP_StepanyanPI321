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
	 $rows=$mysqli->query("SELECT data_begin, data_end, id_hol, id_service, FIO, cost FROM zayavka WHERE
	id_zayavka=".$_GET['id_zayavka']);
	 $hol=$mysqli->query("SELECT id_hol, marka FROM holodilnik");
	 $serv=$mysqli->query("SELECT id_service, name_service FROM service");
	 while ($st = mysqli_fetch_array($rows)) {
	 $id=$_GET['id_zayavka'];
	 $data_begin = $st['data_begin'];
	 $data_end = $st['data_end'];
	 $id_hol = $st['id_hol'];
	 $id_service = $st['id_service'];
	 $FIO = $st['FIO'];
	 $cost = $st['cost'];
	 }
	print "<form action='save_editZayavka.php' metod='get'>";
	print "Дата начала ремонта: <input name='data_begin' size='50' type='text'
	value='".$data_begin."'>";
	print "Дата конца: <input name='data_end' size='50' type='text'
	value='".$data_end."'>";
	echo "<br> Холодильник :<select name='id_hol'>";
		while ($row = mysqli_fetch_array($hol)) {
			if ($id_hol == $row['id_hol']) {
				echo "<option value='" . $row['id_hol'] ."' selected='selected'>" . $row['marka'] ."</option>";
			} else {echo "<option value='" . $row['id_hol'] ."'>" . $row['marka'] ."</option>";}
		}
		echo "</select>";

	echo "<br>Сервис : <select name='id_service'>";
		while ($row = mysqli_fetch_array($serv)) {
			if ($id_service == $row['id_service']) {
				echo "<option value='" . $row['id_service'] ."' selected='selected'>" . $row['name_service'] ."</option>";
			} else {echo "<option value='" . $row['id_service'] ."'>" . $row['name_service'] ."</option>";}
		}
		echo "</select>";
	print "<br>ФИО клиента: <input name='FIO' value='".$FIO."'>";
	print "<br>Стоимость: <input name='cost' value='".$cost."'>";
	print "<input type='hidden' name='id_zayavka' value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"index.php\"> Вернуться к списку заявок </a>";
	?>
</body>
</html>