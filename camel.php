<?php
    /*Complete the solution so that the function will break up camel casing, using a space between words. */
    function solution(string $str){
        $match = '/[A-Z]/';
        $ans = "";
        for($i = 0; $i < strlen($str); $i++){
            $letter = substr($str, $i, 1);
            if(preg_match($match, $letter)){
                $ans .= " " . $letter;
            }else{
                $ans .= $letter;
            }
        }
        return $ans;
    }

    echo solution("camelCase");