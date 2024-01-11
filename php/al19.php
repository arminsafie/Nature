<?php



//vars
$num = 7034056;
$rem = 0;
$sum = 0;
$zoj = 0;
$fard = 0;
$sefr = 0;
$numberArray = [];
$var = strlen($num);


//this function can fine if a num is zoj or fard
function zorf($numeber){
    if($numeber % 2 == 0){
        return 1;
    }
    else{
        return 0 ;
    }
}

// this loop can give you digit of a number
for ($i =0; $i< $var;$i++){
    $rem = $num % 10;
    $numberArray[$i] = $rem;
    $num = (int)$num / 10;
}

//this loop can fine How many zoj Or fard or sefr A number have
for ($j = 0;$j < count($numberArray);$j++){
    if (zorf($numberArray[$j]) == 1){
        if($numberArray[$j]== 0){
            $sefr+=1;
        }else{
            $zoj+=1;
        }
    }
    elseif (zorf($numberArray[$j]) == 0){
        $fard+=1;
    }
}

echo "zoj: ".$zoj."\n";
echo "fard: ".$fard."\n";
echo "sefr: ".$sefr."\n";








