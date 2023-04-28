<?php
$arr = array(
  array('fname' => 'John', 'lname' => 'Doe', 'email' => 'john.doe@example.com', 'phone' => '555-1234', 'district' => urlencode('নরসিংদী ')),
  array('fname' => 'Jane', 'lname' => 'Smith', 'email' => 'jane.smith@example.com', 'phone' => '555-5678', 'district' => 'California'),
  array('fname' => 'Bob', 'lname' => 'Johnson', 'email' => 'bob.johnson@example.com', 'phone' => '555-9012', 'district' => 'Texas'),
  array('fname' => 'Samantha', 'lname' => 'Lee', 'email' => 'samantha.lee@example.com', 'phone' => '555-3456', 'district' => 'Florida'),
  array('fname' => 'Michael', 'lname' => 'Garcia', 'email' => 'michael.garcia@example.com', 'phone' => '555-7890', 'district' => 'Illinois'),
  array('fname' => 'Emily', 'lname' => 'Davis', 'email' => 'emily.davis@example.com', 'phone' => '555-2345', 'district' => 'Ohio')
);
// use https://docs.google.com/forms/d/XXX/prefill for get name of google form 

foreach($arr as $ar) {
	$ch = curl_init('https://docs.google.com/forms/u/0/d/e/1FAIpQLSe-u4bs2veIBiA7ULY_T6MxfOxyQAxdbbjCRO93bxyleH8wbQ/formResponse');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($ch, CURLOPT_POSTFIELDS, "entry.404461207={$ar['fname']}&entry.1903032851={$ar['lname']}&entry.243209259={$ar['email']}&entry.222924372={$ar['phone']}&entry.1038928611={$ar['district']}");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	if(curl_error($ch)) {
		echo curl_error($ch);
	} else {
		echo $result;
	}
}
