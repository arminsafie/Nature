<?php

$mabnaTabdiy = 3;

$num = 3022;
$rem = 0;
$sum = 0;
$numberArray = [];



$var = strlen($num);

for ($i =0; $i< $var;$i++){
    $rem = $num % 10;
    $numberArray[$i] = $rem;
    $num = (int)$num / 10;
}



for ($j =  0; $j < count($numberArray); $j++){


    $r = $numberArray[$j] * pow($mabnaTabdiy, $j);
    $sum += $r;

}

echo $sum;




