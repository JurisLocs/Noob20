<?php

namespace App;

class MatchMaker
{
    public static function cupid(array $men, array $women){
        if(count($men) != count($women)){
            return "Cupid is on vacation";
        }else {
            $pairs = [];
            for ($i = 0 ; $i <= count($men)-1; $i++){
                $pairs[] = [$men[$i],$women[$i]];
            }
            return $pairs;
        }
    }
}