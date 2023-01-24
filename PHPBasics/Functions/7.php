<?php
$constant=1;
function factorial($a){
    global $constant;

    if ($a>1){
        $constant=$constant*$a;
        $a--;
        factorial($a);
    }
    return $constant;
}

echo factorial(10);