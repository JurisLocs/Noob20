<?php

namespace App;

class PeelTheOnion
{
    public static function peel(array $onion){
        $peeled = [];
        foreach ($onion as $value){
            array_shift($value);
            array_pop($value);
            $peeled [] = $value;
        }
        var_dump($peeled);
        array_shift($peeled);
        array_pop($peeled);

        return $peeled;
    }
}
