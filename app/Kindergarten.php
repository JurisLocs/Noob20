<?php

namespace App;

class Kindergarten
{
public static function kindergarten(string $sentence,string $letter):string{
    $words = explode(" ", $sentence);
    $output = [];
    foreach ($words as $word){
        if($word[0] == $letter){
            $word = strrev($word);
        }
        $output[] = $word;
    }
    return implode(" ",$output);
}
}