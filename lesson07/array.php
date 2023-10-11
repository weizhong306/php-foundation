<?php

$a = array(1, 2, 3);
$b = array("burger", 1, "coke");
$c = array(1, 2, 3);
$d = [1, 2, 3];

var_dump($a);
echo "<br/>";
var_dump($b); // 會顯示各欄位的型別
echo "<br/>";
var_dump($a === $c); // true

print_r($b); // 不會顯示型別

// 每欄位會換行，並顯示型別跟欄位長度
echo '<pre>';
var_dump($b);
echo '</pre>';



$food = ["burger", "fries", "coke"];
echo "I like" . $food[0] . ", " . $food[1], " and " . $food[2] . ".";