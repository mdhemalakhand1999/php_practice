<?php
$number1 = [1,2,33,22,11,22,54,233];
$number2 = [2,33,123,45,22,11,23,43];

$name1 = ['c'=>'hemal', 'h'=>'habib', 'kamal', 'b'=>'badhon', 'd'=>'cawser'];
$name2 = ['f'=>'hemal', 'h'=>'habib', 'robin', 'niloy', 'nipon'];
// $common_number = array_intersect($number1, $number2); // check if value is common
// $common_name = array_intersect($name1, $name2); // check if two name is common
// $common_name = array_intersect_assoc($name1, $name2); // check if two value and key is common
// $uncommon_name = array_diff($name1, $name2); // if name2 value not exists in name1
$uncommon_name = array_diff_assoc($name1, $name2); // if name2 key and value not exists in name1

var_dump($uncommon_name);