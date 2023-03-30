<?php
$starttime = microtime(true);
echo factorial(100);
sleep(2);
$endtime = microtime(true);
$executiontime = $endtime - $starttime;
printf("%10.8f", $executiontime);

function factorial($n) {
    $result = 1;
    for($i = 1; $i<$n;$i++) {
        $result *= $i;
    }
    return $result;
}