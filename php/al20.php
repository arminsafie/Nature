<?php
//
//
//
//$rem = 0;
//$sum = 0;
//$numberArray = [];
//function zorf($numeber){
//    if($numeber % 2 == 0){
//        return 1;
//    }
//    else{
//        return 0 ;
//    }
//}
//for($i = 1000;$i<2003;$i++){
//    $num = $i;
//    for ($j =0; $j < 4;$j++){
//        $rem = $num % 10;
//        $numberArray[$j] = $rem;
//        $num = (int)$num / 10;
//    }
////    $yekan = zorf($numberArray[0]);
////    $dahgan = zorf($numberArray[1]);
////    $sadgan = zorf($numberArray[2]);
////    $hezargan = zorf($numberArray[3]);
//    $r1 = zorf($numberArray[0]) + zorf($numberArray[2]);
//    $r2 = zorf($numberArray[1]) + zorf($numberArray[3]);
//    if ($r1 == 2 && $r2 == 0){
//        echo $i;
//    }
//}


$rem = 0;
$sum = 0;
$numberArray = [];

function zorf($number){
    if ($number % 2 == 0){
        return 1;
    } else {
        return 0;
    }
}

for ($i = 1000; $i <= 9999; $i++) {
    $num = $i;
    for ($j = 0; $j < 4; $j++) {
        $rem = $num % 10;
        $numberArray[$j] = $rem;
        $num = intval($num / 10);
    }

    $r1 = zorf($numberArray[0]) + zorf($numberArray[2]);
    $r2 = zorf($numberArray[1]) + zorf($numberArray[3]);

    if ($r1 == 2 && $r2 == 0) {
        echo $i ."\n";
    }
}