<?php
// timing attack
$password = "Secret Password";
$hash = hash("sha1", $password);

$userinput = hash("sha1", $_POST['password']);

if(hash_equals($hash, $userinput)) {
	echo "password matched";
}