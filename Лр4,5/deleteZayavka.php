<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Степан Степанян</title>
</head>
<body>
	<?php
	 include ("connectBD.php");
	 $mysqli->query('SET NAMES UTF-8');
	 $zapros="DELETE FROM zayavka WHERE id_zayavka=" . $_GET['id_zayavka'];
	 $mysqli->query($zapros);
	 header("Location: index.php");
	 exit;
	?>

</body>
</html>