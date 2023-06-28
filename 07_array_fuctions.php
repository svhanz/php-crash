<?php
$arr_fruit = ["apple", "orange", "pear"];
// посмотрим длинну массива
echo count($arr_fruit);
echo "\n";
// теперь проверим наличие в массиве определенного фрукта
// на первом месте что ищем, на втором месте в каком массиве
var_dump(in_array("apple", $arr_fruit)) . "\n";
//echo "\n";

// теперь добавим в массив новый фрукт 
$arr_fruit[] = "grape";
// проверим что у нас в массиве
print_r($arr_fruit) . "\n";
// можно положить в массив кучу нового используя функцию
array_push($arr_fruit, "cherry", "blueberry");
print_r($arr_fruit);
// добавление элемента в начало массива
array_unshift($arr_fruit, "strawberry");
print_r($arr_fruit) . "\n";
// удаление элемантов из массива
array_pop($arr_fruit); // удалит последний элемент, то есть blueberry
print_r($arr_fruit) . "\n";

array_shift($arr_fruit); // удалит самый первый элемент, то есть strawberry
print_r($arr_fruit) . "\n";

unset($arr_fruit[1]); // удаление конкретного элемента, причем вместе с индексом
print_r($arr_fruit) . "\n";

// разделение массива на части
$person_arr = [];
array_push($person_arr, "Vasya", "Petya", "Sasha", "Kolya");
print_r($person_arr);
// разделим массив на две части
$person_chank = array_chunk($person_arr, 2);
print_r($person_chank);

// слияние массивов
$arr1 = [1, 2, 3];
print_r($arr1) . "\n";
$arr2 = [4, 5, 6];
print_r($arr2) . "\n";
// теперь будем соединять два массива
$merge_arr = array_merge($arr1, $arr2);
print_r($merge_arr) . "\n";

// тоже самое сделаем с опертором Splat "..." (три точки)
$arr3 = [...$arr1, ...$arr2];
print_r($arr3) . "\n";
