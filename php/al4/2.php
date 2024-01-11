<?php


// box s
$sum = 0;
$N = 30;
$x = 1;
for ($power =0; $power <= $N;$power++){
    $sum = $x ** $power + $sum;
    $x++;
}

echo $sum;