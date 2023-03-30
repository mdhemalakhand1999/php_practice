<?php
date_default_timezone_set('Asia/Dhaka'); //set time zone
echo date('dS F, Y H:i:s A'); //26th March, 2023 10:45:52 AM
echo "<br/>";
echo date('dS F, Y H:i:s A', time()*24*60*60); //26th March, 2023 10:45:52 AM
echo "<br/>";
echo date('z'); // ei bochor er koto tom din
echo "<br/>";
echo date('t'); // current month er koto din ase
echo "<br/>";