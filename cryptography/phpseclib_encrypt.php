<?php
// for install => composer require phpseclib/phpseclib
// ssh-keygen -t rsa -f ./id_rsa

require __DIR__."/vendor/autoload.php";

use phpseclib3\Crypt\RSA;
use phpseclib3\Crypt\PublicKeyLoader;
$message = "This is a secret message";

$rsa = new RSA();
$rsa->loadkey(file_get_contents('./keys/id_rsa.pub'));

$encryptText = $rsa->encrypt($message);
echo $encryptText;