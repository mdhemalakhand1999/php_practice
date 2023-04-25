<?php
echo 'welcome';

if(isset($_POST['secret']) && 'noodles' == $_POST['secret']) {
    echo "<br/>please have some noodles";
}