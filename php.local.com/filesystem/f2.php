<?php
$entries = opendir(getcwd());
while(false !== ($entry = readdir($entries))) {
	echo $entry. "<br/>";
}