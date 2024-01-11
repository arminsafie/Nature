<?php

$sum = 0;
$n = 12;

for ($i = 2; $i<=$n;$i++ ){
    $sum += $i*($i-1);
}


echo $sum;