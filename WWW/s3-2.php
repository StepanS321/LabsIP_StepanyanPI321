<?
if (is_numeric($_POST["a"]) and is_numeric($_POST["a1"])) {

    } else {
       echo "Введите числа";
       exit();
    }
switch ($_POST["z"]) {
 // смотрим, чему равна переменная $z
 case 1:
 // 1 — это обращение сложение
 $s1= $_POST["a"]+$_POST["a1"];
 break;
 case 2:
 // 2 — это обращение вычесть
 $s1= $_POST["a"]-$_POST["a1"];
 break;
 case 3:
 // 3 — это обращение умножить
 $s1= $_POST["a"]*$_POST["a1"];
 break;
 case 4:
 // 3 — это обращение разделить
 $s1= $_POST["a"]/$_POST["a1"];
 break;
}
 echo "Результат вычислений        ";
echo $s1;
?>
