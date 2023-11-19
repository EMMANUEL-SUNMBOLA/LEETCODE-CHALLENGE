<?php
//function to check if a given string is a valid IPv4 address
function isValidIp2($str){
    $arr = explode("." ,$str);
    if(count($arr) !== 4){
        return false;
    }
    
    foreach($arr as $num){
        if(!ctype_digit($num)){
            return false;
        }
        $num = (int) $num;
        if(($num < 0) || ($num > 255) || ($num[0] == '0') || ($num == 0)){
            return false;
        }
    }
    return true;
}



echo isValidIp2('1.255.3.4') ? "true" : "false";
