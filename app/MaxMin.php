<?php

namespace App;

class MaxMin
{
    public static function maxMin(array $numbers)
    {
        $outupt = [];
        $outupt [] = min($numbers);
        $outupt[] = max($numbers);
        return $outupt;
    }
}