<?php

namespace App;

class DigitalClock
{
    public static function time(int $seconds)
    {
        return gmdate("H:i:s",$seconds);
    }
}