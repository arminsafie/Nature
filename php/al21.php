<?php

$rem = 0;
$sum = 0;
$numberArray = [];

function zorf($number){
    if ($number % 2 == 0){
        return 1;
    } else {
        return 0;
    }
}

for ($i = 10; $i <= 99; $i++) {
    $num = $i;
    for ($j = 0; $j < 4; $j++) {
        $rem = $num % 10;
        $numberArray[$j] = $rem;
        $num = intval($num / 10);
    }


    $r = zorf($numberArray[0]) + zorf($numberArray[1]);

    if ($r == 0 ) {
        echo $i ."\n";
    }
}