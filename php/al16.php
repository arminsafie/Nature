<?php

    $marketnum = 12;
    $sale = 502344200;


    if ($sale <=50000){
        $rs = $sale*3/100;
        echo $rs;
    }elseif($sale > 50000){
        $rs = $sale/20;
        echo $rs;
    }