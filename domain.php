<?php
 
 // function to extract the domain name of a provided link

function domainName($url){
    $newArr = explode("/", $url);
    foreach($newArr as $str){
        if(str_contains($str, ".com")){
            if(str_contains($str, "www")){
                $newerArr = explode(".", $str);
                return $newerArr[1];
            }else{
                $newerArr = explode(".", $str);
                return $newerArr[0];
            }
        }
    }
}

echo domainName("http://www.zombie-bites.com");