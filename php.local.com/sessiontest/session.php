<?php
session_name('outapp');
session_start([
    'cookie_domain' => './t1/st.php',
    'cookie_path' => '/'
]);
$_SESSION['data'] = 'hellow world!';
echo $_SESSION['data'];