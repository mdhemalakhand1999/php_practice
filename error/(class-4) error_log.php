<?php
echo ini_get("error_log");
error_log("This is an error message 2 hemal");
$headers = "From: hemalrika@gmail.com";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\n";
// error_log("This is an error message", 1, "hemalrika@gmail.com", $headers);
$date = date("Y:m:d H:j:s;");
error_log("\n{$date}Log in a new file\n", 3, 'C:\xampp\php\logs\custom-err.txt'); // 3 for pass data into new file