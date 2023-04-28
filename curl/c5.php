<?php
use Sunra\PhpSimple\HtmlDomParser;

$word = "Science";
$endpoint = "https://www.vocabulary.com/dictionary/definition.ajax?search={$word}&lang=en&format=json";
$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$dom = HtmlDomParser::str_get_html( $result );
$short = $dom->getElementByTagName("p.short");
echo "<h1>Short Meaning</h1><br/><strong style='line-height: 20px;'>{$short}</strong>";