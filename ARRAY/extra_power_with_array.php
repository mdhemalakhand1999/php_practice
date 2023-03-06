<?php
$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function squreNum($number) {
    printf("Number Of %s is %s \n", $number, $number * $number);
}
function makeCube($number) {
    return $number*$number*$number;
}
function filterNum($num) {
    return $num%2==0;
}
// array_walk($num, 'squreNum'); // continue work with function unless $num variable values end
// $newCubeArr = array_map('makeCube', $num); // make array unless variable end
$newArrFilter = array_filter($num, 'filterNum');
var_dump($newArrFilter);