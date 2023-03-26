<?php
session_name('outapp');
session_start([
    'cookie_domain' => '.st.com',
    'cookie_path' => '/'
]);
echo $_SESSION['data'];