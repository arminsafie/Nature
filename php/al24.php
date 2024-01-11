<?php

$targetAmount = 50;
$coin1 = 20;
$coin2 = 10;
$coin3 = 5;
$count = 0;

$maxCoin1 = floor($targetAmount / $coin1);
$maxCoin2 = floor($targetAmount / $coin2);
$maxCoin3 = floor($targetAmount / $coin3);

for ($i = 0; $i <= $maxCoin1; $i++) {
    for ($j = 0; $j <= $maxCoin2; $j++) {
        for ($k = 0; $k <= $maxCoin3; $k++) {
            $amount = ($i * $coin1) + ($j * $coin2) + ($k * $coin3);
            if ($amount == $targetAmount) {
                echo "$i x $coin1 cents + $j x $coin2 cents + $k x $coin3 cents = $targetAmount cents\n";
                $count++;
            }
        }
    }
}

echo $count;