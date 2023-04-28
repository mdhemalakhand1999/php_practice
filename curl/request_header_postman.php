<?php
$ch = curl_init('https://postman-echo.com/headers');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
	'http-key: value',
	'http-long-key: hello world'
]);

echo curl_exec($ch);