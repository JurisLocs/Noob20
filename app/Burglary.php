<?php

namespace App;

class Burglary
{
    static public function items($items){
        if(count($items) > 0){
            return count($items);
        }else return "Lucky You!";

    }
}