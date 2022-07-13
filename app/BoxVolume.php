<?php

namespace App;

class BoxVolume
{
    private static array $size = [];

    static function volume(array $arr){
        $sum = 0;
        foreach ($arr as $box){
            $mult = 1;
            foreach ($box as $size){
                $mult *= $size;
            }
            $sum += $mult;
        }
        return $sum;
    }
}