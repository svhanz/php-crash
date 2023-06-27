<?php
// Цикл For синтаксис
/*
for (initialize; condition; increment){
  code
}
*/
for ($x = 0; $x < 10; $x++) {
  echo $x . "<br>";
}
echo "<br>";
// цикл while(condition){} работает примерно так- делай это {что надо делать}, пока условие в скобках истина, не забывая делать приращение к итерации
$num = 0;
while ($num <= 10) {
  echo "Number " . $num . "<br>";
  $num++;
}
echo "<br>";
// цикл do while отличается тем, что хотя бы один раз будет что-то выполнено, например:
$x = 6;
do {
  echo "number " . $x . "<br>";
  $x++;
} while ($x <= 5);
// выведет number 6
echo "<br>";
// цикл foreach с примерами:
$posts = ["first post", "second post", "third post"];
for ($x = 0; $x < count($posts); $x++) {
  echo $x . " - " . $posts[$x] . "<br>";
}
echo "<br>";
foreach ($posts as $post) {
  echo $post . "<br>";
}
echo "<br>";
// если хотим получить с индексом (применяется ассоциативный массив)
foreach ($posts as $index => $post) {
  echo $index . " - " . $post . "<br>";
}
echo "<br>";
$array_person = [
  "first_name" => "Sergei",
  "last_name" => "Shlegel",
  "e-mail" => "serg@mail.ru"
];
foreach ($array_person as $key => $value) {
  echo "$key - $value <br> ";
}
