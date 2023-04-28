<?php

$secretPassword = "WOW";
$message = "This is my message";
$hash = bin2hex(mhash(MHASH_SHA512, $message, $secretPassword));
echo $hash;