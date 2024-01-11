<?php


function Factorial($number){
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++){
        $factorial = $factorial * $i;
    }
    return $factorial;
}

$x = 2;
$sum = 0;
$n = 12;

$max = 2 * $n - 1;

for ($j = 3 ; $j <= $max ;$j += 2){
    $sum += $x ** $j / Factorial($j);
}


echo $x - $sum;

