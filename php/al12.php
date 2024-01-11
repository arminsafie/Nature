<?php


$numberToGuess = 235;
$count = 0;
$minRange = 0;
$maxRange = 1000;



while (true) {
    $guess = floor(($minRange + $maxRange) / 2);
    $count++;

    if ($guess == $numberToGuess) {
        echo "I guessed your number ($numberToGuess) in $count attempts!\n";
        break;
    } elseif ($guess < $numberToGuess) {
        $minRange = $guess + 1;
    } else {
        $maxRange = $guess - 1;
    }
}





