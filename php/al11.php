<?php
    $n = 12;

    $sum = 0;
    $count = 0;
    for($i = 1; $i <= $n; $i++) {
        if($n%$i == 0){
            if ($i % 4 ==0){
            echo $i."\n";
            $sum += $i;
            $count+= 1;
            }
        }

    }

    echo "sum: ".$sum;
    echo "\n";
    echo "count: ".$count;





