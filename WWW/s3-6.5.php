<html>
<body>
<form action="<?php print $PHP_SELF ?>" method="post">
<p>Предложение: <INPUT type="text" name="sentence" maxlength="40"></p>
<p><input type="submit" name="Viv" value="Вывести"></p>
</form>
<?php
$str = trim($_POST["sentence"]);
$data = explode(" ", $str);
$s=str_word_count($str, 1, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
for ($i=0;$i<$s;$i++){
echo $data[$i]."</br>";
}
?>
</body>
</html>