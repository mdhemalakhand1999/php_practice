<?php
// use https://docs.google.com/forms/d/XXX/prefill for get name of google form 
$ch = curl_init('https://docs.google.com/forms/u/0/d/e/1FAIpQLSe-u4bs2veIBiA7ULY_T6MxfOxyQAxdbbjCRO93bxyleH8wbQ/formResponse');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'entry.404461207=John&entry.1903032851=Doe&entry.243209259=john@doe.com&entry.222924372=12344223&entry.1038928611=Narsingdi');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
if(curl_error($ch)) {
	echo curl_error($ch);
} else {
	echo $result;
}