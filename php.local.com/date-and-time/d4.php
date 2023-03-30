<?php
$d1 = new DateTime('20 May 2007');
$d2 = new DateTime('27 July 2013');
// $diffrence = date_diff($d1, $d2); // diffrence between two date
$diffrence = $d1->diff($d2); //diffrence between two date
echo $diffrence->format('%y Year %m Month %d Days');