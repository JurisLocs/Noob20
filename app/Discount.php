<?php

namespace App;

class Discount
{
    public static function discount(int $price, int $discount): float
    {
        return $price - ($price * $discount / 100);
    }
}