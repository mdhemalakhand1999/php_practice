<?php
$arr = ['f'=>'apple', 'm'=>'mango', 'y'=>'banana', 'd'=>'cow', 'd'=>'animal', 'o'=> 'oxford'];
$numbers = [1,2,22,12,33,11,22,32,'13',5];
$offset = array_search(13, $numbers);
// if(in_array(13, $numbers, true)) { // true is for case sensitive
//     echo "13 found";
// }
// if(in_array(13, $numbers)) { // true is for case sensitive
//     echo "13 found";
// }
// echo $offset;
if(key_exists('m', $arr)) {
    echo 'exists';
}
$case_sensitive_sort = ['apple', 'Apple', 'banana', 'Banana', 'pinapple', 'Pinapple'];
// sort($case_sensitive_sort);
// sort($case_sensitive_sort, SORT_FLAG_BASE); // insensitive sort
// var_dump($case_sensitive_sort);
// sort($numbers, SORT_STRING);
// print_r($numbers);
// sort($arr);
// asort($arr);
// rsort($arr);
// ksort($arr); // sort by key

print_r($case_sensitive_sort);