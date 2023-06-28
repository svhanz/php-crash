<?php
$arr_fruit = ["apple", "orange", "pear"];
// посмотрим длинну массива
echo count($arr_fruit);
echo "<br>";
// теперь проверим наличие в массиве определенного фрукта
// на первом месте что ищем, на втором месте в каком массиве
var_dump(in_array("apple", $arr_fruit));
