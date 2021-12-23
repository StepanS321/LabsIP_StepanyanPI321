<?

header('Content-Type: application/vnd.ms-excel; format=attachment;');
header('Content-Disposition: attachment; filename= Лаба4.xls');
header('Expires: Mon, 18 Jul 1998 01:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

include ("connectBD.php");

?>

<meta http-equiv="content-type" content="text/html; charset=utf-8">

<table>

<tr>

<th>№ п/п</th> 
<th>Марка</th> 
<th>модель</th> 
<th>тип разморозки</th> 
<th>срок гарантии</th> 
<th>название сервисного центра</th> 
<th>адрес</th> 
<th>дата начала ремонта</th> 
<th>дата окончания</th> 
<th>ФИО клиента</th> 
<th>стоимость ремонта</th>
</tr>
<?php 
$zayavka=$mysqli->query("SELECT id_zayavka, data_begin, data_end, FIO, cost, id_service, id_hol FROM zayavka"); 


$count= 0;
$rows="";
while ($row=mysqli_fetch_array($zayavka)) {
	$services = $mysqli->query("SELECT name_service, adress FROM service WHERE id_service =". $row['id_service']);
	$service = mysqli_fetch_array($services);
	$hols = $mysqli->query("SELECT marka, model, type_r, garant FROM holodilnik WHERE id_hol =". $row['id_hol']);
	$hol = mysqli_fetch_array($hols);

	$count++;
	echo "<tr>";
	echo "<td>". $count ."</td>";
	echo "<td>". $hol['marka'] ."</td>";
	echo "<td>". $hol['model'] ."</td>";
	echo "<td>". $hol['type_r'] ."</td>";
	echo "<td>". $hol['garant'] ."</td>";
	echo "<td>". $service['name_service'] ."</td>";
	echo "<td>". $service['adress'] ."</td>";
	echo "<td>". $row['data_begin'] ."</td>";
	echo "<td>". $row['data_end'] ."</td>";
	echo "<td>". $row['FIO'] ."</td>";
	echo "<td>". $row['cost'] ."</td>";
	echo "</tr>";
};
 ?>

	

</table>