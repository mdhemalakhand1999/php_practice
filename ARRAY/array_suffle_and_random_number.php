<?php
$numbers = range(55, 70);
$rand_num = mt_rand(0, 15);
if($numbers[$rand_num] % 2 == 0) {
    echo "Head";
} else {
    echo "Tail";
}
shuffle($numbers); // shuffle moloto total array er value ke random korbe (main array ke modify kore felbe)
$randomNumber = $numbers;
print_r($randomNumber);