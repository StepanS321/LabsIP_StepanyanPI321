<?php
function checkMe($max){
    $arr = [];
    $n = 0;
    $result = false;
 
    while(($n + 1) * ($n + 1) <= $max){
        $n++;
        array_push($arr, $n * $n);
    }
    foreach($arr as $val){
        if(in_array(($max - $val), $arr)){
            //echo '[', $val, ',', ($max - $val), "]\n";
            return true;
        }
    }
    return false;
}
$max=rand(0,500);
echo 'max:', $max, ', result:', (checkMe($max))?'true':'false';