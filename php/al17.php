<?php

    $date = 50;

    if ($date <=30 ){
        echo "1/".$date;
    }elseif ($date <=60 ){
        $day = $date - 30;
        echo "2/".$day;
    }elseif ($date <=90 ){
        $day = $date - 60;
        echo "3/".$day;

    }elseif ($date <=120 ){
        $day = $date - 90;
        echo "4/".$day;
    }elseif ($date <=150 ){
        $day = $date - 120;
        echo "5/".$day;
    }elseif ($date <=180 ){
        $day = $date - 150;
        echo "6/".$day;
    }elseif ($date <=240 ){
        $day = $date - 1800;
        echo "7/".$day;
    }elseif ($date <=270 ){
        $day = $date - 240;
        echo "8/".$day;
    }
    elseif ($date <=300 ){
        $day = $date - 270;
        echo "9/".$day;
    }elseif ($date <=330 ){
        $day = $date - 300;
        echo "10/".$day;
    }
    elseif ($date <=360 ){
        $day = $date - 330;
        echo "11/".$day;
    }
    elseif($date <= 370){
        $day = $date - 360;
        echo "12/".$day;
    }else{
        echo 'error unvalid val';
    }






