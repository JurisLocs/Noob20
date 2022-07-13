<?php

namespace App;

class DogYears
{
    private static int $age;

    static function calculate(int $years): string
    {
        $years = $years*7;
        return "Your doggie is {$years} years old in dog years!";
    }
}