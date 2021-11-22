<p> Задача 4 В-5 Выполнил Степанян Степан:
<p>
<?php

function array_fill_rand($limit, $min=false, $max=false)
{
	$limit = (int)$limit;
	$array = array();
	
	if ($min !== false && $max !== false)
	{
		$min = (int)$min;
		$max = (int)$max;
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand($min, $max);
		}
	}
	else
	{
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand();
		}
	}
	
	return $array;
}
$a=0;
$b=0;
$c=0;
$S=rand(1,10);
$m = array_fill_rand($S,0,10); //32
print_r($m);
echo "<-Основной массив<br />";
echo $S." <-Число элементов <br />";
$Sr=round(array_sum($m)/$S,2);
echo $Sr." <-Ср. Арифметическое <br />";
	for($i=0;$i<$S;$i++){ 
if ($m[$i]>$S) {
	$a=$a+1;
} elseif ($m[$i]==$S){
	$b=$b+1;
} else {
	$c=$c+1;
}

}

echo "Чисел больше ".$S." - ".$a."<br />";
echo "Чисел меньше ".$S." - ".$c."<br />";
echo "Чисел равных ".$S." - ".$b."<br />";
?>
<title><?php echo "2.4 Степанян Степан"; ?></title>
