<?php
// HMAC
$password = "MY Password";
$secretPassword = "Wo2344@1";
// print_r(hash_hmac_algos());
$hash = hash_hmac('sha384', $password, $secretPassword);
echo $hash;
