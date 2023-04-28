<?php
$password = "Secret Password";
$hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);


$userInput = "Secret Password";
if(password_verify($userInput, $hash)) {
	echo "verified";
} else {
	echo "Access denied!";
}