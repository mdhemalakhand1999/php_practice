<?php
// set_time_limit(0);
$ch = curl_init('https://images.unsplash.com/photo-1627899590745-e3120dd8d30c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80');
$filename = fopen('image-2.jpg', 'w');
curl_setopt($ch, CURLOPT_FILE, $filename);
curl_exec($ch);