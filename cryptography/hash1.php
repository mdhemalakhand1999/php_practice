<?php
echo md5("Let there be might");
echo "<br/>";
echo sha1("Let there be might");
echo "<br/>";
// print_r(hash_algos());
echo hash("sha1", "Let there be might");
echo "<br/>";
echo bin2hex(mhash(MHASH_SHA512, "Let there be might"));