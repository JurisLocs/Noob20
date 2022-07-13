<?php

namespace App;

class HideAndSeek
{
    static function find(string $crowd):string{
        $arr = str_split($crowd,1);
        $hidden = "";
        foreach ($arr as $word){
            if(ctype_lower($word)){
                $hidden .= $word;
            }
        }
        return $hidden;
    }

}