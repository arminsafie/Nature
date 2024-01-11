<?php
echo "hello ".$_GET["name"]." ".$_GET["lastname"] ." ".$_GET["age"];


while (true){
    $num = 2340;
    $rem = 0;
    $sum = 0;

    if ($num != 0 ){
        $rem = $num % 10;
        $sum = $rem + $sum;
        $num = $num / 10;

    }else{
        break;
    }
    break;
}