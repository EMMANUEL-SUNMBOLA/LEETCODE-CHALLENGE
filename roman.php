<?php
// code to convert numbers to roman numerals
$num = readline("input number to be converted into roman numeral    ");
// split each digit into an array
$arr = str_split($num);
// for 1-9
if((count($arr) < 2)){
    if(($arr[0] < 5)){
        for($i = 0; $i < $arr[0]; $i++){
            echo "I";
        }
        echo "\n";
    }elseif(($arr[0] > 4) && ($arr[0] < 9)){
        $n = $arr[0] - 5;
        echo "V";
        for($i = 0; $i < $n; $i++){
            echo "I";
        }
        echo "\n";
    }elseif($arr[0] == 9){
        echo "IX \n";
    }
}
elseif(count($arr) == 2){
    if($num < 40){
        for($i = 0; $i < $arr[0]; $i++){
            echo "X";
        }
        if($arr[1] < 5){
            for($i = 0; $i < $arr[1]; $i++){
                echo "I";
            }
        }elseif(($arr[1] > 4) && ($arr[1] < 9)){
            $n = $arr[1] - 5;
            echo "V";
            for($i = 0; $i < $n; $i++){
                echo "I";
            }
        }
    }elseif($arr[0] == 4){
        echo "LX";
        $n = $num - 40;
        if($num < 4){
            for ($i = 0; $i < $n; $i++){
                echo "I";
            }
        }elseif($n == 4){
            echo "IV";
        }elseif(($n > 5) && ($n < 9)){
            echo "V";
            $n2 = $n - 5;
            for($i = 0; $i < $n2; $i++){
                echo "I";
            }
        }
    }
    echo "\n";
}
