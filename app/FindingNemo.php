<?php

namespace App;

class FindingNemo{
    public static function find(string $text):string{
        $arr = explode(" ",$text);

        $index = array_search("Nemo", $arr);
        if($index !== false){
            return "I found Nemo at {$index}!";
        }else {
            return "I can't find Nemo :(";
        }

    }
}
