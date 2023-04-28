<?php
$salt = "Err0rP@ssw0Rd342";
$password = "Secret Password";
$hash = md5($password.$salt);
// df02c6d2cc237b4ae8ab2aa04802ea76

$userInput = "Secret Password";

if(md5($userInput.$salt) == $hash) {
	echo 'Password currect';
} else {
	echo 'password incorrect';
}