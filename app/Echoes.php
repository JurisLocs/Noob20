<?php

namespace App;

class Echoes
{
    public static function echoes(string $word, int $repeats):string{
        $echo = "";
        for ($i = 1;$i <= $repeats;$i++){
            $echo .= $word;
        }
        return $echo;
    }
}