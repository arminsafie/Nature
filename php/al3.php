<?php

$count = 0;
for ($x = 0;$x <900; $x++) {
    if ($x % 9 ==0){
        echo $x."\n";
        $count += $x;
    }
}


echo $count;