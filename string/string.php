<?php
$name = 'MD Hemal Akhand';

$string1 = 'My name is $name'. '<br>'; // eta te variable kaj korbe na
echo $string1;
$string1 = "My name is $name"; // eta te variable kaj korbe
echo $string1;

$string1 = <<<EOD
<br> my name is {$name}
i'm 23 years old
EOD; // variable kaj korbe
echo $string1;
$string1 = <<<'EOD'
<br> my name is {$name}
i'm 23 years old
EOD; // variable kaj korbe na
echo $string1;