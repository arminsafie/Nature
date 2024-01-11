<?php


$sum = 0;
$n = 27;
for ($i = 3;$i<$n;$i++){
    if ($i % 3 == 0){
        $sum += 1/$i ;
    }

}

echo $sum;