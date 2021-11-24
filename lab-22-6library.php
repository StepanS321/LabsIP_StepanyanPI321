<?php
$arr=array();
$temp_arr=array();
$r=rand(1,6);
function Zad() {
    echo "Дана квадратная матрица порядка N. Для каждого столбца матрицы вычислить и напечатать<br/>";
    echo " разность между квадратом суммы и суммой квадратов элементов этого столбца.<br/>";
    echo "<br/>";
  }
function Mas() {
global $arr;
global $temp_arr;
global $r;
for($i = 0; $i < $r; $i++) {
    for($j = 0; $j < $r; $j++){
	$l=rand(1,4);
        array_push($temp_arr, $i + $l);
    }
    array_push( $arr, $temp_arr);
    $temp_arr = [];
}
}
function Viv(){
global $arr;
 	echo "Основная матрица:<br/>";
foreach($arr as $items) {
  foreach($items as $item) {
    echo $item.'|';
  }
  echo "<br>";
}
echo "<br>";
}
function Obr(){
global $arr;
global $r;
$peru=0;
$pero=0;
	for($w = 0; $w < $r; $w++){
	if ($w>0){
		$z=pow($pero,2)-$peru;
		echo "Разность".$w.":".$z."<br/>";
		$pero=0;
		$peru=0;
		$z=0;
	}
	for($q = 0; $q < $r; $q++) {
	
		if($q<=$r){
		$pero=$pero+$arr[$q][$w];
		$peru=$peru+pow($arr[$q][$w],2);
		}
		
	}
	}
	}
  echo "<br>";
?>
