<?php

function units(int $a){
    if($a < 4){
        for($i = 0; $i < $a; $i++){
            return "I";
        }
    }
    if($a == 4){
        return "IV";
    }
    if(($a >= 5) && ($a < 9)){
        $b = $a - 5;
        return "V";
        for($i = 0; $i < $b; $i++){
            return "I";
        }

    }
    if($a == 9){
        return "IX";
    }
}
function tens($a){
    echo "X";
    if(($a > 10) && ($a < 14)){
        $b = $a - 10;
        for($i = 0; $i < $b; $i++){
            echo "I";
        }
    }
    if(($a == 14)){
        echo "IV";
    }
    if(($a > 14) && ($a < 19)){
        $b = $a - 15;
        echo "V";
        for($i = 0; $i < $b; $i++){
            echo "I";
        }
    }
}

echo tens(14);