<?php
// <!-- reduce mane choto kore fela -->
$numbers = [1, 2, 3, 4, 5];
// function sum($oldNumber, $newNumber) {
//     return $oldNumber + $newNumber;
// }
function sum($oldNumber, $newNumber) {
    if($newNumber%2==0) {
        return $oldNumber + $newNumber;
    }
    return $oldNumber;
}
$sum = array_reduce($numbers, 'sum');
echo $sum;
?>