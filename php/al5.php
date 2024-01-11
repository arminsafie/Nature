<?php


$income = 40000000;

if ($income < 50000){
    echo "moaf";
}elseif ($income <100000){
    echo $income / 10;
}elseif ($income>=100000){
    $x = 15;
    echo  ($x*$income)/100;
}

