<?php
$ch = curl_init('https://images.unsplash.com/photo-1595367864489-d2a4e1663257?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80');

// curl_setopt($ch, CURLOPT_VERBOSE, 1); // FOR DEBUG
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);

// $info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$info = curl_getinfo($ch);
// echo $info;
// print_r($info);

$headers = get_headers('https://images.unsplash.com/photo-1595367864489-d2a4e1663257?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80');
print_r($headers);