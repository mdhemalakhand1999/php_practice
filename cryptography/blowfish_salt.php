<?php
// CRYPT
$message = "This is a secret message";
// $blowfish_salt = "$2y$10$". bin2hex(random_bytes(11));
$blowfish_salt = "$2y$10$". bin2hex(openssl_random_pseudo_bytes(11));

// echo $blowfish_salt;

echo crypt($message, $blowfish_salt);