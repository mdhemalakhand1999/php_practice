<?php
namespace Project;
include "c1.php";
include "c2.php";
use \Project\Motorcycles\Bike as Hornet;

$b = new Bike();
echo $b->getName();
echo "<br>";
$h = new Hornet;
echo $h->getName();