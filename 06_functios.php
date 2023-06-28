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
