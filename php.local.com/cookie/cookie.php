<?php
// setcookie('username', 'hulk', time() + 40); // set cookie
// setcookie('username', 'hulk', 1); // delete cookie
// setcookie('username', 'hulk', time() + 300, '/cookie/my'); // define path
// echo $_COOKIE['username'];

setcookie("array[id]", 1, time() + 300);
setcookie("array[name]", 'MD hemal', time() + 300);
foreach($_COOKIE['array'] as $key => $value) {
    echo $key .= " . $value". "<br/>";
}