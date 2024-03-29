<?php
function sum($num1, $num2)
{
  return $num1 + $num2;
}
echo sum(5, 5);
echo "<br>";
// можно положить функцию в переменную
$number = sum(4, 2);
echo $number;
echo "<br>";
// можно задать аргументы и параметры прямо в функции и они будут использоваться по умолчанию
// где $num3 и $num4 - это аргументы функции,
// 3 и 5 - это параметры функции:
function sum_2($num3 = 3, $num4 = 5)
{
  return $num3 + $num4;
}
echo sum_2();
echo "<br>";
// анонимные функции
$subrtact = function ($n1, $n2) {
  return $n1 - $n2;
};
echo $subrtact(10, 5);
echo "<br>";
// если функция простая в одну строку, то можно использовать сокращенную запись:
$multyplay = fn ($x, $y) => $x * $y;
echo $multyplay(2, 9);
