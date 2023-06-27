<?php
echo "<h2> Этот урок про массивы</h2>";
// простой массив
$array_num = [1, 2, 3, 4];
print_r($array_num);
echo "******\n";
var_dump($array_num);
echo "******\n";
$array_fruit = ["apple", "orange", "peach"];
// выведем на экран orange
echo $array_fruit[1] . "\n";
echo "******\n";
// ассоциативный массив
$array_person = [
  "first_name" => "Sergei",
  "last_name" => "Shlegel",
  "e-mail" => "serg@mail.ru"

];
echo $array_person["first_name"] . "\n";
echo "******\n";
// многомерные массивы
$array_people = [
  [
    "first_name" => "Sergei",
    "last_name" => "Shlegel",
    "email" => "serg@mail.ru"
  ],
  [
    "first_name" => "Alex",
    "last_name" => "Shlegel",
    "email" => "alex@mail.ru"
  ],
  [
    "first_name" => "Max",
    "last_name" => "Shlegel",
    "email" => "max@mail.ru"
  ]
];
print_r($array_people) . "\n";
// попробуем вызвать из второго массива адрес электронной почты Алекса
echo $array_people[1]["email"] . "\n";
echo "******\n";
// теперь достанем имя из третьего массива
echo $array_people[2]["first_name"] . "\n";
// отформатируем в формат json
var_dump(json_encode($array_people));
