<?php

namespace App;

class WarOfNumbers
{
    public static function warOfNumbers(array $numbers):string{
        $even=0;
        $odd=0;
        foreach ($numbers as $number){
            if ($number % 2 == 0){
                $even += $number;
            }else{
                $odd += $number;
            }
        }
        if ($even > $odd){
            $x= $even-$odd;
            return "Even numbers win by {$x}";
        }elseif ($odd > $even){
            $x= $odd-$even;
            return "Odd numbers win by {$x}";
        }else return "There are no winners";
    }
}