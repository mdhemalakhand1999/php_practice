<?php
    // reffernce variable modify main variable
    // $variable1 = array('apple', 'banana', 'mango');
    // // $variable2 = $variable1;
    // $variable2 = &$variable1;
    // array_push($variable1, 'food');
    // var_dump($variable1);
    // var_dump($variable2);
    $fruits = array(
       'Apple',
        'Banana',
        'Mango'
    );
    $replacedFruits = array(
        'jackfruits',
        'tamerrit'
    );
    $newspliceText = array_splice($fruits, -3, 3, $replacedFruits); // replace original variable
    var_dump($newspliceText);
    var_dump($fruits);
?>
<!-- array splice moloto mail variable ke modify kore fele e khetre ( replaceFruits )  -->