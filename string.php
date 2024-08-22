<?php

function countVowels($string){
    $string = strtolower($string);
    $vowel = ['a','e','i','o','u'];
    $count = 0;
    foreach(str_split($string) as $char){
        if(in_array($char, $vowel)){
            $count++;
        }
    }
    return $count;
}
$input = trim(fgets(STDIN));
$array = array_map('trim', explode(',', $input));

foreach($array as $string){
    $vowelCount = countVowels($string);
    $str_reverse = strrev($string);
    if($vowelCount){
        echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $str_reverse\n";
    }else{
        echo "Original String: $string, Vowel Count: 0, Reversed String: $str_reverse\n";
    }
}



