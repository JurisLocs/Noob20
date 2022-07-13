<?php

namespace App;

class SecretSociety
{
    public static function secretNames(array $names): string
    {
        $secret = [];
        foreach ($names as $name) {
            $secret [] = mb_substr($name, 0, 1);
        }
        sort($secret);
        return implode("", $secret);
    }
}