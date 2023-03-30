<?php
echo time();
echo "<br/>";
echo mktime(0,0,0,1,1,2023). '<br/>';
date_default_timezone_set('Asia/Dhaka');
echo mktime(0,0,0,1,1,2023);
echo "<br/>";
echo strtotime('now');
echo "<br/>";
echo strtotime('+2 days 7 weeks 24 hours 86400 seconds'); // aj theke 3 din por time koto thakbe
echo "<br/>";
echo date('H:i:s A', strtotime('13 August 2005 23:15:05'));
echo "<br/>";
echo gmmktime(0,0,0,1,1,2023); // get custom gmt time