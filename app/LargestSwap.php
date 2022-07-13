<?php

namespace App;

class LargestSwap
{
    public static function swap(int $number):bool{
        $digits = str_split($number);
        if ($digits[0]>$digits[1]){
            return true;
        }else return false;


    }
}