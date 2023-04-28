<?php
// print_r(openssl_get_cipher_methods());
$method_name = "aes-128-cfb";
$iv_length = openssl_cipher_iv_length($method_name);
$iv = openssl_random_pseudo_bytes($iv_length);

$message = "This is a secret message";
$password = "Secret Password";
$encryptedMessage = openssl_encrypt($message, $method_name, $password, 0, $iv, $tag);
echo $encryptedMessage. "<br/>";

echo openssl_decrypt($encryptedMessage, $method_name, $password, 0, $iv, $tag);