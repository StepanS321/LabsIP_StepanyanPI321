<?php 
	require_once('tcpdf_min/tcpdf.php');
	ob_clean();

	include ("connectBD.php");

	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
// Устанавливаем информацию о документе
$pdf->SetAuthor('Имя автора');
$pdf->SetTitle('Название документа');
// Устанавливаем данные заголовка по умолчанию
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
// Устанавливаем верхний и нижний колонтитулы
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
// Устанавливаем моноширинный шрифт по умолчанию
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
// Устанавливаем отступы
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
// Устанавливаем автоматические разрывы страниц
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//указываем путь к файлу
$font = 'Roboto-Medium.ttf';
// преобразуем шрифт
$fontname = TCPDF_FONTS::addTTFfont($font, 'TrueTypeUnicode', '', 96);
$pdf->SetFont($fontname, '', 14, '', true);
// Добавляем страницу
$pdf->AddPage();

$zayavka=$mysqli->query("SELECT id_zayavka, data_begin, data_end, FIO, cost, id_service, id_hol FROM zayavka"); 


$count= 0;
$rows="";
while ($row=mysqli_fetch_array($zayavka)) {
	$services = $mysqli->query("SELECT name_service, adress FROM service WHERE id_service =". $row['id_service']);
	$service = mysqli_fetch_array($services);
	$hols = $mysqli->query("SELECT marka, model, type_r, garant FROM holodilnik WHERE id_hol =". $row['id_hol']);
	$hol = mysqli_fetch_array($hols);

	$count++;
	$rows = $rows. "<tr>";
	$rows = $rows. "<td>". $count ."</td>";
	$rows = $rows. "<td>". $hol['marka'] ."</td>";
	$rows = $rows. "<td>". $hol['model'] ."</td>";
	$rows = $rows. "<td>". $hol['type_r'] ."</td>";
	$rows = $rows. "<td>". $hol['garant'] ."</td>";
	$rows = $rows. "<td>". $service['name_service'] ."</td>";
	$rows = $rows. "<td>". $service['adress'] ."</td>";
	$rows = $rows. "<td>". date('d-m-Y',strtotime($row['data_begin'] ))."</td>";
	$rows = $rows. "<td>". date('d-m-Y',strtotime($row['data_end'] ))."</td>";
	$rows = $rows. "<td>". $row['FIO'] ."</td>";
	$rows = $rows. "<td>". $row['cost'] ."</td>";
	$rows = $rows. "</tr>";
};

// Устанавливаем текст
$html = "
<h2> Заявки на ремонт </h2>
	<table>
		<tr>
			<td>№ п/п</td> <td>Марка</td> <td>модель</td> <td>тип разморозки</td> <td>срок гарантии</td> <td>название сервисного центра</td> <td>адрес</td> <td>дата начала ремонта</td> <td>дата окончания</td> <td>ФИО клиента</td> <td>стоимость ремонта</td>
		</tr>
	
". $rows ."</table>";
// Выводим текст с помощью writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
// Закрываем и выводим PDF документ
$pdf->Output('document.pdf', 'I');
?>

	
 ?>