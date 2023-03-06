<?php
// get random key
$name = ['h' => 'hemal', 'k' => 'kamal', 's' => 'selim'];
$random_key = array_rand($name);
echo $name[$random_key];