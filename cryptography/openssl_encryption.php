<?php
// encrypt
$publickey = openssl_get_publickey(file_get_contents('./keys/public.pem'));
$message = "Secret Message";
openssl_public_encrypt($message, $encryptedMessage, $publickey);
echo bin2hex($encryptedMessage). "<br/>";

// decrypt
$privatekey = openssl_get_privatekey(file_get_contents('./keys/private.pem'), "hello");
openssl_private_decrypt($encryptedMessage,$decreptedMessage, $privatekey);
echo $decreptedMessage;