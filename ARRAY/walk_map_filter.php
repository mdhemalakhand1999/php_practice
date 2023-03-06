<?php
$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$name = ['hemal', 'habib', 'hira', 'sanjida', 'samiul', 'saidul'];
function squreNum($number) {
    printf("Number Of %s is %s \n", $number, $number * $number);
}
function makeCube($number) {
    return $number*$number*$number;
}
function filterNum($num) {
    return $num%2==0;
}
function filterName($name) {
    return $name[0] == 'h';
}
// array_walk($num, 'squreNum'); // continue work with function unless $num variable values end
// $newCubeArr = array_map('makeCube', $num); // make array unless variable end
// $newArrFilter = array_filter($num, 'filterNum');
$filterName = array_filter($name, 'filterName');
var_dump($filterName);