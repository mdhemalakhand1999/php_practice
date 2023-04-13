<?php
// print_r(glob('./t*', GLOB_ONLYDIR)); // t diye ja start hoise
// print_r(glob('./*a*', GLOB_ONLYDIR)); // jei folder gulur moddhe a ase
// print_r(glob('./{k, t}*', GLOB_ONLYDIR|GLOB_BRACE)); // k othoba t diye suru

print_r(glob('./karx/woocommerce/*/*a.php')); // find specific folder with custom last keyword
print_r(glob('./karx/woocommerce/*/*[!a].php')); // find specific folder except custom last keyword
