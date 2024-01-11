<?php



    $num = 12;

    $sum=0;
    $rem=0;
    $realNumber = $num;
    for ($i =0; $i<=strlen($num);$i++){
        $rem = $num % 10;
        $sum = $sum + $rem;
        $num = (int)$num / 10;
    }

    if ($realNumber % $sum == 0){
        echo "hast";
    }else{
        echo "nist";
    }

//
//$num = 12;
//
//$sum = 0;
//$rem = 0;
//$realNumber = $num;
//
//while ($num > 0) {
//    $rem = $num % 10;
//    $sum = $sum + $rem;
//    $num = intval($num / 10);
//}
//
//if ($realNumber % $sum === 0) {
//    echo "hast";
//} else {
//    echo "nist";
//}







