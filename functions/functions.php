<?php

function getFactorial(int $n) {
    $num = 1;
    for($i=$n; $i > 1; $i--) {
        $num *= $i;
    }
    return $num;
}
// echo "Factorial  is ". getFactorial(3);

function sum(int $a, int $b, int $c): int {
    return $a+$b+$c;
}
// echo sum(3,2,4);

function sumUnlimited(int ...$numbers): int {
    $sum = 0;
    for($i=1; $i<count($numbers); $i++) {
        $sum += $numbers[$i];
    }
    return $sum;
}
// echo sumUnlimited(1,2,34,2, 3, 44, 2 ,3);
function fibonacci($old, $new, $end) {
    static $start;
    $start = $start ?? 0;
    if($new > $end) {
        return;
    }
    $new++;
    echo $old. ' ';
    $_temp = $new+ $old;
    $old = $new;
    $start = $old + $_temp;
    fibonacci($old, $new, $end);
}

fibonacci(0, 10, 30);