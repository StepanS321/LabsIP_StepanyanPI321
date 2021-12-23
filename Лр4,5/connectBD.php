<?php 
	define ("HOST", "localhost");
	define ("USER", "a0612553_lr45");
	define ("PASS", "mamagoar1");
	define ("DB", "a0612553_lr45"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
	подключиться к серверу");
 ?>