<?php

namespace App;

class FortuneTeller{
    private static string $color;
    private static string $location;
    private static string $name;
    private static string $item;

    static function fortune($color,$location,$name,$item):string{
        return "You will meet {$name} in {$location}, and find {$item} in a {$color} room together.";
    }
}