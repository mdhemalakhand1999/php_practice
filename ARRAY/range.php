<?php
// range moloto condition er upor base kore array toiri kore
$numbers = range(1, 12, 2); // start, end, step
print_r($numbers);

foreach(range(1, 12, 2) as $num) {
    echo $num . ' ' ;
}