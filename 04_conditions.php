<?php
// $age = 17;
// if ($age >= 18) {
//   echo "you can voite";
// } else {
//   echo "you are young to voite";
// }
$time = date("H");
if ($time < 12) {
  echo "good morning";
} elseif ($time <= 18) {
  echo "good day";
} else {
  echo "good evening";
}
echo "<br>";
$post_arr = ["Привет, ебланы!"];
if (!empty($post_arr)) {
  echo $post_arr[0];
} else {
  echo "Not new post";
}
echo "<br>";
// короткая запись
//звучит как вопрос- массив не пустой? !empty($post_arr)?... если не пустой, то выводи на экран содержание массива с индексом 0.. $post_arr[0]
// иначе (:) выводи запись Not post
echo !empty($post_arr) ? $post_arr[0] : "Not post"; // Привет ебланы!
echo "<br>";
// оператор объединения
echo $post_arr[0] ?? null; // Привет ебланы!
echo "<br>";

echo "***********";
echo "<br>";

// переключатель условий switch
$fav_color = "huy";
switch ($fav_color) {
  case "red":
    echo "Your favorit color is red";
    break;
  case "blue":
    echo "Your favorrit color is blue";
    break;
  default:
    echo "Your don't like apple";
}
