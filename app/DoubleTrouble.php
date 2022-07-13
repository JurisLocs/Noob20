<?php

namespace App;

class DoubleTrouble
{
    public static function doubleTrouble(array $names):array{
        return array_unique($names);
    }
}