<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Степан Степанян</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
	<?php
	//f0592623_proc admin f0592623_proc
	include ("checkSession.php");
	include ("connectBD.php");
	?>
	<h2>Холодильники:</h2>
	<table border="1" >
	
	 <tr id="table1"></tr>
	 <script>
	 	$(document).ready(function(){

		   $(window).on('load', function() {
		   		$.ajax({
		   			url: "add.php",
		   			type: "POST",
		   			data: ({select: "id_hol, marka, model, type_r, volume, garant", from: "holodilnik", zagl: "<tr> <th> id </th><th> Марка </th> <th> Модель </th><th> Тип размарозки </th><th> внутренний объем </th> <th> срок гарантии </th> <th> Редактировать </th> <th> Уничтожить </th> </tr>",file:"Hol"}) ,
		   			dataType: "html",
		   			success: function(data){
		   				$("#table1").parent().html(data);
		   			},
		   		})
		   });

		});

	 </script>
	<?php 
	print "</table>";
	 ?>
	<p> <a href="newHol.php"> Добавить холодильник </a>
		<br>
	<h2>Сервисы: </h2>
	<table border="1">
	<tr id="table2"></tr>
	 <script>
	 	$(document).ready(function(){

		   $(window).on('load', function() {
		   		$.ajax({
		   			url: "add.php",
		   			type: "POST",
		   			data: ({select: "id_service, name_service, adress", from: "service", zagl: "<tr> <th> id </th> <th> Название </th> <th> адрес </th> <th> Редактировать </th> <th> Удалить </th> </tr>",file:"Serv"}) ,
		   			dataType: "html",
		   			success: function(data){
		   				$("#table2").parent().html(data);
		   			},
		   		})
		   });

		});

	 </script>
	<?php
	print "</table>";
	?>
	<p> <a href="newServ.php"> Добавить сервис </a>
		<br>
	<h2>Заявки на ремонт</h2>

	<table border="1">
	
	 <tr id="table3"></tr>
	 <script>
	 	$(document).ready(function(){

		   $(window).on('load', function() {
		   		$.ajax({
		   			url: "add.php",
		   			type: "POST",
		   			data: ({select: "id_zayavka, data_begin, data_end, id_hol, id_service, FIO, cost", from: "zayavka", zagl: "<tr> <th> id </th><th> Дата начала ремонта </th> <th> Дата окончания </th> <th> ID холодильника </th> <th> ID сервисного центра </th> <th> ФИО клиента </th> <th> Стоимость </th> <th> Редактировать </th> <th> Удалить </th></tr>",file:"Zayavka"}) ,
		   			dataType: "html",
		   			success: function(data){
		   				$("#table3").parent().html(data);
		   			},
		   		})
		   });

		});

	 </script>
	<?php
	print "</table>";
	?>
	<p> <a href="newZayavka.php"> Добавить заявком </a>
		<br>
	<a href="gen_pdf.php">Сгенерировать пдф файл</a> <br>
	<a href="gen_xls.php">Сгенерировать xls файл</a>

	<div id="table4"></div>
	 <script>
	 	$(document).ready(function(){

		   $(window).on('load', function() {
		   		$.ajax({
		   			url: "addUser.php",
		   			type: "POST",
		   			data: ({select: "id_user, username, password, type", from: "users"}) ,
		   			dataType: "html",
		   			success: function(data){
		   				$("#table4").html(data);
		   			},
		   		})
		   });

		});

	 </script>
</body>
</html>