<?php
// $ch = curl_init('http://localhost:3030/curl/hello.php');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost:3030/curl/hello.php');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'secret=noodles');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // for echo
echo curl_exec($ch);