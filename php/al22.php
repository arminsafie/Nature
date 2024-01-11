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

for ($i = 100; $i <= 990; $i++) {
    $num = $i;
    for ($j = 0; $j < 3; $j++) {
        $rem = $num % 10;
        $numberArray[$j] = $rem;
        $num = intval($num / 10);
    }


    $r = zorf($numberArray == 1);

    if ($numberArray[0] == $numberArray[2] && zorf($numberArray[1]) == 1) {
        echo $i ."\n";
    }
}