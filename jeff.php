<?php

function tens(int $a){
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
    if(($a > 10) && ($a < 14)){
        return "X";
        $b = $a - 10;
        for($i = 0; $i < $b; $i++){
            return "I";
        }
    }
}