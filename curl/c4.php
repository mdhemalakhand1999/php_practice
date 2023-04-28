<?php
$word = "new";
$endpoint = "https://www.vocabulary.com/dictionary/definition.ajax?search={$word}&lang=en&format=json";
$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result_short = curl_exec($ch);
$short_start = strpos($result_short, '<p class="short">')+17;
$short_end = strpos($result_short, '</p>', $short_start);
echo "<h1>Meaning of {$word}</h1>";
$result_short = substr($result_short, $short_start, ($short_end - $short_start));
echo "<h1>Short Meaning</h1><br/><strong style='line-height: 20px;'>{$result_short}</strong>";


$result_long = curl_exec($ch);
$long_start = strpos($result_long, '<p class="long">')+17;
$long_end = strpos($result_long, '</p>', $long_start);

$result_long = substr($result_long, $long_start, ($long_end - $long_start));
echo "<h1>Long Meaning</h1><br/><strong style='line-height: 20px;'>{$result_long}</strong>";