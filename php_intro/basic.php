<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "head.php";


$n1=5;
$n2=7;
echo $n1;
echo "<br>";
echo $n1 + $n2;


function multiply ($x, $y) {
    return 1*8;
}
echo multiply(7, 3);
echo "<br>";

//склеивание
$name= "Anna";
$age= 20;

$women= $name . $age;
echo $women;
echo "<br>"; // <br/> что бы следующий текст вызывался на следующий строке
/*на экране Anna20 
что бы был пробел между словом и числом 
*/
$women= $name . " " . $age;
echo $women;
//на экране Anna 20 
echo "<br>";
$string= "Add text <input type=\"text\">";
echo $string;
echo "<br>";

$x=10;
$y=5;
$z=15;
$bool_1= $x == $z;
echo $bool_1;
echo "<br>";
// логическое НЕТ  знак ! переворвчивает значение если было true то выдает false
$bool_3= !($x == $z);
echo $bool_3;
echo "<br>";
/* логическое ИЛИ  знак || если в одном условии есть true то покажет true 1
если только в двух условиях false то выдает false 1.
*/
$bool_4= $x == $y || $z < $y;
echo $bool_4;
echo "<br>";
/* логическое И знак && если хоть в одном условии есть false то покажет false 0
если  в двух условиях true то выдает true 1.( и то и то должно быть или false или true)
*/
$bool_5= $x == $y && $z < $y;
echo $bool_5;
echo "<br>";
/* взаимоисключающее ИЛИ знак ^  в одном условии должно быть false 
а в двугом условиях true, тогда то выдает true 1.
*/
$bool_6= $x == $y ^ $z > $y;
echo $bool_6;
echo "<br>";

// оператор Switch () case
$x=12;
switch ($x) {
case 7 : echo " Это пепеменная равна 7"; break;
case 12 : echo " Это пепеменная равна 12"; break;
default : echo " Это не известная пепеменная"; 
}
echo "<br>";

// Циклы For While , Do While

for ($i= 0 ;$i < 10; $i++){
    echo "Цикл под номером N $i <br/>";
}
echo "<br>";
for ($i= 100 ;$i >= 80; $i -= 2) {
    if ($i % 5 == 0) continue;
    if ($i <=87) break;
    echo "Цикл под номером N $i <br/>";
}
echo "<br>";

$x = 1;
while ($x <= 10) {
    echo "Итерация под номером N $x <br/>";
    if ($x == 7){
        for ($y = 0; $y < 5; $y += 3) {
            echo "Eще одна итерация $y <br/>";
        }
    }
       
    $x++;   
}

echo "<br>";

$z = 10;
do {
    echo "Операция выполнилась только один раз";
    $z++;
}  
while ($z < 5);
