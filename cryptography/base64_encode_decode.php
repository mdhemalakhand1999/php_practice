<?php
$text = "Hello world. Its me md hemal akhand";
$encoded = base64_encode($text);
echo base64_decode($encoded);