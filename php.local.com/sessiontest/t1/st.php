<?php
session_name('outapp');
session_start([
    'cookie_domain' => './t1/st.php',
    'cookie_path' => '/'
]);
echo $_SESSION['data'];